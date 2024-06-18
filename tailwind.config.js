/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  
  ],
  theme: {
    extend: {
      fontFamily: {
        hanken: ['Hanken Grotesk', 'sans-serif'],
      }, 
      colors: {
        "site-black": "#060606"
      }
    },
  },
  plugins: [],
}