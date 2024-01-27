<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class DatabaseForm extends Form
{
    #[Rule('required|string')]
    public string $driver = 'mysql';

    #[Rule('required|string')]
    public string|null $host;

    #[Rule('required|string')]
    public string|null $database;

    #[Rule('required|string')]
    public string|null $username;

    #[Rule('string')]
    public string|null $password;

    #[Rule('integer')]
    public int|null $port;
}
