<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class DatabaseForm extends Form
{
    #[Rule('required|string')]
    public string $driver = 'mysql';

    #[Rule('required|string')]
    public string $host;

    #[Rule('required|string')]
    public string $database;

    #[Rule('required|string')]
    public string $username;

    #[Rule('string')]
    public string $password;

    #[Rule('integer')]
    public int $port;
}
