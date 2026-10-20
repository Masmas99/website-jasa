import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', 'Inter', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    dark: '#111726',
                    lime: '#D2F53E',
                    limeHover: '#C4E832',
                    bg: '#F4F5F9',
                    card: '#FFFFFF',
                    muted: '#8A92A6',
                    badge: '#FCA5A5',
                },
            },
            screens: {
                'xs': '420px',
            },
        },
    },

    plugins: [forms],
};
