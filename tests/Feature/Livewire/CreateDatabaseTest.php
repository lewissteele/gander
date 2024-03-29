<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateDatabase;
use Illuminate\Http\Response;
use Livewire\Livewire;
use Tests\TestCase;

class CreateDatabaseTest extends TestCase
{
    public function test_it_renders_successfully(): void
    {
        Livewire::test(CreateDatabase::class)->assertStatus(Response::HTTP_OK);
    }

    public function test_it_saves_to_database(): void
    {
        $driver = 'pgsql';
        $host = fake()->domainName();
        $password = fake()->password();
        $port = 5432;
        $username = fake()->userName();

        Livewire::test(CreateDatabase::class)
            ->set('form.driver', $driver)
            ->set('form.host', $host)
            ->set('form.password', $password)
            ->set('form.port', $port)
            ->set('form.username', $username)
            ->call('save');

        $this->assertDatabaseHas('databases', [
            'driver' => $driver,
            'host' => $host,
            'password' => $password,
            'port' => $port,
            'username' => $username,
        ]);
    }

    public function test_it_resets_the_form_on_close(): void
    {
        Livewire::test(CreateDatabase::class)
            ->set('form.host', fake()->domainName())
            ->dispatch('close-create-database')
            ->assertSet('form.host', null);
    }
}
