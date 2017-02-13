# Cookbook Hook Guide

The simplest visual hook guide for the simplest WordPress recipe plugin.

__Contributors:__ [Robert Neu](https://github.com/robneu), [Matt Zak](https://github.com/mzak)  
__Requires:__ WordPress 4.4  
__Tested up to:__ WordPress 4.7.2  
__License:__ [MIT](http://wpsitecare.mit-license.org/)  

## Description ##

![Recipe View](https://cloud.githubusercontent.com/assets/2184093/22871046/4078ecfa-f17b-11e6-96b1-fb5201ed00e4.jpg)

If you're using Cookbook as your WordPress recipe plugin, you may or may not already know that the entire template can be customized using small code snippets. This visual hook guide plugin is a helper that will give you a visual frame of reference for all of the template hooks available in Cookbook.

When you install and activate the plugin, a visual representation of the template hooks will display when viewing any post with an embedded Cookbook recipe. These hook helpers will only display when you are logged-in with an administrator account. Nobody visiting your website will be able to see the hook guide.

If you hover a particular hook, you'll see an example code snippet to remove that callback function from your template. In order to use the snippet, you would paste it into your theme's functions.php file or a template you're using to display the post where your recipes are embedded.

![Hover hook code](https://cloud.githubusercontent.com/assets/2184093/22871073/86f5480e-f17b-11e6-9e43-391ca8e63db7.gif)

We recommend using this plugin on a staging site or local development environment as a way to make it easier for you to customize your Cookbook recipes. That said, it should be safe to use on a live website, but please be careful making template changes without backing things up first.
