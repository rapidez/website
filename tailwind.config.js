module.exports = {
    content: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        fontFamily: {
            body: ["Poppins"],
        },
        extend: {
            colors: {
                primary: {
                    100: "#202F60",
                    200: "#205060",
                },
                secondary: {
                    100: "#27AE60",
                    200: "#34CDB1",
                    900: "#002f36",
                },
                heading: "#213F60",
                inactive: "#577C87"
            },
        },
        dropShadow: {
            "toolbar": "0 4px 40px rgba(0, 0, 0, 0.10)",
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@khoohaoyit/tailwind-grid-center"),
    ],
};
