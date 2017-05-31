var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    autoprefixer= require('gulp-autoprefixer'),
    cleanCSS    = require('gulp-clean-css'),
    rename      = require('gulp-rename'),
    concat      = require('gulp-concat'),
    uglify      = require('gulp-uglify'),
    path        = require('path'),
    browserSync = require('browser-sync');


var config = {
    bootstrapDir: './node_modules/bootstrap/scss',
    tatherDir: './node_modules/tether',
    fontAwesomeDir: './node_modules/font-awesome/scss',
    publicDir: './app',
};

gulp.task('browser-sync', ['styles', 'scripts'], function() {
    browserSync({
       proxy: "modx.local",
        notify: false
    });
});

gulp.task('scripts', function() {
	return gulp.src([
        '/assets/app/libs/jquery/jquery-1.11.2.min.js',
        '/assets/app/libs//bootstrap/js/bootstrap.min.js',
		'/assets/app/js/material.min.js',
		// 'app/libs/magnific-popup/magnific-popup.min.js'
		])
		.pipe(concat('/assets/libs.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('/assets/app/js'));
})

gulp.task('styles', function () {
    return gulp.src('/assets/src/sass/mixins_all.sass')
    .pipe(sass({
        includePaths: [
            config.bootstrapDir,
            require('node-bourbon').includePaths,
            config.tetherDir,
            config.fontAwesomeDir
        ]
    }).on('error', sass.logError))
    .pipe(rename({basename: 'main2', prefix : ''}))
    .pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
// .pipe(cleanCSS())
    .pipe(gulp.dest(config.publicDir + '/css'))
    .pipe(browserSync.reload({stream: true}))
});

gulp.task('watch', function () {
gulp.watch(['/assets/src/sass/*.sass', '/assets/src/sass/**/*.sass', '/assets/src/sass/**/*.scss' ], ['styles'],browserSync.reload);
gulp.watch(['/assets/app/*.html'],browserSync.reload);
gulp.watch(['/assets/app/js/**/*.js'],browserSync.reload);
});
gulp.task('default', ['browser-sync', 'watch']);
