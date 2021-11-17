const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  purge: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
        yekan: 'Yekan'
      },
      colors: {
        primary: '#10284e',
        secondary: '#1fc4b8'
      },
      transitionProperty: {
        'height': 'height'
      }
    }
  },
  variants: {
    extend: {
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ]
};