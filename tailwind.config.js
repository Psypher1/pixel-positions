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
      },
      fontSize:{
        xxs: ["0.625rem", "1rem"]
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}