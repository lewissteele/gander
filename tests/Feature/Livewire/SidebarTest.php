<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Sidebar;
use Livewire\Livewire;
use Tests\TestCase;

class SidebarTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Sidebar::class)
            ->assertStatus(200);
    }
}
