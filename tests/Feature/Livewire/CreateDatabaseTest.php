<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Livewire\Livewire;
use Tests\TestCase;

class CreateDatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function test_renders_successfully(): void
    {
        Livewire::test(CreateDatabase::class)->assertStatus(Response::HTTP_OK);
    }

    public function test_saves_to_database(): void
    {
        $driver = 'pgsql';
        $hostname = fake()->domainName();
        $password = fake()->password();
        $port = 5432;
        $username = fake()->userName();

        Livewire::test(CreateDatabase::class)
            ->set('form.driver', $driver)
            ->set('form.hostname', $hostname)
            ->set('form.password', $password)
            ->set('form.port', $port)
            ->set('form.username', $username)
            ->call('save');

        $this->assertDatabaseHas('databases', [
            'driver' => $driver,
            'hostname' => $hostname,
            'password' => $password,
            'port' => $port,
            'username' => $username,
        ]);
    }
}
