<x-guest-layout>
    <div class="auth-heading">
        <p class="eyebrow">YOUR NEXT CHAPTER</p>
        <h2>Let’s get started.</h2>
        <p>Create an account and make this space yours.</p>
    </div>

    <form class="auth-form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="auth-field-group">
            <x-input-label class="auth-label" for="name" :value="__('Your name')" />
            <x-text-input id="name" class="auth-field" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="How should we call you?" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="auth-field-group">
            <x-input-label class="auth-label" for="email" :value="__('Email address')" />
            <x-text-input id="email" class="auth-field" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="auth-field-group">
            <x-input-label class="auth-label" for="password" :value="__('Password')" />
            <x-text-input id="password" class="auth-field" type="password" name="password" required autocomplete="new-password" placeholder="Create a password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="auth-field-group">
            <x-input-label class="auth-label" for="password_confirmation" :value="__('Confirm password')" />
            <x-text-input id="password_confirmation" class="auth-field" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Enter your password again" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="auth-actions">
            <x-primary-button class="auth-submit">
                {{ __('Create account') }} <span aria-hidden="true">↗</span>
            </x-primary-button>
        </div>
    </form>

    <p class="auth-switch">Already have an account? <a href="{{ route('login') }}">Log in <span aria-hidden="true">→</span></a></p>
</x-guest-layout>
