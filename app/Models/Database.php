<?php

namespace App\Models;

use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use PDO;

/**
 * @property Collection $tables
 * @property Connection $reader
 * @property int $port
 * @property string $driver
 * @property string $hostname
 * @property string $password
 * @property string $username
 */
class Database extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver',
        'hostname',
        'password',
        'port',
        'username',
    ];

    protected function tables(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->reader
                ->table('information_schema.tables')
                ->where('table_schema', 'public')
                ->orderBy('table_name')
                ->pluck('table_name'),
        );
    }

    protected function reader(): Attribute
    {
        return Attribute::make(get: function () {
            $pdo = new PDO(
                "$this->driver:host=$this->hostname",
                $this->username,
                $this->password,
            );

            return new Connection($pdo);
        })->shouldCache();
    }
}
