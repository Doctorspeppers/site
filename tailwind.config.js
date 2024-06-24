/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    './resources/views/*/*.blade.php',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],

    theme: {
        screens: {
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            blue: colors.blue,
            cyan: colors.cyan,
            emerald: colors.emerald,
            fuchsia: colors.fuchsia,
            slate: colors.slate,
            gray: colors.gray,
            neutral: colors.neutral,
            stone: colors.stone,
            green: colors.green,
            indigo: colors.indigo,
            lime: colors.lime,
            orange: colors.orange,
            pink: colors.pink,
            purple: colors.purple,
            red: colors.red,
            rose: colors.rose,
            sky: colors.sky,
            teal: colors.teal,
            violet: colors.violet,
            yellow: colors.amber,
            white: colors.white,
        },
        fontFamily: {
            sans: ['Graphik', 'sans-serif'],
            serif: ['Merriweather', 'serif'],
        },
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                black: colors.black,
                white: colors.white,
                emerald: colors.emerald,
                indigo: colors.indigo,
                yellow: colors.yellow,
                stone: colors.warmGray,
                sky: colors.lightBlue,
                neutral: colors.trueGray,
                gray: colors.coolGray,
                slate: colors.blueGray,
            },
        spacing: {
            '128': '32rem',
            '144': '36rem',
        },
        borderRadius: {
            '4xl': '2rem',
        }
        }
    },
    plugins: [
        require('flowbite/plugin')
    ]

}

