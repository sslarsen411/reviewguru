
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                josefin: ["Josefin Sans", "sans-serif"],
            },
            backgroundImage: {
                'guru-bg': "url('/images/revguru-banner.png')",
            },

        },
    },
    plugins: [],
};
