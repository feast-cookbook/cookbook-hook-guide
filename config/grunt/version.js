// https://github.com/kswedberg/grunt-version
module.exports = {
	options: {
		pkg: {
			version: '<%= package.version %>'
		}
	},
	project: {
		src: [
			'package.json',
			'bower.json'
		]
	},
	phpConstant: {
		options: {
			prefix: 'COOKBOOK_HOOK_GUIDE_VERSION\'\,\\s+\''
		},
		src: [
			'cookbook-hook-guide.php'
		]
	},
	style: {
		options: {
			prefix: '\\s+\\*\\s+Version:\\s+'
		},
		src: [
			'cookbook-hook-guide.php',
			'<%= paths.cssSrc %>plugin.scss'
		]
	}
};
