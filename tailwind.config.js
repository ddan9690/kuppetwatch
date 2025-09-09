/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './resources/**/*.php', // include Livewire components
  ],
  theme: {
    extend: {
      colors: {
        'kuppet-green': '#3D782D',
        'kuppet-green-light': '#A9DB9E',
        'kuppet-green-dark': '#1F3C17',
        'kuppet-gold': '#C3912E',
        'kuppet-white': '#FFFFFF',
        'kuppet-text': '#2D2F34',
      },
    },
  },
  plugins: [],
};
