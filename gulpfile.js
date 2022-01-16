const path        = require('path');
const gulp        = require('gulp');
const browserSync = require('browser-sync').create();
const sass        = require('gulp-sass')(require('sass'));
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');
const webpackStream = require('webpack-stream');
const svgmin      = require('gulp-svgmin');
const svgSymbols  = require('gulp-svg-symbols');
const cheerio     = require('gulp-cheerio');
const gulpif      = require('gulp-if');

const BASE_PATH = './';
const webpack = require(BASE_PATH + 'node_modules/webpack');

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("scss/style.scss")
      .pipe(sass())
      .pipe(gulp.dest("dist"))
      .pipe(browserSync.stream());
});

// Webpack
gulp.task('webpack', function(callback) {
    runWebpackWithParams(callback, false, false);
});

gulp.task('webpack-prod', function(callback) {
    runWebpackWithParams(callback, true, false);
});

gulp.task('webpack-analyze-prod', function(callback) {
    runWebpackWithParams(callback, true, true);
});

function runWebpackWithParams(callback, isProd, isAnalyze) {
    let firstBuild = true;
    const moduleConf = require(`${BASE_PATH}webpack.config.js`);

    const env = {
        NODE_ENV: isProd ? 'prod' : 'dev',
        DEBUG: isAnalyze ? 'analyze' : false
    };
    const params = {
        mode: isProd ? 'production' : 'development',
        DEBUG: isAnalyze ? 'analyze' : false
    };
    const config = moduleConf(env, params);

    webpack(config, function(err, stats) {
        if (!err) {
            err = stats.toJson().errors[0];
        }
        console.log(err || stats.toString({ colors: true }));

        // task never errs in watch mode, it waits and recompiles
        if (!config.watch && err) {
            callback(err);

        } else if (firstBuild) {
            firstBuild = false;
            callback();
        }
    });
}


// gulp.task('js', function () {
//     return gulp.src('js/pages/[name].js')
//       .pipe(webpackStream({
//           output: {
//               filename: './js/pages/[name].js',
//           },
//           module: {
//               rules: [
//                   {
//                       test: /\.(js)$/,
//                       exclude: /(node_modules)/,
//                       loader: 'babel-loader',
//                       options: {
//                           presets: ['env'],
//                       },
//                   }
//               ]
//           },
//           // externals: {
//           //     jquery: 'jQuery'
//           // }
//       }))
//       .pipe(gulp.dest('./dist/'))
//       .pipe(uglify())
//       .pipe(rename({ suffix: '.min' }))
//       .pipe(gulp.dest('./dist/'));
// });

gulp.task('symbol', function () {
    return gulp
        .src('./images/symbol/*.svg')
        .pipe(svgmin({
            plugins: [{
                removeViewBox: false
            }]
        }))
        .pipe(cheerio({
            run: function ($) {
                $('[fill]').removeAttr('fill');
                $('[stroke]').removeAttr('stroke');
                $('[stroke-width]').removeAttr('stroke-width');
                $('[fill-rule]').removeAttr('fill-rule');
                $('[style]').removeAttr('style');
            },
            parserOptions: {xmlMode: true}
        }))
        .pipe(svgSymbols({
            templates: ['default-svg', 'default-scss'],
            class    : ".symbol-%f",
            svgAttrs : {
                style: "display: none;",
            }
        }))
        .pipe(gulpif(file => file.history[0].indexOf('.scss') === -1, gulp.dest('./images'), gulp.dest('./scss')));
});

// Static Server + watching scss/html files
gulp.task('serve', gulp.series('sass', 'webpack', 'symbol', function() {
    browserSync.init({
        proxy: 'butcher/'
    });

    gulp.watch("scss/**/*.scss", gulp.series('sass'));
    // gulp.watch("*.html").on('change', browserSync.reload);
    gulp.watch("js/**/*.js").on('change', gulp.series('webpack'));
    gulp.watch("images/symbol/*.js").on('change', gulp.series('symbol'));
}));

gulp.task('default', gulp.series('serve'));
