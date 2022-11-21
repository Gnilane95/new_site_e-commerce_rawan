const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary:{
                    light :'#f0cf9c',
                    DEFAULT: "#dbb16e",
                    dark : '#B78C47',
                },
                secondary:{
                    light: '#94AEA3',
                    dark : '#8aab9d',
                },
            },
        
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    presets: [require('./tailwind-preset.js')],
};
