'use strict';
 
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('default', function (){

});

gulp.task('scss', function () {
    gulp.src('./scss/**/*.scss')
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'))
});

gulp.task('watch', function () {
    gulp.watch('./scss/**/*.scss', ['scss'])
    gulp.watch('./css/style.css', ['default'])
});

  