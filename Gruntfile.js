module.exports = function(grunt) {
    grunt.initConfig({
        browserify: {
            joinjs: {
                src: 'resources/assets/js/script.js',
                dest: 'public/js/script.js',
                potions: {
                    debug: true
                }
            }
        },
        uglify: {
            bundle: {
                src: 'public/js/script.js',
                dest: 'public/js/script.js'
            }
        },
        watch: {
            options: {
                livereload: true
            },
            js:{
                files: ['resources/assets/** /*.js'],
                tasks: ['browserify:joinjs']
            },
            css:{
                files: ['resources/assets/** /*.css'],
                tasks: ['concat:css']
            }

        },
        concat: {
            bowerJS: {
                src: [  'resources/assets/js/bower/jquery.min.js',
                        'resources/assets/js/bower/widget.js',
                        'resources/assets/js/bower/sample.js'],
                dest: 'public/js/bower.js'
            },
            css: {
                src: 'resources/assets/css/*.css',
                dest: 'public/css/main.css'
            }
        }
    });

    grunt.loadNpmTasks('grunt-browserify');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.registerTask('default', ['browserify', 'uglify', 'concat']);

    grunt.registerTask('stage', ['browserify:joinjs', 'uglify', 'concat']);
    grunt.registerTask('prod', ['stage']);
    grunt.registerTask('dev', ['stage','watch']);

};