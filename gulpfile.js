var gulp = require('gulp'),
stylus = require('gulp-stylus'),
autoprefixer = require('gulp-autoprefixer'),
minifyCSS	= require('gulp-minify-css'),
rename = require('gulp-rename'),
connect = require('gulp-connect');
 
//-- Para librerias pasar de node_modules a /lib/{folder}
gulp.task('lib-css', function () {
    gulp.src('node_modules/bootstrap/dist/css/bootstrap.min.css')
        .pipe(gulp.dest('assets/lib/bootstrap/css/'));
});

gulp.task('lib-js', function () {
    gulp.src('node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('assets/lib/jquery/'));
    gulp.src('node_modules/bootstrap/dist/js/bootstrap.min.js')
        .pipe(gulp.dest('assets/lib/bootstrap/js/'));
    gulp.src('node_modules/popper.js/js/popper.min.js')
        .pipe(gulp.dest('assets/lib/popper/js/'));
});

//-- Compilar Stylus a CSS minificado
gulp.task('css', function(){
	gulp.src('dev/stylus/main.styl')
			.pipe(stylus({error: true, compress: false, paths: ['dev/stylus']}))
			.pipe(autoprefixer())
			.pipe(rename('main.css'))
			.pipe(gulp.dest('assets/styles'))
			.pipe(connect.reload())
});
//-- Reload de las vistas modificadas
gulp.task('php', function(){
	gulp.src('assets/*.php')
		.pipe(connect.reload())
});

//-- Vigilar los cambios del archivo de stylus
gulp.task('watch', function(){
	gulp.watch('dev/stylus/*.styl', ['css']);
});

//-- Ejecuta todas las tareas
gulp.task('default', ['lib-css', 'lib-js', 'css','php', 'watch']);
