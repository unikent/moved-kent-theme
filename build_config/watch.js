module.exports = {
	js: {
		files: [ 'js/*.js', 'js/**/*.js', '!js/_*.js', 'js/templates/*.hbs' ],
		tasks: [ 'eslint', 'build_js', 'uglify:main' ]
	},
	sass: {
		files: [ 'scss/*.scss', 'scss/**/*.scss' ],
		tasks: [ 'sass', 'postcss' ]
	},
	patterns: {
		files: ['patterns/**/*.html'],
		tasks: ['patterns_build_local']
	}
};
