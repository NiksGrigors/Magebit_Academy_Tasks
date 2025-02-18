const {
  spacing
} = require('tailwindcss/defaultTheme');

const colors = require('tailwindcss/colors');

const defaultTheme = require('tailwindcss/defaultTheme');

const hyvaModules = require('@hyva-themes/hyva-modules');

module.exports = hyvaModules.mergeTailwindConfig({
    mode: process.env.TAILWIND_MODE || 'jit',
    theme: {
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        color: 'inherit',
                        maxWidth: '100%'
                    }
                }
            },
            padding: {
                '28': '7rem',
            },
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans]
            },
            colors: {
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
                green: colors.green,
                yellow: colors.amber,
                purple: colors.violet
            },
            textColor: {
                orange: colors.orange,
                red: { ...colors.red,
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
                }
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
    // Examples for excluding patterns from purge
    content: [
        // this theme's phtml and layout XML files
        '../../**/*.phtml',
        '../../*/layout/*.xml',
        "../../**/*.xml",
        '../../*/page_layout/override/base/*.xml',
        // parent theme in Vendor (if this is a child-theme)
        //'../../../../../../../vendor/hyva-themes/magento2-default-theme/**/*.phtml',
        //'../../../../../../../vendor/hyva-themes/magento2-default-theme/*/layout/*.xml',
        //'../../../../../../../vendor/hyva-themes/magento2-default-theme/*/page_layout/override/base/*.xml',
        // app/code phtml files (if need tailwind classes from app/code modules)
        '../../../../../../../app/code/**/*.phtml',
    ]
});
