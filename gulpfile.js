var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass')(require('sass'));

function clean(cb) {
  console.log('clean');
  cb();
}

function scss() {
  return gulp.src('./src/*.sass')
    .pipe(sass())
    .pipe(gulp.dest('./public/css'));
}

function reload(cb) {
  browserSync.reload();
  cb();
}

function serve(cb) {
  browserSync.init({
    server: {
      baseDir: './public'
    }
  });
  cb();
}

function watch() {
  gulp.watch('./public/*.html', reload);
  gulp.watch('./src/*.sass', gulp.series(scss, reload));
}

exports.default = gulp.series(scss, serve, watch);
