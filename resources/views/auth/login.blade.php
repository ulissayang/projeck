{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-guest.app-layout>

    <section class="section-login min-vh-100 d-flex flex-column align-items-center justify-content-center py-0 my-0">
        <div class="container">
            <div class="row justify-content-evenly">

                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <div class="card mb-3">
                        <div class="card-body shadow">
                            <a href="{{ route('home') }}">
                                <h1 class="title">{{ config('app.name') }}</h1>
                            </a>
                            <div class="pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Login dengan Akun Anda</h5>
                                <p class="text-center small">Masukan email dan kata sandi anda</p>
                            </div>

                            <form method="POST" action="{{ route('login') }}" class="row g-3" id="form">
                                @csrf
                                <!-- Email Address -->
                                <div class="col-12">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <x-text-input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="username" placeholder="example@gmail.com" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-12">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" class="form-control" type="password" name="password"
                                        required autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                </div>

                                <!-- Remember Me -->
                                <div class="col-12">
                                    <div class="form-check">
                                        <input id="remember_me" type="checkbox" class="form-check-input"
                                            name="remember">
                                        <label for="remember_me" class="form-check-label">{{ __('Remember me')
                                            }}</label>
                                    </div>
                                </div>

                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    @if (Route::has('password.request'))
                                    <a class="text-primary" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif

                                    <x-button id="button" type="submit">
                                        {{ __('Log in') }}
                                    </x-button>
                                    <x-button id="loading-button" type="button" style="display: none;" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        <span class="ms-2">Loading...</span>
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('form');
            const loginButton = document.getElementById('button');
            const loadingButton = document.getElementById('loading-button');

            form.addEventListener('submit', function(event) {
                // Hide the login button and show the loading button
                loginButton.style.display = 'none';
                loadingButton.style.display = 'inline-block';
            });
        });
    </script>

</x-guest.app-layout>