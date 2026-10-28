@extends('layouts.app')

@section('title', 'Salecrest POS | User Accounts')

@section('content')
    <section class="directory shell">
        <div class="directory-heading">
            <div>
                <p class="eyebrow">Accounts directory</p>
                <h1>User accounts</h1>
                <p class="directory-intro">A view of staff roles and account status. The entries below are sample data for this activity.</p>
            </div>
            <span class="record-count">{{ $users->count() }} sample records</span>
        </div>

        <div class="table-frame">
            <div class="table-scroll" role="region" aria-label="User account records" tabindex="0">
                <table class="record-table">
                    <thead>
                        <tr>
                            <th scope="col">Team member</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><span class="record-name">{{ $user->full_name }}</span><span class="record-id">U-{{ str_pad((string) $user->id, 3, '0', STR_PAD_LEFT) }}</span></td>
                                <td class="username">{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td><span class="status @if ($user->account_status === 'Inactive') status-inactive @endif">{{ $user->account_status }}</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <p class="table-swipe">Swipe sideways to view all columns.</p>
        <p class="table-note">Staff accounts are loaded from the database through the User model.</p>
    </section>
@endsection
