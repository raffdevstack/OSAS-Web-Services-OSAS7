/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    theme: {
        extend: {
            width: {
                48: "48%",
            },
        },
    },
    plugins: [],
    darkMode: "class",
};
