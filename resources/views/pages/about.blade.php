@extends('layouts.app')

@section('title', 'Salecrest POS | About')

@section('content')
    <section class="about-hero">
        <div class="about-inner shell">
            <div class="about-copy">
                <p class="eyebrow">About Salecrest</p>
                <h1>Built around the people at the counter.</h1>
                <p class="lead">A point-of-sale system starts with information a team can find and understand. Salecrest brings that idea into a simple Laravel foundation.</p>
                <a class="button button-primary" href="{{ route('users.index') }}">Meet the sample team <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>

    <section class="section shell about-details">
        <div>
            <p class="eyebrow">The idea</p>
            <h2>Start clear. Keep building.</h2>
        </div>
        <div class="about-prose">
            <p>Salecrest is a learning project for a retail POS. This Laravel version introduces the core pages and shows customer and staff information using sample records stored in controllers.</p>
            <p>It gives the project a readable structure: routes choose the page, controllers prepare the data, and Blade views display it. Later features can grow from this foundation.</p>
        </div>
    </section>
@endsection
