/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            boxShadow: {
                myBoxShadow: "2px 5px 10px rgba(0, 0, 0, 0.5)",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
