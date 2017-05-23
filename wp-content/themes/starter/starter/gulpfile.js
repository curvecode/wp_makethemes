// var
var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass');
gulp.task('browser-sync', function() {
  var files = [
    './style.css',
    './*.php'
  ];

  // Initialize Brwosersync with a PHP server
  browserSync.init(files, {
    proxy : 'http://localhost/wp_maketheme/'
  });
});

// Configure Sass task to run when the 

gulp.task('sass', function() {
  return gulp.src('sass/*.scss')
    .pipe(sass({
      'outputStyle' : 'compressed'
    }))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
});

// Watch task
gulp.task('watch', function () {
    gulp.watch('src/sass/*.scss', ['sass']);
    
    gulp.watch('./*.php').on('change', browserSync.reload);
    gulp.watch('./**/*.css').on('change', browserSync.reload);
    gulp.watch('./js/*.js').on('change', browserSync.reload);
});

// default task
gulp.task('default', ['watch', 'sass', 'browser-sync'], function() {
  gulp.watch('sass/**/*.scss', ['sass']);
});