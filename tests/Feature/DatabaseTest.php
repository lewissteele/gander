<?php

namespace Tests\Feature;

use App\Models\Database;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_loads_connection_into_config()
    {
        Database::factory()->create();

        $this->assertArrayHasKey(
            'user-1',
            config('database.connections'),
        );
    }
}
