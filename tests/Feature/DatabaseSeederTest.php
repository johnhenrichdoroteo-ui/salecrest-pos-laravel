<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class DatabaseSeederTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_seeder_populates_both_account_tables_without_duplicates(): void
    {
        $this->seed();
        $this->seed();

        $this->assertSame(6, Customer::count());
        $this->assertSame(6, User::count());
        $this->assertDatabaseHas('customers', ['email' => 'mika.santos@example.com']);
        $this->assertDatabaseHas('users', ['username' => 'manager01', 'role' => 'Manager']);
    }
}
