<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateDatabaseTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateDatabase::class)
            ->assertStatus(200);
    }
}
