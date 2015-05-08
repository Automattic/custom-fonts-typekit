module.exports = function( grunt ) {

	require( 'load-grunt-tasks' )( grunt );

	grunt.initConfig({
		options: {
			sourceComments: 'map',
			outputStyle: 'nested'
		},

		mochaTest: {
			test: {
				options: {
					reporter: 'spec'
				},
				src: [ 'tests/js/*' ]
			}
		},

		phpunit: {
			classes: {
				dir: 'tests/php/',
				bootstrap: 'vendor/autoload.php'
			},
			options: {
				colors: true
			}
		}

	});

	grunt.registerTask( 'test', [ 'composer:install', 'mochaTest', 'phpunit' ] );
};

