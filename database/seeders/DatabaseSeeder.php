<?php

namespace Database\Seeders;

use App\Models\Database;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $database = Database::factory()->create();
        $connection = DB::connection($database->connection_name);

        $connection->getSchemaBuilder()->create(
            'test_table',
            function (Blueprint $table) {
                $table->string('test_string_column');
            },
        );

        $connection->table('test_table')->insert([
            ['test_string_column' => fake()->text()],
            ['test_string_column' => fake()->text()],
            ['test_string_column' => fake()->text()],
        ]);
    }
}
