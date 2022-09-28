// /** @type {import('tailwindcss').Config} */
// const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
],
  theme: {
    extend: {
      fontFamily: {
          'poppins': ['Poppins', 'sans-serif'] 
      }
    },
    colors: {
      main: "#0D0D2B",
      icon: "#3671E9",
      button: "#3671E9",
      white10: "#FFFFFF1A"
    },
  },
  plugins: [],
}
