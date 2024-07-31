/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.ts",
    ],
    theme: {
        extend: {
            spacing: {
                18: "4.5rem",
                24: "6rem",
                28: "7rem",
                36: "9rem",
                44: "11rem",
                52: "13rem",
                60: "15rem",
                72: "18rem",
                84: "21rem",
                96: "24rem",
            },
            borderWidth: {
                1.5: "1.5px",
            },
        },
    },
    plugins: [],
};
