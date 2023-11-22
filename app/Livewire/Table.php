<?php

namespace App\Livewire;

use App\Models\Database;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Table extends Component
{
    public string $table;

    public function mount(): void
    {
        $database = Database::firstOrFail();
        $table = $database->tables->first();
        $this->table = $table->name;
    }

    public function render(): View
    {
        $database = Database::firstOrFail();

        $table = $database->tables
            ->where('name', $this->table)
            ->firstOrFail();

        $columns = $table->columns;
        $rows = $table->queryBuilder()->select()->get();

        return view('livewire.table')->with([
            'columns' => $columns,
            'rows' => $rows,
        ]);
    }

    #[On('active-table-changed')]
    public function updateTable(string $table): void
    {
        $this->table = $table;
    }
}
