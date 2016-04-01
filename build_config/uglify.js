module.exports = {
	bootstrap: {
		src:[
			"node_modules/bootstrap/js/dist/util.js",
			"node_modules/bootstrap/js/dist/alert.js",
			"node_modules/bootstrap/js/dist/button.js",
			//"node_modules/bootstrap/js/dist/carousel.js",
			"node_modules/bootstrap/js/dist/collapse.js",
			"node_modules/bootstrap/js/dist/dropdown.js",
			"node_modules/bootstrap/js/dist/modal.js",
			"node_modules/bootstrap/js/dist/scrollspy.js",
			"node_modules/bootstrap/js/dist/tab.js",
			"node_modules/bootstrap/js/dist/tooltip.js",
			"node_modules/bootstrap/js/dist/popover.js"
		],
		dest: "js/_bootstrap.js"
	},
	main: {
		files: {
			"public/assets/js/main.min.js" : "js/main.js"
		}
	}
};