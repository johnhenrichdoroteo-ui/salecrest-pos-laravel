@extends('layouts.app')

@section('title', 'Salecrest POS | Home')

@section('content')
    <section class="hero">
        <div class="hero-inner shell">
            <div class="hero-copy">
                <p class="eyebrow">Salecrest POS</p>
                <h1>Made for the work behind every sale.</h1>
                <p class="lead">A clear place to begin organizing the people who keep a business moving.</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="{{ route('customers.index') }}">View customer accounts <span aria-hidden="true">↗</span></a>
                    <a class="text-link" href="{{ route('about') }}">Get to know Salecrest <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section shell">
        <div class="section-heading">
            <h2>Good records make daily work easier.</h2>
            <p>Start with customer details and staff roles in one familiar place. These pages show sample records for the Laravel foundation.</p>
        </div>

        <div class="page-links">
            <a class="page-link" href="{{ route('customers.index') }}">
                <span class="page-link-kicker">Customer accounts</span>
                <strong>Know who shops with you.</strong>
                <span class="page-link-detail">See names, contact details, account types, and status.</span>
                <span class="page-link-arrow" aria-hidden="true">↗</span>
            </a>
            <a class="page-link" href="{{ route('users.index') }}">
                <span class="page-link-kicker">User accounts</span>
                <strong>Keep the team in view.</strong>
                <span class="page-link-detail">See staff usernames, roles, and account status.</span>
                <span class="page-link-arrow" aria-hidden="true">↗</span>
            </a>
        </div>
    </section>
@endsection
