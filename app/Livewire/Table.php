<?php

namespace App\Livewire;

use App\Models\Database;
use App\Models\Table as ModelsTable;
use Illuminate\Support\Collection;
use Livewire\Component;

class Table extends Component
{
    public string $tableName;

    public array $columns;

    public Collection $rows;

    public function mount()
    {
        /** @var Database */
        $database = Database::firstOrFail();

        /** @var ModelsTable */
        $table = $database->tables->first();

        $this->tableName = $table->getTable();
        $this->columns = $table->columns;
        $this->rows = $table->queryBuilder()->select()->get();
    }

    public function render()
    {
        return view('livewire.table')->with([
            'table' => $this->tableName,
            'columns' => $this->columns,
            'rows' => $this->rows,
        ]);
    }
}
