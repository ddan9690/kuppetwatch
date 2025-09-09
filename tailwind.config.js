/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php', // All Blade views
    './resources/**/*.js',        // JS files
    './resources/**/*.vue',       // Vue files (if any)
    './app/Http/Livewire/**/*.php', // Livewire components in app folder
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
