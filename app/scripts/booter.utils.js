/*
Ideas of what to implement:
- Function to get the image tag of glyphish icons
- the better dialog interface form vs
- the views loading and storing of handlebars
- load js files
- load css files
- pre-load images
- isEmail function
- encrypt/decrypt with php on the other side
*/
var booter = (function () {
	"use strict";
	var myPrivate;

	myPrivate = function (arg) {
		return arg;
	};

	return {

		base_url: '/',

		icon: function(name, color, cssString) {
			var img = new Image();
			color = color || 'gray';
			img.src = booter.base_url + '/images/icons/' + color + '/' + name + '.png';
			img.setAttribute('style', cssString);
			return img;
		},

		innerHTML: function(location, html) {
			var oldContent, newContent;
			oldContent = typeof location === "string" ? document.getElementById(location) : location;
			newContent = oldContent.cloneNode(false);
			newContent.innerHTML = html;
			oldContent.parentNode.replaceChild(newContent, oldContent);
			return newContent;
		}
	};

}());