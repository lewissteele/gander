<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Navigation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    public function test_renders_successfully(): void
    {
        Livewire::test(Navigation::class)->assertSuccessful();
    }
}
