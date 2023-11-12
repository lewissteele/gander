<?php

namespace Tests\Feature\Livewire;

use App\Livewire\TableList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class TableListTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_lists_tables(): void
    {
        Livewire::test(TableList::class)
            ->assertSuccessful()
            ->assertSee('test_table');
    }
}
