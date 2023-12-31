<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use MichaelAChrisco\ReadOnly\ReadOnlyTrait;

/**
 * @property string $name
 * @property string[] $columns
 */
class Table extends Model
{
    use HasFactory;
    use ReadOnlyTrait;

    protected $table = null;

    protected $appends = [
        'name',
    ];

    public function queryBuilder(): Builder
    {
        return $this->getConnection()->table($this->getTable());
    }

    protected function columns(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->getConnection()
                ->getSchemaBuilder()
                ->getColumnListing($this->getTable()),
        );
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->getTable(),
        );
    }
}
