<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#f6f7f4">
        <title>{{ config('app.name', 'Student Space') }} · Your next chapter</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="auth-page">
        <main class="auth-shell">
            <aside class="auth-aside">
                <a class="brand auth-brand" href="{{ url('/') }}">
                    <span class="brand-mark" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M4 8.5 12 4l8 4.5-8 4.5-8-4.5Z" />
                            <path d="M7 10.3v4.2c0 1.3 2.2 2.5 5 2.5s5-1.2 5-2.5v-4.2M20 9v5" />
                        </svg>
                    </span>
                    <span>{{ config('app.name', 'Student Space') }}</span>
                </a>
                <div class="auth-aside-copy">
                    <p class="eyebrow"><span class="eyebrow-dot"></span> YOUR JOURNEY STARTS HERE</p>
                    <h1>A little space<br>for <span>big things.</span></h1>
                    <p>Show up as you are. There’s always room to learn, grow, and begin again.</p>
                </div>
                <div class="aside-decoration" aria-hidden="true">
                    <div class="aside-sun"></div>
                    <div class="aside-ring"></div>
                    <div class="aside-spark">✳</div>
                    <div class="aside-label">GROW AT YOUR OWN PACE</div>
                </div>
                <a class="aside-home" href="{{ url('/') }}"><span aria-hidden="true">←</span> Back to home</a>
            </aside>

            <section class="auth-main">
                <div class="auth-mobile-brand">
                    <a class="brand" href="{{ url('/') }}">
                        <span class="brand-mark" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M4 8.5 12 4l8 4.5-8 4.5-8-4.5Z" />
                                <path d="M7 10.3v4.2c0 1.3 2.2 2.5 5 2.5s5-1.2 5-2.5v-4.2M20 9v5" />
                            </svg>
                        </span>
                        <span>{{ config('app.name', 'Student Space') }}</span>
                    </a>
                </div>
                <div class="auth-card">
                    {{ $slot }}
                </div>
                <p class="auth-footer">A fresh start is closer than you think <span aria-hidden="true">✦</span></p>
            </section>
        </main>
    </body>
</html>
