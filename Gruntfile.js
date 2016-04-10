module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      files: ['Gruntfile.js', 'src/js/main.js'],
      options: {
        globals: {
          jQuery: true
        }
      }
    },
    uglify: {
      min: {
        files: {
          'src/min/js/main.min.js': ['src/js/main.js']
        }
      }
    },
    cssmin: {
      min: {
        files: {
          'src/min/css/main.min.css': ['src/css/main.css']
        }
      }
    },
    imagemin: {
       dist: {
          options: {
            optimizationLevel: 5
          },
          files: [{
             expand: true,
             cwd: 'src/images',
             src: ['**/*.{png,jpg,gif,ico}'],
             dest: 'src/min/images'
          }]
       }
    },
    watch: {
      files: ['<%= jshint.files %>'],
      tasks: ['jshint']
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Register tasks
  grunt.registerTask('default', ['jshint', 'uglify', 'cssmin', 'watch']);

};
