/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["index.html"],
  darkMode: "class",
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#06b6d4",
        dark: "#0f172a",
        secondary: "#64748b",
        danger:"#D00B0D",
      },
      screens: {
        "2xl": "1230px",
      },
    },
  },
  plugins: [],
};
