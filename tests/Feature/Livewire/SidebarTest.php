<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Sidebar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Livewire\Livewire;
use Tests\TestCase;

class SidebarTest extends TestCase
{
    use RefreshDatabase;

    public function test_renders_successfully()
    {
        Livewire::test(Sidebar::class)->assertStatus(Response::HTTP_OK);
    }
}
