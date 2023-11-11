<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Table;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class TableTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Table::class)
            ->assertStatus(200);
    }
}
