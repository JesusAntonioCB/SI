var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var autoprefixer = require('autoprefixer');
var csso = require('gulp-csso');
var webpack = require("webpack-stream");

// Gulp task to minify CSS files
gulp.task('styles', function () {
  return gulp.src('./styles/index.scss')
    // Compile SASS files
    .pipe(sass({
      outputStyle: 'nested',
      precision: 10,
      includePaths: ['.'],
      onError: console.error.bind(console, 'Sass error:')
    }))
    .pipe(csso())
    // Output
    .pipe(gulp.dest('./styles'))
});

gulp.task('stylesVideos', function () {
  return gulp.src('./styles/indexVideo.scss')
    // Compile SASS files
    .pipe(sass({
      outputStyle: 'nested',
      precision: 10,
      includePaths: ['.'],
      onError: console.error.bind(console, 'Sass error:')
    }))
    .pipe(csso())
    // Output
    .pipe(gulp.dest('./styles'))
});

gulp.task("webpack",function(){
  return gulp.src('js/main.js')
    .pipe(webpack( require('./webpack.config.js') ))
    .pipe(gulp.dest('js/build'));
});

gulp.task("webpackprod",function(){
  return gulp.src('js/main.js')
    .pipe(webpack( require('./webpack.prod.js') ))
    .pipe(gulp.dest('js/build'));
});

gulp.task('default', gulp.parallel('styles', 'webpack', 'stylesVideos'));
gulp.task('prod', gulp.parallel('styles', 'webpackprod', 'stylesVideos'));
