export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    // Safelisting whitehover to prevent it from being purged
    {
      safelist: ['bg-whitehover', 'hover:bg-whitehover','text-whitehover'],
    },
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
