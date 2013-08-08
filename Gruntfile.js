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
						 compass: {
							 dist: {
								 options: {
									 sassDir: 'Resources/Private/Sass',
									 cssDir: 'Resources/Public/Css',
									 outputStyle: 'expanded',
									 environment: 'production'
								 }
							 }
						 },
						 coffee: {
							 compileBare: {
								 options: {
									 bare: true
								 },
								 files: {
									 'Resources/Public/JavaScript/Edfu.js': 'Resources/Private/CoffeeScript/Edfu.coffee'
								 }
							 }
						 },
						watch: {
							compass: {
								files: ['Resources/Private/Sass/*.scss'],
								tasks: ['compass']
							},
							coffee: {
								files: ['Resources/Private/CoffeeScript/*.coffee'],
								tasks: ['coffee']
							}
						}
					 });

	// Default task.
	grunt.registerTask('default', ['coffee', 'compass']);
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-coffee');
	grunt.loadNpmTasks('grunt-contrib-watch');
};
