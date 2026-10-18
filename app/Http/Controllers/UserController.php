<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        /** @var list<array{id: int, username: string, full_name: string, email: string, role: string, account_status: string}> $users */
        $users = [
            ['id' => 1, 'username' => 'admin01', 'full_name' => 'Morgan Cruz', 'email' => 'morgan.cruz@example.com', 'role' => 'Admin', 'account_status' => 'Active'],
            ['id' => 2, 'username' => 'manager01', 'full_name' => 'Ari Velasco', 'email' => 'ari.velasco@example.com', 'role' => 'Manager', 'account_status' => 'Active'],
            ['id' => 3, 'username' => 'cashier01', 'full_name' => 'Jules Ramos', 'email' => 'jules.ramos@example.com', 'role' => 'Cashier', 'account_status' => 'Active'],
            ['id' => 4, 'username' => 'cashier02', 'full_name' => 'Sam Torres', 'email' => 'sam.torres@example.com', 'role' => 'Cashier', 'account_status' => 'Inactive'],
            ['id' => 5, 'username' => 'inventory01', 'full_name' => 'Alex Bautista', 'email' => 'alex.bautista@example.com', 'role' => 'Inventory', 'account_status' => 'Active'],
            ['id' => 6, 'username' => 'support01', 'full_name' => 'Casey Flores', 'email' => 'casey.flores@example.com', 'role' => 'Support', 'account_status' => 'Active'],
        ];

        return view('pages.users', ['users' => $users]);
    }
}
