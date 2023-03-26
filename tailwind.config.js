/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container:{
      center: true,
      padding: '64px',
    },
    extend: {
      colors:{
        primary : "#10b981" ,// Emerald colour
        secondary: "#94a3b8" // text-slate-400
      }
    },
  },
  plugins: [],
}