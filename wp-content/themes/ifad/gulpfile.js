var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var googleWebFonts = require('gulp-google-webfonts')

var options = {
    fontsDir: 'fonts',
    cssDir: 'assets/fonts',
    cssFilename: 'fonts.css'
}


gulp.task('serve',['sass'], function() {
    browserSync.init({
        proxy: "localhost/ifad",
        port: 8080
    });

    gulp.watch("assets/**/*.scss", ['sass']);
    gulp.watch("*.php").on('change', browserSync.reload);
    gulp.watch("page-templates/*.php").on('change', browserSync.reload);
});

gulp.task('sass', function() {
    return gulp.src("assets/scss/style.scss")
        .pipe(sass())
        .pipe(minifyCss({compatibility: 'ie9'}))
        .pipe(gulp.dest("dist/css"))
        .pipe(browserSync.stream())
});

gulp.task('fonts', function() {
    return gulp.src('./fonts.list')
        .pipe(googleWebFonts(options))
        .pipe(gulp.dest("./"))
});

gulp.task('default', ['serve']);