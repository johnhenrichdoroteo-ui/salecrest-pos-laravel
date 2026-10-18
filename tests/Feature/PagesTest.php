<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
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
        $response = $this->get('/customers');

        $response->assertOk()
            ->assertViewIs('pages.customers')
            ->assertViewHas('customers', fn (array $customers): bool => count($customers) >= 5)
            ->assertSee('Mika Santos')
            ->assertSee('mika.santos@example.com');
    }

    public function test_users_page_displays_sample_staff(): void
    {
        $response = $this->get('/users');

        $response->assertOk()
            ->assertViewIs('pages.users')
            ->assertViewHas('users', fn (array $users): bool => count($users) >= 5)
            ->assertSee('manager01')
            ->assertSee('Manager');
    }
}
