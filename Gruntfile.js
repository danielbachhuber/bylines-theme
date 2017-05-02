module.exports = function( grunt ) {

	'use strict';

	grunt.initConfig({

		pkg:    grunt.file.readJSON( 'package.json' ),

		sass: {
			options: {
				sourceComments: false,
				includePaths: ['node_modules/foundation-sites/scss']
			},
			compile: {
				files: {
					'assets/css/style.css' : 'assets/css/scss/style.scss',
				}
			}
		},

		postcss: {
			options: {
				processors: [
					require('autoprefixer')(),
					require('postcss-discard-comments')({removeAll:true}),
				]
			},
			dist: {
				src: 'assets/css/*.css'
			}
		},

	});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-postcss');

	grunt.registerTask( 'default', [ 'styles' ] );
	grunt.registerTask( 'styles', [ 'sass', 'postcss' ] );

	grunt.util.linefeed = '\n';

}
