/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                cyan: {
                    DEFAULT: '#00FFFF',
                    50: '#E0FFFF',
                    100: '#BFFFFE',
                    200: '#80FFFF',
                    300: '#40FFFF',
                    400: '#00FFFF',
                    500: '#00CCCC',
                    600: '#009999',
                    700: '#006666',
                    800: '#003333',
                    900: '#001A1A',
                },
                dark: {
                    DEFAULT: '#111111',
                    50: '#333333',
                    100: '#2A2A2A',
                    200: '#222222',
                    300: '#1A1A1A',
                    400: '#111111',
                    500: '#0A0A0A',
                },
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                mono: ['Fira Code', 'monospace'],
            },
        },
    },
    plugins: [],
}