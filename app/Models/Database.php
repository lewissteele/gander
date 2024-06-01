<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;

/**
 * @property Collection<Table> $tables
 * @property int $port
 * @property string $connection_name
 * @property string $database
 * @property string $driver
 * @property string $host
 * @property string $password
 * @property string $username
 */
class Database extends Model
{
    use HasFactory;

    protected $fillable = [
        'database',
        'driver',
        'host',
        'password',
        'port',
        'username',
    ];

    protected static function booted(): void
    {
        $loadIntoConfig = fn (Database $database) => config()->set(
            "database.connections.{$database->connection_name}",
            $database->toArray(),
        );

        static::created($loadIntoConfig);
        static::retrieved($loadIntoConfig);
        static::saved($loadIntoConfig);
        static::updated($loadIntoConfig);
    }

    protected function tables(): Attribute
    {
        return Attribute::make(get: function () {
            $tables = array_column(
                Schema::connection($this->connection_name)->getTables(),
                'name',
            );

            return collect($tables)->sort()->map(function (string $tableName) {
                $table = new Table();
                $table->setTable($tableName);
                $table->setConnection($this->connection_name);

                return $table;
            });
        });
    }

    protected function connectionName(): Attribute
    {
        return Attribute::make(
            get: fn () => "user-{$this->id}",
        );
    }
}
