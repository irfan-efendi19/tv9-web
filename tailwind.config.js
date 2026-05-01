import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                tv9: {
                    primary: "#006747",
                    green: {
                        700: "#3a7055",
                        800: "#2d5c45",
                        900: "#1a4a3a",
                    },
                    leaf: {
                        50: "#f0f7f0",
                        500: "#6f9e5c",
                        700: "#4a7a4a",
                        900: "#2d5a2d",
                    },
                    sage: {
                        700: "#6a7a6a",
                        900: "#4a5a4a",
                    },
                    gold: {
                        300: "#edd7b0",
                        400: "#e3c893",
                        500: "#c9a84c",
                        600: "#f9a825",
                        700: "#b4925a",
                    },
                    brown: {
                        500: "#7a6a50",
                        800: "#5f5b4f",
                        900: "#54421f",
                    },
                    beige: "#e4ddd0",
                },
            },
        },
    },

    plugins: [forms],
};
