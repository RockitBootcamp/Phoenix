var gulp = require('gulp');
var browserify = require('browserify');
var gutil = require('gulp-util');
var hbsfy = require('hbsfy');
var del = require('del');
var source = require('vinyl-source-stream');
var sass = require('gulp-sass');


/****************************************
  Build
*****************************************/

gulp.task('clean', function (cb) {
  del('./public/scripts/bundle.js');
  cb();
});

var bundler = browserify({
  entries: ['./src/index.js'],
  debug: true
});

bundler.transform(hbsfy);
bundler.on('log', gutil.log); // output build logs to terminal

gulp.task('build', ['clean'], function () {
  return bundler.bundle()
    // log errors if they happen
    .on('error', gutil.log.bind(gutil, 'Browserify Error'))
    // set output filename
    .pipe(source('bundle.js'))
    .pipe(gulp.dest('./public/scripts'));
});

/****************************************
  Sass
*****************************************/

gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./public/css'));
});


/****************************************
  Watch
*****************************************/

gulp.task('watch', function () {
  gulp.watch('./src/**/*', ['build']);
  gulp.watch('./sass/**/*.scss', ['sass']);
})


gulp.task('default', ['sass', 'build', 'watch'])