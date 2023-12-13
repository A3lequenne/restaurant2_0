/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./*.html",
            "./src/**/*.{js,ts,jsx,tsx}"],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: [
      {
        mytheme: {

          "primary": "#ea580c",

          "secondary": "#d6d3d1",

          "accent": "#c2410c",

          "neutral": "#111827",

          "base-100": "#292524",

          "info": "#51b0db",

          "success": "#28d26c",

          "warning": "#b91c1c",

          "error": "#fa3842",
        },
      },
    ],
  },
  plugins: [require('daisyui')],
}