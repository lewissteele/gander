<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Table;
use Livewire\Livewire;
use Tests\TestCase;

class TableTest extends TestCase
{
    public function test_it_renders_successfully(): void
    {
        Livewire::test(Table::class)
            ->assertSuccessful()
            ->assertSee('test_string_column');
    }
}
