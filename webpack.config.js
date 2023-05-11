const path = require( 'path' ),
	webpack = require( 'webpack' );

module.exports = {
	context: path.resolve( __dirname, 'src/js' ),
	entry: {
		main: [ './main.js' ],
	},
	output: {
		path: path.resolve( __dirname, 'js' ),
		filename: '[name].bundle.js',
	},
};