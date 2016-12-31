const gulp = require('gulp');
const cssmin = require('gulp-cssmin');
const rename = require('gulp-rename');
const jsmin = require('gulp-jsmin');
const imagemin = require('gulp-imagemin');
const concat = require('gulp-concat');

var paths = {
  materialize: 'node_modules/materialize-css/dist/',
  styles: ['web-src/css/*.css', '!web-src/css/main.css'],
  scripts: ['web-src/js/*.js', '!web-src/js/main.js']
};

gulp.task('jsmin', function(){
    gulp.src(paths.scripts)
        .pipe(jsmin())
        .pipe(gulp.dest('web/js'));
    gulp.src([paths.materialize+'js/materialize.js','web-src/js/main.js'])
        .pipe(jsmin())
        .pipe(concat('main.js'))
        .pipe(gulp.dest('web/js'));
 });

gulp.task('cssmin', function () {
    gulp.src(paths.styles)
        .pipe(cssmin())
        .pipe(gulp.dest('web/css'));
    gulp.src([paths.materialize+'css/materialize.css','web-src/css/main.css'])
        .pipe(cssmin())
        .pipe(concat('main.css'))
        .pipe(gulp.dest('web/css'));
});

gulp.task('imagemin', function(){
    gulp.src('web-src/img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('web/img'))

});

gulp.task('font', function() {
    return gulp.src(paths.materialize+'fonts/**/*')
        .pipe(gulp.dest('web/fonts'))

});

gulp.task('watch', function() {
    gulp.watch(paths.scripts, ['scripts']);
    gulp.watch(paths.images, ['images']);
});

gulp.task('default', ['cssmin', 'jsmin','imagemin','font']);