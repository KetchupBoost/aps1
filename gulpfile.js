const { watch } = require('fs')

var gulp = require('gulp')
var sass = require('gulp-sass')

sass.compiler = require('node-sass')

gulp.task('sass', compileSass)
gulp.task('default', Sasswatch)

function compileSass() {
    return gulp
        .src('app/scss/*.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('app/css'))
}

function Sasswatch() {
    gulp.watch('app/scss/*.scss', compileSass)
}
