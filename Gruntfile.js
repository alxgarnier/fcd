module.exports = function(grunt) {

  // Configuration de Grunt
  grunt.initConfig({

// --------------------------------------
// Concatenate Configuration
// --------------------------------------

concat: {
	options: {
		separator: ';'
	},
	script: {
		src: [
			'bower_components/foundation/js/foundation/foundation.js',
			'bower_components/foundation/js/foundation/foundation.clearing.js',
			'bower_components/foundation/js/foundation/foundation.reveal.js',
			'js/parallax.js',
			'js/app.js',
			'js/custom.js'
		],
		dest: 'dist/assets/js/script.js'
	},
	modernizr: {
		src: [
			'bower_components/modernizr/modernizr.js'
		],
		dest: 'dist/assets/js/modernizr.js'
	}
},

// --------------------------------------
// Uglify Configuration
// --------------------------------------

uglify: {
	dist: {
		files: {
			'dist/assets/js/jquery.min.js': ['bower_components/jquery/dist/jquery.js'],
			'dist/assets/js/modernizr.min.js': ['dist/assets/js/modernizr.js'],
			'dist/assets/js/script.min.js': ['dist/assets/js/script.js'],
			'dist/assets/js/fastclick.min.js': ['dist/assets/js/fastclick.js']
		}
	}
},

// --------------------------------------
// Autoprefixer Configuration
// --------------------------------------

autoprefixer: {
    options: {
      cascade: false,
      browsers: ['last 2 versions', 'ie 8', 'ie 9', 'Firefox >= 20'] 
    },
    single_file: {
      src: 'dist/assets/css/style.css',
      dest: 'dist/assets/css/style.css'
    },
},

// --------------------------------------
// CSS Minify Configuration
// --------------------------------------

cssmin: {
    target: {
	    files: [{
	      src: 'dist/assets/css/style.css',
	      dest: 'dist/assets/css/style.min.css',
	    }]
  	}
},

  })

  //grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Définition des tâches Grunt
  grunt.registerTask('buildJs',  ['concat', 'uglify']);
  grunt.registerTask('css',  ['autoprefixer', 'cssmin']);
  grunt.registerTask('default', ['buildJs', 'css'])

}