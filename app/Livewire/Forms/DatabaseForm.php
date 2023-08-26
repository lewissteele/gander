<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class DatabaseForm extends Form
{
    #[Rule('required|string')]
    public string $driver;

    #[Rule('required|string')]
    public string $hostname;

    #[Rule('required|string')]
    public string $username;

    #[Rule('required|string')]
    public string $password;

    #[Rule('integer')]
    public int $port;
}
