<?php

namespace App\Livewire;

use App\Livewire\Forms\DatabaseForm;
use App\Models\Database;
use Livewire\Component;

class CreateDatabase extends Component
{
    public DatabaseForm $form;

    public function save(): void
    {
        Database::create(
            $this->form->all(),
        );
    }

    public function render()
    {
        return view('livewire.create-database');
    }
}
