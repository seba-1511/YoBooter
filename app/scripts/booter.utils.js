var booter = (function() {

	var myPrivate;

	myPrivate = function (arg) {
		return arg;
	};

	return {
        
		myPublic: function (arg) {
			return arg;
		}
	};

})();