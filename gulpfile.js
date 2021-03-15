var gulp    = require('gulp');
var plumber = require('gulp-plumber')
var concat  = require('gulp-concat');
var uglify  = require('gulp-uglify');
var sass    = require('gulp-sass');

//js builder vriables
var js_src       = './resources/js/**/*.js';
var js_dist      = './app/View/resources/js';
var js_dist_name = 'scripts.js';

//sass builder variables
var sass_src     = './resources/styles/**/*.scss';
var sass_dist    = './app/View/resources/css';

gulp.task('scripts', function(){
    return gulp.src(js_src)
    .pipe(plumber())
    .pipe(uglify())
    .pipe(concat(js_dist_name))
    .pipe(gulp.dest(js_dist));
});
gulp.task('scss', function(){
    return gulp.src(sass_src)
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest(sass_dist));
})

gulp.task('watch', function(){
    gulp.watch([js_src], gulp.series('scripts'));
    gulp.watch([sass_src], gulp.series('scss'));
})