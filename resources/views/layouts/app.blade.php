<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#EAF0EE">
    <meta name="description" content="Salecrest POS brings customer and staff account information into one clear starting point for a point-of-sale system.">
    <title>@yield('title', 'Salecrest POS')</title>
    <link rel="icon" href="{{ asset('images/salecrest-mark.svg') }}" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('css/salecrest.css') }}">
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>

    <header class="site-header">
        <div class="header-inner shell">
            <a class="brand" href="{{ route('home') }}" aria-label="Salecrest POS home">
                <img src="{{ asset('images/salecrest-logo.svg') }}" alt="Salecrest POS" width="190" height="42">
            </a>

            <nav class="desktop-nav" aria-label="Main navigation">
                <a href="{{ route('home') }}" @if (request()->routeIs('home')) aria-current="page" @endif>Home</a>
                <a href="{{ route('about') }}" @if (request()->routeIs('about')) aria-current="page" @endif>About</a>
                <a href="{{ route('customers.index') }}" @if (request()->routeIs('customers.index')) aria-current="page" @endif>Customers</a>
                <a href="{{ route('users.index') }}" @if (request()->routeIs('users.index')) aria-current="page" @endif>Users</a>
            </nav>

            <details class="mobile-nav">
                <summary>Menu <span aria-hidden="true">+</span></summary>
                <nav aria-label="Mobile navigation">
                    <a href="{{ route('home') }}" @if (request()->routeIs('home')) aria-current="page" @endif>Home</a>
                    <a href="{{ route('about') }}" @if (request()->routeIs('about')) aria-current="page" @endif>About</a>
                    <a href="{{ route('customers.index') }}" @if (request()->routeIs('customers.index')) aria-current="page" @endif>Customers</a>
                    <a href="{{ route('users.index') }}" @if (request()->routeIs('users.index')) aria-current="page" @endif>Users</a>
                </nav>
            </details>
        </div>
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="shell footer-inner">
            <div>
                <strong>Salecrest POS</strong>
                <p>A practical starting point for connected retail work.</p>
            </div>
            <nav aria-label="Footer navigation">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('customers.index') }}">Customers</a>
                <a href="{{ route('users.index') }}">Users</a>
            </nav>
        </div>
    </footer>
</body>
</html>
