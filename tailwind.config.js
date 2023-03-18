/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#68e0cf",
        secondary: "#373b40",
        navbar: "#585d65",
      }
    },
  },
  plugins: [],
}
