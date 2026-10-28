<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->numerify('09##-###-####'),
            'address' => fake()->city(),
            'customer_type' => fake()->randomElement(['Regular', 'Member']),
            'loyalty_points' => fake()->numberBetween(0, 100),
            'account_status' => 'Active',
        ];
    }
}
