module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            spacing: {
                '96': '24rem',
            }
        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
    ]
}
