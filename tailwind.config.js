import preset from "./vendor/filament/support/tailwind.config.preset";
/** @type {import('tailwindcss').Config} */
export default {
    // presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter", "sans-serif"],
            },
            backgroundImage: {
                "custom-radial": `
          radial-gradient(at 5% 89%, hsla(32,74%,65%,1) 0px, transparent 20%),
          radial-gradient(at 40% 20%, hsla(256,100%,76%,1) 0px, transparent 20%),
          radial-gradient(at 87% 67%, hsla(178,100%,51%,1) 0px, transparent 20%)
        `,
            },
        },
    },
    plugins: [require("preline/plugin")],
};
