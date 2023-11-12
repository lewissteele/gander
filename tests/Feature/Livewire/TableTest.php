<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Table;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class TableTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_renders_successfully(): void
    {
        Livewire::test(Table::class)
            ->assertSuccessful()
            ->assertSee('test_string_column');
    }
}
