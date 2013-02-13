/*global module:false*/
module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
						pkg: '<json:package.json>',
						meta: {
							banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
									'<%= grunt.template.today("yyyy-mm-dd") %>\n' +
									'<%= pkg.homepage ? "* " + pkg.homepage + "\n" : "" %>' +
									'* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
									' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */'
						},
						lint: {
							files: ['grunt.js', 'Resources/Public/JavaScript/*.js']
						},
						concat: {
							dist: {
								src: ['<banner:meta.banner>', '<file_strip_banner:Resources/Public/JavaScript/<%= pkg.name %>.js>'],
								dest: 'Resources/Public/JavaScript/<%= pkg.name %>.js'
							}
						},
						watch:{
							files: ['<config:lint.files>', '<config:coffee.app.src>', '<config.compass.prod.src>', 'Resources/Private/Sass/Sections/*'],
							tasks:'compass coffee lint concat min'
						},
						jshint: {
							options: {
								curly: true,
								eqeqeq: true,
								immed: true,
								latedef: true,
								newcap: true,
								noarg: true,
								sub: true,
								undef: true,
								boss: true,
								eqnull: true,
								browser: true
							},
							globals: {}
						},
						uglify: {},
						compass: {
							prod: {
								src: 'Resources/Private/Sass/',
								dest: 'Resources/Public/Css',
								linecomments: false,
								outputstyle: 'expanded',
								forcecompile: true,
								debugsass: false,
								relativeassets: true
							}
						},
						coffee: {
							app: {
								src: ['Resources/Private/CoffeeScript/*.coffee'],
								dest: 'Resources/Public/JavaScript',
								options: {
									bare: true
								}
							}
						}
					});

	// Default task.
	grunt.registerTask('default', 'coffee compass concat');
	grunt.loadNpmTasks('grunt-compass');
	grunt.loadNpmTasks('grunt-coffee');
};
