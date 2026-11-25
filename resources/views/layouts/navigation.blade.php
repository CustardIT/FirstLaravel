<nav x-data="{ open: false }" class="app-nav">
    <div class="app-nav-inner">
        <div class="app-nav-start">
            <a class="brand app-brand" href="{{ route('dashboard') }}">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M4 8.5 12 4l8 4.5-8 4.5-8-4.5Z" />
                        <path d="M7 10.3v4.2c0 1.3 2.2 2.5 5 2.5s5-1.2 5-2.5v-4.2M20 9v5" />
                    </svg>
                </span>
                <span>{{ config('app.name', 'Student Space') }}</span>
            </a>

            <div class="app-nav-links">
                <a class="app-nav-link {{ request()->routeIs('dashboard') ? 'is-active' : '' }}"
                    href="{{ route('dashboard') }}"
                    @if (request()->routeIs('dashboard')) aria-current="page" @endif>
                    {{ __('Dashboard') }}
                </a>
                <a class="app-nav-link {{ request()->routeIs('profile.*') ? 'is-active' : '' }}"
                    href="{{ route('profile.edit') }}"
                    @if (request()->routeIs('profile.*')) aria-current="page" @endif>
                    {{ __('Profile') }}
                </a>
            </div>
        </div>

        <div class="app-nav-desktop">
            <x-dropdown align="right" width="48" contentClasses="app-dropdown-content">
                <x-slot name="trigger">
                    <button class="app-user-trigger" type="button">
                        <span class="app-user-avatar" aria-hidden="true">{{ str(Auth::user()->name)->substr(0, 1)->upper() }}</span>
                        <span>{{ Auth::user()->name }}</span>
                        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link class="app-dropdown-link" :href="route('profile.edit')">
                        {{ __('Edit profile') }}
                    </x-dropdown-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link class="app-dropdown-link" :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>

        <button class="app-mobile-toggle" type="button" @click="open = ! open" :aria-expanded="open.toString()" aria-label="{{ __('Toggle navigation') }}">
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" aria-hidden="true">
                <path :class="{ 'is-hidden': open }" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'is-hidden': ! open }" d="M6 6l12 12M18 6 6 18" />
            </svg>
        </button>
    </div>

    <div class="app-mobile-menu" :class="{ 'is-open': open }">
        <div class="app-mobile-links">
            <a class="app-mobile-link {{ request()->routeIs('dashboard') ? 'is-active' : '' }}" href="{{ route('dashboard') }}">
                {{ __('Dashboard') }}
            </a>
            <a class="app-mobile-link {{ request()->routeIs('profile.*') ? 'is-active' : '' }}" href="{{ route('profile.edit') }}">
                {{ __('Profile') }}
            </a>
        </div>

        <div class="app-mobile-account">
            <span class="app-user-avatar" aria-hidden="true">{{ str(Auth::user()->name)->substr(0, 1)->upper() }}</span>
            <span class="app-mobile-account-copy">
                <span>{{ Auth::user()->name }}</span>
                <span>{{ Auth::user()->email }}</span>
            </span>
        </div>

        <form class="app-mobile-logout" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">{{ __('Log out') }} <span aria-hidden="true">↗</span></button>
        </form>
    </div>
</nav>
