/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'construtan-orange': '#E65100',
        'construtan-brown': '#5D4037',
        'construtan-light': '#F5F5F5',
        'construtan-dark': '#333333',
      },
      fontFamily: {
        'sans': ['"Open Sans"', 'sans-serif'],
        'display': ['"Oswald"', 'sans-serif'],
      },
      backgroundImage: {
        'hero-pattern': "url('../img/hero-bg.jpg')",
      }
    },
  },
  plugins: [],
}
