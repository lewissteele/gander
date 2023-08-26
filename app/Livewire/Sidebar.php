<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sidebar extends Component
{
    public string $active = '';

    public function render(): View
    {
        return view('livewire.sidebar')->with([
            'active' => $this->active,
            'tables' => ['my_table'],
        ]);
    }
}
