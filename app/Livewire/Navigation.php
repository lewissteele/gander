<?php

namespace App\Livewire;

use App\Models\Database;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Navigation extends Component
{
    public function render(): View
    {
        return view('livewire.navigation')->with([
            'databases' => Database::all(),
        ]);
    }
}
