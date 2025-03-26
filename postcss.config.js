module.exports = {
    plugins: [
        require('postcss-import')(),
        require('tailwindcss')('./tailwind.config.js'),
        require('autoprefixer')({
            overrideBrowserslist: [
                '> 1%',
                'last 2 versions',
                'Firefox ESR',
                'not dead'
            ]
        }),
        // Only enable in production
        ...(process.env.NODE_ENV === 'production'
            ? [
                require('@fullhuman/postcss-purgecss')({
                    content: [
                        './resources/**/*.blade.php',
                        './resources/**/*.js',
                        './resources/**/*.vue'
                    ],
                    defaultExtractor: content =>
                        content.match(/[\w-/:]+(?<!:)/g) || [],
                    safelist: [
                        /-(leave|enter|appear)(|-(to|from|active))$/,
                        /^(?!cursor-move).+-move$/,
                        /^router-link(|-exact)-active$/,
                        /data-v-.*/,
                        /^v-.*/
                    ]
                }),
                require('cssnano')({
                    preset: 'default'
                })
            ]
            : [])
    ]
}
