module.exports = {
    mode: 'jit',
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        fontFamily: {
            'body': ['Poppins'],
        },
        extend: {
            colors: {
                primary: {
                    100: '#202F60',
                    200: '#205060',
                },
                secondary: {
                    100: '#27AE60',
                    200: '#34CDB1',
                },
            },
            spacing: {
                '96': '24rem',
            },
            opacity: {
                '5': '.05',
            },
            inset: {
                '100': '100%',
            }
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ]
}
