const {
    spacing
} = require('tailwindcss/defaultTheme');

const colors = require('tailwindcss/colors');

const hyvaModules = require('@hyva-themes/hyva-modules');

module.exports = hyvaModules.mergeTailwindConfig({
    theme: {
        extend: {
            spacing: {
                '15': '60px',
                '400': '400px',
            },
            width: {
                '50px': '50px',
            },
            height: {
                '4px': '4px',
            },
            backgroundOpacity: {
                10: '0.1',
            },
            opacity: {
                80: '0.8',
            },
            screens: {
                'sm': '640px',
                // => @media (min-width: 640px) { ... }
                'md': '768px',
                // => @media (min-width: 768px) { ... }
                'lg': '1024px',
                // => @media (min-width: 1024px) { ... }
                'xl': '1280px',
                // => @media (min-width: 1280px) { ... }
                '2xl': '1536px' // => @media (min-width: 1536px) { ... }
            },
            fontFamily: {
                sans: ["Segoe UI", "Helvetica Neue", "Arial", "sans-serif"]
            },
            fontSize:{
                '34': '34px',
            },
            colors: {
                customRed: "#E53647",
                paleRed: '#fff1f1',
                customGray: "#F2F2F2",
                customBlue: '#160F3E',
                customDark: '#363636',
                statusGreen: '#00A887',
                statusYellow: '#FFC165',
                sliderBlue: '#003057',
                primary: {
                    lighter: colors.blue['300'],
                    "DEFAULT": colors.blue['800'],
                    darker: colors.blue['900']
                },
                secondary: {
                    lighter: colors.blue['100'],
                    "DEFAULT": colors.blue['200'],
                    darker: colors.blue['300']
                },
                background: {
                    lighter: colors.blue['100'],
                    "DEFAULT": colors.blue['200'],
                    darker: colors.blue['300']
                },
                green: colors.emerald,
                yellow: colors.amber,
                purple: colors.violet,
            },
            textColor: {
                orange: colors.orange,
                red: {
                    ...colors.red,
                    "DEFAULT": colors.red['500']
                },
                primary: {
                    lighter: colors.gray['700'],
                    "DEFAULT": colors.gray['800'],
                    darker: colors.gray['900']
                },
                secondary: {
                    lighter: colors.gray['400'],
                    "DEFAULT": colors.gray['600'],
                    darker: colors.gray['800']
                }
            },
            backgroundColor: {
                primary: {
                    lighter: colors.blue['600'],
                    "DEFAULT": colors.blue['700'],
                    darker: colors.blue['800']
                },
                secondary: {
                    lighter: colors.blue['100'],
                    "DEFAULT": colors.blue['200'],
                    darker: colors.blue['300']
                },
                container: {
                    lighter: colors.white,
                    "DEFAULT": colors.neutral['50'],
                    darker: colors.neutral['100']
                }
            },
            borderColor: {
                customRed: '#E53647',
                paleGray: '#D9D9D9',
                primary: {
                    lighter: colors.blue['600'],
                    "DEFAULT": colors.blue['700'],
                    darker: colors.blue['800']
                },
                secondary: {
                    lighter: colors.blue['100'],
                    "DEFAULT": colors.blue['200'],
                    darker: colors.blue['300']
                },
                container: {
                    lighter: colors.neutral['100'],
                    "DEFAULT": '#e7e7e7',
                    darker: '#b6b6b6'
                },
            },
            minHeight: {
                a11y: spacing["11"],
                'screen-25': '25vh',
                'screen-50': '50vh',
                'screen-75': '75vh'
            },
            maxHeight: {
                'screen-25': '25vh',
                'screen-50': '50vh',
                'screen-75': '75vh'
            },
            container: {
                center: true,
                padding: spacing["6"]
            }
        }
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    content: [
        '../../**/*.phtml',
        '../../*/layout/*.xml',
        '../../*/page_layout/override/base/*.xml',
        '../../../../../../../vendor/hyva-themes/magento2-default-theme/**/*.phtml',
        "./app/design/frontend/Magebit/practical_1_theme/**/*.phtml",
        "./app/code/**/*.phtml",
        "./src/**/*.{html,js,ts,vue,php}",
        "../../../../../../../vendor/hyva-themes/magento2-hyva-widgets/**/*.phtml"
    ],
});
