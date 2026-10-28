<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_home_page_links_to_the_other_pages(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertViewIs('pages.home')
            ->assertSee('Salecrest POS')
            ->assertSee('Made for the work behind every sale.')
            ->assertSee(route('about'))
            ->assertSee(route('customers.index'))
            ->assertSee(route('users.index'));
    }

    public function test_about_page_explains_the_laravel_foundation(): void
    {
        $response = $this->get('/about');

        $response->assertOk()
            ->assertViewIs('pages.about')
            ->assertSee('About Salecrest')
            ->assertSee('Built around the people at the counter.');
    }

    public function test_customers_page_displays_sample_accounts(): void
    {
        Customer::factory()->create([
            'full_name' => 'Mika Santos',
            'email' => 'mika.santos@example.com',
        ]);

        $response = $this->get('/customers');

        $response->assertOk()
            ->assertViewIs('pages.customers')
            ->assertViewHas('customers', fn ($customers): bool => $customers instanceof EloquentCollection && $customers->count() === 1 && $customers->first() instanceof Customer)
            ->assertSee('Mika Santos')
            ->assertSee('mika.santos@example.com');
    }

    public function test_users_page_displays_sample_staff(): void
    {
        User::factory()->create([
            'name' => 'Ari Velasco',
            'full_name' => 'Ari Velasco',
            'username' => 'manager01',
            'role' => 'Manager',
        ]);

        $response = $this->get('/users');

        $response->assertOk()
            ->assertViewIs('pages.users')
            ->assertViewHas('users', fn ($users): bool => $users instanceof EloquentCollection && $users->count() === 1 && $users->first() instanceof User)
            ->assertSee('manager01')
            ->assertSee('Manager');
    }
}
