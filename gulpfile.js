var gulp        = require('gulp');
var less        = require('gulp-less');
var cssmin      = require('gulp-cssmin');
var rename      = require('gulp-rename');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;


gulp.task('compile-less', function() {
    gulp.src('./assets/less/style.less')
        .pipe(less())
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./public/css/'));
});

gulp.task('watch', function() {
    gulp.watch('./assets/less/*.less' , ['compile-less']);
});

gulp.task('serve', function () {

    browserSync.init({
        server: {
            baseDir: "./public/"
        }
    });
    gulp.watch('./assets/less/*.less').on('change', reload);
    gulp.watch('./public/*.html').on('change', reload);
});


gulp.task('default', ['watch', 'serve']);