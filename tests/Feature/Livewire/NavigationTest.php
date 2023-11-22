<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Navigation;
use App\Models\Database;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Livewire\Livewire;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    public function test_renders_successfully(): void
    {
        $database = Database::factory()->create();

        Livewire::test(Navigation::class)
            ->assertSuccessful()
            ->assertSee($database->host);
    }

    public function test_changing_database_emits_event(): void
    {
        $database = Database::factory(2)->create()->last();

        Livewire::test(Navigation::class)
            ->set('database', $database->id)
            ->assertDispatched('active-database-changed');
    }

    public function test_it_caches_selected_database(): void
    {
        $database = Database::factory()->create();

        Cache::shouldReceive('get')
            ->once()
            ->andReturn($database);

        Livewire::test(Navigation::class);
    }
}
