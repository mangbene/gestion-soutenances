<x-guest-layout>
    <!-- Section Logo et Titre -->
    <div class="mb-8 flex flex-col items-center">
        <!-- Assure-toi que ton logo est bien dans public/images/logo.png -->
        <img src="{{ asset('images/logo.png') }}" alt="Logo FORMATEC" class="h-20 w-auto mb-4">
        <h1 class="text-3xl font-bold text-formatec-blue">
            Gestion des Soutenances
        </h1>
        <p class="text-sm text-gray-500 mt-2">Institut FORMATEC</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6 w-full max-w-sm mx-auto">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Adresse Email')" class="text-formatec-blue font-semibold" />
            <x-text-input id="email" class="block mt-1 w-full border-formatec-blue focus:border-formatec-yellow focus:ring-formatec-yellow" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" class="text-formatec-blue font-semibold" />
            <x-text-input id="password" class="block mt-1 w-full border-formatec-blue focus:border-formatec-yellow focus:ring-formatec-yellow"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-formatec-blue shadow-sm focus:ring-formatec-yellow" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
            </label>
        </div>

        <!-- Bouton de connexion (Jaune FORMATEC avec texte Bleu) -->
        <div class="flex items-center justify-end mt-6">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-formatec-blue hover:text-formatec-red rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-formatec-blue" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 bg-formatec-yellow hover:bg-yellow-500 text-formatec-blue font-bold py-2 px-4 rounded border-2 border-formatec-red transition duration-150 ease-in-out">
                {{ __('Se connecter') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>