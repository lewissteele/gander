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
        $database = Database::create(
            $this->form->all(),
        );

        $this->dispatch(
            'database-created',
            $database->id,
        );

        $this->form->reset();
        $this->open = false;
    }

    #[On('open-create-database')]
    public function open(): void
    {
        $this->open = true;
    }

    #[On('close-create-database')]
    public function close(): void
    {
        $this->form->reset();
        $this->open = false;
    }
}
