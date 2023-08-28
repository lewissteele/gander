<?php

namespace Database\Seeders;

use App\Models\Database;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $database = Database::factory()->create();
        $schemaBuilder = $database->getUserConnection()->getSchemaBuilder();

        $schemaBuilder->create('test_table', function (Blueprint $table) {
            $table->string('test_string_column');
        });

        $database->getUserConnection()->table('test_table')->insert([
            ['test_string_column' => fake()->text()],
            ['test_string_column' => fake()->text()],
            ['test_string_column' => fake()->text()],
        ]);
    }
}
