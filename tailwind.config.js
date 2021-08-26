const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        container: {
            center: true,
            padding: '1rem',

        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1480px',
            '2xl': '1760px',
        },
        extend: {},
    },

    variants: {
        extend: {},
    },

    plugins: [require('@tailwindcss/forms')],
};
