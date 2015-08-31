var gulp = require('gulp');
var uglify = require('gulp-uglify');
var rimraf = require('rimraf');

gulp.task('clean', function(cb){

    // delete the /dist folder
    // FAIL delete gulp.src('dist/');
    rimraf('dist/', cb); // YAYYYYY

})

gulp.task('min', ['clean'], function(){

    return gulp.src('scripts/main.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist/'));

})

gulp.task('default', ['min'], function(){

    console.log("muy giup taskfldf")
})



// Server info
var jsonServer = require('json-server');
var apiServer = jsonServer.create();
var router = jsonServer.router('db.json');
var serve = require('gulp-serve');

apiServer.use(jsonServer.defaults);
apiServer.use(router);

gulp.task('serve:api', function (cb) {
  apiServer.listen(3000);
  cb();
});

gulp.task('serve', ['serve:api'], serve({
  root: ['.'],
  port: 8000
}));