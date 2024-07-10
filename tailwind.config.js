// tailwind.config.js
  module.exports = {
    theme: {
      extend: {
        keyframes: {
          shake: {
            '0%, 100%': { transform: 'translateX(0)' },
            '25%': { transform: 'translateX(-5px)' },
            '50%': { transform: 'translateX(5px)' },
            '75%': { transform: 'translateX(-5px)' },
          },
        },
        animation: {
          shake: 'shake 0.5s infinite',
        },
      },
    },
    variants: {},
    plugins: [],
}
