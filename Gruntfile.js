module.exports = function(grunt) {
    grunt.initConfig({

        copy: {
            fonts: {
                expand:true,
                cwd: 'vendor/kent-font/public/fonts/',
                src: '**',
                dest: 'public/assets/fonts/'
            },
            mainjs: {
                src: 'js/main.js',
                dest: 'public/assets/js/main.js'
            },
            kentfont: {
                src: 'vendor/kent-font/public/css/kentfont.css',
                dest: 'public/assets/css/kentfont.css'
            },
        },

        sass: {
            dist : {
                files: {
                    'public/assets/css/main.css' : 'scss/master.scss',
                    'public/assets/css/main_postgraduate.css' : 'scss/master_postgraduate.scss'
                }
            }
        },

        uglify: {
            bootstrap: {
                src:[
                    'vendor/bootstrap/js/dist/util.js',
                    'vendor/bootstrap/js/dist/alert.js',
                    'vendor/bootstrap/js/dist/button.js',
                    //'vendor/bootstrap/js/dist/carousel.js',
                    'vendor/bootstrap/js/dist/collapse.js',
                    'vendor/bootstrap/js/dist/dropdown.js',
                    'vendor/bootstrap/js/dist/modal.js',
                    'vendor/bootstrap/js/dist/scrollspy.js',
                    'vendor/bootstrap/js/dist/tab.js',
                    'vendor/bootstrap/js/dist/tooltip.js',
                    'vendor/bootstrap/js/dist/popover.js'
                ],
                dest: 'js/_bootstrap.js'
            },
            main: {
                files: {
                    'public/assets/js/main.min.js' : 'js/main.js'
                }
            }
        },

        concat: {
            main: {
                src:[
                    'vendor/jquery/dist/jquery.js',
                    'js/_bootstrap.js',
                    'vendor/responsive-bootstrap-toolkit/dist/bootstrap-toolkit.js',
                    'js/components/responsive_util.js',
                    'js/components/collapse_responsive.js',
                    'js/components/global_nav.js',
                    'js/components/sectional_nav.js',
                ],
                dest: 'js/main.js'
            }
        },

        modernizr: {
            build: {
                devFile: 'vendor/modernizr/modernizr.js',
                outputFile: 'public/assets/js/modernizr.min.js',
                files: {
                    'src': [
                        ['public/assets/js/main.js'],
                        ['public/assets/css/main.css']
                    ]
                },
                extensibility: [
                    "html5printshiv",
                    "html5shiv"
                ],
                uglify: true,
                parseFiles: true
            }
        },

        watch: {
            js: {
                files: [ 'js/*.js', 'js/**/*.js','!js/_*.js' ],
                tasks: [ 'jshint', 'concat', 'copy:mainjs', 'uglify', 'modernizr' ]
            },
            sass: {
                files: [ 'scss/*.scss','scss/**/*.scss'  ],
                tasks: [ 'sass', 'postcss', 'cssnano' ]
            }
        },

        jshint: {
            options: {
                jshintrc: '.jshintrc'
            },
            all: [
                'Gruntfile.js',
                'js/*.js',
                'js/**/*.js',
                '!js/_*.js',
                '!js/main.js'
            ]
        },
        postcss: {
            options: {
                map: {
                    inline:false
                },

				processors: [
					require('pixrem')(), // add fallbacks for rem units
					require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
				]
			},
			dist: {
				src: 'public/assets/css/*.css'
			}
		},
		cssnano: {
			options: {
				sourcemap: false
			},
			dist: {
				files: {
					'public/assets/css/main.min.css': 'public/assets/css/main.css'
				}
			}
		},
		hologram: {
			generate: {
				options: {
					config: './hologram_config.yml'
				}
			}
		}
	});

	// Load tasks
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-cssnano');
	grunt.loadNpmTasks('grunt-hologram');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-modernizr');

	// Define tasks
	grunt.registerTask('development', [ 'jshint', 'concat', 'uglify', 'copy', 'sass', 'postcss', 'cssnano', 'modernizr']);
	grunt.registerTask('default', [ 'development', 'watch' ]);
};
