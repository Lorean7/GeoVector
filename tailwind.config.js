const defaultTheme = require('tailwindcss/defaultTheme');
const path = require('path');
const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.{php,html,js,jsx,ts,tsx,vue}",
        './resources/js/**/*.vue',
        "./node_modules/@left4code/tw-starter/**/*.js",
        './node_modules/litepie-datepicker/**/*.js',
    ],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Change with you want it
                'litepie-primary': colors.lightBlue, // color system for light mode
                'litepie-secondary': colors.coolGray // color system for dark mode
            },
        },
    },
    variants: {
        extend: {
          cursor: ['disabled'],
          textOpacity: ['disabled'],
          textColor: ['disabled']
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    theme: {
        screens: {
          'sm': '640px',
          // => @media (min-width: 640px) { ... }

          'md': '768px',
          // => @media (min-width: 768px) { ... }

          'lg': '1024px',
          // => @media (min-width: 1024px) { ... }

          'xl': '1280px',
          // => @media (min-width: 1280px) { ... }

          '2xl': '1536px',
          // => @media (min-width: 1536px) { ... }
        }
      },
    //   important: true,
};
