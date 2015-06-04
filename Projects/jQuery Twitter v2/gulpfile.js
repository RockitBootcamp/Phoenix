'use strict';

var gulp = require('gulp');
var gutil = require('gulp-util');

// Add your require statements and gulp tasks here
// Make sure the output goes to js/bundle.js

var jsonServer = require('json-server');

var apiServer = jsonServer.create();
var router = jsonServer.router('db.json');

apiServer.use(jsonServer.defaults);
apiServer.use(router);

gulp.task('serve:api', function (cb) {
  apiServer.listen(3000);
  cb();
});

var serve = require('gulp-serve');

gulp.task('serve', ['serve:api'], serve({
  root: ['.'],
  port: 8000
}));
