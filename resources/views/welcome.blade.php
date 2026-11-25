<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#f6f7f4">
    <title>{{ config('app.name', 'Student Space') }} · A place to grow</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="welcome-page">
    <header class="site-header">
        <a class="brand" href="{{ url('/') }}" aria-label="{{ config('app.name', 'Student Space') }} home">
            <span class="brand-mark" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M4 8.5 12 4l8 4.5-8 4.5-8-4.5Z" />
                    <path d="M7 10.3v4.2c0 1.3 2.2 2.5 5 2.5s5-1.2 5-2.5v-4.2M20 9v5" />
                </svg>
            </span>
            <span>{{ config('app.name', 'Student Space') }}</span>
        </a>
        <nav class="site-nav" aria-label="Main navigation">
            @auth
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a class="nav-link" href="{{ route('login') }}">Log in</a>
                <a class="button button-small" href="{{ route('register') }}">Get started <span aria-hidden="true">↗</span></a>
            @endauth
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-copy">
                <p class="eyebrow"><span class="eyebrow-dot"></span> A fresh start, made simple</p>
                <h1>Make room for<br>what’s <span>next.</span></h1>
                <p class="hero-description">A welcoming space for your ideas, your goals, and everything you’re working toward. Start your next chapter here.</p>
                <div class="hero-actions">
                    @auth
                        <a class="button" href="{{ route('dashboard') }}">Go to your dashboard <span aria-hidden="true">↗</span></a>
                    @else
                        <a class="button" href="{{ route('register') }}">Create your account <span aria-hidden="true">↗</span></a>
                        <a class="text-link" href="{{ route('login') }}">I already have an account <span aria-hidden="true">→</span></a>
                    @endauth
                </div>
                <div class="hero-note">
                    <span class="note-icon" aria-hidden="true">✦</span>
                    <span>A little progress, every day.</span>
                </div>
            </div>

            <div class="hero-art" aria-hidden="true">
                <div class="art-sun"></div>
                <div class="art-orbit orbit-one"></div>
                <div class="art-orbit orbit-two"></div>
                <div class="art-leaf leaf-one"></div>
                <div class="art-leaf leaf-two"></div>
                <div class="art-leaf leaf-three"></div>
                <div class="art-pot"></div>
                <div class="art-note-card">
                    <div class="note-card-top"><span class="note-card-dot"></span><span>YOUR NEXT CHAPTER</span></div>
                    <div class="note-card-title">Ideas grow<br>with intention.</div>
                    <div class="note-card-lines"><i></i><i></i><i></i></div>
                    <div class="note-card-footer"><span>KEEP SHOWING UP</span><span>✦</span></div>
                </div>
                <div class="art-sticker sticker-top">one step<br>at a time</div>
                <div class="art-sticker sticker-bottom"><span>✳</span> made for you</div>
            </div>
        </section>

        <section class="welcome-bottom" aria-label="A note for your journey">
            <span>YOUR SPACE. YOUR PACE.</span>
            <span class="bottom-rule"></span>
            <p>Big things begin with a small first step.</p>
        </section>
    </main>

    <footer class="site-footer">
        <span>© {{ date('Y') }} {{ config('app.name', 'Student Space') }}</span>
        <span>Here’s to what’s ahead <span aria-hidden="true">✦</span></span>
    </footer>
</body>
</html>
