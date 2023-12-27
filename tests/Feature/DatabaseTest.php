<?php

namespace Tests\Feature;

use App\Models\Database;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    public function test_it_loads_connection_into_config(): void
    {
        $database = Database::factory()->create();

        $this->assertArrayHasKey(
            $database->connection_name,
            config('database.connections'),
        );
    }
}
