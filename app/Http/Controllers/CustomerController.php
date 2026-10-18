<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        /** @var list<array{id: int, full_name: string, email: string, phone: string, customer_type: string, account_status: string}> $customers */
        $customers = [
            ['id' => 1, 'full_name' => 'Mika Santos', 'email' => 'mika.santos@example.com', 'phone' => '09XX-XXX-0101', 'customer_type' => 'Member', 'account_status' => 'Active'],
            ['id' => 2, 'full_name' => 'Noah Reyes', 'email' => 'noah.reyes@example.com', 'phone' => '09XX-XXX-0102', 'customer_type' => 'Regular', 'account_status' => 'Active'],
            ['id' => 3, 'full_name' => 'Lia Navarro', 'email' => 'lia.navarro@example.com', 'phone' => '09XX-XXX-0103', 'customer_type' => 'Member', 'account_status' => 'Active'],
            ['id' => 4, 'full_name' => 'Kai Mendoza', 'email' => 'kai.mendoza@example.com', 'phone' => '09XX-XXX-0104', 'customer_type' => 'Regular', 'account_status' => 'Inactive'],
            ['id' => 5, 'full_name' => 'Ella Dizon', 'email' => 'ella.dizon@example.com', 'phone' => '09XX-XXX-0105', 'customer_type' => 'Member', 'account_status' => 'Active'],
            ['id' => 6, 'full_name' => 'Rafi Lim', 'email' => 'rafi.lim@example.com', 'phone' => '09XX-XXX-0106', 'customer_type' => 'Regular', 'account_status' => 'Active'],
        ];

        return view('pages.customers', ['customers' => $customers]);
    }
}
