<?php

namespace App\Models;

use Database\Factories\CustomerFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['full_name', 'email', 'phone', 'address', 'customer_type', 'loyalty_points', 'account_status'])]
class Customer extends Model
{
    /** @use HasFactory<CustomerFactory> */
    use HasFactory;
}
