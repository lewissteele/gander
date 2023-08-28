<?php

namespace Tests\Feature\Livewire;

use App\Livewire\TableList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TableListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(TableList::class)
            ->assertStatus(200);
    }
}
