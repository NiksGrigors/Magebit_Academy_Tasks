const { postcssImportHyvaModules } = require("@hyva-themes/hyva-modules");

module.exports = {
    plugins: [
        postcssImportHyvaModules,
        require('postcss-import'),
        require('tailwindcss/nesting'),
        require('tailwindcss'),
        require('autoprefixer'),
        require('postcss-preset-env'),
        require('postcss-font-magician')({ display: 'swap' }),
    ]
}
