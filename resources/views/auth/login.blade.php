<x-guest-layout>
    <div class="auth-heading">
        <p class="eyebrow">WELCOME BACK</p>
        <h2>Good to see you.</h2>
        <p>Pick up right where you left off.</p>
    </div>

    <x-auth-session-status class="auth-session-status" :status="session('status')" />

    <form class="auth-form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="auth-field-group">
            <x-input-label class="auth-label" for="email" :value="__('Email address')" />
            <x-text-input id="email" class="auth-field" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="auth-field-group">
            <div class="auth-label-row">
                <x-input-label class="auth-label" for="password" :value="__('Password')" />
                @if (Route::has('password.request'))
                    <a class="auth-inline-link" href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a>
                @endif
            </div>
            <x-text-input id="password" class="auth-field" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="auth-form-options">
            <label class="auth-checkbox" for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="auth-actions">
            <x-primary-button class="auth-submit">
                {{ __('Log in') }} <span aria-hidden="true">↗</span>
            </x-primary-button>
        </div>
    </form>

    <p class="auth-switch">New around here? <a href="{{ route('register') }}">Create an account <span aria-hidden="true">→</span></a></p>
</x-guest-layout>
