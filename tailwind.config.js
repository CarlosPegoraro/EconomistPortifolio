/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './app/Livewire/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        brasil: {
          verde: '#009C3B',
          amarelo: '#FFDF00',
          azul: '#002776',
          branco: '#F9FAFB',
        },
      },
      boxShadow: {
        glow: '0 0 40px rgba(0, 156, 59, 0.2)',
      },
    },
  },
  plugins: [require('@tailwindcss/forms')],
};
