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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/entry.js":
/*!**********************!*\
  !*** ./src/entry.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_index__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./js/index */ "./src/js/index.js");
/* harmony import */ var _js_index__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_js_index__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scss/style.scss */ "./src/scss/style.scss");
/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_1__);
// import scripts here


// import styles here


/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(/*! ./input */ "./src/js/input.js");

__webpack_require__(/*! ./scroll */ "./src/js/scroll.js");

/***/ }),

/***/ "./src/js/input.js":
/*!*************************!*\
  !*** ./src/js/input.js ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).ready(function () {
    $('input, textarea').focus(function (e) {
        var $self = $(this);
        $self.data('placeholder-tmp', $self.attr('placeholder'));
        $self.attr('placeholder', '');
    });

    $('input, textarea').blur(function (e) {
        var $self = $(this);

        $self.attr('placeholder', $self.data('placeholder-tmp'));
    });
});

/***/ }),

/***/ "./src/js/scroll.js":
/*!**************************!*\
  !*** ./src/js/scroll.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).ready(function () {

    var flag = false;

    $('.lazy-scroll').click(function () {

        if (!flag) {
            var _href = $(this).attr("href");

            $('html, body').animate({
                scrollTop: $(_href).offset().top + -100 + 'px'
            }, 1000);

            return false;
        } else {
            var _href2 = $(this).attr("href");

            $('html, body').animate({
                scrollTop: $(_href2).offset().top + 'px'
            }, 1000);

            return false;
        }

        flag = !flag;
    });

    $('nav').find('a').click(function () {
        var _href = $(this).attr("href");

        $('html, body').animate({
            scrollTop: $(_href).offset().top + -100 + 'px'
        }, 2000);

        return false;
    });

    var offsetToItem = $('.parallax').offset().top - $(window).height() / 1.2;

    $(window).scroll(function () {
        var elems = $('.parallax');
        lettersAnimation(elems);
    });

    function lettersAnimation(elems) {
        var direction = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'top';

        var scrollToTop = $(window).scrollTop();
        var maxScroll = 600;

        $(elems).each(function () {
            var elem = $(this);
            var direction = elem.attr('data-direction') || direction;

            if (scrollToTop >= offsetToItem) {

                var translateY = scrollToTop - offsetToItem;
                var opacity = 1 - translateY / maxScroll * 0.8;

                if (translateY > maxScroll) {
                    translateY = maxScroll;
                }

                if (direction === 'top') {
                    elem.css({
                        transform: 'translateY(-' + translateY * 0.5 + 'px)'
                    });
                } else {
                    elem.css({
                        transform: 'translateY(' + translateY * 0.5 + 'px)'
                    });
                }
            }
        });
    }
});

/***/ }),

/***/ "./src/scss/style.scss":
/*!*****************************!*\
  !*** ./src/scss/style.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ 0:
/*!****************************!*\
  !*** multi ./src/entry.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! ./src/entry.js */"./src/entry.js");


/***/ })

/******/ });
//# sourceMappingURL=bundle.js.map