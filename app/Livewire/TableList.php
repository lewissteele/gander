<?php

namespace App\Livewire;

use App\Models\Database;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class TableList extends Component
{
    public string $active;

    public Collection $tables;

    public function mount(): void
    {
        $database = Database::firstOrFail();
        $tables = $database->getTablesNames();

        $this->active = $tables->first();
        $this->tables = $tables;
    }

    public function render(): View
    {
        return view('livewire.table-list')->with([
            'active' => $this->active,
            'tables' => $this->tables,
        ]);
    }
}
