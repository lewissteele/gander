<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Navigation;
use Livewire\Livewire;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Navigation::class)
            ->assertStatus(200);
    }
}
