<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Mika Santos', 'email' => 'mika.santos@example.com', 'phone' => '0917-000-0101', 'address' => 'Makati City', 'customer_type' => 'Member', 'loyalty_points' => 42, 'account_status' => 'Active'],
            ['full_name' => 'Noah Reyes', 'email' => 'noah.reyes@example.com', 'phone' => '0917-000-0102', 'address' => 'Quezon City', 'customer_type' => 'Regular', 'loyalty_points' => 0, 'account_status' => 'Active'],
            ['full_name' => 'Lia Navarro', 'email' => 'lia.navarro@example.com', 'phone' => '0917-000-0103', 'address' => 'Pasig City', 'customer_type' => 'Member', 'loyalty_points' => 75, 'account_status' => 'Active'],
            ['full_name' => 'Kai Mendoza', 'email' => 'kai.mendoza@example.com', 'phone' => '0917-000-0104', 'address' => 'Taguig City', 'customer_type' => 'Regular', 'loyalty_points' => 5, 'account_status' => 'Inactive'],
            ['full_name' => 'Ella Dizon', 'email' => 'ella.dizon@example.com', 'phone' => '0917-000-0105', 'address' => 'Mandaluyong City', 'customer_type' => 'Member', 'loyalty_points' => 30, 'account_status' => 'Active'],
            ['full_name' => 'Rafi Lim', 'email' => 'rafi.lim@example.com', 'phone' => '0917-000-0106', 'address' => 'Manila', 'customer_type' => 'Regular', 'loyalty_points' => 0, 'account_status' => 'Active'],
        ];

        foreach ($customers as $customer) {
            Customer::firstOrCreate(['email' => $customer['email']], $customer);
        }
    }
}
