var gulp = require('gulp');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var jsmin = require('gulp-jsmin');
var imagemin = require('gulp-imagemin');


gulp.task('default', ['cssmin', 'jsmin','imagemin']);

 /*   gulp.src('web/css/*')
            .pipe(cleancs())
            .pipe(gulp.dest('web/cssmini'));
    gulp.task('miniplz');
*/
gulp.task('jsmin', function(){
    gulp.src('web-src/js/*.js')
        .pipe(jsmin())
   //     .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('web/js/'));
 });

gulp.task('cssmin', function () {
    gulp.src('web-src/css/*.css')
        .pipe(cssmin())
        //       .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('web/css/'));
});

gulp.task('imagemin', function(){
    gulp.src('web-src/img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('web/img/'))
});