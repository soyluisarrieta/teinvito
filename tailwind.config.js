/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./components/layout/header.php",
    "./components/layout/footer.php",

    // "./index.php",
    "./quienes-somos/index.php",
  ],
  theme: {

    // Container
    container: {
      screens: {
        xl: "1024px",
      },
      center: true,
      padding: {
        DEFAULT: '1rem',
        xl: '0rem',
      },
    },

    extend: {

      // Fonts
      fontFamily: {
        exo: ['Font-exo', 'system-ui', 'sans-serif'],
      },

      // Palette
      colors: {
        'palette-primary': '#EF7336',
        'palette-primary-h': '#EB601C',
        'palette-primary-l': '#F28149',
        
        'palette-light': '#F2E7CE',
        'palette-dark': '#31261D',
        'palette-dark-h': '#1F170F',
        'palette-dark-l': '#453121',
        
        'palette-yellow': '#FFE252',
        'palette-lima': '#71AF41',
        'palette-lightgreen': '#2DC885',
        'palette-darkgreen': '#006837',
        'palette-cyan': '#00A89C',
        'palette-lightblue': '#29AAE1',
        'palette-blue': '#0071BB',
        'palette-indigo': '#2E3191',
        'palette-darkindigo': '#1B1464',
        'palette-red': '#FD5052',
      },
    }
  },
  plugins: [],
};
