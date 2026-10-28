@extends('layouts.app')

@section('title', 'Salecrest POS | Customer Accounts')

@section('content')
    <section class="directory shell">
        <div class="directory-heading">
            <div>
                <p class="eyebrow">Accounts directory</p>
                <h1>Customer accounts</h1>
                <p class="directory-intro">A simple overview of customer details. The entries below are sample data for this activity.</p>
            </div>
            <span class="record-count">{{ $customers->count() }} sample records</span>
        </div>

        <div class="table-frame">
            <div class="table-scroll" role="region" aria-label="Customer account records" tabindex="0">
                <table class="record-table">
                    <thead>
                        <tr>
                            <th scope="col">Customer</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Type</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td><span class="record-name">{{ $customer->full_name }}</span><span class="record-id">C-{{ str_pad((string) $customer->id, 3, '0', STR_PAD_LEFT) }}</span></td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->customer_type }}</td>
                                <td><span class="status @if ($customer->account_status === 'Inactive') status-inactive @endif">{{ $customer->account_status }}</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <p class="table-swipe">Swipe sideways to view all columns.</p>
        <p class="table-note">Customer accounts are loaded from the database through the Customer model.</p>
    </section>
@endsection
