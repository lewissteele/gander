<?php

namespace App\Livewire;

use App\Models\Database;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class Table extends Component
{
    public string $tableName;

    public array $columns;

    public Collection $rows;

    public function mount()
    {
        $database = Database::firstOrFail();
        $table = $database->tables->first();
        $this->tableName = $table->name;
    }

    public function render()
    {
        $database = Database::firstOrFail();

        $table = $database->tables
            ->where('name', $this->tableName)
            ->firstOrFail();

        $this->columns = $table->columns;
        $this->rows = $table->queryBuilder()->select()->get();

        return view('livewire.table')->with([
            'table' => $this->tableName,
            'columns' => $this->columns,
            'rows' => $this->rows,
        ]);
    }

    #[On('active-table-did-change')]
    public function onActiveTableChanged(string $tableName): void
    {
        $this->tableName = $tableName;
    }
}
