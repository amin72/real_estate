module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        yekan: 'Yekan',
      },
      colors: {
        primary: '#10284e',
        secondary: 'rgba(51, 51, 51, 0.8)',
      },
      transitionProperty: {
        'height': 'height',
        'display': 'display',
        'show': 'show',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}
