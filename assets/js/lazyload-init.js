(function () {
	var llWebp = new LazyLoad({
		elements_selector: ".lazy",
		to_webp: true,
		callback_error: function (element) {
			logEvent("ERROR", element);
			element.src = "https://placehold.it/1600x400?text=Placeholder";
		}
	});
}());