const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        colors: {
        purple: colors.purple,
        gray: colors.gray,
        red: colors.red,
        orange: colors.orange

        },
    plugins: [
        require('flowbite/plugin')
    ],
    },
};
