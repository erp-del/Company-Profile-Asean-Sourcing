/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.jsx",
    "./resources/**/*.ts",
    "./resources/**/*.tsx",
  ],
  theme: {
    extend: {
      colors: {
        navy: '#001f3f',
        'navy-dark': '#0d1b2a',
        'bg-dark': '#0a0e27',
        gold: '#d4af37',
        // OROA-inspired modern palette
        'asean-blue': '#0052cc',
        'asean-blue-dark': '#003d99',
        'asean-sky': '#e6f0ff',
      },
      fontFamily: {
        sans: ['system-ui', 'blinkmacsystemfont', 'segoe ui', 'roboto', 'helvetica neue', 'arial', 'sans-serif'],
        'asean-display': ['Plus Jakarta Sans', 'system-ui', 'sans-serif'],
      },
      fontSize: {
        'xs': ['0.75rem', { lineHeight: '1rem' }],
        'sm': ['0.875rem', { lineHeight: '1.25rem' }],
        'base': ['1rem', { lineHeight: '1.5rem' }],
        'lg': ['1.125rem', { lineHeight: '1.75rem' }],
        'xl': ['1.25rem', { lineHeight: '1.75rem' }],
        '2xl': ['1.5rem', { lineHeight: '2rem' }],
        '3xl': ['1.875rem', { lineHeight: '2.25rem' }],
        '4xl': ['2.25rem', { lineHeight: '2.5rem' }],
        '5xl': ['3rem', { lineHeight: '1.2' }],
        '6xl': ['3.75rem', { lineHeight: '1.2' }],
      },
    },
  },
  plugins: [],
}

