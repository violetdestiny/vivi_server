module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
        './resources/js/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            animation: {
                'dropdown': 'dropdown 3s ease-out',
                'enter': 'enter 1s ease-out',
            },
            keyframes: {
                dropdown: {
                    '0%': { transform: 'translateY(-100px)', opacity: 0 },
                    '100%': { transform: 'translateY(0)', opacity: 1 }
                },
                enter: {
                    '0%': { transform: 'translateY(20px)', opacity: 0 },
                    '100%': { transform: 'translateY(0)', opacity: 1 }
                }
            },
            transitionProperty: {
                'scale': 'transform',
                'height': 'height'
            }
        }
    },
    variants: {
        extend: {
            scale: ['hover', 'group-hover'],
            opacity: ['hover', 'group-hover'],
            animation: ['hover', 'group-hover']
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ]
}
