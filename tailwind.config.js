import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            backgroundImage: theme => ({
                'about-us-bg': "url('/images/about-us.jpeg')",
            }),
            boxShadow: {
                'innerColor': '0 0 0px 1000px #343159 inset',
            },
            colors: {
                'pry': {
                    light: '#2276b8',
                    DEFAULT: '#1a438d',
                    dark: '#062359',
                },
                'sec': {
                    // light: '#f5b773',
                    DEFAULT: '#ec9230',
                    dark: '#b35f04',
                },
                'bsc': {
                    // light: '#3B395C', //INVALID
                    DEFAULT: '#D80D16',
                    // dark: '#207DB9',
                },
                'msc': {
                    // light: '#104f69', //INVALID
                    DEFAULT: '#D80D161A',
                    // dark: '#03101A', 
                },
                'phd': {
                    // light: '#104f69', //INVALID
                    DEFAULT: '#01A412',
                    // dark: '#343159',
                },
                'prof': {
                    // light: '#104f69', //INVALID
                    DEFAULT: '#01A4121A',
                    // dark: '#5140D5',
                },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans'], 
                dmsans: ['"DM Sans"', 'sans'],
            },
            listStyleType: {
                roman: 'lower-roman',
            },
        },
    },

    plugins: [
        forms, 
        typography, 
        require('@tailwindcss/aspect-ratio'),
    ],
};
// 