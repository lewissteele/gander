<?php

namespace App\Livewire;

use App\Models\Database;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Navigation extends Component
{
    public ?int $database = null;

    public function mount(): void
    {
        $database = cache()->get(
            'database',
            fn () => Database::first(),
        );

        if ($database) {
            $this->database = $database->id;
            $this->dispatch('active-database-changed', [
                'database' => $database->id,
            ]);
        }
    }

    public function render(): View
    {
        return view('livewire.navigation')->with([
            'database' => $this->database,
            'databases' => Database::all(),
        ]);
    }

    public function updatedDatabase(?int $id): void
    {
        $database = Database::findOrFail($id);

        cache()->put('database', $database);

        $this->dispatch('active-database-changed', [
            'database' => $database->id,
        ]);
    }
}
