<x-app-layout>
    <x-slot name="header">
        <div class="dashboard-page-heading">
            <p class="eyebrow"><span class="eyebrow-dot"></span> {{ __('YOUR HOME BASE') }}</p>
            <h1>{{ __('Dashboard') }}</h1>
        </div>
    </x-slot>

    <div class="dashboard-content">
        <section class="dashboard-welcome">
            <div class="dashboard-welcome-copy">
                <p class="dashboard-kicker"><span aria-hidden="true">✦</span> {{ __('A FRESH PAGE, JUST FOR YOU') }}</p>
                <h2>{{ __('Welcome in,') }}<br><span>{{ Auth::user()->name }}.</span></h2>
                <p class="dashboard-welcome-description">{{ __("You're logged in and ready to make this space your own. Take a moment to settle in, then choose what feels right.") }}</p>
                <a class="dashboard-button" href="{{ route('profile.edit') }}">
                    {{ __('Personalize your profile') }} <span aria-hidden="true">↗</span>
                </a>
            </div>
            <div class="dashboard-welcome-art" aria-hidden="true">
                <div class="dashboard-art-circle"></div>
                <div class="dashboard-art-spark spark-one">✳</div>
                <div class="dashboard-art-spark spark-two">✦</div>
                <div class="dashboard-art-card">
                    <span class="dashboard-art-card-label">{{ __('A NOTE FOR TODAY') }}</span>
                    <span class="dashboard-art-card-title">{{ __('Start where') }}<br>{{ __('you are.') }}</span>
                    <span class="dashboard-art-card-rule"></span>
                    <span class="dashboard-art-card-footer">{{ __('GOOD THINGS TAKE GROWING') }}</span>
                </div>
            </div>
        </section>

        <section class="dashboard-start">
            <div class="dashboard-section-heading">
                <p class="eyebrow">{{ __('MAKE YOURSELF AT HOME') }}</p>
                <h2>{{ __('A few good places to start') }}</h2>
            </div>

            <div class="dashboard-quick-links">
                <a class="dashboard-quick-card" href="{{ route('profile.edit') }}">
                    <span class="dashboard-quick-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="8" r="3.25" />
                            <path d="M5.5 20c.45-3.25 2.8-5.25 6.5-5.25s6.05 2 6.5 5.25" />
                        </svg>
                    </span>
                    <span class="dashboard-quick-copy">
                        <span class="dashboard-quick-title">{{ __('Your profile') }}</span>
                        <span class="dashboard-quick-description">{{ __('Update your details and make your account feel like you.') }}</span>
                    </span>
                    <span class="dashboard-quick-arrow" aria-hidden="true">↗</span>
                </a>

                <a class="dashboard-quick-card" href="{{ url('/') }}">
                    <span class="dashboard-quick-icon quick-icon-soft" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="m3.75 10 8.25-6.5L20.25 10v9.25a1 1 0 0 1-1 1h-5.5v-6h-3.5v6h-5.5a1 1 0 0 1-1-1V10Z" />
                        </svg>
                    </span>
                    <span class="dashboard-quick-copy">
                        <span class="dashboard-quick-title">{{ __('The welcome page') }}</span>
                        <span class="dashboard-quick-description">{{ __('Head back to the beginning whenever you need a reset.') }}</span>
                    </span>
                    <span class="dashboard-quick-arrow" aria-hidden="true">↗</span>
                </a>
            </div>
        </section>

        <p class="dashboard-signoff">{{ __('One small step is still a step forward.') }} <span aria-hidden="true">✦</span></p>
    </div>
</x-app-layout>
