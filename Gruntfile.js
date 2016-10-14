var js_files = [
   
    ];
    
var less_files = 'assets/less/*.less';

module.exports = function (grunt) {
    require('jit-grunt')(grunt);

   

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            
            less: {
                files: [less_files],
                tasks: ['less']
            },
            
            
            
            js: {
                files: js_files,
                tasks: ['concat']
            }
        },
      
        less: {
            development: {
                files: {
                    "public/css/style.css": less_files
                }
            }
        },
        concat: {
            js: {
                options: {
                    separator: ';\n',
                    sourceMap: true
                },
                files: [
                   {
                        src: js_files,
                        dest: 'public/js/main.js'
                    }
                ]
            },
            
        }
    });

    grunt.registerTask('default', ['less', 'concat']);
};
