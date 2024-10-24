export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  safelist: [
    'bg-whitehover', 
    'hover:bg-whitehover',
    'text-whitehover',
    'bg-darkgray'
  ],
  theme: {
    extend: {
      colors: {
        'maincolor': '#c4eaf7',
        'hover': '#0b263b',
        'whitehover': '#FEFEFE',
        'darkgray':'#99b7c4',
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
