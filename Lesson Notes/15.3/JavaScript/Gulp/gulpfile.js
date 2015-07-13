var gulp = require('gulp')
var sass = require('gulp-sass')
var uglify = require('gulp-uglify')
var autoprefix = require('gulp-autoprefixer')
var jshint = require('gulp-jshint')

gulp.task('default', ['build'], function () {
  console.log('All done!')
})

gulp.task('sass', function () {
  return gulp.src('./main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(gulp.dest('dist/css'));
})

gulp.task('ugly', function () {
  return gulp.src('./index.js')
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'));
})

gulp.task('lint', function () {
  return gulp.src('./index.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
})

gulp.task('build', ['sass', 'ugly'])
