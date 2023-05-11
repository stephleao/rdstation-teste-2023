const gulp = require('gulp'),
  fancylog = require('fancy-log');

/**
 * Define all source paths
 */

var paths = {
  styles: {
    src: './src/scss/**/*.scss',
    dest: './css'
  },
  scripts: {
    src: './src/js/**/*.js',
    dest: './js'
  }
};

/**
 * Webpack compilation: http://webpack.js.org, https://github.com/shama/webpack-stream#usage-with-gulp-watch
 *
 * build_js()
 */

function build_js() {
  const compiler = require('webpack'),
    webpackStream = require('webpack-stream');

  return gulp.src(paths.scripts.src)
    .pipe(
      webpackStream({
        config: require('./webpack.config.js')
      },
        compiler
      )
    )
    .pipe(
      gulp.dest(paths.scripts.dest)
    );
}

/**
 * SASS-CSS compilation: https://www.npmjs.com/package/gulp-sass
 *
 * build_css()
 */

function build_css() {
  const sass = require('gulp-sass')(require('sass')),
    postcss = require('gulp-postcss'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('autoprefixer'),
    cssnano = require('cssnano');

  const plugins = [
    autoprefixer(),
    cssnano(),
  ];

  return gulp.src(paths.styles.src)
    .pipe(
      sourcemaps.init()
    )
    .pipe(
      sass()
        .on('error', sass.logError)
    )
    .pipe(
      postcss(plugins)
    )
    .pipe(
      sourcemaps.write('./')
    )
    .pipe(
      gulp.dest(paths.styles.dest)
    );
}

/**
 * Watch task: Webpack + SASS
 *
 * $ gulp watch
 */

gulp.task('watch',
  function () {
    gulp.watch(paths.scripts.src, build_js);
    gulp.watch([paths.styles.src, './src/scss/**/*.scss'], build_css);
  }
);

/**
 * Build task: JS + CSS
 */

gulp.task('build', function () {
  return new Promise(function (resolve, reject) {
    build_js()
    build_css();
    resolve();
  });
});
