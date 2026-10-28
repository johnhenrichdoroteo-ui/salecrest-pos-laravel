<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Morgan Cruz', 'email' => 'morgan.cruz@example.com', 'phone' => '0928-000-0101', 'role' => 'Admin', 'account_status' => 'Active'],
            ['username' => 'manager01', 'full_name' => 'Ari Velasco', 'email' => 'ari.velasco@example.com', 'phone' => '0928-000-0102', 'role' => 'Manager', 'account_status' => 'Active'],
            ['username' => 'cashier01', 'full_name' => 'Jules Ramos', 'email' => 'jules.ramos@example.com', 'phone' => '0928-000-0103', 'role' => 'Cashier', 'account_status' => 'Active'],
            ['username' => 'cashier02', 'full_name' => 'Sam Torres', 'email' => 'sam.torres@example.com', 'phone' => '0928-000-0104', 'role' => 'Cashier', 'account_status' => 'Inactive'],
            ['username' => 'inventory01', 'full_name' => 'Alex Bautista', 'email' => 'alex.bautista@example.com', 'phone' => '0928-000-0105', 'role' => 'Inventory', 'account_status' => 'Active'],
            ['username' => 'support01', 'full_name' => 'Casey Flores', 'email' => 'casey.flores@example.com', 'phone' => '0928-000-0106', 'role' => 'Support', 'account_status' => 'Active'],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['username' => $user['username']],
                [
                    ...$user,
                    'name' => $user['full_name'],
                    'password' => Hash::make(Str::random(40)),
                ],
            );
        }
    }
}
