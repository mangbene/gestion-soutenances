<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // ⚠️ CETTE LIGNE EST OBLIGATOIRE

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // ⚠️ CETTE LIGNE LIMITE LA TAILLE DES CLÉS
        Schema::defaultStringLength(191);
    }
}