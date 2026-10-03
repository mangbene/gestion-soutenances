import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // --- COULEURS PERSONNALISÉES FORMATEC ---
            colors: {
                'formatec-blue': '#1A237E',    // Bleu marine profond (Texte/Titres)
                'formatec-yellow': '#FFC107',  // Jaune/Orange vif (Boutons/Fond)
                'formatec-red': '#D32F2F',     // Rouge éclatant (Bordures/Accents)
                'formatec-dark': '#111827',    // Gris très foncé pour le texte standard
            },
            // ------------------------------------------
        },
    },

    plugins: [forms],
};