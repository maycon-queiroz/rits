(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/scripts/app"],{

/***/ "./resources/assets/scripts/app.js":
/*!*****************************************!*\
  !*** ./resources/assets/scripts/app.js ***!
  \*****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(bootstrap__WEBPACK_IMPORTED_MODULE_1__);
/**
 * External Dependencies
 */


$(document).ready(function () {
  var falseclick = document.querySelectorAll("a[href]");
  falseclick.forEach(function (item) {
    item.addEventListener("click", function (e) {
      e.preventDefault();
    });
  });
});
var clickbtn = document.querySelectorAll("a.btn");
var menuli = document.querySelectorAll(".nav a");
var lispan = document.querySelectorAll(".footer-ul li span");
var course = document.querySelector(".footer-selection a");
var menuid = document.querySelectorAll("a[data-id]");
var listid = document.querySelectorAll("span[data-id]");
var menuSection = document.querySelector(".menu-section");
var menuToggle = menuSection.querySelector(".menu-toggle");
var show = true;
menuli.forEach(function (li) {
  menuAction(li);
});
menuToggle.addEventListener("click", function () {
  menuSection.classList.toggle("on", show);
  document.body.style.overflow = show ? "hidden" : "initial";
  show = !show;
});
menuid.forEach(function (clickmenu) {
  var selectulid = clickmenu.getAttribute("data-id");
  clickmenu.addEventListener("click", function () {
    listSelected(selectulid);
  });
});

var listSelected = function listSelected(params) {
  listid.forEach(function (lishow) {
    lishow.classList.add("d-none");

    if (lishow.getAttribute("data-id") === params) {
      lishow.classList.remove("d-none");
    }
  });
};

clickbtn.forEach(function (btn) {
  var spanprimary = btn.querySelector("span.span-primary");
  var spansecundary = btn.querySelector("span.span-secundary");
  btn.addEventListener("mouseenter", function () {
    spanprimary.classList.add("d-none");
    spansecundary.classList.remove("d-none");
  });
  btn.addEventListener("mouseleave", function () {
    spansecundary.classList.add("d-none");
    spanprimary.classList.remove("d-none");
  });
});

function menuAction(li) {
  li.addEventListener("click", function (li) {
    var id = li.target.getAttribute("href").replace("#", "");
    var divTo = document.querySelector("#" + id).offsetTop;
    scrollToIdOnClick(divTo);
    document.body.style.overflow = show ? "hidden" : "initial";
    menuSection.classList.toggle("on", show);
  });
}

function scrollToPosition(to) {
  smoothScrollTo(0, to, 3000);
}

function scrollToIdOnClick(event) {
  var to = event + 50;
  scrollToPosition(to);
}

function smoothScrollTo(endX, endY, duration) {
  var startX = window.scrollX || window.pageXOffset;
  var startY = window.scrollY || window.pageYOffset;
  var distanceX = endX - startX;
  var distanceY = endY - startY;
  var startTime = new Date().getTime();
  duration = typeof duration !== "undefined" ? duration : 400; // Easing function

  var easeInOutQuart = function easeInOutQuart(time, from, distance, duration) {
    if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
    return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
  };

  var timer = setInterval(function () {
    var time = new Date().getTime() - startTime;
    var newX = easeInOutQuart(time, startX, distanceX, duration);
    var newY = easeInOutQuart(time, startY, distanceY, duration);

    if (time >= duration) {
      clearInterval(timer);
    }

    window.scroll(newX, newY);
  }, 1000 / 60);
}
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/assets/styles/app.scss":
/*!******************************************!*\
  !*** ./resources/assets/styles/app.scss ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/styles/editor.scss":
/*!*********************************************!*\
  !*** ./resources/assets/styles/editor.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!************************************************************************************************************************!*\
  !*** multi ./resources/assets/scripts/app.js ./resources/assets/styles/app.scss ./resources/assets/styles/editor.scss ***!
  \************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\rits\web\app\themes\sage\resources\assets\scripts\app.js */"./resources/assets/scripts/app.js");
__webpack_require__(/*! C:\xampp\htdocs\rits\web\app\themes\sage\resources\assets\styles\app.scss */"./resources/assets/styles/app.scss");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\rits\web\app\themes\sage\resources\assets\styles\editor.scss */"./resources/assets/styles/editor.scss");


/***/ }),

/***/ "jquery":
/*!**********************************!*\
  !*** external {"this":"jQuery"} ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["jQuery"]; }());

/***/ })

},[[0,"/scripts/manifest","/scripts/vendor"]]]);
//# sourceMappingURL=app.js.map