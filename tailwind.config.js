/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                brand: {
                    navy:  '#000931',
                    blue:  '#11468F',
                    red:   '#DA1212',
                    light: '#EEEEEE',
                    gray:  '#F4F7FB',
                    text:  '#0F1C45',
                    muted: '#64748B',
                },
            },
            fontFamily: {
                sans:    ['Reddit Sans', 'sans-serif'],
                display: ['Reddit Sans', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
