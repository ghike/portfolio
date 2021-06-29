module.exports = {
    purge: [
        './resources/**/*.blade.php', +'./resources/**/*.js', +'./resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            transitionProperty: {
                'height': 'height'
            },
            fontFamily: {
                sans: ['Inter var'],
            },
        },
        scale: {
            '0': '0',
            '25': '.25',
            '50': '.5',
            '75': '.75',
            '80': '.80',
            '90': '.9',
            '95': '.95',
            '100': '1',
            '105': '1.05',
            '110': '1.1',
            '125': '1.25',
            '150': '1.5',
            '200': '2',
        }
    },
    variants: {
        height: ['responsive', 'hover', 'focus'],
        extend: {},
    },
    plugins: [],
}