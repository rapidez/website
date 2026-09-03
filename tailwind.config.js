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
                inactive: "#577C87",
                button: "#4285F4"
            },
        },
        dropShadow: {
            "toolbar": "0 4px 40px rgba(0, 0, 0, 0.10)",
            // Follows the alpha channel, so it hugs the rounded corners of a transparent screenshot.
            // The first pass has no offset so the halo lands on all four sides, including the top.
            "mockup": [
                "0 0 16px rgba(16, 26, 46, 0.22)",
                "0 0 44px rgba(16, 26, 46, 0.14)",
                "0 20px 34px rgba(16, 26, 46, 0.12)",
                "0 40px 70px rgba(16, 26, 46, 0.16)",
            ],
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@khoohaoyit/tailwind-grid-center"),
    ],
};
