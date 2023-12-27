<?php

namespace App\Livewire;

use App\Models\Database;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class TableList extends Component
{
    public string $active;

    public Database $database;

    public function mount(): void
    {
        $this->database = Database::firstOrFail();
        $this->active = $this->database->tables->first()->getTable();
    }

    public function render(): View
    {
        return view('livewire.table-list')->with([
            'active' => $this->active,
            'tables' => $this->database->tables,
        ]);
    }

    public function setActive(string $table): void
    {
        $this->active = $table;
        $this->dispatch('active-table-changed', $table);
    }

    #[On('active-database-changed')]
    public function updateDatabase(int $database): void
    {
        $this->database = Database::findOrFail($database);
        $this->active = $this->database->tables->first()->getTable();
    }
}
