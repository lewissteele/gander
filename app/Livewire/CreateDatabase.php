<?php

namespace App\Livewire;

use App\Livewire\Forms\DatabaseForm;
use App\Models\Database;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateDatabase extends Component
{
    public bool $open = false;

    public DatabaseForm $form;

    public function save(): void
    {
        Database::create(
            $this->form->all(),
        );
    }

    #[On('show-create-database')]
    public function updateOpen(): void
    {
        $this->open = true;
    }
}
