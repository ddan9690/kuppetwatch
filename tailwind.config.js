/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './app/Http/Livewire/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#0AA04F',
          light: '#3BC374',
          dark: '#067A3B',
        },

        secondary: {
          DEFAULT: '#CFAA6B',
          light: '#E5CFA3',
          dark: '#A8864F',
        },

        text: '#2D2F34',
        background: '#F8FAF9',
      },
    },
  },
  plugins: [],
};