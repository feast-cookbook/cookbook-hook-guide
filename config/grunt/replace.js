// https://github.com/outaTiME/grunt-replace
module.exports = {
	// Useful when forking this project into a new project
	packagename: {
		options: {
			patterns: [
				{
					match: /Cookbook Hook Guide/g,
					replacement: '<%= pkg.nameSpaced %>'
				},
				{
					match: /cookbook hook guide/g,
					replacement: '<%= pkg.nameSpacedLow %>'
				},
				{
					match: /cookbook-hook-guide/g,
					replacement: '<%= pkg.nameDashed %>'
				},
				{
					match: /cookbook_hook_guide/g,
					replacement: '<%= pkg.nameUscore %>'
				},
				{
					match: /COOKBOOK_HOOK_GUIDE/g,
					replacement: '<%= pkg.nameUscoreUp %>'
				},
				{
					match: /Cookbook_Hook_Guide/g,
					replacement: '<%= pkg.nameUscoreCam %>'
				},
				{
					match: /CookbookHookGuide/g,
					replacement: '<%= pkg.nameCamel %>'
				},
				{
					match: /cookbookHookGuide/g,
					replacement: '<%= pkg.nameCamelLow %>'
				}
			]
		},
		files: [
			{
				expand: true,
				src: [
					'**',
					'.*',
					'!**/*.{png,ico,jpg,gif}',
					'!node_modules/**',
					'!bower_components/**',
					'!.sass-cache/**',
					'!release/**',
					'!logs/**',
					'!tmp/**',
					'!*.sublime*',
					'!.idea/**',
					'!.DS_Store'
				]
			}
		]
	}
};
