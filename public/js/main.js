/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

jQuery(document).ready(function ($) {
	$('.fa-angle-down').click(function () {
		//category
		$('.dropdown-menu').toggle(500);
	});

	$('.sub_menu').click(function () {
		//menu bar
		$('.submenu').toggle(500);
	});

	//filter
	$('#sort-by li').hover(function () {
		$('#sort-by ul ul').css('display', 'block');
	}, function () {
		$('#sort-by ul ul').css('display', 'none');
	});

	//search
	$('#search-frame').click(function () {
		$('#search_form').slideToggle("slow");
	});

	//readmore
	$('.show-more a').on("click", function () {
		var $this = $(this);
		var $more = $('.show-more');
		$more.addClass('hide');
		$this.parent().prev("#fancy-image-view").css({ height: 'auto' });
	});

	//menu bar mobile
	$('.menu_bar').click(function () {
		$('.menu-mobile').toggle(500);
	});

	//active color menu
	$('ul .nav-item').click(function () {
		$('.nav-item').removeClass("active");
		$(this).addClass("active");
	});

	//back to top
	$('#back-to-top').on('click', function (e) {
		e.preventDefault();
		$('html,body').animate({
			scrollTop: 0
		}, 1000);
	});
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

jQuery(document).ready(function ($) {

    var owl = $("#owl-demo-2");
    owl.owlCarousel({
        loop: true,
        nav: true,
        margin: 10,
        animateIn: 'flipInX',
        items: 4,
        responsive: {
            0: {
                items: 1
            },

            992: {
                items: 4
            },

            1000: {
                items: 4
            },

            768: {
                items: 3
            },

            480: {
                items: 2
            },

            320: {
                items: 1
            }
        }
    });

    var owlProduct = $("#owl-demo");
    owlProduct.owlCarousel({
        loop: true,
        nav: true,
        margin: 10,
        animateIn: 'flipInX',
        items: 4,
        responsive: {
            0: {
                items: 1
            },

            992: {
                items: 4
            },

            1000: {
                items: 4
            },

            768: {
                items: 3
            },

            480: {
                items: 2
            },

            320: {
                items: 1
            }
        }
    });

    $('.awe-section-3 .section-selling .thumbnail.item').matchHeight();
});

/***/ }),
/* 3 */
/***/ (function(module, exports) {

$(document).ready(function () {
	$('.title-slide').textillate({

		in: {
			// set the effect name
			effect: 'rollIn',

			// set the delay factor applied to each consecutive character
			delayScale: 1.5,

			// set the delay between each character
			delay: 50,
			sync: true
		},

		out: {
			effect: 'fadeOut',
			sync: true
		},

		loop: true
	});
});

/***/ })
/******/ ]);
