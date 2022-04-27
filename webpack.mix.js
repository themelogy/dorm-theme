let mix = require('laravel-mix');

const isProduction = process.env.NODE_ENV == "production" ? true : false;
const path = require('path');
let directory = path.basename(path.resolve(__dirname));

const source = 'Themes/' + directory;
const dist   = 'public/themes/' + directory.toLowerCase();
const asset  = source + '/assets';
const resource_asset = source + '/resources/assets';

// Sass Generate
if( ! isProduction) {
    mix
        .sourceMaps(true, 'source-map')
        .webpackConfig({devtool: 'source-map'});
}

mix.copy(`${__dirname}/node_modules/animate.css/animate.min.css`, resource_asset + '/vendor/animate');

mix.copy(`${__dirname}/node_modules/jquery/dist/jquery.min.js`, resource_asset + '/vendor/jquery');

mix.copy(`${__dirname}/node_modules/bootstrap/dist`, resource_asset + '/vendor/bootstrap');

mix.copy(`${__dirname}/node_modules/@fortawesome/fontawesome-free/css`, resource_asset + '/vendor/fontawesome-free/css');
mix.copy(`${__dirname}/node_modules/@fortawesome/fontawesome-free/webfonts`, resource_asset + '/vendor/fontawesome-free/webfonts');
mix.copy(`${__dirname}/node_modules/simple-line-icons/dist`, resource_asset + '/vendor/simple-line-icons');
mix.copy(`${__dirname}/node_modules/linearicons/dist`, resource_asset + '/vendor/linearicons');

mix.copy(`${__dirname}/node_modules/owl.carousel/dist`, resource_asset + '/vendor/owl.carousel');
mix.copy(`${__dirname}/node_modules/magnific-popup/dist`, resource_asset + '/vendor/magnific-popup');

mix.copy(`${__dirname}/node_modules/lazyload/lazyload.min.js`, resource_asset + '/vendor/lazyload');
mix.copy(`${__dirname}/node_modules/isotope-layout/dist`, resource_asset + '/vendor/isotope');
mix.copy(`${__dirname}/node_modules/vide/dist`, resource_asset + '/vendor/vide');
mix.copy(`${__dirname}/node_modules/vivus/dist`, resource_asset + '/vendor/vivus');

mix.copy(`${__dirname}/node_modules/lightgallery/dist`, resource_asset + '/vendor/lightgallery');

mix
    .sass(source + '/resources/assets/sass/theme.scss', dist + '/css')
    .sass(source + '/resources/assets/sass/theme-elements.scss', dist + '/css')
    .sass(source + '/resources/assets/sass/custom.scss', dist + '/css')
    .sass(source + '/resources/assets/sass/demos/demo-architecture.scss', dist + '/css/skins/skin-architecture.css')
    .sass(source + '/resources/assets/sass/demos/demo-business-consulting.scss', dist + '/css/skins/skin-business-consulting.css')
    .sass(source + '/resources/assets/sass/demos/demo-construction.scss', dist + '/css/skins/skin-construction.css')
    .sass(source + '/resources/assets/sass/demos/demo-gym.scss', dist + '/css/skins/skin-gym.css')
    .sass(source + '/resources/assets/sass/demos/demo-medical.scss', dist + '/css/skins/skin-medical.css')
    .sass(source + '/resources/assets/sass/demos/demo-restaurant.scss', dist + '/css/skins/skin-restaurant.css')
    .less(source + '/resources/assets/less/skin-default.less', dist + '/css/skins/default.css')
    .options({
        processCssUrls: false
    });

mix.scripts([
    source + '/resources/assets/js/theme.js'
], dist + '/js/theme.js');

// Copy Directory to asset
mix.copyDirectory(resource_asset, dist);

if ( isProduction )
{
    mix.version();
}

// Browser Sync
if( ! isProduction) {
    mix
        .browserSync(
        {
            proxy: 'yurtanka.local',
            files: [source + '/**/*.*']
        }
    );
}