<nav x-data="{ open: false }" class="bg-formatec-blue border-b-4 border-formatec-yellow shadow-lg">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- LOGO FORMATEC ICI -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                        <!-- Assure-toi que ton logo est dans public/images/logo.png -->
                        <img src="{{ asset('images/logo.png') }}" alt="Logo FORMATEC" class="h-10 w-auto bg-white p-1 rounded shadow-sm">
                        <span class="text-formatec-yellow font-bold text-xl tracking-wider hidden sm:block">FORMATEC</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:text-formatec-yellow border-b-2 border-transparent hover:border-formatec-yellow">
                        {{ __('Tableau de bord') }}
                    </x-nav-link>
                    
                    <!-- Tu pourras ajouter d'autres liens ici plus tard, ex: -->
                    <!-- <x-nav-link :href="route('soutenances.index')" :active="request()->routeIs('soutenances.*')" class="text-white hover:text-formatec-yellow border-b-2 border-transparent hover:border-formatec-yellow">
                        {{ __('Soutenances') }}
                    </x-nav-link> -->
                </div>
            </div>

            <!-- Settings Dropdown (Profil Utilisateur) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-formatec-blue bg-formatec-yellow hover:bg-yellow-400 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-formatec-dark hover:bg-gray-100">
                            {{ __('Mon Profil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="text-formatec-red font-bold hover:bg-gray-100">
                                {{ __('Se déconnecter') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger (Menu Mobile) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-formatec-yellow hover:text-white hover:bg-blue-900 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (Mobile) -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-formatec-blue">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:bg-blue-900 hover:text-formatec-yellow">
                {{ __('Tableau de bord') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-blue-900">
            <div class="px-4">
                <div class="font-medium text-base text-formatec-yellow">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</div>
                <div class="font-medium text-sm text-gray-300">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white hover:bg-blue-900 hover:text-formatec-yellow">
                    {{ __('Mon Profil') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-formatec-red hover:bg-blue-900">
                        {{ __('Se déconnecter') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>