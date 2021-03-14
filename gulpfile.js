var gulp    = require('gulp');
var plumber = require('gulp-plumber')
var concat  = require('gulp-concat');
var uglify  = require('gulp-uglify');

var js_src = './resources/js/*.js';

var js_dist = './app/View/resources/js';
var js_dist_name = 'scripts.js';

gulp.task('scripts', function(){
    return gulp.src(js_src)
    .pipe(plumber())
    .pipe(uglify())
    .pipe(concat(js_dist_name))
    .pipe(gulp.dest(js_dist));
});

gulp.task('watch', function(){
    gulp.watch([js_src], gulp.series('scripts'));
})