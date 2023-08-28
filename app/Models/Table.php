<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MichaelAChrisco\ReadOnly\ReadOnlyTrait;

class Table extends Model
{
    use HasFactory;
    use ReadOnlyTrait;

    protected $table = null;
}
