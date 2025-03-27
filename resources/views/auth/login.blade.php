@extends('layouts.app')

@section('content')
    <main class="container mx-auto max-w-lg mt-10">
        <div class="flex">
            <div class="w-full">
                <section class="flex flex-col break-words bg-white border-2 border-miffy-brown rounded-xl shadow-lg" style="box-shadow: 5px 5px 0 var(--miffy-brown);">

                    <header class="font-semibold bg-miffy-pink text-white py-5 px-6 rounded-t-lg flex items-center">
                        <img src="{{ asset('images/miffy/miffy-logo.png') }}" class="h-8 mr-3">
                        {{ __('Login to Miffy\'s World') }}
                    </header>

                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 py-8" method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Decorative Miffy Cat -->
                        <div class="text-center mb-6">
                            <img src="{{ asset('images/miffy/miffy-cats1.png') }}" class="h-20 mx-auto mb-4 miffy-float">
                        </div>

                        <div class="flex flex-wrap">
                            <label for="email" class="block text-miffy-brown text-sm font-bold mb-2 sm:mb-3">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                   class="w-full px-4 py-3 rounded-lg border-2 border-miffy-brown focus:border-miffy-pink focus:ring-2 focus:ring-miffy-peach @error('email') border-red-500 @enderror"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                   autocomplete="email"
                                   autofocus
                                   placeholder="miffy@example.com">

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-2">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mt-6">
                            <label for="password" class="block text-miffy-brown text-sm font-bold mb-2 sm:mb-3">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                   class="w-full px-4 py-3 rounded-lg border-2 border-miffy-brown focus:border-miffy-pink focus:ring-2 focus:ring-miffy-peach @error('password') border-red-500 @enderror"
                                   name="password"
                                   required
                                   placeholder="••••••••">

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-2">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex items-center mt-6">
                            <label class="inline-flex items-center text-sm text-miffy-brown" for="remember">
                                <input type="checkbox" name="remember" id="remember" class="rounded border-2 border-miffy-brown text-miffy-pink focus:ring-miffy-peach"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-miffy-pink hover:text-miffy-brown whitespace-no-wrap no-underline hover:underline ml-auto"
                                   href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="flex flex-wrap mt-8">
                            <button type="submit"
                                    class="w-full miffy-button font-bold whitespace-no-wrap p-4 rounded-lg text-base leading-normal no-underline hover:transform hover:scale-105 transition">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('register'))
                                <p class="w-full text-center text-miffy-brown my-6 sm:my-8">
                                    {{ __("Don't have an account?") }}
                                    <a class="text-miffy-pink hover:text-miffy-brown no-underline hover:underline font-bold" href="{{ route('register') }}">
                                        {{ __('Register Here') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>

                    <!-- Decorative Footer -->
                    <div class="bg-miffy-peach px-6 py-4 rounded-b-lg text-center border-t-2 border-miffy-brown">
                        <p class="text-sm text-miffy-brown">
                            Join Miffy's cat-loving community!
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <style>
        /* Add these styles to match your Miffy theme */
        :root {
            --miffy-peach: #FFDAC7;
            --miffy-pink: #FF9AA2;
            --miffy-brown: #B07C62;
            --miffy-cream: #FFF5EB;
        }

        .miffy-button {
            background-color: var(--miffy-brown);
            color: white;
            border-radius: 20px;
            transition: all 0.3s ease;
            border: 2px solid var(--miffy-brown);
            font-weight: bold;
        }

        .miffy-button:hover {
            background-color: var(--miffy-pink);
            transform: scale(1.05);
            color: white;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .miffy-float {
            animation: float 4s ease-in-out infinite;
        }

        /* Input focus styles */
        input:focus {
            outline: none;
            box-shadow: 0 0 0 2px var(--miffy-peach);
        }
    </style>
@endsection
