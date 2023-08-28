<?php

namespace Tests\Feature\Livewire;

use App\Livewire\TableList;
use App\Models\Database;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Livewire\Livewire;
use Tests\TestCase;

class TableListTest extends TestCase
{
    use RefreshDatabase;

    public function test_listing_tables_from_database(): void
    {
        $expectedTableName = 'test_table';
        $schemaBuilder = Database::factory()
            ->create()
            ->getUserConnection()
            ->getSchemaBuilder();

        $schemaBuilder->create(
            $expectedTableName,
            fn (Blueprint $table) => $table->boolean('test_column'),
        );

        Livewire::test(TableList::class)
            ->assertStatus(Response::HTTP_OK)
            ->assertSee($expectedTableName);
    }
}
