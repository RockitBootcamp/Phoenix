var gulp = require('gulp')
var sass = require('gulp-sass')
var ugly = require('gulp-uglify')
var autoprefix = require('gulp-autoprefixer')

gulp.task('default', ['build'], function () {
  console.log('All tasks complete!')
})

gulp.task('sass', function () {
  return gulp.src('./*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefix({
        browsers: ['last 10 versions'],
        cascade: false
      }))
    .pipe(gulp.dest('dist/css'));
})

gulp.task('min', function () {
  return gulp.src('index.js')
    .pipe(ugly())
    .pipe(gulp.dest('dist/js'));
})

gulp.task('build', ['sass', 'min'])




var gutil = require('gulp-util');

var source = require('vinyl-source-stream');
var browserify = require('browserify');
var hbsfy = require('hbsfy');

var bundler = browserify({
  entries: ['./index.js'],
  debug: true
});

bundler.transform(hbsfy);
bundler.on('log', gutil.log); // output build logs to terminal

gulp.task('build', function () {
  return bundler.bundle()
    // log errors if they happen
    .on('error', gutil.log.bind(gutil, 'Browserify Error'))
    .pipe(source('bundle.js'))
    .pipe(gulp.dest('dist/js'));
});







gulp.task('watch-sass', function () {
  return gulp.watch(['./*.scss', 'index.js'], ['build'])
})
