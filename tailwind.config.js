import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
    "./node_modules/flowbite/**/*.js",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Figtree", ...defaultTheme.fontFamily.sans],
        poppins: ["Poppins", ...defaultTheme.fontFamily.sans],
        heebo: ["Heebo", ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: {
          purple: "#6F41A8",
            yellow: "#EAEF78",
          green: "#A8E0B2",
          orange: "#FF914D",
          background: "#F4F4F4",
        },
        secondary: {
          purple: "#C8B3E2",
          yellow: "#FAFCD7",
        },
      },
      listStyleImage: {
        triangle: "url('/storage/app/public/images/triangle-list.png')",
      },
    },
  },

  plugins: [forms, require("flowbite/plugin")],
};
