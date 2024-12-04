import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#ff8901',
                secondary: '#404040',
                // secondary: '#fb923c',
            },
            fontFamily: {
                'dosis': ['Dosis', 'sans-serif'],
                'catamaran': ['Catamaran', 'sans-serif']
            },
            container: {
                center: true,
                padding: {
                    DEFAULT: '1rem',
                    sm: '2rem',
                    lg: '4rem',
                    xl: '5rem',
                    '2xl': '6rem',
                }
            },
            h3: {
                fontSize: '200px'
            }
        },
    },
    plugins: [require('daisyui')],
};
