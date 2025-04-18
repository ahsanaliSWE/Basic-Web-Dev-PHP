/*
@license

dhtmlxCalendar v.9.1.3 GPL

This software is covered by GPL license.
To use it in non-GPL project, you need obtain Commercial or Enterprise license
Please contact sales@dhtmlx.com. Usage without proper license is prohibited.
(c) XB Software.

*/
if (window.dhx){ window.dhx_legacy = dhx; delete window.dhx; }(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else if(typeof exports === 'object')
		exports["dhx"] = factory();
	else
		root["dhx"] = factory();
})(window, function() {
return /******/ (function(modules) { // webpackBootstrap
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
/******/ 	__webpack_require__.p = "/codebase/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 28);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.getTextLines = exports.getCloneObject = exports.rgbToHex = exports.getStringWidth = exports.getMinArrayNumber = exports.getMaxArrayNumber = exports.isEmptyObj = exports.isType = exports.compare = exports.debounce = exports.downloadFile = exports.isNumeric = exports.range = exports.isId = exports.isDefined = exports.wrapBox = exports.unwrapBox = exports.detectWidgetClick = exports.singleOuterClick = exports.isExistValue = exports.findIndex = exports.naturalSort = exports.copy = exports.extend = exports.extendComponent = exports.uid = void 0;
var html_1 = __webpack_require__(1);
var counter = new Date().valueOf();
function uid() {
    return "u" + counter++;
}
exports.uid = uid;
function bindFunctionality(target, source, key) {
    var srcObj = source[key];
    if (typeof srcObj === "function") {
        target[key] = function () {
            var args = [];
            for (var _i = 0; _i < arguments.length; _i++) {
                args[_i] = arguments[_i];
            }
            return source[key].apply(source, args);
        };
    }
    else {
        Object.defineProperty(target, key, {
            get: function () { return source[key]; },
            set: function (value) { return (source[key] = value); },
            enumerable: true,
            configurable: true,
        });
    }
}
function extendComponent(target, source) {
    if (!source)
        return target;
    for (var _i = 0, _a = Object.keys(source); _i < _a.length; _i++) {
        var key = _a[_i];
        bindFunctionality(target, source, key);
    }
    var proto = Object.getPrototypeOf(source);
    while (proto && proto !== Object.prototype) {
        for (var _b = 0, _c = Object.getOwnPropertyNames(proto); _b < _c.length; _b++) {
            var key = _c[_b];
            if (!target.hasOwnProperty(key)) {
                bindFunctionality(target, source, key);
            }
        }
        proto = Object.getPrototypeOf(proto);
    }
    return target;
}
exports.extendComponent = extendComponent;
function extend(target, source, deep) {
    if (deep === void 0) { deep = true; }
    if (source) {
        for (var key in source) {
            var sobj = source[key];
            var tobj = target[key];
            if (sobj === undefined) {
                delete target[key];
            }
            else if (deep &&
                typeof tobj === "object" &&
                !(tobj instanceof Date) &&
                !(tobj instanceof Array)) {
                extend(tobj, sobj);
            }
            else {
                target[key] = sobj;
            }
        }
    }
    return target;
}
exports.extend = extend;
function copy(source, withoutInner) {
    var result = {};
    for (var key in source) {
        if (!withoutInner || !key.startsWith("$")) {
            result[key] = source[key];
        }
    }
    return result;
}
exports.copy = copy;
function naturalSort(arr) {
    return arr.sort(function (a, b) {
        var nn = typeof a === "string" ? a.localeCompare(b) : a - b;
        return nn;
    });
}
exports.naturalSort = naturalSort;
function findIndex(arr, predicate) {
    var len = arr.length;
    for (var i = 0; i < len; i++) {
        if (predicate(arr[i])) {
            return i;
        }
    }
    return -1;
}
exports.findIndex = findIndex;
function isExistValue(target, value) {
    var str = value.toString();
    var text = target.toString();
    if (str.length > text.length)
        return false;
    return text.toLowerCase().includes(str.toLowerCase());
}
exports.isExistValue = isExistValue;
function singleOuterClick(fn) {
    var click = function (e) {
        if (fn(e)) {
            document.removeEventListener("click", click);
        }
    };
    document.addEventListener("click", click);
}
exports.singleOuterClick = singleOuterClick;
function detectWidgetClick(widgetId, cb) {
    var click = function (e) { return cb((0, html_1.locate)(e, "data-dhx-widget-id") === widgetId); };
    document.addEventListener("click", click);
    return function () { return document.removeEventListener("click", click); };
}
exports.detectWidgetClick = detectWidgetClick;
function unwrapBox(box) {
    if (Array.isArray(box)) {
        return box[0];
    }
    return box;
}
exports.unwrapBox = unwrapBox;
function wrapBox(unboxed) {
    if (Array.isArray(unboxed)) {
        return unboxed;
    }
    return [unboxed];
}
exports.wrapBox = wrapBox;
function isDefined(some) {
    return some !== null && some !== undefined;
}
exports.isDefined = isDefined;
function isId(some) {
    return typeof some === "number" || (typeof some === "string" && some !== "");
}
exports.isId = isId;
function range(from, to) {
    if (from > to) {
        return [];
    }
    var result = [];
    while (from <= to) {
        result.push(from++);
    }
    return result;
}
exports.range = range;
function isNumeric(val) {
    return !isNaN(val - parseFloat(val));
}
exports.isNumeric = isNumeric;
function downloadFile(data, filename, mimeType) {
    if (mimeType === void 0) { mimeType = "text/plain"; }
    var file = new Blob([data], { type: mimeType });
    if (window.navigator.msSaveOrOpenBlob) {
        // IE10+
        window.navigator.msSaveOrOpenBlob(file, filename);
    }
    else {
        var a_1 = document.createElement("a");
        var url_1 = URL.createObjectURL(file);
        a_1.href = url_1;
        a_1.download = filename;
        document.body.appendChild(a_1);
        a_1.click();
        setTimeout(function () {
            document.body.removeChild(a_1);
            window.URL.revokeObjectURL(url_1);
        }, 0);
    }
}
exports.downloadFile = downloadFile;
function debounce(func, wait, immediate) {
    var timeout;
    return function executedFunction() {
        var _this = this;
        var args = [];
        for (var _i = 0; _i < arguments.length; _i++) {
            args[_i] = arguments[_i];
        }
        var later = function () {
            timeout = null;
            if (!immediate) {
                func.apply(_this, args);
            }
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) {
            func.apply(this, args);
        }
    };
}
exports.debounce = debounce;
function compare(obj1, obj2) {
    for (var p in obj1) {
        if (obj1.hasOwnProperty(p) !== obj2.hasOwnProperty(p)) {
            return false;
        }
        switch (typeof obj1[p]) {
            case "object":
                if (!compare(obj1[p], obj2[p])) {
                    return false;
                }
                break;
            case "function":
                if (typeof obj2[p] === "undefined" ||
                    (p !== "compare" && obj1[p].toString() !== obj2[p].toString())) {
                    return false;
                }
                break;
            default:
                if (obj1[p] !== obj2[p]) {
                    return false;
                }
        }
    }
    for (var p in obj2) {
        if (!obj1.hasOwnProperty(p)) {
            return false;
        }
    }
    return true;
}
exports.compare = compare;
var isType = function (value) {
    var regex = /^\[object (\S+?)\]$/;
    var matches = Object.prototype.toString.call(value).match(regex) || [];
    return (matches[1] || "undefined").toLowerCase();
};
exports.isType = isType;
var isEmptyObj = function (obj) {
    for (var key in obj) {
        return false;
    }
    return true;
};
exports.isEmptyObj = isEmptyObj;
var getMaxArrayNumber = function (array) {
    if (!array.length)
        return;
    var maxNumber = -Infinity;
    var index = 0;
    var length = array.length;
    for (index; index < length; index++) {
        if (array[index] > maxNumber)
            maxNumber = array[index];
    }
    return maxNumber;
};
exports.getMaxArrayNumber = getMaxArrayNumber;
var getMinArrayNumber = function (array) {
    if (!array.length)
        return;
    var minNumber = +Infinity;
    var index = 0;
    var length = array.length;
    for (index; index < length; index++) {
        if (array[index] < minNumber)
            minNumber = array[index];
    }
    return minNumber;
};
exports.getMinArrayNumber = getMinArrayNumber;
var getStringWidth = function (value, config) {
    config = __assign({ font: "normal 14px Roboto", lineHeight: 20 }, config);
    var canvas = document.createElement("canvas");
    var ctx = canvas.getContext("2d");
    if (config.font)
        ctx.font = config.font;
    var width = ctx.measureText(value).width;
    if (!(0, html_1.isIE)())
        canvas.remove();
    return width;
};
exports.getStringWidth = getStringWidth;
var rgbToHex = function (color) {
    if (color.substr(0, 1) === "#") {
        return color;
    }
    if (color.substr(0, 3) !== "rgb") {
        return;
    }
    var digits = /(.*?)rgb[a]?\((\d+), *(\d+), *(\d+),* *([\d+.]*)\)/.exec(color);
    var red = parseInt(digits[2], 10)
        .toString(16)
        .padStart(2, "0");
    var green = parseInt(digits[3], 10)
        .toString(16)
        .padStart(2, "0");
    var blue = parseInt(digits[4], 10)
        .toString(16)
        .padStart(2, "0");
    return "#".concat(red).concat(green).concat(blue);
};
exports.rgbToHex = rgbToHex;
function getCloneObject(obj) {
    if (!obj) {
        return obj;
    }
    var clone = Array.isArray(obj) ? [] : {};
    for (var key in obj) {
        var value = obj[key];
        if (value instanceof Date) {
            clone[key] = new Date(value);
            continue;
        }
        clone[key] = typeof value === "object" ? getCloneObject(value) : value;
    }
    return clone;
}
exports.getCloneObject = getCloneObject;
var getTextWidth = function (_a) {
    var text = _a.text, ctx = _a.ctx;
    var metrics = ctx.measureText(text);
    var width = metrics.width;
    return width;
};
var splitLongWord = function (_a) {
    var ctx = _a.ctx, word = _a.word, maxWidth = _a.maxWidth;
    var result = [];
    var part = "";
    for (var i = 0; i < word.length; i++) {
        part += word[i];
        if (getTextWidth({ text: part, ctx: ctx }) > maxWidth) {
            result.push(part.slice(0, -1));
            part = word[i];
        }
    }
    if (part)
        result.push(part);
    return result;
};
function getTextLines(_a) {
    var ctx = _a.ctx, text = _a.text, maxWidth = _a.maxWidth;
    var words = text.split(" ");
    var line = "";
    var testLine = "";
    var lineArray = [];
    for (var n = 0; n < words.length; n++) {
        var word = words[n];
        if (getTextWidth({ text: word, ctx: ctx }) > maxWidth) {
            var splitWords = splitLongWord({ word: word, ctx: ctx, maxWidth: maxWidth });
            for (var _i = 0, splitWords_1 = splitWords; _i < splitWords_1.length; _i++) {
                var splitWord = splitWords_1[_i];
                testLine += "".concat(splitWord, " ");
                var testWidth = getTextWidth({ text: testLine.trimEnd(), ctx: ctx });
                if (testWidth > maxWidth && n > 0) {
                    lineArray.push(line.trimEnd());
                    line = "".concat(splitWord, " ");
                    testLine = "".concat(splitWord, " ");
                }
                else {
                    line += "".concat(splitWord, " ");
                }
            }
        }
        else {
            testLine += "".concat(word, " ");
            var testWidth = getTextWidth({ text: testLine.trimEnd(), ctx: ctx });
            if (testWidth > maxWidth && n > 0) {
                lineArray.push(line.trimEnd());
                line = "".concat(word, " ");
                testLine = "".concat(word, " ");
            }
            else {
                line += "".concat(word, " ");
            }
        }
        if (n === words.length - 1) {
            lineArray.push(line.trimEnd());
        }
    }
    return lineArray;
}
exports.getTextLines = getTextLines;


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.getNodeOffset = exports.getElementFromPoint = exports.getPageLinksCss = exports.getPageInlineCss = exports.getLabelStyle = exports.getPageCss = exports.fitPosition = exports.calculatePosition = exports.getRealPosition = exports.isFirefox = exports.isSafari = exports.isIE = exports.getScrollbarHeight = exports.getScrollbarWidth = exports.getBox = exports.locateNodeByClassName = exports.locate = exports.locateNode = exports.eventHandler = exports.toNode = void 0;
function toNode(node) {
    var _a;
    return typeof node === "string"
        ? document.getElementById(node) || document.querySelector("[data-cell-id=".concat(node, "]")) || document.querySelector(node) || ((_a = document.querySelector("[data-dhx-root-id=".concat(node, "]"))) === null || _a === void 0 ? void 0 : _a.parentElement) || document.body
        : node || document.body;
}
exports.toNode = toNode;
function eventHandler(prepare, hash, afterCall) {
    var keys = Object.keys(hash);
    return function (ev) {
        var data = prepare(ev);
        if (data !== undefined) {
            var node = ev.target;
            outer_block: while (node) {
                var cssstring = node.getAttribute ? node.getAttribute("class") || "" : "";
                if (cssstring.length) {
                    var css = cssstring.split(" ");
                    for (var j = 0; j < keys.length; j++) {
                        if (css.includes(keys[j])) {
                            if (hash[keys[j]](ev, data) === false || ev.cancelBubble)
                                return false;
                            else
                                break outer_block;
                        }
                    }
                }
                node = node.parentNode;
            }
        }
        if (typeof afterCall === "function")
            afterCall(ev);
        return true;
    };
}
exports.eventHandler = eventHandler;
function locateNode(target, attr, dir) {
    if (attr === void 0) { attr = "data-dhx-id"; }
    if (dir === void 0) { dir = "target"; }
    if (target instanceof Event) {
        target = target[dir];
    }
    while (target) {
        if (target.getAttribute && target.getAttribute(attr)) {
            return target;
        }
        target = target.parentNode;
    }
}
exports.locateNode = locateNode;
function locate(target, attr) {
    if (attr === void 0) { attr = "data-dhx-id"; }
    var node = locateNode(target, attr);
    return node ? node.getAttribute(attr) : "";
}
exports.locate = locate;
function locateNodeByClassName(target, className) {
    if (target instanceof Event) {
        target = target.target;
    }
    while (target) {
        if (className) {
            if (target.classList && target.classList.contains(className)) {
                return target;
            }
        }
        else if (target.getAttribute && target.getAttribute("data-dhx-id")) {
            return target;
        }
        target = target.parentNode;
    }
}
exports.locateNodeByClassName = locateNodeByClassName;
function getBox(elem) {
    var box = elem.getBoundingClientRect();
    var body = document.body;
    var scrollTop = window.pageYOffset || body.scrollTop;
    var scrollLeft = window.pageXOffset || body.scrollLeft;
    var top = box.top + scrollTop;
    var left = box.left + scrollLeft;
    var right = body.offsetWidth - box.right;
    var bottom = body.offsetHeight - box.bottom;
    var width = box.right - box.left;
    var height = box.bottom - box.top;
    return { top: top, left: left, right: right, bottom: bottom, width: width, height: height };
}
exports.getBox = getBox;
var scrollWidth = -1;
function getScrollbarWidth() {
    if (scrollWidth > -1) {
        return scrollWidth;
    }
    var scrollDiv = document.createElement("div");
    document.body.appendChild(scrollDiv);
    scrollDiv.style.cssText = "position: absolute;left: -99999px;overflow:scroll;width: 100px;height: 100px;";
    scrollWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
    document.body.removeChild(scrollDiv);
    return scrollWidth;
}
exports.getScrollbarWidth = getScrollbarWidth;
var scrollHeight = -1;
function getScrollbarHeight() {
    if (scrollHeight > -1) {
        return scrollHeight;
    }
    var scrollDiv = document.createElement("div");
    document.body.appendChild(scrollDiv);
    scrollDiv.style.cssText = "position: absolute;left: -99999px;overflow:scroll;width: 100px;height: 100px;";
    scrollHeight = scrollDiv.offsetHeight - scrollDiv.clientHeight;
    document.body.removeChild(scrollDiv);
    return scrollHeight;
}
exports.getScrollbarHeight = getScrollbarHeight;
function isIE() {
    var ua = window.navigator.userAgent;
    return ua.includes("MSIE ") || ua.includes("Trident/");
}
exports.isIE = isIE;
function isSafari() {
    var check = function (str) { return str.test(window.navigator.userAgent); };
    var chrome = check(/Chrome/);
    var firefox = check(/Firefox/);
    return !chrome && !firefox && check(/Safari/);
}
exports.isSafari = isSafari;
function isFirefox() {
    var check = function (str) { return str.test(window.navigator.userAgent); };
    var chrome = check(/Chrome/);
    var safari = check(/Safari/);
    return !chrome && !safari && check(/Firefox/);
}
exports.isFirefox = isFirefox;
function getRealPosition(node) {
    var rects = node.getBoundingClientRect();
    return {
        left: rects.left + window.pageXOffset,
        right: rects.right + window.pageXOffset,
        top: rects.top + window.pageYOffset,
        bottom: rects.bottom + window.pageYOffset,
    };
}
exports.getRealPosition = getRealPosition;
function getWindowBorders() {
    return {
        rightBorder: window.pageXOffset + window.innerWidth,
        bottomBorder: window.pageYOffset + window.innerHeight,
    };
}
function horizontalCentering(pos, width, rightBorder) {
    var nodeWidth = pos.right - pos.left;
    var diff = (width - nodeWidth) / 2;
    var left = pos.left - diff;
    var right = pos.right + diff;
    if (left >= 0 && right <= rightBorder) {
        return left;
    }
    if (left < 0) {
        return 0;
    }
    return rightBorder - width;
}
function verticalCentering(pos, height, bottomBorder) {
    var nodeHeight = pos.bottom - pos.top;
    var diff = (height - nodeHeight) / 2;
    var top = pos.top - diff;
    var bottom = pos.bottom + diff;
    if (top >= 0 && bottom <= bottomBorder) {
        return top;
    }
    if (top < 0) {
        return 0;
    }
    return bottomBorder - height;
}
function placeBottomOrTop(pos, config) {
    var _a = getWindowBorders(), rightBorder = _a.rightBorder, bottomBorder = _a.bottomBorder;
    var left;
    var top;
    var bottomDiff = bottomBorder - pos.bottom - config.height;
    var topDiff = pos.top - config.height;
    if (config.mode === "bottom") {
        if (bottomDiff >= 0) {
            top = pos.bottom;
        }
        else if (topDiff >= 0) {
            top = topDiff;
        }
    }
    else {
        if (topDiff >= 0) {
            top = topDiff;
        }
        else if (bottomDiff >= 0) {
            top = pos.bottom;
        }
    }
    if (bottomDiff < 0 && topDiff < 0) {
        if (config.auto) {
            // eslint-disable-next-line @typescript-eslint/no-use-before-define
            return placeRightOrLeft(pos, __assign(__assign({}, config), { mode: "right", auto: false }));
        }
        top = bottomDiff > topDiff ? pos.bottom : topDiff;
    }
    if (config.centering) {
        left = horizontalCentering(pos, config.width, rightBorder);
    }
    else {
        var leftDiff = rightBorder - pos.left - config.width;
        var rightDiff = pos.right - config.width;
        if (leftDiff >= 0) {
            left = pos.left;
        }
        else if (rightDiff >= 0) {
            left = rightDiff;
        }
        else {
            left = rightDiff > leftDiff ? pos.left : rightDiff;
        }
    }
    return { left: left, top: top };
}
function placeRightOrLeft(pos, config) {
    var _a = getWindowBorders(), rightBorder = _a.rightBorder, bottomBorder = _a.bottomBorder;
    var left;
    var top;
    var rightDiff = rightBorder - pos.right - config.width;
    var leftDiff = pos.left - config.width;
    if (config.mode === "right") {
        if (rightDiff >= 0) {
            left = pos.right;
        }
        else if (leftDiff >= 0) {
            left = leftDiff;
        }
    }
    else {
        if (leftDiff >= 0) {
            left = leftDiff;
        }
        else if (rightDiff >= 0) {
            left = pos.right;
        }
    }
    if (leftDiff < 0 && rightDiff < 0) {
        if (config.auto) {
            return placeBottomOrTop(pos, __assign(__assign({}, config), { mode: "bottom", auto: false }));
        }
        left = leftDiff > rightDiff ? leftDiff : pos.right;
    }
    if (config.centering) {
        top = verticalCentering(pos, config.height, bottomBorder);
    }
    else {
        var bottomDiff = pos.bottom - config.height;
        var topDiff = bottomBorder - pos.top - config.height;
        if (topDiff >= 0) {
            top = pos.top;
        }
        else if (bottomDiff > 0) {
            top = bottomDiff;
        }
        else {
            top = bottomDiff > topDiff ? bottomDiff : pos.top;
        }
    }
    return { left: left, top: top };
}
function calculatePosition(pos, config) {
    var _a = config.mode === "bottom" || config.mode === "top"
        ? placeBottomOrTop(pos, config)
        : placeRightOrLeft(pos, config), left = _a.left, top = _a.top;
    return {
        left: Math.round(left) + "px",
        top: Math.round(top) + "px",
        minWidth: Math.round(config.width) + "px",
        position: "absolute",
    };
}
exports.calculatePosition = calculatePosition;
function fitPosition(node, config) {
    return calculatePosition(getRealPosition(node), config);
}
exports.fitPosition = fitPosition;
function getPageCss() {
    var css = [];
    for (var sheeti = 0; sheeti < document.styleSheets.length; sheeti++) {
        var sheet = document.styleSheets[sheeti];
        var rules = "cssRules" in sheet ? sheet.cssRules : sheet.rules;
        for (var rulei = 0; rulei < rules.length; rulei++) {
            var rule = rules[rulei];
            if ("cssText" in rule) {
                css.push(rule.cssText);
            }
            else {
                css.push("".concat(rule.selectorText, " {\n").concat(rule.style.cssText, "\n}\n"));
            }
        }
    }
    return css.join("\n");
}
exports.getPageCss = getPageCss;
function getLabelStyle(config) {
    var helpMessage = config.helpMessage, type = config.type, labelWidth = config.labelWidth, label = config.label;
    var isZero = labelWidth && labelWidth.toString().startsWith("0");
    var required = type !== "text" && config.required;
    if (!helpMessage && !required && (!label || (label && isZero)) && (!labelWidth || isZero)) {
        return false;
    }
    return {
        style: (label || labelWidth) && !isZero && { width: labelWidth, "max-width": "100%" },
        label: label && isZero ? null : label,
    };
}
exports.getLabelStyle = getLabelStyle;
var checkCrossLink = function (sheet) { return sheet.href && !sheet.href.startsWith(window.location.origin); };
function getPageInlineCss() {
    var css = [];
    for (var i = 0; i < document.styleSheets.length; i++) {
        var sheet = document.styleSheets[i];
        if (!checkCrossLink(sheet)) {
            var rules = "cssRules" in sheet && sheet.cssRules.length
                ? sheet.cssRules
                : sheet.rules;
            for (var j = 0; j < rules.length; j++) {
                var rule = rules[j];
                if ("cssText" in rule) {
                    css.push(rule.cssText);
                }
                else {
                    css.push("".concat(rule.selectorText, " {\n").concat(rule.style.cssText, "\n}\n"));
                }
            }
        }
    }
    return css.join("\n");
}
exports.getPageInlineCss = getPageInlineCss;
function getPageLinksCss(exportStyles) {
    var css = [];
    if (exportStyles) {
        exportStyles.forEach(function (link) { return css.push("<link href=\"".concat(link, "\" rel=\"stylesheet\"/>")); });
    }
    else {
        for (var i = 0; i < document.styleSheets.length; i++) {
            var sheet = document.styleSheets[i];
            if (checkCrossLink(sheet)) {
                css.push("<link href=\"".concat(sheet.href, "\" rel=\"stylesheet\"/>"));
            }
        }
    }
    return css.join("\n");
}
exports.getPageLinksCss = getPageLinksCss;
function getElementFromPoint(e) {
    var _a, _b;
    var clientX = e.targetTouches
        ? ((_a = e.targetTouches[0]) === null || _a === void 0 ? void 0 : _a.clientX) || 0
        : e.clientX;
    var clientY = e.targetTouches
        ? ((_b = e.targetTouches[0]) === null || _b === void 0 ? void 0 : _b.clientY) || 0
        : e.clientY;
    var el = document.elementFromPoint(clientX, clientY);
    return (el === null || el === void 0 ? void 0 : el.shadowRoot) ? el.shadowRoot.elementFromPoint(clientX, clientY) : el;
}
exports.getElementFromPoint = getElementFromPoint;
function getNodeOffset(node1, node2) {
    var rect1 = node1.getBoundingClientRect();
    var rect2 = node2.getBoundingClientRect();
    return { left: rect1.left - rect2.left, top: rect1.top - rect2.top };
}
exports.getNodeOffset = getNodeOffset;


/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(Promise) {
Object.defineProperty(exports, "__esModule", { value: true });
exports.getViewHeight = exports.setTheme = exports.awaitRedraw = exports.resizeHandler = exports.resizer = exports.disableHelp = exports.KEYED_LIST = exports.inject = exports.create = exports.view = exports.sv = exports.el = void 0;
var dom = __webpack_require__(47);
var html_1 = __webpack_require__(1);
exports.el = dom.defineElement;
exports.sv = dom.defineSvgElement;
exports.view = dom.defineView;
exports.create = dom.createView;
exports.inject = dom.injectView;
exports.KEYED_LIST = dom.KEYED_LIST;
function disableHelp() {
    dom.DEVMODE.mutations = false;
    dom.DEVMODE.warnings = false;
    dom.DEVMODE.verbose = false;
    dom.DEVMODE.UNKEYED_INPUT = false;
}
exports.disableHelp = disableHelp;
function resizer(handler) {
    var resize = window.ResizeObserver;
    var activeHandler = function (node) {
        var height = node.el.offsetHeight;
        var width = node.el.offsetWidth;
        handler(width, height);
    };
    if (resize) {
        return (0, exports.el)("div.dhx-resize-observer", {
            _hooks: {
                didInsert: function (node) {
                    new resize(function () { return activeHandler(node); }).observe(node.el);
                },
            },
        });
    }
    return (0, exports.el)("iframe.dhx-resize-observer", {
        _hooks: {
            didInsert: function (node) {
                node.el.contentWindow.onresize = function () { return activeHandler(node); };
                activeHandler(node);
            },
        },
    });
}
exports.resizer = resizer;
function resizeHandler(container, handler) {
    return (0, exports.create)({
        render: function () {
            return resizer(handler);
        },
    }).mount(container);
}
exports.resizeHandler = resizeHandler;
function awaitRedraw() {
    return new Promise(function (res) {
        requestAnimationFrame(function () {
            res();
        });
    });
}
exports.awaitRedraw = awaitRedraw;
function setTheme(theme, container) {
    if (theme === void 0) { theme = "light"; }
    var dhxAttr = "data-dhx-theme";
    if (!container) {
        var elements = document.querySelectorAll("[".concat(dhxAttr, "]"));
        elements.forEach(function (el) { return el.removeAttribute(dhxAttr); });
    }
    container = container || document.documentElement;
    (0, html_1.toNode)(container).setAttribute(dhxAttr, theme);
}
exports.setTheme = setTheme;
function getViewHeight(view, width) {
    var vm = (0, exports.create)({
        render: function () {
            return (0, exports.el)("div", {
                style: {
                    position: "absolute",
                    visibility: "hidden",
                    width: width,
                },
            }, [view]);
        },
    });
    vm.mount(document.body);
    var height = vm.node.el.offsetHeight;
    vm.unmount();
    return height;
}
exports.getViewHeight = getViewHeight;

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(6)))

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.splitCsv = exports.throwMoveWarning = exports.isOnlyPermanentFilters = exports.hasJsonOrArrayStructure = exports.isTreeCollection = exports.copyWithoutInner = exports.toDataDriver = exports.toProxy = exports.dhxError = exports.dhxWarning = exports.isDebug = exports.findByConf = exports.naturalCompare = exports.isEqualObj = void 0;
var core_1 = __webpack_require__(0);
var dataproxy_1 = __webpack_require__(8);
var drivers_1 = __webpack_require__(24);
function isEqualObj(a, b) {
    for (var key in a) {
        if (a[key] !== b[key] || Array.isArray(a[key])) {
            return false;
        }
    }
    return true;
}
exports.isEqualObj = isEqualObj;
function naturalCompare(a, b) {
    if (isNaN(a) || isNaN(b)) {
        var ax_1 = [];
        var bx_1 = [];
        a.replace(/(\d+)|(\D+)/g, function (_, $1, $2) {
            ax_1.push([$1 || Infinity, $2 || ""]);
        });
        b.replace(/(\d+)|(\D+)/g, function (_, $1, $2) {
            bx_1.push([$1 || Infinity, $2 || ""]);
        });
        while (ax_1.length && bx_1.length) {
            var an = ax_1.shift();
            var bn = bx_1.shift();
            var nn = an[0] - bn[0] || an[1].localeCompare(bn[1]);
            if (nn) {
                return nn;
            }
        }
        return ax_1.length - bx_1.length;
    }
    return a - b;
}
exports.naturalCompare = naturalCompare;
function findByConf(item, conf, index, array) {
    if (typeof conf === "function") {
        if (conf.call(this, item, index, array)) {
            return item;
        }
    }
    else if (conf.by && conf.match) {
        if (item[conf.by] === conf.match) {
            return item;
        }
    }
}
exports.findByConf = findByConf;
function isDebug() {
    var dhx = window.dhx;
    if (typeof dhx !== "undefined") {
        return typeof dhx.debug !== "undefined" && dhx.debug;
    }
    // return typeof DHX_DEBUG_MODE !== "undefined" && DHX_DEBUG_MODE;
}
exports.isDebug = isDebug;
function dhxWarning(msg) {
    // tslint:disable-next-line:no-console
    console.warn(msg);
}
exports.dhxWarning = dhxWarning;
function dhxError(msg) {
    throw new Error(msg);
}
exports.dhxError = dhxError;
function toProxy(proxy) {
    var type = typeof proxy;
    if (type === "string") {
        return new dataproxy_1.DataProxy(proxy);
    }
    else if (type === "object") {
        return proxy;
    }
}
exports.toProxy = toProxy;
function toDataDriver(driver) {
    if (typeof driver === "string") {
        var dhx = window.dhx;
        var drivers = (dhx && dhx.dataDrivers) || drivers_1.dataDrivers;
        if (drivers[driver]) {
            return new drivers[driver]();
        }
        else {
            // tslint:disable-next-line:no-console
            console.warn("Incorrect data driver type:", driver);
            // tslint:disable-next-line:no-console
            console.warn("Available types:", JSON.stringify(Object.keys(drivers)));
        }
    }
    else if (typeof driver === "object") {
        return driver;
    }
}
exports.toDataDriver = toDataDriver;
function copyWithoutInner(obj, forbidden) {
    var result = {};
    for (var key in obj) {
        if (!key.startsWith("$") && (!forbidden || !forbidden[key])) {
            result[key] = obj[key];
        }
    }
    return result;
}
exports.copyWithoutInner = copyWithoutInner;
function isTreeCollection(obj) {
    // eslint-disable-next-line @typescript-eslint/unbound-method
    return Boolean(obj.getRoot);
}
exports.isTreeCollection = isTreeCollection;
function hasJsonOrArrayStructure(str) {
    if (typeof str === "object") {
        return true;
    }
    if (typeof str !== "string") {
        return false;
    }
    try {
        var result = JSON.parse(str);
        return Object.prototype.toString.call(result) === "[object Object]" || Array.isArray(result);
    }
    catch (err) {
        return false;
    }
}
exports.hasJsonOrArrayStructure = hasJsonOrArrayStructure;
function isOnlyPermanentFilters(filters) {
    if (!filters || (0, core_1.isEmptyObj)(filters))
        return false;
    return Object.keys(filters).every(function (key) {
        var _a;
        return (_a = filters[key].config) === null || _a === void 0 ? void 0 : _a.permanent;
    });
}
exports.isOnlyPermanentFilters = isOnlyPermanentFilters;
function throwMoveWarning(id, exists) {
    if (exists === void 0) { exists = true; }
    dhxWarning("item with ID ".concat(id, " not ").concat(exists ? "moved" : "found"));
    return null;
}
exports.throwMoveWarning = throwMoveWarning;
function splitCsv(csv, delimiter) {
    return csv.trim().split(new RegExp("".concat(delimiter, "(?=(?:[^\"]*\"[^\"]*\")*[^\"]*$)")));
}
exports.splitCsv = splitCsv;


/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.EventsMixin = exports.EventSystem = void 0;
var EventSystem = /** @class */ (function () {
    function EventSystem(context) {
        this.events = {};
        this.context = context || this;
    }
    EventSystem.prototype.on = function (name, callback, context) {
        var event = name.toLowerCase();
        this.events[event] = this.events[event] || [];
        this.events[event].push({ callback: callback, context: context || this.context });
    };
    EventSystem.prototype.detach = function (name, context) {
        var event = name.toLowerCase();
        var eStack = this.events[event];
        if (context && eStack && eStack.length) {
            for (var i = eStack.length - 1; i >= 0; i--) {
                if (eStack[i].context === context) {
                    eStack.splice(i, 1);
                }
            }
        }
        else {
            this.events[event] = [];
        }
    };
    EventSystem.prototype.fire = function (name, args) {
        if (typeof args === "undefined") {
            args = [];
        }
        var event = name.toLowerCase();
        if (this.events[event]) {
            var res = this.events[event].map(function (e) { return e.callback.apply(e.context, args); });
            return !res.includes(false);
        }
        return true;
    };
    EventSystem.prototype.clear = function () {
        this.events = {};
    };
    return EventSystem;
}());
exports.EventSystem = EventSystem;
function EventsMixin(obj) {
    obj = obj || {};
    var eventSystem = new EventSystem(obj);
    obj.detachEvent = eventSystem.detach.bind(eventSystem);
    obj.attachEvent = eventSystem.on.bind(eventSystem);
    obj.callEvent = eventSystem.fire.bind(eventSystem);
}
exports.EventsMixin = EventsMixin;


/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.DataDriver = exports.DragEvents = exports.DataEvents = exports.TreeFilterType = void 0;
var TreeFilterType;
(function (TreeFilterType) {
    TreeFilterType["all"] = "all";
    TreeFilterType["level"] = "level";
    TreeFilterType["leafs"] = "leafs";
})(TreeFilterType || (exports.TreeFilterType = TreeFilterType = {}));
var DataEvents;
(function (DataEvents) {
    DataEvents["afterAdd"] = "afteradd";
    DataEvents["beforeAdd"] = "beforeadd";
    DataEvents["removeAll"] = "removeall";
    DataEvents["beforeRemove"] = "beforeremove";
    DataEvents["afterRemove"] = "afterremove";
    DataEvents["change"] = "change";
    DataEvents["filter"] = "filter";
    DataEvents["dataRequest"] = "dataRequest";
    DataEvents["load"] = "load";
    DataEvents["loadError"] = "loaderror";
    DataEvents["beforeLazyLoad"] = "beforelazyload";
    DataEvents["afterLazyLoad"] = "afterlazyload";
    DataEvents["beforeItemLoad"] = "beforeItemLoad";
    DataEvents["afterItemLoad"] = "afterItemLoad";
    DataEvents["beforeGroup"] = "beforeGroup";
    DataEvents["afterGroup"] = "afterGroup";
    DataEvents["beforeUnGroup"] = "beforeUnGroup";
    DataEvents["afterUnGroup"] = "afterUnGroup";
})(DataEvents || (exports.DataEvents = DataEvents = {}));
var DragEvents;
(function (DragEvents) {
    DragEvents["beforeDrag"] = "beforeDrag";
    DragEvents["dragStart"] = "dragStart";
    DragEvents["dragOut"] = "dragOut";
    DragEvents["dragIn"] = "dragIn";
    DragEvents["canDrop"] = "canDrop";
    DragEvents["cancelDrop"] = "cancelDrop";
    DragEvents["beforeDrop"] = "beforeDrop";
    DragEvents["afterDrop"] = "afterDrop";
    DragEvents["afterDrag"] = "afterDrag";
})(DragEvents || (exports.DragEvents = DragEvents = {}));
var DataDriver;
(function (DataDriver) {
    DataDriver["json"] = "json";
    DataDriver["csv"] = "csv";
    DataDriver["xml"] = "xml";
})(DataDriver || (exports.DataDriver = DataDriver = {}));


/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global, setImmediate) {(function () {
  global = typeof window !== 'undefined' ? window : this

  var queueId = 1
  var queue = {}
  var isRunningTask = false

  if (!global.setImmediate)
    global.addEventListener('message', function (e) {
      if (e.source == global){
        if (isRunningTask)
          nextTick(queue[e.data])
        else {
          isRunningTask = true
          try {
            queue[e.data]()
          } catch (e) {}

          delete queue[e.data]
          isRunningTask = false
        }
      }
    })

  function nextTick(fn) {
    if (global.setImmediate) setImmediate(fn)
    // if inside of web worker
    else if (global.importScripts) setTimeout(fn)
    else {
      queueId++
      queue[queueId] = fn
      global.postMessage(queueId, '*')
    }
  }

  Deferred.resolve = function (value) {
    if (!(this._d == 1))
      throw TypeError()

    if (value instanceof Deferred)
      return value

    return new Deferred(function (resolve) {
        resolve(value)
    })
  }

  Deferred.reject = function (value) {
    if (!(this._d == 1))
      throw TypeError()

    return new Deferred(function (resolve, reject) {
        reject(value)
    })
  }

  Deferred.all = function (arr) {
    if (!(this._d == 1))
      throw TypeError()

    if (!(arr instanceof Array))
      return Deferred.reject(TypeError())

    var d = new Deferred()

    function done(e, v) {
      if (v)
        return d.resolve(v)

      if (e)
        return d.reject(e)

      var unresolved = arr.reduce(function (cnt, v) {
        if (v && v.then)
          return cnt + 1
        return cnt
      }, 0)

      if(unresolved == 0)
        d.resolve(arr)

      arr.map(function (v, i) {
        if (v && v.then)
          v.then(function (r) {
            arr[i] = r
            done()
            return r
          }, done)
      })
    }

    done()

    return d
  }

  Deferred.race = function (arr) {
    if (!(this._d == 1))
      throw TypeError()

    if (!(arr instanceof Array))
      return Deferred.reject(TypeError())

    if (arr.length == 0)
      return new Deferred()

    var d = new Deferred()

    function done(e, v) {
      if (v)
        return d.resolve(v)

      if (e)
        return d.reject(e)

      var unresolved = arr.reduce(function (cnt, v) {
        if (v && v.then)
          return cnt + 1
        return cnt
      }, 0)

      if(unresolved == 0)
        d.resolve(arr)

      arr.map(function (v, i) {
        if (v && v.then)
          v.then(function (r) {
            done(null, r)
          }, done)
      })
    }

    done()

    return d
  }

  Deferred._d = 1


  /**
   * @constructor
   */
  function Deferred(resolver) {
    'use strict'
    if (typeof resolver != 'function' && resolver != undefined)
      throw TypeError()

    if (typeof this != 'object' || (this && this.then))
      throw TypeError()

    // states
    // 0: pending
    // 1: resolving
    // 2: rejecting
    // 3: resolved
    // 4: rejected
    var self = this,
      state = 0,
      val = 0,
      next = [],
      fn, er;

    self['promise'] = self

    self['resolve'] = function (v) {
      fn = self.fn
      er = self.er
      if (!state) {
        val = v
        state = 1

        nextTick(fire)
      }
      return self
    }

    self['reject'] = function (v) {
      fn = self.fn
      er = self.er
      if (!state) {
        val = v
        state = 2

        nextTick(fire)

      }
      return self
    }

    self['_d'] = 1

    self['then'] = function (_fn, _er) {
      if (!(this._d == 1))
        throw TypeError()

      var d = new Deferred()

      d.fn = _fn
      d.er = _er
      if (state == 3) {
        d.resolve(val)
      }
      else if (state == 4) {
        d.reject(val)
      }
      else {
        next.push(d)
      }

      return d
    }

    self['catch'] = function (_er) {
      return self['then'](null, _er)
    }

    var finish = function (type) {
      state = type || 4
      next.map(function (p) {
        state == 3 && p.resolve(val) || p.reject(val)
      })
    }

    try {
      if (typeof resolver == 'function')
        resolver(self['resolve'], self['reject'])
    } catch (e) {
      self['reject'](e)
    }

    return self

    // ref : reference to 'then' function
    // cb, ec, cn : successCallback, failureCallback, notThennableCallback
    function thennable (ref, cb, ec, cn) {
      // Promises can be rejected with other promises, which should pass through
      if (state == 2) {
        return cn()
      }
      if ((typeof val == 'object' || typeof val == 'function') && typeof ref == 'function') {
        try {

          // cnt protects against abuse calls from spec checker
          var cnt = 0
          ref.call(val, function (v) {
            if (cnt++) return
            val = v
            cb()
          }, function (v) {
            if (cnt++) return
            val = v
            ec()
          })
        } catch (e) {
          val = e
          ec()
        }
      } else {
        cn()
      }
    };

    function fire() {

      // check if it's a thenable
      var ref;
      try {
        ref = val && val.then
      } catch (e) {
        val = e
        state = 2
        return fire()
      }

      thennable(ref, function () {
        state = 1
        fire()
      }, function () {
        state = 2
        fire()
      }, function () {
        try {
          if (state == 1 && typeof fn == 'function') {
            val = fn(val)
          }

          else if (state == 2 && typeof er == 'function') {
            val = er(val)
            state = 1
          }
        } catch (e) {
          val = e
          return finish()
        }

        if (val == self) {
          val = TypeError()
          finish()
        } else thennable(ref, function () {
            finish(3)
          }, finish, function () {
            finish(state == 1 && 3)
          })

      })
    }


  }

  // Export our library object, either for node.js or as a globally scoped variable
  if (true) {
    module['exports'] = Deferred
  } else {}
})()

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(10), __webpack_require__(41).setImmediate))

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.toViewLike = exports.View = void 0;
var core_1 = __webpack_require__(0);
var html_1 = __webpack_require__(1);
var View = /** @class */ (function () {
    function View(_container, config) {
        var _a;
        this.config = config || {};
        this._uid = (_a = this.config.rootId) !== null && _a !== void 0 ? _a : (0, core_1.uid)();
    }
    View.prototype.mount = function (container, vnode) {
        if (vnode) {
            this._view = vnode;
        }
        if (container && this._view && this._view.mount) {
            // init view inside of HTML container
            this._container = (0, html_1.toNode)(container);
            if (this._container.tagName) {
                this._view.mount(this._container);
            }
            else if (this._container.attach) {
                this._container.attach(this);
            }
        }
    };
    View.prototype.unmount = function () {
        var rootView = this.getRootView();
        if (rootView && rootView.node) {
            if (this.getRootNode())
                rootView.unmount();
            this._view = null;
        }
    };
    View.prototype.getRootView = function () {
        return this._view;
    };
    View.prototype.getRootNode = function () {
        return this._view && this._view.node && this._view.node.el;
    };
    View.prototype.paint = function () {
        if (this._view && // was mounted
            (this._view.node || // already rendered node
                this._container)) {
            // not rendered, but has container
            this._doNotRepaint = false;
            this._view.redraw();
        }
    };
    return View;
}());
exports.View = View;
function toViewLike(view) {
    return {
        getRootView: function () { return view; },
        paint: function () { return view.node && view.redraw(); },
        mount: function (container) { return view.mount(container); },
    };
}
exports.toViewLike = toViewLike;


/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.DataProxy = void 0;
var ajax_1 = __webpack_require__(13);
var DataProxy = /** @class */ (function () {
    function DataProxy(url, config) {
        if (config === void 0) { config = {}; }
        this.url = this._url = url;
        this.config = config;
    }
    DataProxy.prototype.updateUrl = function (url, params) {
        if (params === void 0) { params = {}; }
        this._url = this.url = url || this._url;
        this.url += this.url.includes("?") ? "&" : "?";
        for (var param in params) {
            this.config[param] = params[param];
            this.url += "".concat(param, "=").concat(encodeURIComponent(params[param]), "&");
        }
        this.url = this.url.slice(0, -1);
    };
    DataProxy.prototype.load = function () {
        return ajax_1.ajax.get(this.url, undefined, this.config);
    };
    DataProxy.prototype.save = function (data, mode) {
        switch (mode) {
            case "delete":
                return ajax_1.ajax.delete(this.url, data, this.config);
            case "update":
                return ajax_1.ajax.put(this.url, data, this.config);
            case "insert":
            default:
                return ajax_1.ajax.post(this.url, data, this.config);
        }
    };
    return DataProxy;
}());
exports.DataProxy = DataProxy;


/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.MessageContainerPosition = exports.Position = exports.RealPosition = void 0;
var RealPosition;
(function (RealPosition) {
    RealPosition["left"] = "left";
    RealPosition["right"] = "right";
    RealPosition["top"] = "top";
    RealPosition["bottom"] = "bottom";
    RealPosition["center"] = "center";
})(RealPosition || (exports.RealPosition = RealPosition = {}));
var Position;
(function (Position) {
    Position["right"] = "right";
    Position["bottom"] = "bottom";
    Position["center"] = "center";
    Position["left"] = "left";
    Position["top"] = "top";
})(Position || (exports.Position = Position = {}));
var MessageContainerPosition;
(function (MessageContainerPosition) {
    MessageContainerPosition["topLeft"] = "top-left";
    MessageContainerPosition["topRight"] = "top-right";
    MessageContainerPosition["bottomLeft"] = "bottom-left";
    MessageContainerPosition["bottomRight"] = "bottom-right";
})(MessageContainerPosition || (exports.MessageContainerPosition = MessageContainerPosition = {}));


/***/ }),
/* 10 */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
	return this;
})();

try {
	// This works if eval is allowed (see CSP)
	g = g || new Function("return this")();
} catch (e) {
	// This works if the window reference is available
	if (typeof window === "object") g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
exports.Layout = void 0;
var types_1 = __webpack_require__(12);
var Cell_1 = __webpack_require__(19);
var dom_1 = __webpack_require__(2);
var Layout = /** @class */ (function (_super) {
    __extends(Layout, _super);
    function Layout(parent, config) {
        var _this = _super.call(this, parent, config) || this;
        // root layout
        _this._root = _this.config.parent || _this;
        _this._all = {};
        _this._parseConfig();
        _this._progress = false;
        if (_this.config.activeTab) {
            _this.config.activeView = _this.config.activeTab;
        }
        // Need replace to tabbar
        if (_this.config.views) {
            _this.config.activeView = _this.config.activeView || _this._cells[0].id;
            _this._isViewLayout = true;
        }
        if (!config.parent) {
            var view = (0, dom_1.create)({ render: function () { return _this._root && _this.toVDOM(); } }, _this);
            _this.mount(parent, view);
        }
        return _this;
    }
    Layout.prototype.destructor = function () {
        this.unmount();
        if (this.config) {
            for (var _i = 0, _a = this._cells; _i < _a.length; _i++) {
                var cell = _a[_i];
                cell === null || cell === void 0 ? void 0 : cell.destructor();
            }
            this.config = this._cells = this._root = this._xLayout = this._isViewLayout = null;
            this._all = {};
        }
    };
    Layout.prototype.toVDOM = function () {
        var _a;
        if (this._isViewLayout) {
            var roots = [this.getCell(this.config.activeView).toVDOM()];
            return _super.prototype.toVDOM.call(this, roots);
        }
        var nodes = [];
        this._inheritTypes();
        (_a = this._cells) === null || _a === void 0 ? void 0 : _a.forEach(function (cell) {
            var node = cell.toVDOM();
            if (Array.isArray(node)) {
                nodes = nodes.concat(node);
            }
            else {
                nodes.push(node);
            }
        });
        return _super.prototype.toVDOM.call(this, nodes);
    };
    Layout.prototype.removeCell = function (id) {
        if (!this.events.fire(types_1.LayoutEvents.beforeRemove, [id])) {
            return;
        }
        var root = this.config.parent || this;
        if (root !== this) {
            root.removeCell(id);
            return;
        }
        // this === root layout
        var view = this.getCell(id);
        if (view) {
            var parent_1 = view.getParent();
            delete this._all[id];
            parent_1._cells = parent_1._cells.filter(function (cell) { return cell.id != id; });
            parent_1.paint();
        }
        this.events.fire(types_1.LayoutEvents.afterRemove, [id]);
    };
    Layout.prototype.addCell = function (config, index) {
        if (index === void 0) { index = -1; }
        if (!this.events.fire(types_1.LayoutEvents.beforeAdd, [config.id])) {
            return;
        }
        var view = this._createCell(config);
        if (index < 0) {
            index = this._cells.length + index + 1;
        }
        this._cells.splice(index, 0, view);
        this.paint();
        if (!this.events.fire(types_1.LayoutEvents.afterAdd, [config.id])) {
            return;
        }
    };
    Layout.prototype.getId = function (index) {
        if (index < 0) {
            index = this._cells.length + index;
        }
        return this._cells[index] ? this._cells[index].id : undefined;
    };
    Layout.prototype.getRefs = function (name) {
        var _a;
        return (_a = this._root.getRootView().refs) === null || _a === void 0 ? void 0 : _a[name];
    };
    Layout.prototype.getCell = function (id) {
        var _a;
        return (_a = this._root) === null || _a === void 0 ? void 0 : _a._all[id];
    };
    Layout.prototype.forEach = function (callback, parent, level) {
        if (level === void 0) { level = Infinity; }
        if (!this._haveCells(parent) || level < 1) {
            return;
        }
        var array;
        if (parent) {
            array = this._root._all[parent]._cells;
        }
        else {
            array = this._root._cells;
        }
        for (var index = 0; index < array.length; index++) {
            var cell = array[index];
            callback.call(this, cell, index, array);
            if (this._haveCells(cell.id)) {
                cell.forEach(callback, cell.id, --level);
            }
        }
    };
    /** @deprecated See a documentation: https://docs.dhtmlx.com/ */
    Layout.prototype.cell = function (id) {
        return this.getCell(id);
    };
    Layout.prototype.progressShow = function () {
        this._progress = true;
        this.paint();
    };
    Layout.prototype.progressHide = function () {
        this._progress = false;
        this.paint();
    };
    Layout.prototype._getCss = function (content) {
        var layoutCss = this._xLayout ? "dhx_layout-columns" : "dhx_layout-rows";
        var directionCss = this.config.align ? " " + layoutCss + "--" + this.config.align : "";
        if (content) {
            return (layoutCss +
                " dhx_layout-cell" +
                (this.config.align ? " dhx_layout-cell--" + this.config.align : ""));
        }
        else {
            var cellCss = this.config.parent ? _super.prototype._getCss.call(this) : "dhx_widget dhx_layout";
            var fullModeCss = this.config.parent ? "" : " dhx_layout-cell";
            return cellCss + (this.config.full ? fullModeCss : " " + layoutCss) + directionCss;
        }
    };
    Layout.prototype._parseConfig = function () {
        var _this = this;
        var config = this.config;
        var cells = config.rows || config.cols || config.views || [];
        this._xLayout = !config.rows;
        this._cells = cells.map(function (a) { return _this._createCell(a); });
    };
    Layout.prototype._createCell = function (cell) {
        var view;
        if (cell.rows || cell.cols || cell.views) {
            cell.parent = this._root;
            view = new Layout(this, cell);
        }
        else {
            view = new Cell_1.Cell(this, cell);
        }
        // FIxME
        this._root._all[view.id] = view;
        if (cell.init) {
            cell.init(view, cell);
        }
        return view;
    };
    Layout.prototype._haveCells = function (id) {
        if (id) {
            var array = this._root._all[id];
            return array._cells && array._cells.length > 0;
        }
        return Object.keys(this._all).length > 0;
    };
    Layout.prototype._inheritTypes = function (obj) {
        var _this = this;
        if (obj === void 0) { obj = this._cells; }
        if (Array.isArray(obj)) {
            obj.forEach(function (cell) { return _this._inheritTypes(cell); });
        }
        else {
            var cellConfig = obj === null || obj === void 0 ? void 0 : obj.config;
            if ((cellConfig === null || cellConfig === void 0 ? void 0 : cellConfig.rows) || (cellConfig === null || cellConfig === void 0 ? void 0 : cellConfig.cols)) {
                var viewParent = obj.getParent();
                if (!cellConfig.type && viewParent) {
                    if (viewParent.config.type) {
                        cellConfig.type = viewParent.config.type;
                    }
                    else {
                        this._inheritTypes(viewParent);
                    }
                }
            }
        }
    };
    return Layout;
}(Cell_1.Cell));
exports.Layout = Layout;


/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.LayoutEvents = void 0;
var LayoutEvents;
(function (LayoutEvents) {
    LayoutEvents["beforeShow"] = "beforeShow";
    LayoutEvents["afterShow"] = "afterShow";
    LayoutEvents["beforeHide"] = "beforeHide";
    LayoutEvents["afterHide"] = "afterHide";
    LayoutEvents["beforeResizeStart"] = "beforeResizeStart";
    LayoutEvents["resize"] = "resize";
    LayoutEvents["afterResizeEnd"] = "afterResizeEnd";
    LayoutEvents["beforeAdd"] = "beforeAdd";
    LayoutEvents["afterAdd"] = "afterAdd";
    LayoutEvents["beforeRemove"] = "beforeRemove";
    LayoutEvents["afterRemove"] = "afterRemove";
    LayoutEvents["beforeCollapse"] = "beforeCollapse";
    LayoutEvents["afterCollapse"] = "afterCollapse";
    LayoutEvents["beforeExpand"] = "beforeExpand";
    LayoutEvents["afterExpand"] = "afterExpand";
})(LayoutEvents || (exports.LayoutEvents = LayoutEvents = {}));


/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(Promise) {
Object.defineProperty(exports, "__esModule", { value: true });
exports.ajax = void 0;
var types_1 = __webpack_require__(5);
var helpers_1 = __webpack_require__(3);
function toQueryString(data) {
    return Object.keys(data)
        .reduce(function (entries, key) {
        var value = typeof data[key] === "object" ? JSON.stringify(data[key]) : data[key];
        entries.push(key + "=" + encodeURIComponent(value));
        return entries;
    }, [])
        .join("&");
}
function inferResponseType(contentType) {
    if (!contentType) {
        return "text";
    }
    if (contentType.includes("json")) {
        return "json";
    }
    if (contentType.includes("xml")) {
        return "xml";
    }
    return "text";
}
function send(url, data, method, headers, responseType) {
    function parseResponse(responseText, genResponseType) {
        switch (genResponseType) {
            case "json": {
                return JSON.parse(responseText);
            }
            case "text": {
                return responseText;
            }
            case "xml": {
                var driver = (0, helpers_1.toDataDriver)(types_1.DataDriver.xml);
                if (driver) {
                    return driver.toJsonObject(responseText);
                }
                else {
                    return { parseError: "Incorrect data driver type: 'xml'" };
                }
            }
            default: {
                return responseText;
            }
        }
    }
    var allHeaders = headers || {};
    if (responseType) {
        allHeaders.Accept = "application/" + responseType;
    }
    if (method !== "GET") {
        allHeaders["Content-Type"] = allHeaders["Content-Type"] || "application/json";
    }
    if (method === "GET") {
        var urlData = data && typeof data === "object"
            ? toQueryString(data)
            : data && typeof data === "string"
                ? data
                : "";
        if (urlData) {
            url += !url.includes("?") ? "?" : "&";
            url += urlData;
        }
        data = null;
    }
    if (!window.fetch) {
        return new Promise(function (resolve, reject) {
            var xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 300) {
                    if (responseType === "raw") {
                        resolve({
                            url: xhr.responseURL,
                            headers: xhr
                                .getAllResponseHeaders()
                                .trim()
                                .split(/[\r\n]+/)
                                .reduce(function (acc, cur) {
                                var kv = cur.split(": ");
                                acc[kv[0]] = kv[1];
                                return acc;
                            }, {}),
                            body: xhr.response,
                        });
                    }
                    if (xhr.status === 204) {
                        resolve();
                    }
                    else {
                        resolve(parseResponse(xhr.responseText, responseType || inferResponseType(xhr.getResponseHeader("Content-Type"))));
                    }
                }
                else {
                    reject({
                        status: xhr.status,
                        statusText: xhr.statusText,
                    });
                }
            };
            xhr.onerror = function () {
                reject({
                    status: xhr.status,
                    statusText: xhr.statusText,
                    message: xhr.responseText,
                });
            };
            xhr.open(method, url);
            for (var headerKey in allHeaders) {
                xhr.setRequestHeader(headerKey, allHeaders[headerKey]);
            }
            switch (method) {
                case "POST":
                case "DELETE":
                case "PUT":
                    xhr.send(data !== undefined ? JSON.stringify(data) : "");
                    break;
                case "GET":
                    xhr.send();
                    break;
                default:
                    xhr.send();
                    break;
            }
        });
    }
    else {
        var isJson = allHeaders["Content-Type"] === "application/json";
        if (isJson && data && typeof data === "object") {
            data = JSON.stringify(data);
        }
        return window
            .fetch(url, {
            method: method,
            body: data || null,
            headers: allHeaders,
        })
            .then(function (response) {
            if (response.ok) {
                var genResponseType = responseType || inferResponseType(response.headers.get("Content-Type"));
                if (genResponseType === "raw") {
                    return {
                        // eslint-disable-next-line @typescript-eslint/ban-ts-comment
                        // @ts-ignore
                        headers: Object.fromEntries(response.headers.entries()),
                        url: response.url,
                        body: response.body,
                    };
                }
                if (response.status !== 204) {
                    switch (genResponseType) {
                        case "json": {
                            return response.json();
                        }
                        case "xml": {
                            var driver_1 = (0, helpers_1.toDataDriver)(types_1.DataDriver.xml);
                            if (driver_1) {
                                return response.text().then(function (xmlData) { return driver_1.toJsonObject(xmlData); });
                            }
                            else {
                                return response.text();
                            }
                        }
                        default:
                            return response.text();
                    }
                }
            }
            else {
                return response.text().then(function (message) {
                    return Promise.reject({
                        status: response.status,
                        statusText: response.statusText,
                        message: message,
                    });
                });
            }
        });
    }
}
exports.ajax = {
    get: function (url, data, config) {
        return send(url, data, "GET", config && config.headers, config !== undefined ? config.responseType : undefined);
    },
    post: function (url, data, config) {
        return send(url, data, "POST", config && config.headers, config !== undefined ? config.responseType : undefined);
    },
    put: function (url, data, config) {
        return send(url, data, "PUT", config && config.headers, config !== undefined ? config.responseType : undefined);
    },
    delete: function (url, data, config) {
        return send(url, data, "DELETE", config && config.headers, config !== undefined ? config.responseType : undefined);
    },
};

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(6)))

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.CsvDriver = void 0;
var helpers_1 = __webpack_require__(3);
var CsvDriver = /** @class */ (function () {
    function CsvDriver(config) {
        var initConfig = {
            skipHeader: 0,
            nameByHeader: false,
            rowDelimiter: "\n",
            columnDelimiter: ",",
        };
        this.config = __assign(__assign({}, initConfig), config);
        if (this.config.nameByHeader) {
            this.config.skipHeader = 1;
        }
    }
    CsvDriver.prototype.getFields = function (row, headers) {
        var parts = (0, helpers_1.splitCsv)(row, this.config.columnDelimiter).map(function (part) {
            return part.replace(/^"(.*)"$/s, "$1").replace(/""/g, '"');
        });
        var obj = {};
        for (var i = 0; i < parts.length; i++) {
            obj[headers ? headers[i] : i + 1] = isNaN(Number(parts[i])) ? parts[i] : parseFloat(parts[i]);
        }
        return obj;
    };
    CsvDriver.prototype.getRows = function (data) {
        return (0, helpers_1.splitCsv)(data, this.config.rowDelimiter);
    };
    CsvDriver.prototype.toJsonArray = function (data) {
        var _this = this;
        var rows = this.getRows(data);
        var names = this.config.names;
        if (this.config.skipHeader) {
            var top_1 = rows.splice(0, this.config.skipHeader);
            if (this.config.nameByHeader) {
                names = top_1[0].trim().split(this.config.columnDelimiter);
            }
        }
        return rows.map(function (row) { return _this.getFields(row, names); });
    };
    CsvDriver.prototype.serialize = function (data, withoutHeader) {
        var header = data[0]
            ? Object.keys(data[0])
                .filter(function (key) { return !key.startsWith("$"); })
                .join(this.config.columnDelimiter) + this.config.rowDelimiter
            : "";
        var readyData = this._serialize(data);
        if (withoutHeader) {
            return readyData;
        }
        return header + readyData;
    };
    CsvDriver.prototype._serialize = function (data) {
        var _this = this;
        return data.reduce(function (csv, row) {
            var keys = Object.keys(row);
            var cells = keys.reduce(function (total, key, i) {
                var _a, _b;
                if (key.startsWith("$") || key === "items") {
                    return total;
                }
                var value = (_b = (_a = row[key]) === null || _a === void 0 ? void 0 : _a.toString()) !== null && _b !== void 0 ? _b : "";
                var normalizedValue = new RegExp("[".concat(_this.config.columnDelimiter, "\"\n]")).test(value)
                    ? "\"".concat(value.replace(/"/g, '""').replace(/\n/g, "\\n"), "\"")
                    : value;
                var delimiter = i === keys.length - 1 || keys[i + 1].startsWith("$") ? "" : _this.config.columnDelimiter;
                return total + normalizedValue + delimiter;
            }, "");
            if (row.items) {
                return "".concat(csv).concat(csv ? "\n" : "").concat(cells).concat(_this._serialize(row.items));
            }
            return "".concat(csv).concat(csv ? _this.config.rowDelimiter : "").concat(cells);
        }, "");
    };
    return CsvDriver;
}());
exports.CsvDriver = CsvDriver;


/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
var locale = {
    apply: "apply",
    reject: "reject",
};
exports.default = locale;


/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.blockScreen = void 0;
function blockKeys(e) {
    var active = document.activeElement;
    if (active.classList.contains("dhx_alert__apply-button") && e.key === "Enter") {
        return;
    }
    if (!active.classList.contains("dhx_alert__confirm-reject") &&
        !active.classList.contains("dhx_alert__confirm-aply")) {
        e.preventDefault();
    }
}
function blockScreen(css) {
    var blocker = document.createElement("div");
    blocker.className = "dhx_alert__overlay " + (css || "");
    document.body.appendChild(blocker);
    document.addEventListener("keydown", blockKeys);
    return function () {
        document.body.removeChild(blocker);
        document.removeEventListener("keydown", blockKeys);
    };
}
exports.blockScreen = blockScreen;


/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    var desc = Object.getOwnPropertyDescriptor(m, k);
    if (!desc || ("get" in desc ? !m.__esModule : desc.writable || desc.configurable)) {
      desc = { enumerable: true, get: function() { return m[k]; } };
    }
    Object.defineProperty(o, k2, desc);
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __exportStar = (this && this.__exportStar) || function(m, exports) {
    for (var p in m) if (p !== "default" && !Object.prototype.hasOwnProperty.call(exports, p)) __createBinding(exports, m, p);
};
Object.defineProperty(exports, "__esModule", { value: true });
__exportStar(__webpack_require__(46), exports);
__exportStar(__webpack_require__(18), exports);


/***/ }),
/* 18 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.PopupEvents = void 0;
var PopupEvents;
(function (PopupEvents) {
    PopupEvents["beforeHide"] = "beforeHide";
    PopupEvents["beforeShow"] = "beforeShow";
    PopupEvents["afterHide"] = "afterHide";
    PopupEvents["afterShow"] = "afterShow";
    PopupEvents["click"] = "click";
})(PopupEvents || (exports.PopupEvents = PopupEvents = {}));


/***/ }),
/* 19 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.Cell = void 0;
var core_1 = __webpack_require__(0);
var dom_1 = __webpack_require__(2);
var view_1 = __webpack_require__(7);
var types_1 = __webpack_require__(12);
var helpers_1 = __webpack_require__(52);
var events_1 = __webpack_require__(4);
var Layout_1 = __webpack_require__(11);
var Cell = /** @class */ (function (_super) {
    __extends(Cell, _super);
    function Cell(parent, config) {
        var _this = _super.call(this, parent, config) || this;
        _this._disabled = [];
        var p = parent;
        if (p && p.isVisible) {
            _this._parent = p;
        }
        if (_this._parent && _this._parent.events) {
            _this.events = _this._parent.events;
        }
        else {
            _this.events = new events_1.EventSystem(_this);
        }
        _this.config.full =
            _this.config.full === undefined
                ? Boolean(_this.config.header ||
                    _this.config.collapsable ||
                    _this.config.headerHeight ||
                    _this.config.headerIcon ||
                    _this.config.headerImage)
                : _this.config.full;
        _this._afterWindowResized = _this._resizedWindow.bind(_this);
        _this.id = _this.config.id || (0, core_1.uid)();
        _this._initHandlers();
        _this._progress = !!_this.config.progressDefault;
        _this._stopProgressDefault = false;
        if (_this._isXDirection() && !config.width)
            config.$autoWidth = true;
        if (!_this._isXDirection() && !config.height)
            config.$autoHeight = true;
        return _this;
    }
    Cell.prototype.paint = function () {
        var _a;
        if (this.isVisible()) {
            var view = this.getRootView();
            if (view) {
                view.redraw();
            }
            else {
                (_a = this._parent) === null || _a === void 0 ? void 0 : _a.paint();
            }
        }
    };
    Cell.prototype.isVisible = function () {
        var _a;
        // top level node
        if (!this._parent) {
            if (this._container && this._container.tagName) {
                return true;
            }
            return Boolean(this.getRootNode());
        }
        // check active view in case of multiview
        var active = (_a = this._parent.config) === null || _a === void 0 ? void 0 : _a.activeView;
        if (active && active !== this.id) {
            return false;
        }
        // check that all parents of the cell are visible as well
        return !this.config.hidden && (!this._parent || this._parent.isVisible());
    };
    Cell.prototype.hide = function () {
        if (!this.events.fire(types_1.LayoutEvents.beforeHide, [this.id])) {
            return;
        }
        this.config.hidden = true;
        this._resetCellsSize();
        if (this._parent && this._parent.paint) {
            this._parent.paint();
        }
        this.events.fire(types_1.LayoutEvents.afterHide, [this.id]);
    };
    Cell.prototype.show = function () {
        if (!this.events.fire(types_1.LayoutEvents.beforeShow, [this.id])) {
            return;
        }
        if (this._parent && this._parent.config && this._parent.config.activeView !== undefined) {
            this._parent.config.activeView = this.id;
        }
        else {
            this.config.hidden = false;
        }
        if (this._parent && !this._parent.isVisible()) {
            this._parent.show();
        }
        this.paint();
        this.events.fire(types_1.LayoutEvents.afterShow, [this.id]);
    };
    Cell.prototype.expand = function () {
        if (!this.events.fire(types_1.LayoutEvents.beforeExpand, [this.id])) {
            return;
        }
        this.config.collapsed = false;
        this._checkNextSize() || this._checkNextSize(this._getAnyFlexCell());
        this.events.fire(types_1.LayoutEvents.afterExpand, [this.id]);
        this.paint();
    };
    Cell.prototype.collapse = function () {
        if (!this.events.fire(types_1.LayoutEvents.beforeCollapse, [this.id])) {
            return;
        }
        this.config.collapsed = true;
        this._checkNextSize() || this._checkNextSize(this._getAnyFlexCell());
        this.events.fire(types_1.LayoutEvents.afterCollapse, [this.id]);
        this.paint();
    };
    Cell.prototype.toggle = function () {
        if (this.config.collapsed) {
            this.expand();
        }
        else {
            this.collapse();
        }
    };
    Cell.prototype._checkNextSize = function (cell) {
        var nextCell = cell !== null && cell !== void 0 ? cell : this._getNextCell();
        if (!nextCell)
            return false;
        if (this._isXDirection() && nextCell.config.$autoWidth && nextCell.config.width) {
            nextCell.config.width = undefined;
            return true;
        }
        if (!this._isXDirection() && nextCell.config.$autoHeight && nextCell.config.height) {
            nextCell.config.height = undefined;
            return true;
        }
        return !cell ? nextCell._checkNextSize() : false;
    };
    Cell.prototype.getParent = function () {
        return this._parent;
    };
    Cell.prototype.destructor = function () {
        var _a;
        this.events && this.events.clear();
        window.removeEventListener("resize", this._afterWindowResized);
        if (this._ui && this._ui.config && typeof ((_a = this._ui) === null || _a === void 0 ? void 0 : _a.destructor) === "function") {
            this._ui.destructor();
        }
        this.config = this.events = this.id = this._parent = this._handlers = this._uid = this._disabled = this._resizerHandlers = null;
        this.unmount();
    };
    Cell.prototype.getWidget = function () {
        return this._ui;
    };
    Cell.prototype.getCellView = function () {
        return this._parent && this._parent.getRefs(this._uid);
    };
    Cell.prototype.attach = function (component, config) {
        this.config.html = null;
        if (typeof component === "object") {
            this._ui = component;
        }
        else if (typeof component === "string") {
            this._ui = new window.dhx[component](null, config);
        }
        else if (typeof component === "function") {
            if (component.prototype instanceof view_1.View) {
                this._ui = new component(null, config);
            }
            else {
                this._ui = {
                    getRootView: function () {
                        return component(config);
                    },
                };
            }
        }
        this.paint();
        return this._ui;
    };
    Cell.prototype.attachHTML = function (html) {
        this.config.html = html;
        this.paint();
    };
    Cell.prototype.detach = function () {
        this._stopProgressDefault = false;
        this._ui = this.config.html = null;
        this.paint();
    };
    Cell.prototype.progressShow = function () {
        if (this.config.progressDefault) {
            this._stopProgressDefault = false;
        }
        this._progress = true;
        this.paint();
    };
    Cell.prototype.progressHide = function () {
        if (this.config.progressDefault) {
            this._stopProgressDefault = true;
        }
        this._progress = false;
        this.paint();
    };
    Cell.prototype.isVisibleProgress = function () {
        return this._progress;
    };
    Cell.prototype.toVDOM = function (nodes) {
        var _a;
        var _b, _c;
        this._saveTheme();
        if (this.config === null) {
            this.config = {};
        }
        if (this.config.hidden) {
            return;
        }
        var isFieldset = this.config.$fieldset;
        var style = this._calculateStyle();
        var stylePadding = (0, core_1.isDefined)(this.config.padding)
            ? !isNaN(Number(this.config.padding))
                ? { padding: "".concat(this.config.padding, "px") }
                : { padding: this.config.padding }
            : "";
        var fullStyle = this.config.full || this.config.html ? style : __assign(__assign({}, style), stylePadding);
        var progressBar = this._checkProgress() ? this._getProgressBar() : null;
        var kids;
        if (!this.config.html) {
            if (this._ui) {
                var view = this._ui.getRootView();
                if (view.render) {
                    view = (0, dom_1.inject)(view);
                }
                kids = [view];
            }
            else {
                kids = nodes || null;
            }
        }
        var resizer = this.config.resizable && !this._isLastCell() && this._getNextCell() && !this.config.collapsed
            ? (0, dom_1.el)(".dhx_layout-resizer." +
                (this._isXDirection() ? "dhx_layout-resizer--x" : "dhx_layout-resizer--y"), __assign(__assign({}, this._resizerHandlers), { _ref: "resizer_" + this._uid, tabindex: 0 }), [
                (0, dom_1.el)("span.dhx_layout-resizer__icon", {
                    class: "dxi " +
                        (this._isXDirection() ? "dxi-dots-vertical" : "dxi-dots-horizontal"),
                }),
            ])
            : null;
        var handlers = {};
        if (this.config.on) {
            for (var key in this.config.on) {
                handlers["on" + key] = this.config.on[key];
            }
        }
        var typeClass = "";
        var isParent = this.config.cols || this.config.rows;
        if (this.config.type && isParent) {
            switch (this.config.type) {
                case "line":
                    typeClass = " dhx_layout-line";
                    break;
                case "wide":
                    typeClass = " dhx_layout-wide";
                    break;
                case "space":
                    typeClass = " dhx_layout-space";
                    break;
                default:
                    break;
            }
        }
        var cellContent = isFieldset
            ? (0, dom_1.el)("fieldset.dhx_form-fieldset", {
                class: (this.config.$disabled && " dhx_form-fieldset--disabled") || "",
                style: stylePadding,
                disabled: this.config.$disabled,
            }, [
                (0, dom_1.el)("legend.dhx_form-fieldset-legend", {
                    class: "dhx_form-fieldset-legend--".concat(this.config.labelAlignment || "left"),
                }, this.config.label),
                (0, dom_1.el)(".dhx_layout-cell-content", {
                    class: this._getCss(false),
                }, [].concat(kids)),
            ])
            : this.config.full
                ? [
                    (0, dom_1.el)("div", {
                        tabindex: this.config.collapsable ? "0" : "-1",
                        role: this.config.collapsable ? "button" : null,
                        "aria-label": this.config.collapsable
                            ? "click to ".concat(this.config.collapsed ? "expand" : "collapse")
                            : null,
                        class: "dhx_layout-cell-header" +
                            (this._isXDirection()
                                ? " dhx_layout-cell-header--col"
                                : " dhx_layout-cell-header--row") +
                            (this.config.collapsable ? " dhx_layout-cell-header--collapseble" : "") +
                            (this.config.collapsed ? " dhx_layout-cell-header--collapsed" : "") +
                            (((this.getParent() || {}).config || {}).isAccordion
                                ? " dhx_layout-cell-header--accordion"
                                : ""),
                        style: {
                            height: this.config.headerHeight,
                        },
                        onclick: this._handlers.toggle,
                        onkeydown: this._handlers.enterCollapse,
                    }, [
                        this.config.headerIcon &&
                            (0, dom_1.el)("span.dhx_layout-cell-header__icon", {
                                class: this.config.headerIcon,
                            }),
                        this.config.headerImage &&
                            (0, dom_1.el)(".dhx_layout-cell-header__image-wrapper", [
                                (0, dom_1.el)("img", {
                                    src: this.config.headerImage,
                                    class: "dhx_layout-cell-header__image",
                                }),
                            ]),
                        this.config.header && (0, dom_1.el)("h3.dhx_layout-cell-header__title", this.config.header),
                        this.config.collapsable
                            ? (0, dom_1.el)("div.dhx_layout-cell-header__collapse-icon", {
                                class: this._getCollapseIcon(),
                            })
                            : (0, dom_1.el)("div.dhx_layout-cell-header__collapse-icon", {
                                class: "dxi dxi-empty",
                            }),
                    ]),
                    !this.config.collapsed
                        ? (0, dom_1.el)("div", {
                            style: __assign(__assign({}, stylePadding), { height: "calc(100% - ".concat(this.config.headerHeight || 37, "px)") }),
                            class: this._getCss(true) +
                                " dhx_layout-cell-content" +
                                (this.config.type ? typeClass : ""),
                        }, this.config.html
                            ? [
                                (0, dom_1.el)("div", {
                                    ".innerHTML": this.config.html,
                                    class: "dhx_layout-cell dhx_layout-cell-inner_html",
                                }),
                            ]
                            : kids)
                        : null,
                ]
                : this.config.html &&
                    !(this.config.rows &&
                        this.config.cols &&
                        this.config.views)
                    ? [
                        !this.config.collapsed
                            ? (0, dom_1.el)(".dhx_layout-cell-content", { style: stylePadding }, [
                                (0, dom_1.el)(".dhx_layout-cell-inner_html", {
                                    ".innerHTML": this.config.html,
                                }),
                            ])
                            : null,
                    ]
                    : kids;
        var cell = (0, dom_1.el)("div", __assign(__assign((_a = { _key: this.config.id || this._uid, _ref: this._uid }, _a["aria-label"] = this.config.id ? "tab-content-" + this.config.id : null, _a["data-cell-id"] = (_b = this.config.id) !== null && _b !== void 0 ? _b : null, _a["data-dhx-theme"] = (_c = this._theme) !== null && _c !== void 0 ? _c : null, _a), handlers), { class: this._getCss(false) +
                (this.config.css ? " " + this.config.css : "") +
                (this.config.collapsed ? " dhx_layout-cell--collapsed" : "") +
                (this.config.resizable ? " dhx_layout-cell--resizable" : "") +
                (this.config.type && !this.config.full ? typeClass : ""), style: isFieldset ? style : fullStyle }), cellContent || progressBar ? [].concat(cellContent, progressBar) : null);
        return resizer ? [].concat(cell, resizer) : cell;
    };
    Cell.prototype._saveTheme = function () {
        var _a;
        var cellEl = (_a = this.getCellView()) === null || _a === void 0 ? void 0 : _a.el;
        if (cellEl) {
            this._theme = cellEl.getAttribute("data-dhx-theme");
        }
    };
    Cell.prototype._getProgressBar = function () {
        return (0, dom_1.el)("span", {
            class: "dhx_progress-bar",
        }, [
            (0, dom_1.sv)("svg", {
                viewBox: "25 25 50 50",
                class: "dhx_spinner",
            }, [
                (0, dom_1.sv)("circle", {
                    cx: "50",
                    cy: "50",
                    r: "20",
                    class: "path",
                }),
            ]),
        ]);
    };
    Cell.prototype._getCss = function (_content) {
        return "dhx_layout-cell";
    };
    Cell.prototype._initHandlers = function () {
        var _this = this;
        if (this.getParent() &&
            !(this.config.cols || this.config.rows)) {
            window.addEventListener("resize", this._afterWindowResized);
        }
        this._handlers = {
            enterCollapse: function (e) {
                if (e.keyCode === 13) {
                    _this._handlers.toggle();
                }
            },
            collapse: function () {
                if (!_this.config.collapsable) {
                    return;
                }
                _this.collapse();
            },
            expand: function () {
                if (!_this.config.collapsable) {
                    return;
                }
                _this.expand();
            },
            toggle: function () {
                if (!_this.config.collapsable) {
                    return;
                }
                _this.toggle();
            },
        };
        var blockOpts = {
            left: null,
            top: null,
            isActive: false,
            range: null,
            xLayout: null,
            nextCell: null,
            size: null,
            resizerLength: null,
            margin: null,
            collapsedSize: null,
        };
        var resizeMove = function (event, startCoords) {
            if (startCoords === void 0) { startCoords = { x: 0, y: 0 }; }
            if (!blockOpts.isActive) {
                return;
            }
            var xLayout = blockOpts.xLayout;
            var clientX = event.targetTouches
                ? event.targetTouches[0].clientX
                : event.clientX + startCoords.x;
            var clientY = event.targetTouches
                ? event.targetTouches[0].clientY
                : event.clientY + startCoords.y;
            var newValue = xLayout
                ? clientX - blockOpts.range.min + window.pageXOffset
                : clientY - blockOpts.range.min + window.pageYOffset;
            var prop = xLayout ? "width" : "height";
            if (newValue < 0) {
                newValue = blockOpts.resizerLength / 2;
            }
            else if (newValue > blockOpts.size) {
                newValue = blockOpts.size - blockOpts.resizerLength;
            }
            var getValue = function (key) { var _a; return parseInt((_a = _this.config[key]) === null || _a === void 0 ? void 0 : _a.toString()); };
            var maxSize = getValue(xLayout ? "maxWidth" : "maxHeight");
            var minSize = getValue(xLayout ? "minWidth" : "minHeight");
            if ((!maxSize || newValue < maxSize) && (!minSize || newValue > minSize)) {
                _this.config[prop] = newValue - blockOpts.resizerLength / 2 + "px";
                blockOpts.nextCell.config[prop] =
                    blockOpts.size - newValue - blockOpts.resizerLength / 2 + "px";
                if (blockOpts.nextCell._getAnyFlexCell())
                    blockOpts.nextCell._getAnyFlexCell().config[prop] = undefined;
                _this.paint();
                _this.events.fire(types_1.LayoutEvents.resize, [_this.id]);
            }
        };
        var iframesInfo = {};
        var resizeEnd = function (event) {
            blockOpts.isActive = false;
            document.body.classList.remove("dhx_no-select--resize");
            if (!event.targetTouches) {
                document.removeEventListener("mouseup", resizeEnd);
                document.removeEventListener("mousemove", resizeMove);
                for (var index in iframesInfo) {
                    iframesInfo[index].node.contentWindow.document.removeEventListener("mouseup", resizeEnd);
                    iframesInfo[index].node.contentWindow.document.removeEventListener("mousemove", iframesInfo[index].listener);
                }
            }
            else {
                document.removeEventListener("touchend", resizeEnd);
                document.removeEventListener("touchmove", resizeMove);
                for (var index in iframesInfo) {
                    iframesInfo[index].node.contentWindow.document.removeEventListener("touchend", resizeEnd);
                    iframesInfo[index].node.contentWindow.document.removeEventListener("touchmove", iframesInfo[index].listener);
                }
            }
            _this.events.fire(types_1.LayoutEvents.afterResizeEnd, [_this.id]);
        };
        var resizeStart = function (event) {
            event.targetTouches && event.preventDefault();
            if (event.which === 3) {
                return;
            }
            if (blockOpts.isActive) {
                resizeEnd(event);
            }
            if (!_this.events.fire(types_1.LayoutEvents.beforeResizeStart, [_this.id])) {
                return;
            }
            document.body.classList.add("dhx_no-select--resize");
            var block = _this.getCellView();
            var nextCell = _this._getNextCell();
            var nextBlock = nextCell.getCellView();
            var resizerBlock = _this._getResizerView();
            var blockOffsets = block.el.getBoundingClientRect();
            var resizerOffsets = resizerBlock.el.getBoundingClientRect();
            var nextBlockOffsets = nextBlock.el.getBoundingClientRect();
            blockOpts.xLayout = _this._isXDirection();
            blockOpts.left = blockOffsets.left + window.pageXOffset;
            blockOpts.top = blockOffsets.top + window.pageYOffset;
            blockOpts.collapsedSize = _this._getCollapsedSize(_this, nextCell);
            blockOpts.margin = (0, helpers_1.getMarginSize)(_this.getParent().config);
            blockOpts.range = (0, helpers_1.getBlockRange)(blockOffsets, nextBlockOffsets, blockOpts.xLayout);
            blockOpts.size =
                blockOpts.range.max - blockOpts.range.min - blockOpts.margin - blockOpts.collapsedSize;
            blockOpts.isActive = true;
            blockOpts.nextCell = nextCell;
            blockOpts.resizerLength = blockOpts.xLayout ? resizerOffsets.width : resizerOffsets.height;
        };
        this._resizerHandlers = {
            onmousedown: function (e) {
                resizeStart(e);
                document.addEventListener("mouseup", resizeEnd);
                document.addEventListener("mousemove", resizeMove);
                var iframes = document.querySelectorAll("iframe");
                if (iframes.length) {
                    iframes.forEach(function (iframe, index) {
                        var iframeCoords = {
                            x: iframe.getBoundingClientRect().x,
                            y: iframe.getBoundingClientRect().y,
                        };
                        iframesInfo[index] = {
                            node: iframe,
                            listener: function (event) { return resizeMove(event, iframeCoords); },
                        };
                    });
                    for (var index in iframesInfo) {
                        iframesInfo[index].node.contentWindow.document.addEventListener("mouseup", resizeEnd);
                        iframesInfo[index].node.contentWindow.document.addEventListener("mousemove", iframesInfo[index].listener);
                    }
                }
            },
            ontouchstart: function (e) {
                resizeStart(e);
                document.addEventListener("touchend", resizeEnd);
                document.addEventListener("touchmove", resizeMove);
                var iframes = document.querySelectorAll("iframe");
                if (iframes.length) {
                    iframes.forEach(function (iframe, index) {
                        var iframeCoords = {
                            x: iframe.getBoundingClientRect().x,
                            y: iframe.getBoundingClientRect().y,
                        };
                        iframesInfo[index] = {
                            node: iframe,
                            listener: function (event) { return resizeMove(event, iframeCoords); },
                        };
                    });
                    for (var index in iframesInfo) {
                        iframesInfo[index].node.contentWindow.document.addEventListener("touchend", resizeEnd);
                        iframesInfo[index].node.contentWindow.document.addEventListener("touchmove", iframesInfo[index].listener);
                    }
                }
            },
            ondragstart: function (e) { return e.preventDefault(); },
        };
    };
    Cell.prototype._getCollapsedSize = function (cell, nextCell) {
        var collapsedSize = 0;
        var parent = this._parent;
        var index = parent._cells.indexOf(cell);
        var nextIndex = parent._cells.indexOf(nextCell);
        if (nextIndex - index === 1)
            return collapsedSize;
        for (var i = index + 1; i < nextIndex; i++) {
            if (parent._cells[i].config.collapsed) {
                if (!this._isXDirection()) {
                    collapsedSize += Number(parent._cells[i].config.headerHeight) || 37;
                }
                else {
                    collapsedSize += 45;
                }
            }
        }
        return collapsedSize;
    };
    Cell.prototype._getCollapseIcon = function () {
        if (this._isXDirection() && this.config.collapsed) {
            return "dxi dxi-chevron-right";
        }
        if (this._isXDirection() && !this.config.collapsed) {
            return "dxi dxi-chevron-left";
        }
        if (!this._isXDirection() && this.config.collapsed) {
            return "dxi dxi-chevron-up";
        }
        if (!this._isXDirection() && !this.config.collapsed) {
            return "dxi dxi-chevron-down";
        }
    };
    Cell.prototype._isLastCell = function () {
        var parent = this._parent;
        return parent && parent._cells.indexOf(this) === parent._cells.length - 1;
    };
    Cell.prototype._getNextCell = function () {
        var parent = this._parent;
        var index = parent._cells.indexOf(this);
        var nextCell = !this._isLastCell() && parent._cells[index + 1];
        if (!nextCell)
            return false;
        if (nextCell.config.hidden || nextCell.config.collapsed) {
            return nextCell._getNextCell();
        }
        else
            return nextCell;
    };
    Cell.prototype._getAnyFlexCell = function (selfInclude) {
        var _this = this;
        var _a;
        if (selfInclude === void 0) { selfInclude = false; }
        var parent = this._parent;
        var prop = this._isXDirection() ? "$autoWidth" : "$autoHeight";
        var cells = (_a = parent === null || parent === void 0 ? void 0 : parent._cells) === null || _a === void 0 ? void 0 : _a.filter(function (cell) { return cell.config[prop] === true && (selfInclude ? true : cell.id !== _this.id); });
        return (cells === null || cells === void 0 ? void 0 : cells.length) ? cells[cells.length - 1] : false;
    };
    Cell.prototype._getResizerView = function () {
        return this._parent.getRefs("resizer_" + this._uid);
    };
    Cell.prototype._isXDirection = function () {
        return this._parent && this._parent._xLayout;
    };
    Cell.prototype._checkProgress = function () {
        if (this instanceof Layout_1.Layout) {
            return this.isVisibleProgress();
        }
        this._calculateProgressState();
        return ((this._progress || this._checkAutoProgress()) &&
            !this.config.collapsed &&
            !this.config.hidden &&
            !this._parent.isVisibleProgress());
    };
    Cell.prototype._checkAutoProgress = function () {
        if (this._stopProgressDefault)
            return false;
        var _a = this.config, html = _a.html, progressDefault = _a.progressDefault;
        return progressDefault && !this._ui && !html;
    };
    Cell.prototype._calculateProgressState = function () {
        if (this._stopProgressDefault)
            return;
        var _a = this.config, html = _a.html, progressDefault = _a.progressDefault;
        if (progressDefault && !this._ui && !html) {
            this._progress = true;
        }
        if (progressDefault && (this._ui || html)) {
            this._progress = false;
        }
    };
    Cell.prototype._calculateStyle = function () {
        var config = this.config;
        if (!config) {
            return;
        }
        var style = {};
        var autoWidth = false;
        var autoHeight = false;
        if (!isNaN(Number(config.width)))
            config.width = config.width + "px";
        if (!isNaN(Number(config.height)))
            config.height = config.height + "px";
        if (!isNaN(Number(config.minWidth)))
            config.minWidth = config.minWidth + "px";
        if (!isNaN(Number(config.minHeight)))
            config.minHeight = config.minHeight + "px";
        if (!isNaN(Number(config.maxWidth)))
            config.maxWidth = config.maxWidth + "px";
        if (!isNaN(Number(config.maxHeight)))
            config.maxHeight = config.maxHeight + "px";
        if (config.width === "content")
            autoWidth = true;
        if (config.height === "content")
            autoHeight = true;
        // if (this._isXDirection() && !config.width) config.$autoWidth = true;
        // if (!this._isXDirection() && !config.height) config.$autoHeight = true;
        var _a = config, width = _a.width, height = _a.height, cols = _a.cols, rows = _a.rows, minWidth = _a.minWidth, minHeight = _a.minHeight, maxWidth = _a.maxWidth, maxHeight = _a.maxHeight, gravity = _a.gravity, collapsed = _a.collapsed, $fixed = _a.$fixed;
        var gravityNumber = Math.sign(gravity) === -1 ? 0 : gravity;
        if (typeof gravity === "boolean") {
            gravityNumber = gravity ? 1 : 0;
        }
        var fixed = typeof gravity === "boolean" ? !gravity : Math.sign(gravity) === -1;
        if (this._isXDirection()) {
            if ($fixed || width || (gravity === undefined && (minWidth || maxWidth))) {
                fixed = true;
            }
        }
        else {
            if ($fixed || height || (gravity === undefined && (minHeight || maxHeight))) {
                fixed = true;
            }
        }
        var isFullSizeCell = this._checkFullSizeCell();
        var grow = fixed && !isFullSizeCell ? 0 : isFullSizeCell ? 1 : gravityNumber || 1;
        var fillSpace = this._isXDirection() ? "x" : "y";
        if (minWidth !== undefined && !collapsed)
            style.minWidth = minWidth;
        if (minHeight !== undefined && !collapsed)
            style.minHeight = minHeight;
        if (maxWidth !== undefined)
            style.maxWidth = maxWidth;
        if (maxHeight !== undefined)
            style.maxHeight = maxHeight;
        if (this._parent === undefined && !fillSpace !== undefined) {
            fillSpace = true;
        }
        if (!isFullSizeCell && width !== undefined && width !== "content") {
            style.width = width;
        }
        else {
            if (fillSpace === true) {
                style.width = "100%";
            }
            else if (fillSpace === "x") {
                if (autoWidth) {
                    style.flex = "0 0 auto";
                }
                else {
                    var isAuto = this._isXDirection() ? "1px" : "auto";
                    style.flex = "".concat(grow, " ").concat(cols || rows ? "0 ".concat(isAuto) : "1 auto");
                }
            }
        }
        if (!isFullSizeCell && height !== undefined && height !== "content") {
            style.height = height;
        }
        else {
            if (fillSpace === true) {
                style.height = "100%";
            }
            else if (fillSpace === "y") {
                if (autoHeight) {
                    style.flex = "0 0 auto";
                }
                else {
                    var isAuto = !this._isXDirection() ? "1px" : "auto";
                    style.flex = "".concat(grow, " ").concat(cols || rows ? "0 ".concat(isAuto) : "1 auto");
                }
            }
        }
        if (fillSpace === true && config.width === undefined && config.height === undefined) {
            style.flex = "".concat(grow, " 1 auto");
        }
        if (collapsed) {
            if (this._isXDirection()) {
                style.width = "auto";
            }
            else {
                style.height = "auto";
            }
            style.flex = "0 0 auto";
        }
        return style;
    };
    Cell.prototype._resizedWindow = function () {
        var _a;
        if (this._isLastFlexCell === undefined) {
            this._isLastFlexCell = ((_a = this._getAnyFlexCell(true)) === null || _a === void 0 ? void 0 : _a.id) === this.id;
        }
        else if (!this._isLastFlexCell) {
            window.removeEventListener("resize", this._afterWindowResized);
        }
        if (this._isLastFlexCell) {
            var prop = this._isXDirection() ? "width" : "height";
            this.config[prop] = undefined;
            this.paint();
        }
    };
    Cell.prototype._resetCellsSize = function () {
        var _this = this;
        var cells = this._parent._cells.filter(function (cell) {
            return cell !== _this && !cell.config.hidden && !cell.config.collapsed;
        });
        var direction = this._isXDirection();
        var autoSize = direction ? "$autoWidth" : "$autoHeight";
        var size = direction ? "width" : "height";
        cells.forEach(function (cell) {
            if (cell.config[autoSize]) {
                cell.config[size] = undefined;
            }
        });
    };
    Cell.prototype._checkFullSizeCell = function () {
        var _this = this;
        if (!this._parent)
            return false;
        var autoSize = this._isXDirection() ? "$autoWidth" : "$autoHeight";
        if (!this.config[autoSize])
            return false;
        var cells = this._parent._cells.filter(function (cell) {
            return cell !== _this && !cell.config.hidden;
        });
        return !!cells.length && cells.every(function (cell) { return cell.config.collapsed; });
    };
    return Cell;
}(view_1.View));
exports.Cell = Cell;


/***/ }),
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.SliderEvents = void 0;
var SliderEvents;
(function (SliderEvents) {
    SliderEvents["beforeChange"] = "beforeChange";
    SliderEvents["change"] = "change";
    SliderEvents["focus"] = "focus";
    SliderEvents["blur"] = "blur";
    SliderEvents["keydown"] = "keydown";
    SliderEvents["mousedown"] = "mousedown";
    SliderEvents["mouseup"] = "mouseup";
})(SliderEvents || (exports.SliderEvents = SliderEvents = {}));


/***/ }),
/* 21 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.TimepickerEvents = void 0;
var TimepickerEvents;
(function (TimepickerEvents) {
    TimepickerEvents["beforeChange"] = "beforeChange";
    TimepickerEvents["change"] = "change";
    TimepickerEvents["beforeApply"] = "beforeApply";
    TimepickerEvents["afterApply"] = "afterApply";
    TimepickerEvents["beforeClose"] = "beforeClose";
    TimepickerEvents["afterClose"] = "afterClose";
    /** @deprecated See a documentation: https://docs.dhtmlx.com/ */
    TimepickerEvents["apply"] = "apply";
    /** @deprecated See a documentation: https://docs.dhtmlx.com/ */
    TimepickerEvents["close"] = "close";
    /** @deprecated See a documentation: https://docs.dhtmlx.com/ */
    TimepickerEvents["save"] = "save";
})(TimepickerEvents || (exports.TimepickerEvents = TimepickerEvents = {}));


/***/ }),
/* 22 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.DateHelper = exports.stringToDate = exports.getFormattedDate = exports.locale = void 0;
var core_1 = __webpack_require__(0);
var core_2 = __webpack_require__(0);
exports.locale = {
    monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    months: [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ],
    daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
    days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Monday"],
    cancel: "Cancel",
};
/*
    %d	day as a number with leading zero, 01..31
    %j	day as a number, 1..31
    %D	short name of the day, Su Mo Tu...
    %l	full name of the day, Sunday Monday Tuesday...
    %m	month as a number with leading zero, 01..12
    %n	month as a number, 1..12
    %M	short name of the month, Jan Feb Mar...
    %F	full name of the month, January February March...
    %y	year as a number, 2 digits
    %Y	year as a number, 4 digits
    %h	hours 12-format with leading zero, 01..12)
    %g	hours 12-format, 1..12)
    %H	hours 24-format with leading zero, 01..24
    %G	hours 24-format, 1..24
    %i	minutes with leading zero, 01..59
    %s	seconds with leading zero, 01..59
    %a	am or pm
    %A	AM or PM
    %u	milliseconds
*/
var formatters = {
    "%d": function (date) {
        var day = date.getDate();
        return day < 10 ? "0" + day : day;
    },
    "%j": function (date) { return date.getDate(); },
    "%l": function (date) {
        return exports.locale.days[date.getDay()];
    },
    "%D": function (date) {
        return exports.locale.daysShort[date.getDay()];
    },
    "%m": function (date) {
        var month = date.getMonth() + 1;
        return month < 10 ? "0" + month : month;
    },
    "%n": function (date) { return date.getMonth() + 1; },
    "%M": function (date) { return exports.locale.monthsShort[date.getMonth()]; },
    "%F": function (date) { return exports.locale.months[date.getMonth()]; },
    "%y": function (date) {
        return date
            .getFullYear()
            .toString()
            .slice(2);
    },
    "%Y": function (date) { return date.getFullYear(); },
    "%h": function (date) {
        var hours = date.getHours() % 12;
        if (hours === 0) {
            hours = 12;
        }
        return hours < 10 ? "0" + hours : hours;
    },
    "%g": function (date) {
        var hours = date.getHours() % 12;
        if (hours === 0) {
            hours = 12;
        }
        return hours;
    },
    "%H": function (date) {
        var hours = date.getHours();
        return hours < 10 ? "0" + hours : hours;
    },
    "%G": function (date) { return date.getHours(); },
    "%i": function (date) {
        var minutes = date.getMinutes();
        return minutes < 10 ? "0" + minutes : minutes;
    },
    "%s": function (date) {
        var seconds = date.getSeconds();
        return seconds < 10 ? "0" + seconds : seconds;
    },
    "%a": function (date) {
        return date.getHours() >= 12 ? "pm" : "am";
    },
    "%A": function (date) {
        return date.getHours() >= 12 ? "PM" : "AM";
    },
    "%u": function (date) { return date.getMilliseconds(); },
};
var setFormatters = {
    "%d": function (date, value, _format, validate) {
        var check = /(^([0-9][0-9])$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setDate(Number(value)) : date.setDate(Number(1));
    },
    "%j": function (date, value, _format, validate) {
        var check = /(^([0-9]?[0-9])$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setDate(Number(value)) : date.setDate(Number(1));
    },
    "%m": function (date, value, _format, validate) {
        var check = /(^([0-9][0-9])$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setMonth(Number(value) - 1) : date.setMonth(Number(0));
        if (check && date.getMonth() !== Number(value) - 1)
            date.setMonth(Number(value) - 1);
    },
    "%n": function (date, value, _format, validate) {
        var check = /(^([0-9]?[0-9])$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setMonth(Number(value) - 1) : date.setMonth(Number(0));
        if (check && date.getMonth() !== Number(value) - 1)
            date.setMonth(Number(value) - 1);
    },
    "%M": function (date, value, _format, validate) {
        var index = (0, core_2.findIndex)(exports.locale.monthsShort, function (v) { return v === value; });
        if (validate) {
            return index !== -1;
        }
        index === -1 ? date.setMonth(0) : date.setMonth(index);
        if (index !== -1 && date.getMonth() !== index)
            date.setMonth(index);
    },
    "%F": function (date, value, _format, validate) {
        var index = (0, core_2.findIndex)(exports.locale.months, function (v) { return v === value; });
        if (validate) {
            return index !== -1;
        }
        index === -1 ? date.setMonth(0) : date.setMonth(index);
        if (index !== -1 && date.getMonth() !== index)
            date.setMonth(index);
    },
    "%y": function (date, value, _format, validate) {
        var check = /(^([0-9][0-9])$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setFullYear(Number("20" + value)) : date.setFullYear(Number("2000"));
    },
    "%Y": function (date, value, _format, validate) {
        var check = /(^([0-9][0-9][0-9][0-9])$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setFullYear(Number(value)) : date.setFullYear(Number("2000"));
    },
    "%h": function (date, value, dateFormat, validate) {
        var check = /(^0[1-9]|1[0-2]$)/i.test(value);
        if (validate) {
            return check;
        }
        (check && (dateFormat === "am" || dateFormat === "pm")) || dateFormat === "AM" || dateFormat === "PM"
            ? date.setHours(Number(value))
            : date.setHours(Number(0));
    },
    "%g": function (date, value, dateFormat, validate) {
        var check = /(^[1-9]$)|(^0[1-9]|1[0-2]$)/i.test(value);
        if (validate) {
            return check;
        }
        (check && (dateFormat === "am" || dateFormat === "pm")) || dateFormat === "AM" || dateFormat === "PM"
            ? date.setHours(Number(value))
            : date.setHours(Number(0));
    },
    "%H": function (date, value, _format, validate) {
        var check = /(^[0-2][0-9]$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setHours(Number(value)) : date.setHours(Number(0));
    },
    "%G": function (date, value, _format, validate) {
        var check = /(^[1-9][0-9]?$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setHours(Number(value)) : date.setHours(Number(0));
    },
    "%i": function (date, value, _format, validate) {
        var check = /(^([0-5][0-9])$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setMinutes(Number(value)) : date.setMinutes(Number(0));
    },
    "%s": function (date, value, _format, validate) {
        var check = /(^([0-5][0-9])$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setSeconds(Number(value)) : date.setSeconds(Number(0));
    },
    "%u": function (date, value, _format, validate) {
        var check = /(^([0-9][0-9][0-9])$)/i.test(value);
        if (validate) {
            return check;
        }
        check ? date.setMilliseconds(Number(value)) : date.setMilliseconds(Number(0));
    },
    "%a": function (date, value, _format, validate) {
        if (validate) {
            return value === "pm" || value === "am";
        }
        value === "pm" && date.setHours(date.getHours() + 12);
    },
    "%A": function (date, value, _format, validate) {
        if (validate) {
            return value === "PM" || value === "AM";
        }
        value === "PM" && date.setHours(date.getHours() + 12);
    },
};
var TokenType;
(function (TokenType) {
    TokenType[TokenType["separator"] = 0] = "separator";
    TokenType[TokenType["datePart"] = 1] = "datePart";
})(TokenType || (TokenType = {}));
function tokenizeFormat(format) {
    var tokens = [];
    var currentSeparator = "";
    for (var i = 0; i < format.length; i++) {
        if (format[i] === "%") {
            if (currentSeparator.length > 0) {
                tokens.push({
                    type: TokenType.separator,
                    value: currentSeparator,
                });
                currentSeparator = "";
            }
            tokens.push({
                type: TokenType.datePart,
                value: format[i] + format[i + 1],
            });
            i++;
        }
        else {
            currentSeparator += format[i];
        }
    }
    if (currentSeparator.length > 0) {
        tokens.push({
            type: TokenType.separator,
            value: currentSeparator,
        });
    }
    return tokens;
}
function getFormattedDate(format, date) {
    return tokenizeFormat(format).reduce(function (res, token) {
        if (token.type === TokenType.separator) {
            return res + token.value;
        }
        else {
            if (!formatters[token.value]) {
                return res;
            }
            return res + formatters[token.value](date);
        }
    }, "");
}
exports.getFormattedDate = getFormattedDate;
var datePartQueue = { "%Y": 1, "%y": 1, "%M": 2, "%F": 2, "%m": 2, "%n": 2 };
function stringToDate(str, format, validate) {
    if (typeof str !== "string") {
        return;
    }
    format = format.replace(/([a-z])(%a)/i, function () {
        var match = [];
        for (var _i = 0; _i < arguments.length; _i++) {
            match[_i] = arguments[_i];
        }
        str = str.replace(/(am|pm)/i, " $&");
        return match[1] + " " + match[2];
    });
    var tokens = tokenizeFormat(format);
    var dateParts = new Array(2);
    var index = 0;
    var formatter = null;
    var dateFormat;
    var message = "Incorrect date, see docs: https://docs.dhtmlx.com/suite/calendar__api__calendar_dateformat_config.html";
    var addDatePart = function (part) {
        var queue = datePartQueue[part.formatter];
        if (queue) {
            dateParts[queue - 1] = part;
            return;
        }
        if (part.formatter === "%A" || part.formatter === "%a") {
            dateFormat = part.value;
        }
        dateParts.push(part);
    };
    for (var i = 0; i < tokens.length; i++) {
        if (tokens[i].type === TokenType.separator) {
            var separatorIndex = str.indexOf(tokens[i].value, index);
            if (separatorIndex === -1) {
                if (validate) {
                    return false;
                }
                throw new Error(message);
            }
            if (formatter) {
                addDatePart({
                    formatter: formatter,
                    value: str.slice(index, separatorIndex),
                });
                formatter = null;
            }
            index = separatorIndex + tokens[i].value.length;
        }
        else if (tokens[i].type === TokenType.datePart) {
            if (tokens[i + 1] && tokens[i + 1].type !== TokenType.separator) {
                if (validate) {
                    return false;
                }
                throw new Error(message);
            }
            else {
                formatter = tokens[i].value;
            }
        }
    }
    if (formatter) {
        addDatePart({
            formatter: formatter,
            value: str.slice(index),
        });
    }
    var date = new Date(0);
    for (var _i = 0, dateParts_1 = dateParts; _i < dateParts_1.length; _i++) {
        var datePart = dateParts_1[_i];
        if (!datePart)
            continue;
        if (setFormatters[datePart.formatter]) {
            if (validate && !setFormatters[datePart.formatter](date, datePart.value, dateFormat, validate)) {
                return false;
            }
            setFormatters[datePart.formatter](date, datePart.value, dateFormat);
        }
    }
    return validate ? true : date;
}
exports.stringToDate = stringToDate;
var DateHelper = exports.DateHelper = /** @class */ (function () {
    function DateHelper() {
    }
    DateHelper.copy = function (d) {
        return new Date(d);
    };
    DateHelper.fromYear = function (year) {
        return new Date(year, 0, 1);
    };
    DateHelper.fromYearAndMonth = function (year, month) {
        return new Date(year, month, 1);
    };
    DateHelper.weekStart = function (d, firstWeekday) {
        var diff = (d.getDay() + 7 - firstWeekday) % 7;
        return new Date(d.getFullYear(), d.getMonth(), d.getDate() - diff);
    };
    DateHelper.monthStart = function (d) {
        return new Date(d.getFullYear(), d.getMonth(), 1);
    };
    DateHelper.yearStart = function (d) {
        return new Date(d.getFullYear(), 0, 1);
    };
    DateHelper.dayStart = function (d) {
        return new Date(d.getFullYear(), d.getMonth(), d.getDate());
    };
    DateHelper.addDay = function (d, count) {
        if (count === void 0) { count = 1; }
        return new Date(d.getFullYear(), d.getMonth(), d.getDate() + count);
    };
    DateHelper.addMonth = function (d, count) {
        if (count === void 0) { count = 1; }
        return new Date(d.getFullYear(), d.getMonth() + count);
    };
    DateHelper.addYear = function (d, count) {
        if (count === void 0) { count = 1; }
        return new Date(d.getFullYear() + count, d.getMonth());
    };
    DateHelper.withHoursAndMinutes = function (d, hours, minutes, dateFormat) {
        if (dateFormat === undefined || (!dateFormat && hours === 12) || (dateFormat && hours !== 12)) {
            return new Date(d.getFullYear(), d.getMonth(), d.getDate(), hours, minutes);
        }
        else if (dateFormat && hours === 12) {
            return new Date(d.getFullYear(), d.getMonth(), d.getDate(), 0, minutes);
        }
        else {
            return new Date(d.getFullYear(), d.getMonth(), d.getDate(), hours + 12, minutes);
        }
    };
    DateHelper.setMonth = function (d, month) {
        d.setMonth(month);
    };
    DateHelper.setYear = function (d, year) {
        d.setFullYear(year);
    };
    DateHelper.mergeHoursAndMinutes = function (source, target) {
        return new Date(source.getFullYear(), source.getMonth(), source.getDate(), target.getHours(), target.getMinutes());
    };
    DateHelper.isWeekEnd = function (d) {
        return d.getDay() === 0 || d.getDay() === 6;
    };
    DateHelper.getTwelweYears = function (d) {
        var y = d.getFullYear();
        var firstYear = y - (y % 12);
        return (0, core_1.range)(firstYear, firstYear + 11);
    };
    DateHelper.getDayOrdinal = function (d) {
        var dayMS = 24 * 60 * 60 * 1000;
        return (d.valueOf() - DateHelper.yearStart(d).valueOf()) / dayMS;
    };
    DateHelper.getWeekNumber = function (d) {
        var currThursday = d.getDay() === 4 ? d : DateHelper.addDay(d, 4 - d.getDay());
        var ordinal = DateHelper.getDayOrdinal(currThursday);
        return Math.trunc(ordinal / 7) + 1;
    };
    DateHelper.isSameDay = function (d1, d2) {
        return (d1.getFullYear() === d2.getFullYear() &&
            d1.getMonth() === d2.getMonth() &&
            d1.getDate() === d2.getDate());
    };
    DateHelper.toDateObject = function (date, dateFormat) {
        if (typeof date === "string") {
            return stringToDate(date, dateFormat);
        }
        else {
            return new Date(date);
        }
    };
    DateHelper.nullTimestampDate = new Date(0);
    return DateHelper;
}());


/***/ }),
/* 23 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
var __spreadArray = (this && this.__spreadArray) || function (to, from, pack) {
    if (pack || arguments.length === 2) for (var i = 0, l = from.length, ar; i < l; i++) {
        if (ar || !(i in from)) {
            if (!ar) ar = Array.prototype.slice.call(from, 0, i);
            ar[i] = from[i];
        }
    }
    return to.concat(ar || Array.prototype.slice.call(from));
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.DataCollection = void 0;
var events_1 = __webpack_require__(4);
var loader_1 = __webpack_require__(65);
var sort_1 = __webpack_require__(67);
var dataproxy_1 = __webpack_require__(8);
var helpers_1 = __webpack_require__(3);
var types_1 = __webpack_require__(5);
var core_1 = __webpack_require__(0);
var group_1 = __webpack_require__(68);
var CsvDriver_1 = __webpack_require__(14);
var XMLDriver_1 = __webpack_require__(26);
var DataCollection = /** @class */ (function () {
    function DataCollection(config, events) {
        var _this = this;
        this._filters = {};
        this._sortingStates = [];
        this._changes = { order: [] };
        this.config = config || {};
        this._group = new group_1.Group();
        this._sort = new sort_1.Sort();
        this._loader = new loader_1.Loader(this, this._changes);
        this.events = events || new events_1.EventSystem(this);
        this.events.on(types_1.DataEvents.dataRequest, function (from, to) {
            var proxy = _this.dataProxy;
            if (proxy && proxy.updateUrl) {
                proxy.updateUrl(null, { from: from, limit: proxy.config.limit || to - from });
                _this.load(proxy);
            }
        });
        this.events.on(types_1.DataEvents.loadError, function (response) {
            setTimeout(function () {
                if (typeof response !== "string") {
                    (0, helpers_1.dhxError)(response);
                }
                else {
                    (0, helpers_1.dhxWarning)(response);
                }
            }, 0);
        });
        this._reset();
    }
    DataCollection.prototype._reset = function (config) {
        if (config === void 0) { config = {}; }
        if (!config.grouping)
            this.ungroup();
        this._order = [];
        this._pull = {};
        this._changes = { order: [] };
        this._initFilterOrder = this._initSortOrder = null;
        this._meta = new WeakMap();
        this._loaded = false;
    };
    DataCollection.prototype.group = function (order, config) {
        if (config === void 0) { config = {}; }
        if (!order) {
            (0, helpers_1.dhxError)("The group method has mandatory arguments");
        }
        if (!Array.isArray(order)) {
            (0, helpers_1.dhxError)("The group method expects an array as an argument");
        }
        if (!order.length) {
            (0, helpers_1.dhxError)("The array with the group method values cannot be empty");
        }
        if (this.isGrouped())
            this.ungroup();
        var groupConfig = this._group.getGroupConfig(config);
        if (!this.events.fire(types_1.DataEvents.beforeGroup, [groupConfig])) {
            return;
        }
        this._parse(this._group.group(order, (config === null || config === void 0 ? void 0 : config.data) || this._order, config), types_1.DataDriver.json, true);
        this.events.fire(types_1.DataEvents.afterGroup, [this._group.getGroupedFields(), groupConfig]);
    };
    DataCollection.prototype.ungroup = function () {
        if (!this.isGrouped()) {
            return;
        }
        var grouped = this._group.getGroupedFields();
        var groupConfig = this._group.getGroupConfig();
        if (!this.events.fire(types_1.DataEvents.beforeUnGroup, [grouped, groupConfig])) {
            return;
        }
        this._parse(this._group.ungroup(this._order));
        this.events.fire(types_1.DataEvents.afterUnGroup, [grouped, groupConfig]);
    };
    DataCollection.prototype.isGrouped = function () {
        return this._group.isGrouped();
    };
    DataCollection.prototype.add = function (newItem, index) {
        var _this = this;
        if (!this.events.fire(types_1.DataEvents.beforeAdd, [newItem])) {
            return;
        }
        var out;
        if (Array.isArray(newItem)) {
            out = newItem.map(function (element, key) {
                if (key !== 0 && index >= 0) {
                    index = index + 1;
                }
                return _this._add((0, core_1.copy)(element), index);
            });
        }
        else {
            out = this._add((0, core_1.copy)(newItem), index);
        }
        this._reapplyFilters();
        return out;
    };
    DataCollection.prototype.remove = function (id) {
        var _this = this;
        if (id instanceof Array) {
            __spreadArray([], id, true).map(function (elementId) {
                _this._remove(elementId);
            });
        }
        else if ((0, core_1.isId)(id)) {
            this._remove(id);
        }
    };
    DataCollection.prototype.removeAll = function () {
        this._reset();
        this.events.fire(types_1.DataEvents.removeAll);
        this.events.fire(types_1.DataEvents.change);
    };
    DataCollection.prototype.exists = function (id) {
        return !!this._pull[id];
    };
    DataCollection.prototype.getNearId = function (id) {
        var _a;
        var item = this._pull[id];
        if (!item) {
            return ((_a = this._order[0]) === null || _a === void 0 ? void 0 : _a.id) || "";
        }
    };
    DataCollection.prototype.getItem = function (id) {
        return this._pull[id];
    };
    DataCollection.prototype.update = function (id, newItem, silent) {
        var item = this.getItem(id);
        if (item) {
            if ((0, helpers_1.isEqualObj)(newItem, item)) {
                return;
            }
            if ((0, core_1.isId)(newItem.id) && id !== newItem.id) {
                (0, helpers_1.dhxWarning)("this method doesn't allow changing the id");
                if ((0, helpers_1.isDebug)()) {
                    // eslint-disable-next-line no-debugger
                    debugger;
                }
            }
            else {
                if (newItem.parent && item.parent && newItem.parent !== item.parent) {
                    this.move(id, -1, this, newItem.parent);
                }
                (0, core_1.extend)(this._pull[id], newItem, false);
                if (this.config.update) {
                    this.config.update(this._pull[id]);
                }
                if (!silent) {
                    this._onChange("update", id, this._pull[id]);
                }
            }
            this._reapplyFilters();
        }
        else {
            (0, helpers_1.dhxWarning)("item not found");
        }
    };
    DataCollection.prototype.getIndex = function (id) {
        if (!(0, core_1.isId)(id) || !(0, core_1.isDefined)(this._pull[id])) {
            return -1;
        }
        return this._order.findIndex(function (i) { return (i === null || i === void 0 ? void 0 : i.id) == id; });
    };
    DataCollection.prototype.getId = function (index) {
        if (!this._order[index]) {
            return;
        }
        return this._order[index].id;
    };
    DataCollection.prototype.getLength = function () {
        return this._order.length;
    };
    DataCollection.prototype.isDataLoaded = function (from, to) {
        if (from === void 0) { from = 0; }
        if (to === void 0) { to = this._order.length; }
        if ((0, core_1.isNumeric)(from) && (0, core_1.isNumeric)(to)) {
            return this._order.slice(from, to).filter(function (item) { return item && item.$empty; }).length === 0;
        }
        // if check succeeds once, collection can't go back to not-loaded state
        if (!this._loaded) {
            this._loaded = !this.find(function (item) { return item.$empty; });
        }
        return !!this._loaded;
    };
    DataCollection.prototype.filter = function (rule, config, silent) {
        var _a;
        if (config === null || config === void 0 ? void 0 : config.$restore) {
            rule = this._normalizeFilters(rule || this._filters);
        }
        if (!(config === null || config === void 0 ? void 0 : config.add)) {
            this._order = this._initFilterOrder || this._order;
            this._initFilterOrder = null;
            if (!(config === null || config === void 0 ? void 0 : config.$restore)) {
                for (var key in this._filters) {
                    var filter = this._filters[key];
                    if ((_a = filter.config) === null || _a === void 0 ? void 0 : _a.permanent) {
                        this._applyFilters(filter.rule);
                    }
                    else {
                        delete this._filters[key];
                    }
                }
            }
        }
        var id;
        if (rule && !(config === null || config === void 0 ? void 0 : config.$restore)) {
            id = (config === null || config === void 0 ? void 0 : config.id) || (0, core_1.uid)();
            this._filters[id] = { rule: rule, config: config || {} };
        }
        if (rule && typeof rule !== "function") {
            if ((0, core_1.isDefined)(rule.by)) {
                this._applyFilters(rule);
            }
            else {
                for (var key in rule) {
                    this._applyFilters(rule[key]);
                }
            }
        }
        else {
            this._applyFilters(rule);
        }
        if (!silent) {
            var filters = this._getPureFilters(this._filters);
            this.events.fire(types_1.DataEvents.filter, [(0, core_1.isEmptyObj)(filters) ? null : filters]);
        }
        return id;
    };
    DataCollection.prototype.resetFilter = function (config, silent) {
        var _a;
        var _b = config || {}, id = _b.id, permanent = _b.permanent;
        if ((0, core_1.isEmptyObj)(config)) {
            for (var key in this._filters) {
                if (!((_a = this._filters[key].config) === null || _a === void 0 ? void 0 : _a.permanent)) {
                    delete this._filters[key];
                }
            }
        }
        else if (permanent) {
            this._filters = {};
        }
        else if (id) {
            delete this._filters[id];
        }
        this.filter(null, { $restore: true }, silent);
        return (0, core_1.isEmptyObj)(this._getPureFilters(this._filters));
    };
    DataCollection.prototype.getFilters = function (config) {
        var filters = this.getRawFilters(config);
        var pureFilters = filters ? this._getPureFilters(filters) : {};
        return (0, core_1.isEmptyObj)(pureFilters) ? null : pureFilters;
    };
    DataCollection.prototype.getRawFilters = function (config) {
        var filters = this._filters;
        if (config === null || config === void 0 ? void 0 : config.permanent) {
            filters = Object.keys(filters).reduce(function (obj, key) {
                var _a;
                if ((_a = filters[key].config) === null || _a === void 0 ? void 0 : _a.permanent) {
                    obj[key] = filters[key];
                }
                return obj;
            }, {});
        }
        return (0, core_1.isEmptyObj)(filters) ? null : filters;
    };
    DataCollection.prototype.find = function (conf) {
        var data = this._initFilterOrder || this._order;
        for (var i = 0; i < data.length; i++) {
            var res = (0, helpers_1.findByConf)(data[i], conf, i, data);
            if (res) {
                return res;
            }
        }
        return null;
    };
    DataCollection.prototype.findAll = function (conf) {
        var data = this._initFilterOrder || this._order;
        var res = [];
        for (var i = 0; i < data.length; i++) {
            var item = (0, helpers_1.findByConf)(data[i], conf, i, data);
            if (item) {
                res.push(item);
            }
        }
        return res;
    };
    DataCollection.prototype.sort = function (rule, config, ignore) {
        var _this = this;
        var _a, _b;
        if (ignore === void 0) { ignore = false; }
        if (!this.isDataLoaded()) {
            (0, helpers_1.dhxWarning)("the method doesn't work with lazyLoad");
            return;
        }
        if (config === null || config === void 0 ? void 0 : config.smartSorting) {
            this._sorter = rule;
        }
        if (!ignore &&
            (!this._sortingStates.length ||
                (config === null || config === void 0 ? void 0 : config.smartSorting) ||
                (!((_a = this._sortingStates[0]) === null || _a === void 0 ? void 0 : _a.smartSorting) && !(config === null || config === void 0 ? void 0 : config.smartSorting)))) {
            this._sortingStates = [__assign(__assign({}, rule), config)];
        }
        if (rule) {
            if (!ignore) {
                this._initSortOrder = this._initSortOrder || __spreadArray([], (this._initFilterOrder || this._order), true);
                if (!(config === null || config === void 0 ? void 0 : config.smartSorting) && ((_b = this._sortingStates[0]) === null || _b === void 0 ? void 0 : _b.smartSorting)) {
                    var sortIndex = this._sortingStates.findIndex(function (i) { return i.by == rule.by; });
                    if (sortIndex !== -1) {
                        this._sortingStates[sortIndex].dir = rule.dir;
                        this._sortingStates.forEach(function (sort, index) {
                            _this.sort(sort, { smartSorting: !index }, true);
                        });
                    }
                    else {
                        this._sortingStates.push(rule);
                    }
                }
            }
            this._applySorters(rule);
        }
        else if (this._initSortOrder) {
            this._sortingStates = [];
            this._order = this._initSortOrder;
            this._sorter = this._initSortOrder = null;
            if (this._initFilterOrder) {
                this._initFilterOrder = null;
                this.filter(null, { $restore: true }, true);
            }
        }
        if (!ignore) {
            this.events.fire(types_1.DataEvents.change, [undefined, "sort", rule]);
        }
    };
    DataCollection.prototype.getSortingStates = function () {
        return this._sortingStates;
    };
    DataCollection.prototype.copy = function (id, index, target, targetId) {
        var _this = this;
        if (id instanceof Array) {
            return id.map(function (elementId, key) {
                return _this._copy(elementId, index, target, targetId, key);
            });
        }
        else {
            return this._copy(id, index, target, targetId);
        }
    };
    DataCollection.prototype.move = function (id, index, target, targetId, newId) {
        var _this = this;
        var _a;
        if (id instanceof Array) {
            var movedIds_1 = [];
            id.forEach(function (elementId, key) {
                if ((0, core_1.isId)(_this._move(elementId, index, target, targetId, key))) {
                    movedIds_1.push(elementId);
                }
                else {
                    (0, helpers_1.throwMoveWarning)(elementId, _this.exists(elementId));
                }
            });
            return movedIds_1;
        }
        else {
            return (_a = this._move(id, index, target, targetId, 0, newId)) !== null && _a !== void 0 ? _a : (0, helpers_1.throwMoveWarning)(id, this.exists(id));
        }
    };
    DataCollection.prototype.forEach = function (callback) {
        for (var i = 0; i < this._order.length; i++) {
            callback.call(this, this._order[i], i, this._order);
        }
    };
    DataCollection.prototype.load = function (url, driver) {
        if (typeof url === "string") {
            this.dataProxy = url = new dataproxy_1.DataProxy(url);
        }
        if (typeof driver === "string") {
            driver = driver.toLocaleLowerCase();
        }
        if (driver === "xml" ||
            driver === "csv" ||
            driver instanceof XMLDriver_1.XMLDriver ||
            driver instanceof CsvDriver_1.CsvDriver) {
            url.config.responseType = url.config.responseType || "text";
        }
        this.dataProxy = url;
        return this._loader.load(url, driver);
    };
    DataCollection.prototype.parse = function (data, driver) {
        return this._parse(data, driver);
    };
    DataCollection.prototype.$parse = function (data) {
        var apx = this.config.approximate;
        if (apx) {
            data = this._approximate(data, apx.value, apx.maxNum);
        }
        this._parse_data(data);
        this._reapplyFilters();
        this.events.fire(types_1.DataEvents.change, [undefined, "load"]);
        this.events.fire(types_1.DataEvents.load);
    };
    DataCollection.prototype.save = function (url) {
        if (typeof url === "string") {
            url = new dataproxy_1.DataProxy(url);
        }
        this._loader.save(url);
    };
    DataCollection.prototype.changeId = function (id, newId, silent) {
        if (newId === void 0) { newId = (0, core_1.uid)(); }
        if (id == newId)
            return;
        if (this.exists(newId)) {
            (0, helpers_1.dhxWarning)("item with ID ".concat(newId, " already exists"));
            return;
        }
        var item = this.getItem(id);
        if (!item) {
            (0, helpers_1.dhxWarning)("item not found");
        }
        else {
            item.id = newId;
            (0, core_1.extend)(this._pull[id], item);
            this._pull[newId] = this._pull[id];
            if (!silent) {
                this._onChange("update", newId, this._pull[newId]);
            }
            delete this._pull[id];
        }
    };
    // todo: loop through the array and check saved statuses
    DataCollection.prototype.isSaved = function () {
        return !this._changes.order.length; // todo: bad solution, errors and holded elments are missed...
    };
    DataCollection.prototype.map = function (callback) {
        var result = [];
        for (var i = 0; i < this._order.length; i++) {
            result.push(callback.call(this, this._order[i], i, this._order));
        }
        return result;
    };
    DataCollection.prototype.mapRange = function (from, to, callback) {
        if (from < 0)
            from = 0;
        if (to > this._order.length - 1)
            to = this._order.length - 1;
        var arr = this._order.slice(from, to + 1);
        var result = [];
        for (var i = from; i <= to; i++) {
            result.push(callback.call(this, this._order[i], i, arr));
        }
        return result;
    };
    DataCollection.prototype.reduce = function (callback, acc) {
        for (var i = 0; i < this._order.length; i++) {
            acc = callback.call(this, acc, this._order[i], i);
        }
        return acc;
    };
    DataCollection.prototype.serialize = function (driver) {
        if (driver === void 0) { driver = types_1.DataDriver.json; }
        // remove $ attrs
        var data = [];
        var _loop_1 = function (index) {
            var item = __assign({}, this_1._order[index]);
            Object.keys(item).forEach(function (key) {
                if (key.startsWith("$")) {
                    delete item[key];
                }
            });
            if (!(0, core_1.isDefined)(item.parent))
                delete item.parent;
            data.push(item);
        };
        var this_1 = this;
        for (var index = 0; index < this._order.length; index++) {
            _loop_1(index);
        }
        var dataDriver = (0, helpers_1.toDataDriver)(driver);
        if (dataDriver) {
            return dataDriver.serialize(data);
        }
    };
    DataCollection.prototype.getInitialData = function () {
        return this._initFilterOrder;
    };
    DataCollection.prototype.setMeta = function (obj, key, value) {
        if (!obj)
            return;
        var map = this._meta.get(obj);
        if (!map) {
            map = {};
            this._meta.set(obj, map);
        }
        map[key] = value;
    };
    DataCollection.prototype.getMeta = function (obj, key) {
        var map = this._meta.get(obj);
        return map ? map[key] : null;
    };
    DataCollection.prototype.getMetaMap = function (obj) {
        return this._meta.get(obj);
    };
    DataCollection.prototype.setRange = function (from, to) {
        this._range = !to ? null : [from, to];
    };
    DataCollection.prototype.getRawData = function (from, to, order, mode) {
        order = order || this._order;
        if (mode === 1)
            return order;
        if (this._range) {
            from = this._range[0] + from;
            if (to === -1) {
                to = this._range[1];
            }
            else {
                var diff = Math.abs(to - from);
                to = from + diff > this._range[1] ? this._range[1] : from + diff;
            }
        }
        if (!to || (from === 0 && (to === -1 || to === order.length))) {
            return order;
        }
        if (from >= order.length)
            return [];
        if (to === -1 || to > order.length)
            to = order.length;
        var slice = order.slice(from, to);
        if (slice.filter(function (item) { return item.$empty; }).length !== 0) {
            this.events.fire(types_1.DataEvents.dataRequest, [from, to]);
        }
        return slice;
    };
    DataCollection.prototype._add = function (newItem, index) {
        var id = this._addCore(newItem, index);
        this._onChange("add", newItem.id, newItem);
        this.events.fire(types_1.DataEvents.afterAdd, [newItem]);
        return id;
    };
    DataCollection.prototype._remove = function (id) {
        var removedItem = this._pull[id];
        if (removedItem) {
            if (!this.events.fire(types_1.DataEvents.beforeRemove, [removedItem])) {
                return;
            }
            this._removeCore(removedItem.id);
            this._onChange("remove", id, removedItem);
        }
        this.events.fire(types_1.DataEvents.afterRemove, [removedItem]);
    };
    DataCollection.prototype._copy = function (id, index, target, targetId, key) {
        if (!this.exists(id)) {
            return null;
        }
        var newid = (0, core_1.uid)();
        if (key) {
            index = index === -1 ? -1 : index + key;
        }
        if (target) {
            if (!(target instanceof DataCollection) && targetId) {
                target.add((0, helpers_1.copyWithoutInner)(this.getItem(id)), index);
                return;
            }
            if (target.exists(id)) {
                target.add(__assign(__assign({}, (0, helpers_1.copyWithoutInner)(this.getItem(id))), { id: newid }), index);
                return newid;
            }
            else {
                target.add((0, helpers_1.copyWithoutInner)(this.getItem(id)), index);
                return id;
            }
        }
        this.add(__assign(__assign({}, (0, helpers_1.copyWithoutInner)(this.getItem(id))), { id: newid }), index);
        return newid;
    };
    DataCollection.prototype._move = function (id, index, target, targetId, key, newId) {
        if (!this.exists(id)) {
            return null;
        }
        if (key && index < this.getIndex(id)) {
            index = index === -1 ? -1 : index + key;
        }
        if (target && target !== this && this.exists(id)) {
            var item = (0, core_1.copy)(this.getItem(id), true);
            if (newId)
                item.id = newId;
            if ((!newId && target.exists(id)) || target.exists(newId)) {
                item.id = (0, core_1.uid)();
            }
            if (targetId) {
                item.parent = targetId;
            }
            target.add(item, index);
            // remove data from original collection
            this.remove(id);
            return item.id;
        }
        if (this.getIndex(id) === index) {
            return null;
        }
        // move other elements
        var spliced = this._order.splice(this.getIndex(id), 1)[0];
        if (index === -1) {
            index = this._order.length;
        }
        this._order.splice(index, 0, spliced);
        this.events.fire(types_1.DataEvents.change, [id, "update", this.getItem(id)]);
        return id;
    };
    DataCollection.prototype._addCore = function (obj, index) {
        var _a;
        if (this.config.init) {
            obj = this.config.init(obj);
        }
        obj.id = (_a = obj.id) !== null && _a !== void 0 ? _a : (0, core_1.uid)();
        if (this._pull[obj.id]) {
            (0, helpers_1.dhxError)("Item ".concat(obj.id, " already exist"));
        }
        // todo: not ideal solution
        if (this._initFilterOrder && !(0, helpers_1.isTreeCollection)(this)) {
            this._addToOrder(this._initFilterOrder, obj, index);
        }
        if (this._initSortOrder) {
            this._addToOrder(this._initSortOrder, obj, index);
        }
        this._addToOrder(this._order, obj, index);
        return obj.id;
    };
    DataCollection.prototype._removeCore = function (id) {
        if (this._pull[id]) {
            this._order = this._order.filter(function (el) { return el.id !== id; });
            if (this._initFilterOrder && this._initFilterOrder.length) {
                this._initFilterOrder = this._initFilterOrder.filter(function (el) { return el.id !== id; });
            }
            if (this._initSortOrder && this._initSortOrder.length) {
                this._initSortOrder = this._initSortOrder.filter(function (el) { return el.id !== id; });
            }
            delete this._pull[id];
        }
    };
    DataCollection.prototype._parse_data = function (data) {
        var index = this._order.length;
        for (var _i = 0, data_1 = data; _i < data_1.length; _i++) {
            var obj = data_1[_i];
            this._addCore(obj, index++);
        }
    };
    DataCollection.prototype._approximate = function (data, values, maxNum) {
        var len = data.length;
        var vlen = values.length;
        var rlen = Math.floor(len / maxNum);
        var newData = Array(Math.ceil(len / rlen));
        var index = 0;
        for (var i = 0; i < len; i += rlen) {
            var newItem = (0, core_1.copy)(data[i]);
            var end = Math.min(len, i + rlen);
            for (var j = 0; j < vlen; j++) {
                var sum = 0;
                for (var z = i; z < end; z++) {
                    sum += data[z][values[j]];
                }
                newItem[values[j]] = sum / (end - i);
            }
            newData[index++] = newItem;
        }
        return newData;
    };
    DataCollection.prototype._onChange = function (status, id, obj) {
        var itemCount = 0;
        var maxStack = 10;
        for (var _i = 0, _a = this._changes.order; _i < _a.length; _i++) {
            var item = _a[_i];
            // update pending item if previous state is "saving" or if item not saved yet
            var index = this._changes.order.indexOf(item);
            if (item.id === id && !item.saving) {
                itemCount += 1;
                if (index === this._changes.order.length - 1 || this._changes.order[index + 1].id !== id) {
                    // update item
                    if (item.error) {
                        item.error = false;
                    }
                    item = __assign(__assign({}, item), { obj: obj, status: status });
                    itemCount += 1;
                    if (itemCount > maxStack) {
                        this._changes.order.splice(index, itemCount - maxStack, item);
                    }
                    else {
                        this._changes.order.splice(index + 1, 0, item);
                    }
                    this._loader.updateChanges(this._changes);
                    if (status === "remove" && obj.$emptyRow)
                        return;
                    this.events.fire(types_1.DataEvents.change, [id, status, obj]);
                    return;
                }
            }
        }
        this._changes.order.push({ id: id, status: status, obj: __assign({}, obj), saving: false });
        this._loader.updateChanges(this._changes);
        this.events.fire(types_1.DataEvents.change, [id, status, obj]);
    };
    DataCollection.prototype._addToOrder = function (array, obj, index) {
        if (index >= 0 && array[index]) {
            this._pull[obj.id] = obj;
            array.splice(index, 0, obj);
        }
        else {
            this._pull[obj.id] = obj;
            array.push(obj);
        }
    };
    DataCollection.prototype._applySorters = function (by) {
        this._sort.sort(this._order, by, this._sorter);
        // sort the not-filtered dataset
        if (this._initFilterOrder && this._initFilterOrder.length) {
            this._sort.sort(this._initFilterOrder, by, this._sorter);
        }
    };
    DataCollection.prototype._applyFilters = function (rule) {
        if (!rule)
            return;
        if (!this._checkFilterRule(rule)) {
            throw new Error("Invalid filter rule");
        }
        var filter = typeof rule !== "function" ? this._getRuleCallback(rule) : rule;
        var fOrder = this._order.filter(function (item) { return filter(item); });
        if (!this._initFilterOrder) {
            this._initFilterOrder = this._order;
        }
        this._order = fOrder;
    };
    DataCollection.prototype._reapplyFilters = function () {
        var permFilters = this.getFilters({ permanent: true });
        if (permFilters) {
            this.filter(permFilters, { $restore: true, add: true }, true);
        }
        if (this._sorter) {
            this._applySorters();
        }
    };
    DataCollection.prototype._getRuleCallback = function (rule) {
        if (!(0, core_1.isDefined)(rule.by) || !(0, core_1.isDefined)(rule.match))
            return;
        return rule.compare
            ? function (obj) { return rule.compare(obj[rule.by], rule.match, obj, rule.multi); }
            : function (obj) { return obj[rule.by] == rule.match; };
    };
    DataCollection.prototype._getPureFilters = function (filters) {
        return Object.keys(filters).reduce(function (obj, key) {
            var _a;
            if (!((_a = filters[key].config) === null || _a === void 0 ? void 0 : _a.$local)) {
                obj[key] = filters[key];
            }
            return obj;
        }, {});
    };
    DataCollection.prototype._normalizeFilters = function (filters) {
        var rules = [];
        for (var key in filters) {
            var rule = filters[key].rule;
            if (typeof rule !== "function") {
                if ((0, core_1.isDefined)(rule.by)) {
                    rules.push(this._getRuleCallback(rule));
                }
                else {
                    for (var key_1 in rule) {
                        rules.push(this._getRuleCallback(rule[key_1]));
                    }
                }
            }
            else {
                rules.push(rule);
            }
        }
        return __assign({}, rules);
    };
    DataCollection.prototype._checkFilterRule = function (rule) {
        return typeof rule === "function" || ((0, core_1.isDefined)(rule.by) && (0, core_1.isDefined)(rule.match));
    };
    DataCollection.prototype._parse = function (data, driver, grouping) {
        if (driver === void 0) { driver = types_1.DataDriver.json; }
        if (grouping === void 0) { grouping = false; }
        this._reset({ grouping: grouping });
        return this._loader.parse(data, driver);
    };
    return DataCollection;
}());
exports.DataCollection = DataCollection;


/***/ }),
/* 24 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.dataDriversPro = exports.dataDrivers = void 0;
var JsonDriver_1 = __webpack_require__(25);
var CsvDriver_1 = __webpack_require__(14);
var XMLDriver_1 = __webpack_require__(26);
exports.dataDrivers = {
    json: JsonDriver_1.JsonDriver,
    csv: CsvDriver_1.CsvDriver,
};
exports.dataDriversPro = __assign(__assign({}, exports.dataDrivers), { xml: XMLDriver_1.XMLDriver });


/***/ }),
/* 25 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.JsonDriver = void 0;
var JsonDriver = /** @class */ (function () {
    function JsonDriver() {
    }
    JsonDriver.prototype.toJsonArray = function (data) {
        return this.getRows(data);
    };
    JsonDriver.prototype.serialize = function (data) {
        return data;
    };
    JsonDriver.prototype.getFields = function (row) {
        return row;
    };
    JsonDriver.prototype.getRows = function (data) {
        return typeof data === "string" ? JSON.parse(data) : data;
    };
    return JsonDriver;
}());
exports.JsonDriver = JsonDriver;


/***/ }),
/* 26 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.XMLDriver = void 0;
var xml_1 = __webpack_require__(66);
var ARRAY_NAME = "items";
var ITEM_NAME = "item";
// convert xml tag to js object, all subtags and attributes are mapped to the properties of result object
function tagToObject(tag, initialObj) {
    initialObj = initialObj || {};
    // map attributes
    var a = tag.attributes;
    if (a && a.length) {
        for (var i = 0; i < a.length; i++) {
            initialObj[a[i].name] = a[i].value;
        }
    }
    // map subtags
    var b = tag.childNodes;
    for (var i = 0; i < b.length; i++) {
        var node = b[i];
        if (node.nodeType === node.ELEMENT_NODE) {
            var name_1 = node.tagName;
            if (initialObj[name_1]) {
                if (typeof initialObj[name_1].push !== "function") {
                    initialObj[name_1] = [initialObj[name_1]];
                }
                initialObj[name_1].push(tagToObject(node, {}));
            }
            else {
                initialObj[name_1] = tagToObject(node, {}); // sub-object for complex subtags
            }
        }
    }
    return initialObj;
}
var XMLDriver = /** @class */ (function () {
    function XMLDriver() {
    }
    XMLDriver.prototype.toJsonArray = function (data) {
        return this.getRows(data);
    };
    XMLDriver.prototype.toJsonObject = function (data) {
        var doc;
        if (typeof data === "string") {
            doc = this._fromString(data);
        }
        return tagToObject(doc);
    };
    XMLDriver.prototype.serialize = function (data) {
        return (0, xml_1.jsonToXML)(data);
    };
    XMLDriver.prototype.getFields = function (row) {
        return row;
    };
    XMLDriver.prototype.getRows = function (data) {
        if (typeof data === "string") {
            data = this._fromString(data);
        }
        if (data) {
            var childNodes = data.childNodes && data.childNodes[0] && data.childNodes[0].childNodes;
            if (!childNodes || !childNodes.length) {
                return null;
            }
            return this._getRows(childNodes);
        }
        return [];
    };
    XMLDriver.prototype._getRows = function (nodes) {
        var result = [];
        for (var i = 0; i < nodes.length; i++) {
            if (nodes[i].tagName === ITEM_NAME) {
                result.push(this._nodeToJS(nodes[i]));
            }
        }
        return result;
    };
    XMLDriver.prototype._fromString = function (data) {
        try {
            return new DOMParser().parseFromString(data, "text/xml");
        }
        catch (_a) {
            return null;
        }
    };
    XMLDriver.prototype._nodeToJS = function (node) {
        var result = {};
        if (this._haveAttrs(node)) {
            var attrs = node.attributes;
            for (var i = 0; i < attrs.length; i++) {
                var _a = attrs[i], name_2 = _a.name, value = _a.value;
                result[name_2] = this._toType(value);
            }
        }
        if (node.nodeType === node.TEXT_NODE) {
            result.value = result.value || this._toType(node.textContent);
            return result;
        }
        var childNodes = node.childNodes;
        if (childNodes) {
            for (var i = 0; i < childNodes.length; i++) {
                var subNode = childNodes[i];
                var tag = subNode.tagName;
                if (!tag) {
                    continue;
                }
                if (tag === ARRAY_NAME && subNode.childNodes) {
                    result[tag] = this._getRows(subNode.childNodes);
                }
                else {
                    if (this._haveAttrs(subNode)) {
                        result[tag] = this._nodeToJS(subNode);
                    }
                    else {
                        result[tag] = this._toType(subNode.textContent);
                    }
                }
            }
        }
        return result;
    };
    XMLDriver.prototype._toType = function (val) {
        if (val === "false" || val === "true") {
            return val === "true";
        }
        return val;
    };
    XMLDriver.prototype._haveAttrs = function (node) {
        return node.attributes && node.attributes.length;
    };
    return XMLDriver;
}());
exports.XMLDriver = XMLDriver;


/***/ }),
/* 27 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.methods = void 0;
var core_1 = __webpack_require__(0);
exports.methods = {
    sum: function (items, field) {
        return parseFloat(items.reduce(function (sum, item) { return sum + (+item[field] || 0); }, 0).toFixed(12));
    },
    avg: function (items, field) {
        return parseFloat((items.reduce(function (sum, item) { return sum + (+item[field] || 0); }, 0) / items.length).toFixed(12));
    },
    count: function (items, field) {
        if (items === void 0) { items = []; }
        return items.filter(function (item) { return (0, core_1.isDefined)(item[field]) && item[field] !== ""; }).length;
    },
    min: function (items, field) {
        return Math.min.apply(Math, items.map(function (item) { return +item[field]; }));
    },
    max: function (items, field) {
        return Math.max.apply(Math, items.map(function (item) { return +item[field]; }));
    },
};


/***/ }),
/* 28 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(29);
__webpack_require__(30);
__webpack_require__(31);
__webpack_require__(32);
__webpack_require__(33);
module.exports = __webpack_require__(34);


/***/ }),
/* 29 */
/***/ (function(module, exports) {

Object.values = Object.values
    ? Object.values
    : function (obj) {
        var allowedTypes = [
            "[object String]",
            "[object Object]",
            "[object Array]",
            "[object Function]",
        ];
        var objType = Object.prototype.toString.call(obj);
        if (obj === null || typeof obj === "undefined") {
            throw new TypeError("Cannot convert undefined or null to object");
        }
        else if (!~allowedTypes.indexOf(objType)) {
            return [];
        }
        else {
            // if ES6 is supported
            if (Object.keys) {
                return Object.keys(obj).map(function (key) {
                    return obj[key];
                });
            }
            var result = [];
            for (var prop in obj) {
                if (obj.hasOwnProperty(prop)) {
                    result.push(obj[prop]);
                }
            }
            return result;
        }
    };
if (!Object.assign) {
    Object.defineProperty(Object, "assign", {
        enumerable: false,
        configurable: true,
        writable: true,
        value: function (target) {
            "use strict";
            var args = [];
            for (var _i = 1; _i < arguments.length; _i++) {
                args[_i - 1] = arguments[_i];
            }
            if (target === undefined || target === null) {
                throw new TypeError("Cannot convert first argument to object");
            }
            var to = Object(target);
            for (var i = 0; i < args.length; i++) {
                var nextSource = args[i];
                if (nextSource === undefined || nextSource === null) {
                    continue;
                }
                var keysArray = Object.keys(Object(nextSource));
                for (var nextIndex = 0, len = keysArray.length; nextIndex < len; nextIndex++) {
                    var nextKey = keysArray[nextIndex];
                    var desc = Object.getOwnPropertyDescriptor(nextSource, nextKey);
                    if (desc !== undefined && desc.enumerable) {
                        to[nextKey] = nextSource[nextKey];
                    }
                }
            }
            return to;
        },
    });
}


/***/ }),
/* 30 */
/***/ (function(module, exports) {

/* eslint-disable prefer-rest-params */
/* eslint-disable @typescript-eslint/unbound-method */
// eslint-disable-next-line @typescript-eslint/unbound-method
if (!Array.prototype.includes) {
    Object.defineProperty(Array.prototype, "includes", {
        value: function (searchElement, fromIndex) {
            if (this == null) {
                throw new TypeError('"this" is null or not defined');
            }
            // 1. Let O be ? ToObject(this value).
            var o = Object(this);
            // 2. Let len be ? ToLength(? Get(O, "length")).
            var len = o.length >>> 0;
            // 3. If len is 0, return false.
            if (len === 0) {
                return false;
            }
            // 4. Let n be ? ToInteger(fromIndex).
            //    (If fromIndex is undefined, this step produces the value 0.)
            var n = fromIndex | 0;
            // 5. If n ≥ 0, then
            //  a. Let k be n.
            // 6. Else n < 0,
            //  a. Let k be len + n.
            //  b. If k < 0, let k be 0.
            var k = Math.max(n >= 0 ? n : len - Math.abs(n), 0);
            function sameValueZero(x, y) {
                return x === y || (typeof x === "number" && typeof y === "number" && isNaN(x) && isNaN(y));
            }
            // 7. Repeat, while k < len
            while (k < len) {
                // a. Let elementK be the result of ? Get(O, ! ToString(k)).
                // b. If SameValueZero(searchElement, elementK) is true, return true.
                if (sameValueZero(o[k], searchElement)) {
                    return true;
                }
                // c. Increase k by 1.
                k++;
            }
            // 8. Return false
            return false;
        },
        configurable: true,
        writable: true,
    });
}
// https://tc39.github.io/ecma262/#sec-array.prototype.find
if (!Array.prototype.find) {
    Object.defineProperty(Array.prototype, "find", {
        value: function (predicate) {
            // 1. Let O be ? ToObject(this value).
            if (this == null) {
                throw new TypeError('"this" is null or not defined');
            }
            var o = Object(this);
            // 2. Let len be ? ToLength(? Get(O, "length")).
            var len = o.length >>> 0;
            // 3. If IsCallable(predicate) is false, throw a TypeError exception.
            if (typeof predicate !== "function") {
                throw new TypeError("predicate must be a function");
            }
            // 4. If thisArg was supplied, let T be thisArg; else let T be undefined.
            var thisArg = arguments[1];
            // 5. Let k be 0.
            var k = 0;
            // 6. Repeat, while k < len
            while (k < len) {
                // a. Let Pk be ! ToString(k).
                // b. Let kValue be ? Get(O, Pk).
                // c. Let testResult be ToBoolean(? Call(predicate, T, « kValue, k, O »)).
                // d. If testResult is true, return kValue.
                var kValue = o[k];
                if (predicate.call(thisArg, kValue, k, o)) {
                    return kValue;
                }
                // e. Increase k by 1.
                k++;
            }
            // 7. Return undefined.
            return undefined;
        },
        configurable: true,
        writable: true,
    });
}
if (!Array.prototype.findIndex) {
    Array.prototype.findIndex = function (predicate) {
        if (this == null) {
            throw new TypeError("Array.prototype.findIndex called on null or undefined");
        }
        if (typeof predicate !== "function") {
            throw new TypeError("predicate must be a function");
        }
        var list = Object(this);
        var length = list.length >>> 0;
        var thisArg = arguments[1];
        var value;
        for (var i = 0; i < length; i++) {
            value = list[i];
            if (predicate.call(thisArg, value, i, list)) {
                return i;
            }
        }
        return -1;
    };
}


/***/ }),
/* 31 */
/***/ (function(module, exports) {

if (!String.prototype.includes) {
    String.prototype.includes = function (search, start) {
        "use strict";
        if (typeof start !== "number") {
            start = 0;
        }
        if (start + search.length > this.length) {
            return false;
        }
        else {
            return this.indexOf(search, start) !== -1;
        }
    };
}
if (!String.prototype.startsWith) {
    Object.defineProperty(String.prototype, "startsWith", {
        enumerable: false,
        configurable: true,
        writable: true,
        value: function (searchString, position) {
            position = position || 0;
            return this.indexOf(searchString, position) === position;
        },
    });
}
if (!String.prototype.padStart) {
    String.prototype.padStart = function padStart(targetLength, padString) {
        targetLength = targetLength >> 0;
        padString = String(padString || " ");
        if (this.length > targetLength) {
            return String(this);
        }
        else {
            targetLength = targetLength - this.length;
            if (targetLength > padString.length) {
                padString += padString.repeat(targetLength / padString.length);
            }
            return padString.slice(0, targetLength) + String(this);
        }
    };
}
if (!String.prototype.padEnd) {
    String.prototype.padEnd = function padEnd(targetLength, padString) {
        targetLength = targetLength >> 0;
        padString = String(padString || " ");
        if (this.length > targetLength) {
            return String(this);
        }
        else {
            targetLength = targetLength - this.length;
            if (targetLength > padString.length) {
                padString += padString.repeat(targetLength / padString.length);
            }
            return String(this) + padString.slice(0, targetLength);
        }
    };
}


/***/ }),
/* 32 */
/***/ (function(module, exports) {

/* eslint-disable @typescript-eslint/no-this-alias */
/* eslint-disable prefer-rest-params */
/* eslint-disable @typescript-eslint/unbound-method */
if (Element && !Element.prototype.matches) {
    var proto = Element.prototype;
    proto.matches =
        proto.matchesSelector ||
            proto.mozMatchesSelector ||
            proto.msMatchesSelector ||
            proto.oMatchesSelector ||
            proto.webkitMatchesSelector;
}
// Source: https://github.com/naminho/svg-classlist-polyfill/blob/master/polyfill.js
if (!("classList" in SVGElement.prototype)) {
    Object.defineProperty(SVGElement.prototype, "classList", {
        get: function get() {
            var _this = this;
            return {
                contains: function contains(className) {
                    return _this.className.baseVal.split(" ").indexOf(className) !== -1;
                },
                add: function add(className) {
                    return _this.setAttribute("class", _this.getAttribute("class") + " " + className);
                },
                remove: function remove(className) {
                    var removedClass = _this
                        .getAttribute("class")
                        .replace(new RegExp("(\\s|^)".concat(className, "(\\s|$)"), "g"), "$2");
                    if (_this.classList.contains(className)) {
                        _this.setAttribute("class", removedClass);
                    }
                },
                toggle: function toggle(className) {
                    if (this.contains(className)) {
                        this.remove(className);
                    }
                    else {
                        this.add(className);
                    }
                },
            };
        },
        configurable: true,
    });
}
// Source: https://github.com/tc39/proposal-object-values-entries/blob/master/polyfill.js
if (!Object.entries) {
    var reduce_1 = Function.bind.call(Function.call, Array.prototype.reduce);
    var isEnumerable_1 = Function.bind.call(Function.call, Object.prototype.propertyIsEnumerable);
    var concat_1 = Function.bind.call(Function.call, Array.prototype.concat);
    Object.entries = function entries(O) {
        return reduce_1(Object.keys(O), function (e, k) { return concat_1(e, typeof k === "string" && isEnumerable_1(O, k) ? [[k, O[k]]] : []); }, []);
    };
}
// Source: https://gist.github.com/rockinghelvetica/00b9f7b5c97a16d3de75ba99192ff05c
if (!Event.prototype.composedPath) {
    Event.prototype.composedPath = function () {
        if (this.path) {
            return this.path;
        }
        var target = this.target;
        this.path = [];
        while (target.parentNode !== null) {
            this.path.push(target);
            target = target.parentNode;
        }
        this.path.push(document, window);
        return this.path;
    };
}


/***/ }),
/* 33 */
/***/ (function(module, exports) {

Math.sign =
    Math.sign ||
        function (x) {
            x = +x;
            if (x === 0 || isNaN(x)) {
                return x;
            }
            return x > 0 ? 1 : -1;
        };


/***/ }),
/* 34 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.i18n = exports.methods = exports.setTheme = exports.awaitRedraw = exports.Calendar = exports.Popup = exports.tooltip = void 0;
var locale_1 = __webpack_require__(35);
__webpack_require__(36);
__webpack_require__(37);
// WIDGETS
var ts_message_1 = __webpack_require__(38);
Object.defineProperty(exports, "tooltip", { enumerable: true, get: function () { return ts_message_1.tooltip; } });
var ts_popup_1 = __webpack_require__(17);
Object.defineProperty(exports, "Popup", { enumerable: true, get: function () { return ts_popup_1.Popup; } });
var Calendar_1 = __webpack_require__(48);
Object.defineProperty(exports, "Calendar", { enumerable: true, get: function () { return Calendar_1.Calendar; } });
// TOOLS
var dom_1 = __webpack_require__(2);
Object.defineProperty(exports, "awaitRedraw", { enumerable: true, get: function () { return dom_1.awaitRedraw; } });
Object.defineProperty(exports, "setTheme", { enumerable: true, get: function () { return dom_1.setTheme; } });
var ts_data_1 = __webpack_require__(64);
Object.defineProperty(exports, "methods", { enumerable: true, get: function () { return ts_data_1.methods; } });
var date_1 = __webpack_require__(22);
var w = window;
exports.i18n = w.dhx && w.dhx.i18n ? w.dhx.i18n : {};
exports.i18n.setLocale = locale_1.setLocale;
exports.i18n.calendar = exports.i18n.calendar || date_1.locale;


/***/ }),
/* 35 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.setLocale = void 0;
function setLocale(component, value) {
    var target = this[component];
    if (!target)
        return;
    for (var key in value) {
        target[key] = value[key];
    }
}
exports.setLocale = setLocale;
;


/***/ }),
/* 36 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),
/* 37 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),
/* 38 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    var desc = Object.getOwnPropertyDescriptor(m, k);
    if (!desc || ("get" in desc ? !m.__esModule : desc.writable || desc.configurable)) {
      desc = { enumerable: true, get: function() { return m[k]; } };
    }
    Object.defineProperty(o, k2, desc);
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __exportStar = (this && this.__exportStar) || function(m, exports) {
    for (var p in m) if (p !== "default" && !Object.prototype.hasOwnProperty.call(exports, p)) __createBinding(exports, m, p);
};
Object.defineProperty(exports, "__esModule", { value: true });
__exportStar(__webpack_require__(39), exports);
__exportStar(__webpack_require__(40), exports);
__exportStar(__webpack_require__(44), exports);
__exportStar(__webpack_require__(45), exports);
__exportStar(__webpack_require__(9), exports);


/***/ }),
/* 39 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.message = void 0;
var core_1 = __webpack_require__(0);
var html_1 = __webpack_require__(1);
var types_1 = __webpack_require__(9);
var nodeTimeout = new WeakMap();
var containers = new Map();
function createMessageContainer(parent, position) {
    var messageContainer = document.createElement("div");
    messageContainer.setAttribute("data-position", position);
    messageContainer.className =
        "dhx_message-container " +
            "dhx_message-container--" +
            position +
            (parent === document.body ? " dhx_message-container--in-body" : "");
    return messageContainer;
}
function onExpire(node, fromClick) {
    if (fromClick) {
        clearTimeout(nodeTimeout.get(node));
    }
    var container = node.parentNode;
    var position = container.getAttribute("data-position");
    var parent = container.parentNode;
    var messageContainerInfo = containers.get(parent);
    if (!messageContainerInfo) {
        return;
    }
    var positionInfo = messageContainerInfo[position];
    if (!positionInfo) {
        return;
    }
    var stack = positionInfo.stack;
    var index = stack.indexOf(node);
    if (index !== -1) {
        container.removeChild(node);
        stack.splice(index, 1);
        if (stack.length === 0) {
            parent.removeChild(container);
        }
        return;
    }
}
function message(props) {
    var _a;
    if (typeof props === "string") {
        props = { text: props };
    }
    props.position = props.position || types_1.MessageContainerPosition.topRight;
    var messageBox = document.createElement("div");
    messageBox.className = "dhx_widget dhx_message " + (props.css || "");
    messageBox.setAttribute("role", "alert");
    var textId = props.text && (0, core_1.uid)();
    textId && messageBox.setAttribute("aria-describedby", textId);
    if (props.html) {
        messageBox.innerHTML = props.html;
    }
    else {
        messageBox.innerHTML = "<span class=\"dhx_message__text\" id=".concat(textId, "></span>\n\t\t").concat(props.icon ? "<span class=\"dhx_message__icon dxi ".concat(props.icon, "\"></span>") : "");
        messageBox.querySelector("#".concat(textId)).textContent = props.text;
    }
    var parent = props.node ? (0, html_1.toNode)(props.node) : document.body;
    var position = getComputedStyle(parent).position;
    if (position === "static") {
        parent.style.position = "relative";
    }
    var messageContainerInfo = containers.get(parent);
    if (!messageContainerInfo) {
        containers.set(parent, (_a = {},
            _a[props.position] = {
                stack: [],
                container: createMessageContainer(parent, props.position),
            },
            _a));
    }
    else if (!messageContainerInfo[props.position]) {
        messageContainerInfo[props.position] = {
            stack: [],
            container: createMessageContainer(parent, props.position),
        };
    }
    var _b = containers.get(parent)[props.position], stack = _b.stack, container = _b.container;
    if (stack.length === 0) {
        parent.appendChild(container);
    }
    stack.push(messageBox);
    container.appendChild(messageBox);
    function closeMessage(fromClick) {
        if (fromClick === void 0) { fromClick = true; }
        if (!messageBox)
            return;
        onExpire(messageBox, fromClick);
        messageBox = null;
    }
    if (props.expire) {
        var timeout = setTimeout(function () { return closeMessage(false); }, props.expire);
        nodeTimeout.set(messageBox, timeout);
    }
    messageBox.onclick = function () { return closeMessage(); };
    return {
        close: function () { return closeMessage(); },
    };
}
exports.message = message;


/***/ }),
/* 40 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(Promise) {
Object.defineProperty(exports, "__esModule", { value: true });
exports.alert = void 0;
var en_1 = __webpack_require__(15);
var common_1 = __webpack_require__(16);
var core_1 = __webpack_require__(0);
function alert(props) {
    var apply = props.buttons && props.buttons[0] ? props.buttons[0] : en_1.default.apply;
    var unblock = (0, common_1.blockScreen)(props.blockerCss);
    return new Promise(function (res) {
        var contentId = "dhx_alert__".concat((0, core_1.uid)(), "_content");
        var headerId = "dhx_alert__".concat((0, core_1.uid)(), "_header");
        var alertBox = document.createElement("div");
        alertBox.setAttribute("role", "alert");
        alertBox.setAttribute("aria-modal", "true");
        props.text && alertBox.setAttribute("aria-describedby", contentId);
        props.header && alertBox.setAttribute("aria-labelledby", headerId);
        alertBox.className = "dhx_widget dhx_alert " + (props.css || "");
        var closeAlert = function (e) {
            if (e.key === "Escape" || e.key === "Esc") {
                // eslint-disable-next-line @typescript-eslint/no-use-before-define
                close(e);
                res(false);
            }
        };
        function close(e) {
            e.preventDefault();
            unblock();
            document.body.removeChild(alertBox);
            document.removeEventListener("keydown", closeAlert);
        }
        alertBox.innerHTML = "\n\t\t\t".concat(props.header
            ? "<div id=".concat(headerId, " class=\"dhx_alert__header\"> ").concat(props.htmlEnable !== false ? props.header : "", " </div>")
            : "", "\n\t\t\t").concat(props.text
            ? "<div id=".concat(contentId, " class=\"dhx_alert__content\">").concat(props.htmlEnable !== false ? props.text : "", "</div>")
            : "", "\n\t\t\t<div class=\"dhx_alert__footer ").concat(props.buttonsAlignment ? "dhx_alert__footer--" + props.buttonsAlignment : "", "\">\n\t\t\t\t<button type=\"button\" aria-label=\"confirm\" class=\"dhx_alert__apply-button dhx_button dhx_button--view_flat dhx_button--color_primary dhx_button--size_medium\">").concat(apply, "</button>\n\t\t\t</div>");
        if (props.htmlEnable === false) {
            props.header && (alertBox.querySelector("#".concat(headerId)).textContent = props.header);
            props.text && (alertBox.querySelector("#".concat(contentId)).textContent = props.text);
        }
        document.body.appendChild(alertBox);
        alertBox.querySelector(".dhx_alert__apply-button").focus();
        alertBox.querySelector("button").addEventListener("click", function (e) {
            close(e);
            res(true);
        });
        document.addEventListener("keydown", closeAlert);
    });
}
exports.alert = alert;

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(6)))

/***/ }),
/* 41 */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {var scope = (typeof global !== "undefined" && global) ||
            (typeof self !== "undefined" && self) ||
            window;
var apply = Function.prototype.apply;

// DOM APIs, for completeness

exports.setTimeout = function() {
  return new Timeout(apply.call(setTimeout, scope, arguments), clearTimeout);
};
exports.setInterval = function() {
  return new Timeout(apply.call(setInterval, scope, arguments), clearInterval);
};
exports.clearTimeout =
exports.clearInterval = function(timeout) {
  if (timeout) {
    timeout.close();
  }
};

function Timeout(id, clearFn) {
  this._id = id;
  this._clearFn = clearFn;
}
Timeout.prototype.unref = Timeout.prototype.ref = function() {};
Timeout.prototype.close = function() {
  this._clearFn.call(scope, this._id);
};

// Does not start the time, just sets up the members needed.
exports.enroll = function(item, msecs) {
  clearTimeout(item._idleTimeoutId);
  item._idleTimeout = msecs;
};

exports.unenroll = function(item) {
  clearTimeout(item._idleTimeoutId);
  item._idleTimeout = -1;
};

exports._unrefActive = exports.active = function(item) {
  clearTimeout(item._idleTimeoutId);

  var msecs = item._idleTimeout;
  if (msecs >= 0) {
    item._idleTimeoutId = setTimeout(function onTimeout() {
      if (item._onTimeout)
        item._onTimeout();
    }, msecs);
  }
};

// setimmediate attaches itself to the global object
__webpack_require__(42);
// On some exotic environments, it's not clear which object `setimmediate` was
// able to install onto.  Search each possibility in the same order as the
// `setimmediate` library.
exports.setImmediate = (typeof self !== "undefined" && self.setImmediate) ||
                       (typeof global !== "undefined" && global.setImmediate) ||
                       (this && this.setImmediate);
exports.clearImmediate = (typeof self !== "undefined" && self.clearImmediate) ||
                         (typeof global !== "undefined" && global.clearImmediate) ||
                         (this && this.clearImmediate);

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(10)))

/***/ }),
/* 42 */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global, process) {(function (global, undefined) {
    "use strict";

    if (global.setImmediate) {
        return;
    }

    var nextHandle = 1; // Spec says greater than zero
    var tasksByHandle = {};
    var currentlyRunningATask = false;
    var doc = global.document;
    var registerImmediate;

    function setImmediate(callback) {
      // Callback can either be a function or a string
      if (typeof callback !== "function") {
        callback = new Function("" + callback);
      }
      // Copy function arguments
      var args = new Array(arguments.length - 1);
      for (var i = 0; i < args.length; i++) {
          args[i] = arguments[i + 1];
      }
      // Store and register the task
      var task = { callback: callback, args: args };
      tasksByHandle[nextHandle] = task;
      registerImmediate(nextHandle);
      return nextHandle++;
    }

    function clearImmediate(handle) {
        delete tasksByHandle[handle];
    }

    function run(task) {
        var callback = task.callback;
        var args = task.args;
        switch (args.length) {
        case 0:
            callback();
            break;
        case 1:
            callback(args[0]);
            break;
        case 2:
            callback(args[0], args[1]);
            break;
        case 3:
            callback(args[0], args[1], args[2]);
            break;
        default:
            callback.apply(undefined, args);
            break;
        }
    }

    function runIfPresent(handle) {
        // From the spec: "Wait until any invocations of this algorithm started before this one have completed."
        // So if we're currently running a task, we'll need to delay this invocation.
        if (currentlyRunningATask) {
            // Delay by doing a setTimeout. setImmediate was tried instead, but in Firefox 7 it generated a
            // "too much recursion" error.
            setTimeout(runIfPresent, 0, handle);
        } else {
            var task = tasksByHandle[handle];
            if (task) {
                currentlyRunningATask = true;
                try {
                    run(task);
                } finally {
                    clearImmediate(handle);
                    currentlyRunningATask = false;
                }
            }
        }
    }

    function installNextTickImplementation() {
        registerImmediate = function(handle) {
            process.nextTick(function () { runIfPresent(handle); });
        };
    }

    function canUsePostMessage() {
        // The test against `importScripts` prevents this implementation from being installed inside a web worker,
        // where `global.postMessage` means something completely different and can't be used for this purpose.
        if (global.postMessage && !global.importScripts) {
            var postMessageIsAsynchronous = true;
            var oldOnMessage = global.onmessage;
            global.onmessage = function() {
                postMessageIsAsynchronous = false;
            };
            global.postMessage("", "*");
            global.onmessage = oldOnMessage;
            return postMessageIsAsynchronous;
        }
    }

    function installPostMessageImplementation() {
        // Installs an event handler on `global` for the `message` event: see
        // * https://developer.mozilla.org/en/DOM/window.postMessage
        // * http://www.whatwg.org/specs/web-apps/current-work/multipage/comms.html#crossDocumentMessages

        var messagePrefix = "setImmediate$" + Math.random() + "$";
        var onGlobalMessage = function(event) {
            if (event.source === global &&
                typeof event.data === "string" &&
                event.data.indexOf(messagePrefix) === 0) {
                runIfPresent(+event.data.slice(messagePrefix.length));
            }
        };

        if (global.addEventListener) {
            global.addEventListener("message", onGlobalMessage, false);
        } else {
            global.attachEvent("onmessage", onGlobalMessage);
        }

        registerImmediate = function(handle) {
            global.postMessage(messagePrefix + handle, "*");
        };
    }

    function installMessageChannelImplementation() {
        var channel = new MessageChannel();
        channel.port1.onmessage = function(event) {
            var handle = event.data;
            runIfPresent(handle);
        };

        registerImmediate = function(handle) {
            channel.port2.postMessage(handle);
        };
    }

    function installReadyStateChangeImplementation() {
        var html = doc.documentElement;
        registerImmediate = function(handle) {
            // Create a <script> element; its readystatechange event will be fired asynchronously once it is inserted
            // into the document. Do so, thus queuing up the task. Remember to clean up once it's been called.
            var script = doc.createElement("script");
            script.onreadystatechange = function () {
                runIfPresent(handle);
                script.onreadystatechange = null;
                html.removeChild(script);
                script = null;
            };
            html.appendChild(script);
        };
    }

    function installSetTimeoutImplementation() {
        registerImmediate = function(handle) {
            setTimeout(runIfPresent, 0, handle);
        };
    }

    // If supported, we should attach to the prototype of global, since that is where setTimeout et al. live.
    var attachTo = Object.getPrototypeOf && Object.getPrototypeOf(global);
    attachTo = attachTo && attachTo.setTimeout ? attachTo : global;

    // Don't get fooled by e.g. browserify environments.
    if ({}.toString.call(global.process) === "[object process]") {
        // For Node.js before 0.9
        installNextTickImplementation();

    } else if (canUsePostMessage()) {
        // For non-IE10 modern browsers
        installPostMessageImplementation();

    } else if (global.MessageChannel) {
        // For web workers, where supported
        installMessageChannelImplementation();

    } else if (doc && "onreadystatechange" in doc.createElement("script")) {
        // For IE 6–8
        installReadyStateChangeImplementation();

    } else {
        // For older browsers
        installSetTimeoutImplementation();
    }

    attachTo.setImmediate = setImmediate;
    attachTo.clearImmediate = clearImmediate;
}(typeof self === "undefined" ? typeof global === "undefined" ? this : global : self));

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(10), __webpack_require__(43)))

/***/ }),
/* 43 */
/***/ (function(module, exports) {

// shim for using process in browser
var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

var cachedSetTimeout;
var cachedClearTimeout;

function defaultSetTimout() {
    throw new Error('setTimeout has not been defined');
}
function defaultClearTimeout () {
    throw new Error('clearTimeout has not been defined');
}
(function () {
    try {
        if (typeof setTimeout === 'function') {
            cachedSetTimeout = setTimeout;
        } else {
            cachedSetTimeout = defaultSetTimout;
        }
    } catch (e) {
        cachedSetTimeout = defaultSetTimout;
    }
    try {
        if (typeof clearTimeout === 'function') {
            cachedClearTimeout = clearTimeout;
        } else {
            cachedClearTimeout = defaultClearTimeout;
        }
    } catch (e) {
        cachedClearTimeout = defaultClearTimeout;
    }
} ())
function runTimeout(fun) {
    if (cachedSetTimeout === setTimeout) {
        //normal enviroments in sane situations
        return setTimeout(fun, 0);
    }
    // if setTimeout wasn't available but was latter defined
    if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
        cachedSetTimeout = setTimeout;
        return setTimeout(fun, 0);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedSetTimeout(fun, 0);
    } catch(e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
            return cachedSetTimeout.call(null, fun, 0);
        } catch(e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
            return cachedSetTimeout.call(this, fun, 0);
        }
    }


}
function runClearTimeout(marker) {
    if (cachedClearTimeout === clearTimeout) {
        //normal enviroments in sane situations
        return clearTimeout(marker);
    }
    // if clearTimeout wasn't available but was latter defined
    if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
        cachedClearTimeout = clearTimeout;
        return clearTimeout(marker);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedClearTimeout(marker);
    } catch (e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
            return cachedClearTimeout.call(null, marker);
        } catch (e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
            // Some versions of I.E. have different rules for clearTimeout vs setTimeout
            return cachedClearTimeout.call(this, marker);
        }
    }



}
var queue = [];
var draining = false;
var currentQueue;
var queueIndex = -1;

function cleanUpNextTick() {
    if (!draining || !currentQueue) {
        return;
    }
    draining = false;
    if (currentQueue.length) {
        queue = currentQueue.concat(queue);
    } else {
        queueIndex = -1;
    }
    if (queue.length) {
        drainQueue();
    }
}

function drainQueue() {
    if (draining) {
        return;
    }
    var timeout = runTimeout(cleanUpNextTick);
    draining = true;

    var len = queue.length;
    while(len) {
        currentQueue = queue;
        queue = [];
        while (++queueIndex < len) {
            if (currentQueue) {
                currentQueue[queueIndex].run();
            }
        }
        queueIndex = -1;
        len = queue.length;
    }
    currentQueue = null;
    draining = false;
    runClearTimeout(timeout);
}

process.nextTick = function (fun) {
    var args = new Array(arguments.length - 1);
    if (arguments.length > 1) {
        for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
        }
    }
    queue.push(new Item(fun, args));
    if (queue.length === 1 && !draining) {
        runTimeout(drainQueue);
    }
};

// v8 likes predictible objects
function Item(fun, array) {
    this.fun = fun;
    this.array = array;
}
Item.prototype.run = function () {
    this.fun.apply(null, this.array);
};
process.title = 'browser';
process.browser = true;
process.env = {};
process.argv = [];
process.version = ''; // empty string to avoid regexp issues
process.versions = {};

function noop() {}

process.on = noop;
process.addListener = noop;
process.once = noop;
process.off = noop;
process.removeListener = noop;
process.removeAllListeners = noop;
process.emit = noop;
process.prependListener = noop;
process.prependOnceListener = noop;

process.listeners = function (name) { return [] }

process.binding = function (name) {
    throw new Error('process.binding is not supported');
};

process.cwd = function () { return '/' };
process.chdir = function (dir) {
    throw new Error('process.chdir is not supported');
};
process.umask = function() { return 0; };


/***/ }),
/* 44 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(Promise) {
Object.defineProperty(exports, "__esModule", { value: true });
exports.confirm = void 0;
var en_1 = __webpack_require__(15);
var common_1 = __webpack_require__(16);
var core_1 = __webpack_require__(0);
function confirm(props) {
    props.buttonsAlignment = props.buttonsAlignment || "right";
    var apply = props.buttons && props.buttons[1] ? props.buttons[1] : en_1.default.apply;
    var reject = props.buttons && props.buttons[0] ? props.buttons[0] : en_1.default.reject;
    var unblock = (0, common_1.blockScreen)("dhx_alert__overlay-confirm " + (props.blockerCss || ""));
    return new Promise(function (res) {
        var confirmBox = document.createElement("div");
        confirmBox.setAttribute("role", "alertdialog");
        confirmBox.setAttribute("aria-modal", "true");
        var headerId = props.header && (0, core_1.uid)();
        var textId = props.header && (0, core_1.uid)();
        textId && confirmBox.setAttribute("aria-describedby", textId);
        headerId && confirmBox.setAttribute("aria-labelledby", headerId);
        var focusItem;
        var answer = function (val) {
            unblock();
            // eslint-disable-next-line @typescript-eslint/no-use-before-define
            confirmBox.removeEventListener("click", clickHandler);
            // eslint-disable-next-line @typescript-eslint/no-use-before-define
            document.removeEventListener("keydown", closeConfirm);
            document.body.removeChild(confirmBox);
            res(val);
        };
        var clickHandler = function (e) {
            if (e.target.tagName === "BUTTON") {
                answer(e.target.classList.contains("dhx_alert__confirm-aply"));
            }
        };
        var closeConfirm = function (e) {
            if (e.key === "Escape" || e.key === "Esc") {
                confirmBox.querySelector(".dhx_alert__confirm-aply").focus();
                answer(e.target.classList.contains("dhx_alert__confirm-reject"));
            }
            else if (e.key === "Tab") {
                if (focusItem === "aply") {
                    focusItem = "reject";
                    confirmBox.querySelector(".dhx_alert__confirm-reject").focus();
                }
                else {
                    focusItem = "aply";
                    confirmBox.querySelector(".dhx_alert__confirm-aply").focus();
                }
                e.preventDefault();
            }
        };
        confirmBox.className = "dhx_widget dhx_alert dhx_alert--confirm" + (props.css ? " " + props.css : "");
        confirmBox.innerHTML = "\n\t\t".concat(props.header
            ? "<div class=\"dhx_alert__header\" id=".concat(headerId, "> ").concat(props.htmlEnable !== false ? props.header : "", " </div>")
            : "", "\n\t\t").concat(props.text
            ? "<div class=\"dhx_alert__content\" id=".concat(textId, ">").concat(props.htmlEnable !== false ? props.text : "", "</div>")
            : "", "\n\t\t\t<div class=\"dhx_alert__footer ").concat(props.buttonsAlignment ? "dhx_alert__footer--" + props.buttonsAlignment : "", "\">\n\t\t\t\t<button type=\"button\" aria-label=\"reject\" class=\"dhx_alert__confirm-reject dhx_button dhx_button--view_link dhx_button--color_primary dhx_button--size_medium\">").concat(reject, "</button>\n\t\t\t\t<button type=\"button\"  aria-label=\"aply\"class=\"dhx_alert__confirm-aply dhx_button dhx_button--view_flat dhx_button--color_primary dhx_button--size_medium\">").concat(apply, "</button>\n\t\t\t</div>");
        if (props.htmlEnable === false) {
            props.header && (confirmBox.querySelector("#".concat(headerId)).textContent = props.header);
            props.text && (confirmBox.querySelector("#".concat(textId)).textContent = props.text);
        }
        document.body.appendChild(confirmBox);
        focusItem = "aply";
        confirmBox.querySelector(".dhx_alert__confirm-aply").focus();
        confirmBox.addEventListener("click", clickHandler);
        document.addEventListener("keydown", closeConfirm);
    });
}
exports.confirm = confirm;

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(6)))

/***/ }),
/* 45 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.disableTooltip = exports.enableTooltip = exports.tooltip = exports.getZIndex = exports.findPosition = void 0;
var html_1 = __webpack_require__(1);
var types_1 = __webpack_require__(9);
var DEFAULT_SHOW_DELAY = 750;
var DEFAULT_HIDE_DELAY = 200;
function findPosition(targetRect, position, width, height, margin, recursion) {
    if (margin === void 0) { margin = 8; }
    if (recursion === void 0) { recursion = 0; }
    var pos;
    var left;
    var top;
    if (recursion > 1) {
        position = types_1.Position.center;
    }
    if (position !== "top" && position !== "bottom") {
        var topOffset = targetRect.top + (targetRect.height - height) / 2;
        var isShift = topOffset < 0 && window.pageYOffset + topOffset + height < scrollY + window.innerHeight;
        top = window.pageYOffset + (isShift ? 0 : topOffset);
    }
    switch (position) {
        case types_1.Position.center:
            left = targetRect.left + window.pageXOffset + (targetRect.width - width) / 2;
            if (left + margin < window.pageXOffset) {
                left = targetRect.left + window.pageXOffset;
            }
            pos = types_1.RealPosition.center;
            return { left: left, top: top, pos: pos };
        case types_1.Position.right:
            pos = types_1.RealPosition.right;
            left = targetRect.right + window.pageXOffset + margin;
            if (left + width > window.innerWidth + window.pageXOffset) {
                // // set left
                return findPosition(targetRect, types_1.Position.left, width, height, margin, ++recursion);
            }
            return { left: left, top: top, pos: pos };
        case types_1.Position.left:
            pos = types_1.RealPosition.left;
            left = window.pageXOffset + targetRect.left - width - margin;
            if (left < 0) {
                // // set right
                return findPosition(targetRect, types_1.Position.right, width, height, margin, ++recursion);
            }
            return { left: left, top: top, pos: pos };
        case types_1.Position.top:
            pos = types_1.RealPosition.top;
            left = window.pageXOffset + targetRect.left + (targetRect.width - width) / 2;
            if (left + width > window.innerWidth + window.pageXOffset) {
                left = window.innerWidth + window.pageXOffset - width;
            }
            else if (left < 0) {
                left = 0;
            }
            if (targetRect.top < height) {
                // // set bottom
                return findPosition(targetRect, types_1.Position.bottom, width, height, margin, ++recursion);
            }
            top = window.pageYOffset + targetRect.top - height - margin;
            return { left: left, top: top, pos: pos };
        case types_1.Position.bottom:
        default:
            left = window.pageXOffset + targetRect.left + (targetRect.width - width) / 2;
            if (left + width > window.innerWidth + window.pageXOffset) {
                left = window.innerWidth + window.pageXOffset - width;
            }
            else if (left < 0) {
                left = 0;
            }
            pos = types_1.RealPosition.bottom;
            top = window.pageYOffset + targetRect.bottom + margin;
            if (top + height > window.innerHeight + window.pageYOffset) {
                // // set top
                return findPosition(targetRect, types_1.Position.top, width, height, margin, ++recursion);
            }
            return { left: left, top: top, pos: pos };
    }
}
exports.findPosition = findPosition;
// tooltip init
var tooltipBox = document.createElement("div");
var tooltipText = document.createElement("span");
tooltipText.className = "dhx_tooltip__text";
tooltipBox.appendChild(tooltipText);
tooltipBox.setAttribute("role", "tooltip");
tooltipBox.style.position = "absolute";
var lastNode = null;
var isActive = false;
var hideTimeout = null;
var showTimeout = null;
var activeListenersDestructor;
function getZIndex(node) {
    if (node &&
        ((node.classList.contains("dhx_popup--window") &&
            node.classList.contains("dhx_popup--window_active")) ||
            node.classList.contains("dhx_popup--window_modal") ||
            node.classList.contains("dhx_popup"))) {
        return 10000000;
    }
    if (node === null || node === void 0 ? void 0 : node.classList.contains("dhx_popup--window")) {
        return 9999999;
    }
    if (node && node.offsetParent) {
        return getZIndex(node.offsetParent);
    }
    return null;
}
exports.getZIndex = getZIndex;
function showTooltip(node, text, position, css, force, margin, htmlEnable) {
    if (css === void 0) { css = ""; }
    if (force === void 0) { force = false; }
    if (margin === void 0) { margin = 8; }
    var rects = node.getBoundingClientRect();
    if (htmlEnable) {
        tooltipText.innerHTML = text;
    }
    else {
        tooltipText.textContent = text;
    }
    tooltipBox.style.left = null;
    tooltipBox.style.top = null;
    document.body.appendChild(tooltipBox);
    tooltipBox.className = "dhx_widget dhx_tooltip ".concat(force ? " dhx_tooltip--forced" : "", " ").concat(css);
    var _a = tooltipBox.getBoundingClientRect(), width = _a.width, height = _a.height;
    var _b = findPosition(rects, position, width, height, margin), left = _b.left, top = _b.top, pos = _b.pos;
    var zIndex = getZIndex(node);
    if (zIndex) {
        tooltipBox.style.zIndex = zIndex.toString();
    }
    switch (pos) {
        case types_1.RealPosition.bottom:
            tooltipBox.style.left = left + "px";
            tooltipBox.style.top = top + "px";
            break;
        case types_1.RealPosition.top:
            tooltipBox.style.left = left + "px";
            tooltipBox.style.top = top + "px";
            break;
        case types_1.RealPosition.left:
            tooltipBox.style.left = left + "px";
            tooltipBox.style.top = top + "px";
            break;
        case types_1.RealPosition.right:
            tooltipBox.style.left = left + "px";
            tooltipBox.style.top = top + "px";
            break;
        case types_1.RealPosition.center:
            tooltipBox.style.left = left + "px";
            tooltipBox.style.top = top + "px";
            break;
    }
    tooltipBox.className += " dhx_tooltip--".concat(pos);
    isActive = true;
    if (!force) {
        setTimeout(function () {
            tooltipBox.className += " dhx_tooltip--animate";
        });
    }
}
function hideTooltip(delay) {
    if (lastNode) {
        hideTimeout = setTimeout(function () {
            document.body.removeChild(tooltipBox);
            isActive = false;
            hideTimeout = null;
        }, delay || DEFAULT_HIDE_DELAY);
    }
}
function addListeners(node, text, config) {
    var force = config.force, showDelay = config.showDelay, hideDelay = config.hideDelay, position = config.position, css = config.css, htmlEnable = config.htmlEnable, margin = config.margin;
    if (!force) {
        showTimeout = setTimeout(function () {
            showTooltip(node, text, position || types_1.Position.bottom, css, false, margin, htmlEnable);
        }, showDelay || DEFAULT_SHOW_DELAY);
    }
    var hide = function () {
        if (isActive) {
            hideTooltip(hideDelay);
        }
        clearTimeout(showTimeout);
        node.removeEventListener("mouseleave", hide);
        node.removeEventListener("blur", hide);
        document.removeEventListener("mousedown", hide);
        lastNode = null;
        activeListenersDestructor = null;
    };
    if (force) {
        showTooltip(node, text, position, css, force, margin, htmlEnable);
    }
    node.addEventListener("mouseleave", hide);
    node.addEventListener("blur", hide);
    document.addEventListener("mousedown", hide);
    activeListenersDestructor = hide;
}
// default
function tooltip(text, config) {
    var node = (0, html_1.toNode)(config.node);
    if (node === lastNode) {
        return;
    }
    if (activeListenersDestructor) {
        activeListenersDestructor();
        activeListenersDestructor = null;
    }
    lastNode = node;
    if (hideTimeout) {
        clearTimeout(hideTimeout);
        hideTimeout = null;
        addListeners(node, text, __assign(__assign({}, config), { force: true }));
    }
    else {
        addListeners(node, text, config);
    }
}
exports.tooltip = tooltip;
function _mousemove(e) {
    var node = (0, html_1.locateNode)(e, "dhx_tooltip_text");
    if (!node) {
        return;
    }
    tooltip(node.getAttribute("dhx_tooltip_text"), {
        position: node.getAttribute("dhx_tooltip_position") || types_1.Position.bottom,
        node: node,
    });
}
function enableTooltip() {
    document.addEventListener("mousemove", _mousemove);
}
exports.enableTooltip = enableTooltip;
function disableTooltip() {
    document.removeEventListener("mousemove", _mousemove);
}
exports.disableTooltip = disableTooltip;


/***/ }),
/* 46 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.Popup = void 0;
var core_1 = __webpack_require__(0);
var dom_1 = __webpack_require__(2);
var events_1 = __webpack_require__(4);
var html_1 = __webpack_require__(1);
var view_1 = __webpack_require__(7);
var types_1 = __webpack_require__(18);
var Popup = /** @class */ (function (_super) {
    __extends(Popup, _super);
    function Popup(config) {
        if (config === void 0) { config = {}; }
        var _this = _super.call(this, null, (0, core_1.extend)({}, config)) || this;
        var popup = (_this._popup = document.createElement("div"));
        popup.className = "dhx_widget dhx_popup" + (_this.config.css ? " " + _this.config.css : "");
        popup.style.position = "absolute";
        popup.setAttribute("role", "dialog");
        popup.setAttribute("aria-modal", "true");
        popup.setAttribute("aria-live", "polite");
        _this.config.theme && _this._setTheme(_this.config.theme);
        _this.mount(popup, (0, dom_1.create)({
            render: function () { return _this.toVDOM(); },
        }));
        _this._clickEvent = function (e) { return _this.events.fire(types_1.PopupEvents.click, [e]); };
        _this.events = config.events || new events_1.EventSystem(_this);
        _this._isActive = false;
        return _this;
    }
    Popup.prototype.show = function (node, config, attached) {
        var _this = this;
        if (config === void 0) { config = {}; }
        if (!this.events.fire(types_1.PopupEvents.beforeShow, [node])) {
            return;
        }
        node = (0, html_1.toNode)(node);
        if (this._isActive) {
            this._setPopupSize(node, config);
            return;
        }
        if (attached) {
            this.attach(attached);
        }
        config.theme && this._setTheme(config.theme);
        this._popup.style.left = "0";
        this._popup.style.top = "0";
        (0, dom_1.awaitRedraw)()
            .then(function () {
            _this._setPopupSize(node, config);
            _this._popup.style.position = "fixed";
            document.body.appendChild(_this._popup);
            _this._isActive = true;
        })
            .then(function () {
            _this._popup.style.position = "absolute";
            _this.events.fire(types_1.PopupEvents.afterShow, [node]);
            _this._outerClickDestructor = _this._detectOuterClick(node);
        });
    };
    Popup.prototype.hide = function () {
        this._hide(false, null);
    };
    Popup.prototype.isVisible = function () {
        return this._isActive;
    };
    Popup.prototype.attach = function (name, config) {
        this._html = null;
        if (typeof name === "object") {
            this._ui = name;
        }
        else if (typeof name === "string") {
            this._ui = new window.dhx[name](null, config);
        }
        else if (typeof name === "function") {
            if (name.prototype instanceof view_1.View) {
                this._ui = new name(null, config);
            }
            else {
                this._ui = {
                    getRootView: function () {
                        return name(config);
                    },
                };
            }
        }
        this.paint();
        return this._ui;
    };
    Popup.prototype.attachHTML = function (html) {
        this._html = html;
        this.paint();
    };
    Popup.prototype.getWidget = function () {
        return this._ui;
    };
    Popup.prototype.getContainer = function () {
        return this.getRootView().refs.content.el;
    };
    Popup.prototype.toVDOM = function () {
        var view;
        if (this._html) {
            view = (0, dom_1.el)(".dhx_popup__inner-html-content", {
                ".innerHTML": this._html,
            });
        }
        else {
            view = this._ui ? this._ui.getRootView() : null;
            if (view && view.render) {
                view = (0, dom_1.inject)(view);
            }
        }
        return (0, dom_1.el)("div", {
            class: "dhx_popup-content",
            tabindex: 0,
            onclick: this._clickEvent,
            _key: this._uid,
            _ref: "content",
        }, [view]);
    };
    Popup.prototype.destructor = function () {
        this.events && this.events.clear();
        this.hide();
        if (this._outerClickDestructor) {
            this._outerClickDestructor();
        }
        this._popup = null;
    };
    Popup.prototype._setTheme = function (node) {
        var _a;
        if (typeof node === "string") {
            this._popup.setAttribute("data-dhx-theme", node);
        }
        else {
            var theme = (_a = node === null || node === void 0 ? void 0 : node.closest("[data-dhx-theme]")) === null || _a === void 0 ? void 0 : _a.getAttribute("data-dhx-theme");
            theme && this._popup.setAttribute("data-dhx-theme", theme);
        }
    };
    Popup.prototype._setPopupSize = function (node, config, calls) {
        var _this = this;
        if (calls === void 0) { calls = 3; }
        var _a = this._popup.getBoundingClientRect(), width = _a.width, height = _a.height;
        // TODO: IE popup height = 0
        if (this._timeout) {
            clearTimeout(this._timeout);
            this._timeout = null;
        }
        if (calls && (width === 0 || height === 0)) {
            this._timeout = setTimeout(function () {
                if (!_this._isActive) {
                    return;
                }
                _this._setPopupSize(node, config, calls - 1);
                _this._timeout = null;
            });
            return;
        }
        var _b = (0, html_1.fitPosition)(node, __assign(__assign({ centering: true, mode: "bottom" }, config), { width: width, height: height })), left = _b.left, top = _b.top;
        this._popup.style.left = left;
        this._popup.style.top = top;
        if (config.indent && config.indent !== 0) {
            switch (config.mode) {
                case "top":
                    this._popup.style.top =
                        parseInt(this._popup.style.top.slice(0, -2), null) -
                            parseInt(config.indent.toString(), null) +
                            "px";
                    break;
                case "bottom":
                    this._popup.style.top =
                        parseInt(this._popup.style.top.slice(0, -2), null) +
                            parseInt(config.indent.toString(), null) +
                            "px";
                    break;
                case "left":
                    this._popup.style.left =
                        parseInt(this._popup.style.left.slice(0, -2), null) -
                            parseInt(config.indent.toString(), null) +
                            "px";
                    break;
                case "right":
                    this._popup.style.left =
                        parseInt(this._popup.style.left.slice(0, -2), null) +
                            parseInt(config.indent.toString(), null) +
                            "px";
                    break;
                default:
                    this._popup.style.top =
                        parseInt(this._popup.style.top.slice(0, -2), null) +
                            parseInt(config.indent.toString(), null) +
                            "px";
                    break;
            }
        }
    };
    Popup.prototype._detectOuterClick = function (node) {
        var _this = this;
        var isDetect = false;
        var storage = new WeakMap();
        var outerClick = function (event) {
            var target = event.target;
            var popups = document.querySelectorAll(".dhx_popup");
            if (isDetect) {
                popups.forEach(function (popup) { return storage.has(popup) || storage.set(popup, _this._popup); });
            }
            else {
                isDetect = Boolean(popups.length);
                isDetect && popups.forEach(function (popup) { return storage.set(popup, true); });
            }
            while (target) {
                if (target === node || target === _this._popup || storage.get(target) === _this._popup) {
                    return;
                }
                target = target.parentNode;
            }
            if (_this._hide(true, event)) {
                document.removeEventListener("mousedown", outerClick);
            }
        };
        document.addEventListener("mousedown", outerClick);
        return function () { return document.removeEventListener("mousedown", outerClick); };
    };
    Popup.prototype._hide = function (fromOuterClick, e) {
        if (this._isActive) {
            if (!this.events.fire(types_1.PopupEvents.beforeHide, [fromOuterClick, e])) {
                return false;
            }
            document.body.removeChild(this._popup);
            this._isActive = false;
            if (this._outerClickDestructor) {
                this._outerClickDestructor();
                this._outerClickDestructor = null;
            }
            this.events.fire(types_1.PopupEvents.afterHide, [e]);
            return true;
        }
    };
    return Popup;
}(view_1.View));
exports.Popup = Popup;


/***/ }),
/* 47 */
/***/ (function(module, exports, __webpack_require__) {

/**
* Copyright (c) 2017, Leon Sorokin
* All rights reserved. (MIT Licensed)
*
* domvm.js (DOM ViewModel)
* A thin, fast, dependency-free vdom view layer
* @preserve https://github.com/leeoniya/domvm (v3.2.6, micro build)
*/

(function (global, factory) {
	 true ? module.exports = factory() :
	undefined;
}(this, (function () { 'use strict';

// NOTE: if adding a new *VNode* type, make it < COMMENT and renumber rest.
// There are some places that test <= COMMENT to assert if node is a VNode

// VNode types
var ELEMENT	= 1;
var TEXT		= 2;
var COMMENT	= 3;

// placeholder types
var VVIEW		= 4;
var VMODEL		= 5;

var ENV_DOM = typeof window !== "undefined";
var win = ENV_DOM ? window : {};
var rAF = win.requestAnimationFrame;

var emptyObj = {};

function noop() {}

var isArr = Array.isArray;

function isSet(val) {
	return val != null;
}

function isPlainObj(val) {
	return val != null && val.constructor === Object;		//  && typeof val === "object"
}

function insertArr(targ, arr, pos, rem) {
	targ.splice.apply(targ, [pos, rem].concat(arr));
}

function isVal(val) {
	var t = typeof val;
	return t === "string" || t === "number";
}

function isFunc(val) {
	return typeof val === "function";
}

function isProm(val) {
	return typeof val === "object" && isFunc(val.then);
}



function assignObj(targ) {
	var args = arguments;

	for (var i = 1; i < args.length; i++)
		{ for (var k in args[i])
			{ targ[k] = args[i][k]; } }

	return targ;
}

// export const defProp = Object.defineProperty;

function deepSet(targ, path, val) {
	var seg;

	while (seg = path.shift()) {
		if (path.length === 0)
			{ targ[seg] = val; }
		else
			{ targ[seg] = targ = targ[seg] || {}; }
	}
}

/*
export function deepUnset(targ, path) {
	var seg;

	while (seg = path.shift()) {
		if (path.length === 0)
			targ[seg] = val;
		else
			targ[seg] = targ = targ[seg] || {};
	}
}
*/

function sliceArgs(args, offs) {
	var arr = [];
	for (var i = offs; i < args.length; i++)
		{ arr.push(args[i]); }
	return arr;
}

function cmpObj(a, b) {
	for (var i in a)
		{ if (a[i] !== b[i])
			{ return false; } }

	return true;
}

function cmpArr(a, b) {
	var alen = a.length;

	if (b.length !== alen)
		{ return false; }

	for (var i = 0; i < alen; i++)
		{ if (a[i] !== b[i])
			{ return false; } }

	return true;
}

// https://github.com/darsain/raft
// rAF throttler, aggregates multiple repeated redraw calls within single animframe
function raft(fn) {
	if (!rAF)
		{ return fn; }

	var id, ctx, args;

	function call() {
		id = 0;
		fn.apply(ctx, args);
	}

	return function() {
		ctx = this;
		args = arguments;
		if (!id) { id = rAF(call); }
	};
}

function curry(fn, args, ctx) {
	return function() {
		return fn.apply(ctx, args);
	};
}

/*
export function prop(val, cb, ctx, args) {
	return function(newVal, execCb) {
		if (newVal !== undefined && newVal !== val) {
			val = newVal;
			execCb !== false && isFunc(cb) && cb.apply(ctx, args);
		}

		return val;
	};
}
*/

/*
// adapted from https://github.com/Olical/binary-search
export function binaryKeySearch(list, item) {
    var min = 0;
    var max = list.length - 1;
    var guess;

	var bitwise = (max <= 2147483647) ? true : false;
	if (bitwise) {
		while (min <= max) {
			guess = (min + max) >> 1;
			if (list[guess].key === item) { return guess; }
			else {
				if (list[guess].key < item) { min = guess + 1; }
				else { max = guess - 1; }
			}
		}
	} else {
		while (min <= max) {
			guess = Math.floor((min + max) / 2);
			if (list[guess].key === item) { return guess; }
			else {
				if (list[guess].key < item) { min = guess + 1; }
				else { max = guess - 1; }
			}
		}
	}

    return -1;
}
*/

// https://en.wikipedia.org/wiki/Longest_increasing_subsequence
// impl borrowed from https://github.com/ivijs/ivi
function longestIncreasingSubsequence(a) {
	var p = a.slice();
	var result = [];
	result.push(0);
	var u;
	var v;

	for (var i = 0, il = a.length; i < il; ++i) {
		var j = result[result.length - 1];
		if (a[j] < a[i]) {
			p[i] = j;
			result.push(i);
			continue;
		}

		u = 0;
		v = result.length - 1;

		while (u < v) {
			var c = ((u + v) / 2) | 0;
			if (a[result[c]] < a[i]) {
				u = c + 1;
			} else {
				v = c;
			}
		}

		if (a[i] < a[result[u]]) {
			if (u > 0) {
				p[i] = result[u - 1];
			}
			result[u] = i;
		}
	}

	u = result.length;
	v = result[u - 1];

	while (u-- > 0) {
		result[u] = v;
		v = p[v];
	}

	return result;
}

// based on https://github.com/Olical/binary-search
function binaryFindLarger(item, list) {
	var min = 0;
	var max = list.length - 1;
	var guess;

	var bitwise = (max <= 2147483647) ? true : false;
	if (bitwise) {
		while (min <= max) {
			guess = (min + max) >> 1;
			if (list[guess] === item) { return guess; }
			else {
				if (list[guess] < item) { min = guess + 1; }
				else { max = guess - 1; }
			}
		}
	} else {
		while (min <= max) {
			guess = Math.floor((min + max) / 2);
			if (list[guess] === item) { return guess; }
			else {
				if (list[guess] < item) { min = guess + 1; }
				else { max = guess - 1; }
			}
		}
	}

	return (min == list.length) ? null : min;

//	return -1;
}

function isEvProp(name) {
	return name[0] === "o" && name[1] === "n";
}

function isSplProp(name) {
	return name[0] === "_";
}

function isStyleProp(name) {
	return name === "style";
}

function repaint(node) {
	node && node.el && node.el.offsetHeight;
}

function isHydrated(vm) {
	return vm.node != null && vm.node.el != null;
}

// tests interactive props where real val should be compared
function isDynProp(tag, attr) {
//	switch (tag) {
//		case "input":
//		case "textarea":
//		case "select":
//		case "option":
			switch (attr) {
				case "value":
				case "checked":
				case "selected":
//				case "selectedIndex":
					return true;
			}
//	}

	return false;
}

function getVm(n) {
	n = n || emptyObj;
	while (n.vm == null && n.parent)
		{ n = n.parent; }
	return n.vm;
}

function VNode() {}

var VNodeProto = VNode.prototype = {
	constructor: VNode,

	type:	null,

	vm:		null,

	// all this stuff can just live in attrs (as defined) just have getters here for it
	key:	null,
	ref:	null,
	data:	null,
	hooks:	null,
	ns:		null,

	el:		null,

	tag:	null,
	attrs:	null,
	body:	null,

	flags:	0,

	_class:	null,
	_diff:	null,

	// pending removal on promise resolution
	_dead:	false,
	// part of longest increasing subsequence?
	_lis:	false,

	idx:	null,
	parent:	null,

	/*
	// break out into optional fluent module
	key:	function(val) { this.key	= val; return this; },
	ref:	function(val) { this.ref	= val; return this; },		// deep refs
	data:	function(val) { this.data	= val; return this; },
	hooks:	function(val) { this.hooks	= val; return this; },		// h("div").hooks()
	html:	function(val) { this.html	= true; return this.body(val); },

	body:	function(val) { this.body	= val; return this; },
	*/
};

function defineText(body) {
	var node = new VNode;
	node.type = TEXT;
	node.body = body;
	return node;
}

// creates a one-shot self-ending stream that redraws target vm
// TODO: if it's already registered by any parent vm, then ignore to avoid simultaneous parent & child refresh

var tagCache = {};

var RE_ATTRS = /\[(\w+)(?:=(\w+))?\]/g;

function cssTag(raw) {
	{
		var cached = tagCache[raw];

		if (cached == null) {
			var tag, id, cls, attr;

			tagCache[raw] = cached = {
				tag:	(tag	= raw.match( /^[-\w]+/))		?	tag[0]						: "div",
				id:		(id		= raw.match( /#([-\w]+)/))		? 	id[1]						: null,
				class:	(cls	= raw.match(/\.([-\w.]+)/))		?	cls[1].replace(/\./g, " ")	: null,
				attrs:	null,
			};

			while (attr = RE_ATTRS.exec(raw)) {
				if (cached.attrs == null)
					{ cached.attrs = {}; }
				cached.attrs[attr[1]] = attr[2] || "";
			}
		}

		return cached;
	}
}

// (de)optimization flags

// forces slow bottom-up removeChild to fire deep willRemove/willUnmount hooks,
var DEEP_REMOVE = 1;
// prevents inserting/removing/reordering of children
var FIXED_BODY = 2;
// enables fast keyed lookup of children via binary search, expects homogeneous keyed body
var KEYED_LIST = 4;
// indicates an vnode match/diff/recycler function for body
var LAZY_LIST = 8;

function initElementNode(tag, attrs, body, flags) {
	var node = new VNode;

	node.type = ELEMENT;

	if (isSet(flags))
		{ node.flags = flags; }

	node.attrs = attrs;

	var parsed = cssTag(tag);

	node.tag = parsed.tag;

	// meh, weak assertion, will fail for id=0, etc.
	if (parsed.id || parsed.class || parsed.attrs) {
		var p = node.attrs || {};

		if (parsed.id && !isSet(p.id))
			{ p.id = parsed.id; }

		if (parsed.class) {
			node._class = parsed.class;		// static class
			p.class = parsed.class + (isSet(p.class) ? (" " + p.class) : "");
		}
		if (parsed.attrs) {
			for (var key in parsed.attrs)
				{ if (!isSet(p[key]))
					{ p[key] = parsed.attrs[key]; } }
		}

//		if (node.attrs !== p)
			node.attrs = p;
	}

	var mergedAttrs = node.attrs;

	if (isSet(mergedAttrs)) {
		if (isSet(mergedAttrs._key))
			{ node.key = mergedAttrs._key; }

		if (isSet(mergedAttrs._ref))
			{ node.ref = mergedAttrs._ref; }

		if (isSet(mergedAttrs._hooks))
			{ node.hooks = mergedAttrs._hooks; }

		if (isSet(mergedAttrs._data))
			{ node.data = mergedAttrs._data; }

		if (isSet(mergedAttrs._flags))
			{ node.flags = mergedAttrs._flags; }

		if (!isSet(node.key)) {
			if (isSet(node.ref))
				{ node.key = node.ref; }
			else if (isSet(mergedAttrs.id))
				{ node.key = mergedAttrs.id; }
			else if (isSet(mergedAttrs.name))
				{ node.key = mergedAttrs.name + (mergedAttrs.type === "radio" || mergedAttrs.type === "checkbox" ? mergedAttrs.value : ""); }
		}
	}

	if (body != null)
		{ node.body = body; }

	return node;
}

function setRef(vm, name, node) {
	var path = ["refs"].concat(name.split("."));
	deepSet(vm, path, node);
}

function setDeepRemove(node) {
	while (node = node.parent)
		{ node.flags |= DEEP_REMOVE; }
}

// vnew, vold
function preProc(vnew, parent, idx, ownVm) {
	if (vnew.type === VMODEL || vnew.type === VVIEW)
		{ return; }

	vnew.parent = parent;
	vnew.idx = idx;
	vnew.vm = ownVm;

	if (vnew.ref != null)
		{ setRef(getVm(vnew), vnew.ref, vnew); }

	var nh = vnew.hooks,
		vh = ownVm && ownVm.hooks;

	if (nh && (nh.willRemove || nh.didRemove) ||
		vh && (vh.willUnmount || vh.didUnmount))
		{ setDeepRemove(vnew); }

	if (isArr(vnew.body))
		{ preProcBody(vnew); }
	else {}
}

function preProcBody(vnew) {
	var body = vnew.body;

	for (var i = 0; i < body.length; i++) {
		var node2 = body[i];

		// remove false/null/undefined
		if (node2 === false || node2 == null)
			{ body.splice(i--, 1); }
		// flatten arrays
		else if (isArr(node2)) {
			insertArr(body, node2, i--, 1);
		}
		else {
			if (node2.type == null)
				{ body[i] = node2 = defineText(""+node2); }

			if (node2.type === TEXT) {
				// remove empty text nodes
				if (node2.body == null || node2.body === "")
					{ body.splice(i--, 1); }
				// merge with previous text node
				else if (i > 0 && body[i-1].type === TEXT) {
					body[i-1].body += node2.body;
					body.splice(i--, 1);
				}
				else
					{ preProc(node2, vnew, i, null); }
			}
			else
				{ preProc(node2, vnew, i, null); }
		}
	}
}

var unitlessProps = {
	animationIterationCount: true,
	boxFlex: true,
	boxFlexGroup: true,
	boxOrdinalGroup: true,
	columnCount: true,
	flex: true,
	flexGrow: true,
	flexPositive: true,
	flexShrink: true,
	flexNegative: true,
	flexOrder: true,
	gridRow: true,
	gridColumn: true,
	order: true,
	lineClamp: true,

	borderImageOutset: true,
	borderImageSlice: true,
	borderImageWidth: true,
	fontWeight: true,
	lineHeight: true,
	opacity: true,
	orphans: true,
	tabSize: true,
	widows: true,
	zIndex: true,
	zoom: true,

	fillOpacity: true,
	floodOpacity: true,
	stopOpacity: true,
	strokeDasharray: true,
	strokeDashoffset: true,
	strokeMiterlimit: true,
	strokeOpacity: true,
	strokeWidth: true
};

function autoPx(name, val) {
	{
		// typeof val === 'number' is faster but fails for numeric strings
		return !isNaN(val) && !unitlessProps[name] ? (val + "px") : val;
	}
}

// assumes if styles exist both are objects or both are strings
function patchStyle(n, o) {
	var ns =     (n.attrs || emptyObj).style;
	var os = o ? (o.attrs || emptyObj).style : null;

	// replace or remove in full
	if (ns == null || isVal(ns))
		{ n.el.style.cssText = ns; }
	else {
		for (var nn in ns) {
			var nv = ns[nn];

			if (os == null || nv != null && nv !== os[nn])
				{ n.el.style[nn] = autoPx(nn, nv); }
		}

		// clean old
		if (os) {
			for (var on in os) {
				if (ns[on] == null)
					{ n.el.style[on] = ""; }
			}
		}
	}
}

var didQueue = [];

function fireHook(hooks, name, o, n, immediate) {
	if (hooks != null) {
		var fn = o.hooks[name];

		if (fn) {
			if (name[0] === "d" && name[1] === "i" && name[2] === "d") {	// did*
				//	console.log(name + " should queue till repaint", o, n);
				immediate ? repaint(o.parent) && fn(o, n) : didQueue.push([fn, o, n]);
			}
			else {		// will*
				//	console.log(name + " may delay by promise", o, n);
				return fn(o, n);		// or pass  done() resolver
			}
		}
	}
}

function drainDidHooks(vm) {
	if (didQueue.length) {
		repaint(vm.node);

		var item;
		while (item = didQueue.shift())
			{ item[0](item[1], item[2]); }
	}
}

var doc = ENV_DOM ? document : null;

function closestVNode(el) {
	while (el._node == null)
		{ el = el.parentNode; }
	return el._node;
}

function createElement(tag, ns) {
	if (ns != null)
		{ return doc.createElementNS(ns, tag); }
	return doc.createElement(tag);
}

function createTextNode(body) {
	return doc.createTextNode(body);
}

function createComment(body) {
	return doc.createComment(body);
}

// ? removes if !recycled
function nextSib(sib) {
	return sib.nextSibling;
}

// ? removes if !recycled
function prevSib(sib) {
	return sib.previousSibling;
}

// TODO: this should collect all deep proms from all hooks and return Promise.all()
function deepNotifyRemove(node) {
	var vm = node.vm;

	var wuRes = vm != null && fireHook(vm.hooks, "willUnmount", vm, vm.data);

	var wrRes = fireHook(node.hooks, "willRemove", node);

	if ((node.flags & DEEP_REMOVE) === DEEP_REMOVE && isArr(node.body)) {
		for (var i = 0; i < node.body.length; i++)
			{ deepNotifyRemove(node.body[i]); }
	}

	return wuRes || wrRes;
}

function _removeChild(parEl, el, immediate) {
	var node = el._node, vm = node.vm;

	if (isArr(node.body)) {
		if ((node.flags & DEEP_REMOVE) === DEEP_REMOVE) {
			for (var i = 0; i < node.body.length; i++)
				{ _removeChild(el, node.body[i].el); }
		}
		else
			{ deepUnref(node); }
	}

	delete el._node;

	parEl.removeChild(el);

	fireHook(node.hooks, "didRemove", node, null, immediate);

	if (vm != null) {
		fireHook(vm.hooks, "didUnmount", vm, vm.data, immediate);
		vm.node = null;
	}
}

// todo: should delay parent unmount() by returning res prom?
function removeChild(parEl, el) {
	var node = el._node;

	// already marked for removal
	if (node._dead) { return; }

	var res = deepNotifyRemove(node);

	if (res != null && isProm(res)) {
		node._dead = true;
		res.then(curry(_removeChild, [parEl, el, true]));
	}
	else
		{ _removeChild(parEl, el); }
}

function deepUnref(node) {
	var obody = node.body;

	for (var i = 0; i < obody.length; i++) {
		var o2 = obody[i];
		delete o2.el._node;

		if (o2.vm != null)
			{ o2.vm.node = null; }

		if (isArr(o2.body))
			{ deepUnref(o2); }
	}
}

function clearChildren(parent) {
	var parEl = parent.el;

	if ((parent.flags & DEEP_REMOVE) === 0) {
		isArr(parent.body) && deepUnref(parent);
		parEl.textContent = null;
	}
	else {
		var el = parEl.firstChild;

		do {
			var next = nextSib(el);
			removeChild(parEl, el);
		} while (el = next);
	}
}

// todo: hooks
function insertBefore(parEl, el, refEl) {
	var node = el._node, inDom = el.parentNode != null;

	// el === refEl is asserted as a no-op insert called to fire hooks
	var vm = (el === refEl || !inDom) ? node.vm : null;

	if (vm != null)
		{ fireHook(vm.hooks, "willMount", vm, vm.data); }

	fireHook(node.hooks, inDom ? "willReinsert" : "willInsert", node);
	parEl.insertBefore(el, refEl);
	fireHook(node.hooks, inDom ? "didReinsert" : "didInsert", node);

	if (vm != null)
		{ fireHook(vm.hooks, "didMount", vm, vm.data); }
}

function insertAfter(parEl, el, refEl) {
	insertBefore(parEl, el, refEl ? nextSib(refEl) : null);
}

var onemit = {};

function emitCfg(cfg) {
	assignObj(onemit, cfg);
}

function emit(evName) {
	var targ = this,
		src = targ;

	var args = sliceArgs(arguments, 1).concat(src, src.data);

	do {
		var evs = targ.onemit;
		var fn = evs ? evs[evName] : null;

		if (fn) {
			fn.apply(targ, args);
			break;
		}
	} while (targ = targ.parent());

	if (onemit[evName])
		{ onemit[evName].apply(targ, args); }
}

var onevent = noop;

function config(newCfg) {
	onevent = newCfg.onevent || onevent;

	{
		if (newCfg.onemit)
			{ emitCfg(newCfg.onemit); }
	}

	
}

function bindEv(el, type, fn) {
	el[type] = fn;
}

function exec(fn, args, e, node, vm) {
	var out = fn.apply(vm, args.concat([e, node, vm, vm.data]));

	// should these respect out === false?
	vm.onevent(e, node, vm, vm.data, args);
	onevent.call(null, e, node, vm, vm.data, args);

	if (out === false) {
		e.preventDefault();
		e.stopPropagation();
	}
}

function handle(e) {
	var node = closestVNode(e.target);
	var vm = getVm(node);

	var evDef = e.currentTarget._node.attrs["on" + e.type], fn, args;

	if (isArr(evDef)) {
		fn = evDef[0];
		args = evDef.slice(1);
		exec(fn, args, e, node, vm);
	}
	else {
		for (var sel in evDef) {
			if (e.target.matches(sel)) {
				var evDef2 = evDef[sel];

				if (isArr(evDef2)) {
					fn = evDef2[0];
					args = evDef2.slice(1);
				}
				else {
					fn = evDef2;
					args = [];
				}

				exec(fn, args, e, node, vm);
			}
		}
	}
}

function patchEvent(node, name, nval, oval) {
	if (nval === oval)
		{ return; }

	var el = node.el;

	if (nval == null || isFunc(nval))
		{ bindEv(el, name, nval); }
	else if (oval == null)
		{ bindEv(el, name, handle); }
}

function remAttr(node, name, asProp) {
	if (name[0] === ".") {
		name = name.substr(1);
		asProp = true;
	}

	if (asProp)
		{ node.el[name] = ""; }
	else
		{ node.el.removeAttribute(name); }
}

// setAttr
// diff, ".", "on*", bool vals, skip _*, value/checked/selected selectedIndex
function setAttr(node, name, val, asProp, initial) {
	var el = node.el;

	if (val == null)
		{ !initial && remAttr(node, name, false); }		// will also removeAttr of style: null
	else if (node.ns != null)
		{ el.setAttribute(name, val); }
	else if (name === "class")
		{ el.className = val; }
	else if (name === "id" || typeof val === "boolean" || asProp)
		{ el[name] = val; }
	else if (name[0] === ".")
		{ el[name.substr(1)] = val; }
	else
		{ el.setAttribute(name, val); }
}

function patchAttrs(vnode, donor, initial) {
	var nattrs = vnode.attrs || emptyObj;
	var oattrs = donor.attrs || emptyObj;

	if (nattrs === oattrs) {
		
	}
	else {
		for (var key in nattrs) {
			var nval = nattrs[key];
			var isDyn = isDynProp(vnode.tag, key);
			var oval = isDyn ? vnode.el[key] : oattrs[key];

			if (nval === oval) {}
			else if (isStyleProp(key))
				{ patchStyle(vnode, donor); }
			else if (isSplProp(key)) {}
			else if (isEvProp(key))
				{ patchEvent(vnode, key, nval, oval); }
			else
				{ setAttr(vnode, key, nval, isDyn, initial); }
		}

		// TODO: bench style.cssText = "" vs removeAttribute("style")
		for (var key in oattrs) {
			!(key in nattrs) &&
			!isSplProp(key) &&
			remAttr(vnode, key, isDynProp(vnode.tag, key) || isEvProp(key));
		}
	}
}

function createView(view, data, key, opts) {
	if (view.type === VVIEW) {
		data	= view.data;
		key		= view.key;
		opts	= view.opts;
		view	= view.view;
	}

	return new ViewModel(view, data, key, opts);
}

//import { XML_NS, XLINK_NS } from './defineSvgElement';
function hydrateBody(vnode) {
	for (var i = 0; i < vnode.body.length; i++) {
		var vnode2 = vnode.body[i];
		var type2 = vnode2.type;

		// ELEMENT,TEXT,COMMENT
		if (type2 <= COMMENT)
			{ insertBefore(vnode.el, hydrate(vnode2)); }		// vnode.el.appendChild(hydrate(vnode2))
		else if (type2 === VVIEW) {
			var vm = createView(vnode2.view, vnode2.data, vnode2.key, vnode2.opts)._redraw(vnode, i, false);		// todo: handle new data updates
			type2 = vm.node.type;
			insertBefore(vnode.el, hydrate(vm.node));
		}
		else if (type2 === VMODEL) {
			var vm = vnode2.vm;
			vm._redraw(vnode, i);					// , false
			type2 = vm.node.type;
			insertBefore(vnode.el, vm.node.el);		// , hydrate(vm.node)
		}
	}
}

//  TODO: DRY this out. reusing normal patch here negatively affects V8's JIT
function hydrate(vnode, withEl) {
	if (vnode.el == null) {
		if (vnode.type === ELEMENT) {
			vnode.el = withEl || createElement(vnode.tag, vnode.ns);

		//	if (vnode.tag === "svg")
		//		vnode.el.setAttributeNS(XML_NS, 'xmlns:xlink', XLINK_NS);

			if (vnode.attrs != null)
				{ patchAttrs(vnode, emptyObj, true); }

			if ((vnode.flags & LAZY_LIST) === LAZY_LIST)	// vnode.body instanceof LazyList
				{ vnode.body.body(vnode); }

			if (isArr(vnode.body))
				{ hydrateBody(vnode); }
			else if (vnode.body != null && vnode.body !== "")
				{ vnode.el.textContent = vnode.body; }
		}
		else if (vnode.type === TEXT)
			{ vnode.el = withEl || createTextNode(vnode.body); }
		else if (vnode.type === COMMENT)
			{ vnode.el = withEl || createComment(vnode.body); }
	}

	vnode.el._node = vnode;

	return vnode.el;
}

// prevent GCC from inlining some large funcs (which negatively affects Chrome's JIT)
//window.syncChildren = syncChildren;
window.lisMove = lisMove;

function nextNode(node, body) {
	return body[node.idx + 1];
}

function prevNode(node, body) {
	return body[node.idx - 1];
}

function parentNode(node) {
	return node.parent;
}

var BREAK = 1;
var BREAK_ALL = 2;

function syncDir(advSib, advNode, insert, sibName, nodeName, invSibName, invNodeName, invInsert) {
	return function(node, parEl, body, state, convTest, lis) {
		var sibNode, tmpSib;

		if (state[sibName] != null) {
			// skip dom elements not created by domvm
			if ((sibNode = state[sibName]._node) == null) {
				state[sibName] = advSib(state[sibName]);
				return;
			}

			if (parentNode(sibNode) !== node) {
				tmpSib = advSib(state[sibName]);
				sibNode.vm != null ? sibNode.vm.unmount(true) : removeChild(parEl, state[sibName]);
				state[sibName] = tmpSib;
				return;
			}
		}

		if (state[nodeName] == convTest)
			{ return BREAK_ALL; }
		else if (state[nodeName].el == null) {
			insert(parEl, hydrate(state[nodeName]), state[sibName]);	// should lis be updated here?
			state[nodeName] = advNode(state[nodeName], body);		// also need to advance sib?
		}
		else if (state[nodeName].el === state[sibName]) {
			state[nodeName] = advNode(state[nodeName], body);
			state[sibName] = advSib(state[sibName]);
		}
		// head->tail or tail->head
		else if (!lis && sibNode === state[invNodeName]) {
			tmpSib = state[sibName];
			state[sibName] = advSib(tmpSib);
			invInsert(parEl, tmpSib, state[invSibName]);
			state[invSibName] = tmpSib;
		}
		else {
			if (lis && state[sibName] != null)
				{ return lisMove(advSib, advNode, insert, sibName, nodeName, parEl, body, sibNode, state); }

			return BREAK;
		}
	};
}

function lisMove(advSib, advNode, insert, sibName, nodeName, parEl, body, sibNode, state) {
	if (sibNode._lis) {
		insert(parEl, state[nodeName].el, state[sibName]);
		state[nodeName] = advNode(state[nodeName], body);
	}
	else {
		// find closest tomb
		var t = binaryFindLarger(sibNode.idx, state.tombs);
		sibNode._lis = true;
		var tmpSib = advSib(state[sibName]);
		insert(parEl, state[sibName], t != null ? body[state.tombs[t]].el : t);

		if (t == null)
			{ state.tombs.push(sibNode.idx); }
		else
			{ state.tombs.splice(t, 0, sibNode.idx); }

		state[sibName] = tmpSib;
	}
}

var syncLft = syncDir(nextSib, nextNode, insertBefore, "lftSib", "lftNode", "rgtSib", "rgtNode", insertAfter);
var syncRgt = syncDir(prevSib, prevNode, insertAfter, "rgtSib", "rgtNode", "lftSib", "lftNode", insertBefore);

function syncChildren(node, donor) {
	var obody	= donor.body,
		parEl	= node.el,
		body	= node.body,
		state = {
			lftNode:	body[0],
			rgtNode:	body[body.length - 1],
			lftSib:		((obody)[0] || emptyObj).el,
			rgtSib:		(obody[obody.length - 1] || emptyObj).el,
		};

	converge:
	while (1) {
//		from_left:
		while (1) {
			var l = syncLft(node, parEl, body, state, null, false);
			if (l === BREAK) { break; }
			if (l === BREAK_ALL) { break converge; }
		}

//		from_right:
		while (1) {
			var r = syncRgt(node, parEl, body, state, state.lftNode, false);
			if (r === BREAK) { break; }
			if (r === BREAK_ALL) { break converge; }
		}

		sortDOM(node, parEl, body, state);
		break;
	}
}

// TODO: also use the state.rgtSib and state.rgtNode bounds, plus reduce LIS range
function sortDOM(node, parEl, body, state) {
	var kids = Array.prototype.slice.call(parEl.childNodes);
	var domIdxs = [];

	for (var k = 0; k < kids.length; k++) {
		var n = kids[k]._node;

		if (n.parent === node)
			{ domIdxs.push(n.idx); }
	}

	// list of non-movable vnode indices (already in correct order in old dom)
	var tombs = longestIncreasingSubsequence(domIdxs).map(function (i) { return domIdxs[i]; });

	for (var i = 0; i < tombs.length; i++)
		{ body[tombs[i]]._lis = true; }

	state.tombs = tombs;

	while (1) {
		var r = syncLft(node, parEl, body, state, null, true);
		if (r === BREAK_ALL) { break; }
	}
}

function alreadyAdopted(vnode) {
	return vnode.el._node.parent !== vnode.parent;
}

function takeSeqIndex(n, obody, fromIdx) {
	return obody[fromIdx];
}

function findSeqThorough(n, obody, fromIdx) {		// pre-tested isView?
	for (; fromIdx < obody.length; fromIdx++) {
		var o = obody[fromIdx];

		if (o.vm != null) {
			// match by key & viewFn || vm
			if (n.type === VVIEW && o.vm.view === n.view && o.vm.key === n.key || n.type === VMODEL && o.vm === n.vm)
				{ return o; }
		}
		else if (!alreadyAdopted(o) && n.tag === o.tag && n.type === o.type && n.key === o.key && (n.flags & ~DEEP_REMOVE) === (o.flags & ~DEEP_REMOVE))
			{ return o; }
	}

	return null;
}

function findHashKeyed(n, obody, fromIdx) {
	return obody[obody._keys[n.key]];
}

/*
// list must be a sorted list of vnodes by key
function findBinKeyed(n, list) {
	var idx = binaryKeySearch(list, n.key);
	return idx > -1 ? list[idx] : null;
}
*/

// have it handle initial hydrate? !donor?
// types (and tags if ELEM) are assumed the same, and donor exists
function patch(vnode, donor) {
	fireHook(donor.hooks, "willRecycle", donor, vnode);

	var el = vnode.el = donor.el;

	var obody = donor.body;
	var nbody = vnode.body;

	el._node = vnode;

	// "" => ""
	if (vnode.type === TEXT && nbody !== obody) {
		el.nodeValue = nbody;
		return;
	}

	if (vnode.attrs != null || donor.attrs != null)
		{ patchAttrs(vnode, donor, false); }

	// patch events

	var oldIsArr = isArr(obody);
	var newIsArr = isArr(nbody);
	var lazyList = (vnode.flags & LAZY_LIST) === LAZY_LIST;

//	var nonEqNewBody = nbody != null && nbody !== obody;

	if (oldIsArr) {
		// [] => []
		if (newIsArr || lazyList)
			{ patchChildren(vnode, donor); }
		// [] => "" | null
		else if (nbody !== obody) {
			if (nbody != null)
				{ el.textContent = nbody; }
			else
				{ clearChildren(donor); }
		}
	}
	else {
		// "" | null => []
		if (newIsArr) {
			clearChildren(donor);
			hydrateBody(vnode);
		}
		// "" | null => "" | null
		else if (nbody !== obody) {
			if (el.firstChild)
				{ el.firstChild.nodeValue = nbody; }
			else
				{ el.textContent = nbody; }
		}
	}

	fireHook(donor.hooks, "didRecycle", donor, vnode);
}

// larger qtys of KEYED_LIST children will use binary search
//const SEQ_FAILS_MAX = 100;

// TODO: modify vtree matcher to work similar to dom reconciler for keyed from left -> from right -> head/tail -> binary
// fall back to binary if after failing nri - nli > SEQ_FAILS_MAX
// while-advance non-keyed fromIdx
// [] => []
function patchChildren(vnode, donor) {
	var nbody		= vnode.body,
		nlen		= nbody.length,
		obody		= donor.body,
		olen		= obody.length,
		isLazy		= (vnode.flags & LAZY_LIST) === LAZY_LIST,
		isFixed		= (vnode.flags & FIXED_BODY) === FIXED_BODY,
		isKeyed		= (vnode.flags & KEYED_LIST) === KEYED_LIST,
		domSync		= !isFixed && vnode.type === ELEMENT,
		doFind		= true,
		find		= (
			isKeyed ? findHashKeyed :				// keyed lists/lazyLists
			isFixed || isLazy ? takeSeqIndex :		// unkeyed lazyLists and FIXED_BODY
			findSeqThorough							// more complex stuff
		);

	if (isKeyed) {
		var keys = {};
		for (var i = 0; i < obody.length; i++)
			{ keys[obody[i].key] = i; }
		obody._keys = keys;
	}

	if (domSync && nlen === 0) {
		clearChildren(donor);
		if (isLazy)
			{ vnode.body = []; }	// nbody.tpl(all);
		return;
	}

	var donor2,
		node2,
		foundIdx,
		patched = 0,
		everNonseq = false,
		fromIdx = 0;		// first unrecycled node (search head)

	if (isLazy) {
		var fnode2 = {key: null};
		var nbodyNew = Array(nlen);
	}

	for (var i = 0; i < nlen; i++) {
		if (isLazy) {
			var remake = false;
			var diffRes = null;

			if (doFind) {
				if (isKeyed)
					{ fnode2.key = nbody.key(i); }

				donor2 = find(fnode2, obody, fromIdx);
			}

			if (donor2 != null) {
                foundIdx = donor2.idx;
				diffRes = nbody.diff(i, donor2);

				// diff returns same, so cheaply adopt vnode without patching
				if (diffRes === true) {
					node2 = donor2;
					node2.parent = vnode;
					node2.idx = i;
					node2._lis = false;
				}
				// diff returns new diffVals, so generate new vnode & patch
				else
					{ remake = true; }
			}
			else
				{ remake = true; }

			if (remake) {
				node2 = nbody.tpl(i);			// what if this is a VVIEW, VMODEL, injected element?
				preProc(node2, vnode, i);

				node2._diff = diffRes != null ? diffRes : nbody.diff(i);

				if (donor2 != null)
					{ patch(node2, donor2); }
			}
			else {
				// TODO: flag tmp FIXED_BODY on unchanged nodes?

				// domSync = true;		if any idx changes or new nodes added/removed
			}

			nbodyNew[i] = node2;
		}
		else {
			var node2 = nbody[i];
			var type2 = node2.type;

			// ELEMENT,TEXT,COMMENT
			if (type2 <= COMMENT) {
				if (donor2 = doFind && find(node2, obody, fromIdx)) {
					patch(node2, donor2);
					foundIdx = donor2.idx;
				}
			}
			else if (type2 === VVIEW) {
				if (donor2 = doFind && find(node2, obody, fromIdx)) {		// update/moveTo
					foundIdx = donor2.idx;
					var vm = donor2.vm._update(node2.data, vnode, i);		// withDOM
				}
				else
					{ var vm = createView(node2.view, node2.data, node2.key, node2.opts)._redraw(vnode, i, false); }	// createView, no dom (will be handled by sync below)

				type2 = vm.node.type;
			}
			else if (type2 === VMODEL) {
				// if the injected vm has never been rendered, this vm._update() serves as the
				// initial vtree creator, but must avoid hydrating (creating .el) because syncChildren()
				// which is responsible for mounting below (and optionally hydrating), tests .el presence
				// to determine if hydration & mounting are needed
				var withDOM = isHydrated(node2.vm);

				var vm = node2.vm._update(node2.data, vnode, i, withDOM);
				type2 = vm.node.type;
			}
		}

		// found donor & during a sequential search ...at search head
		if (!isKeyed && donor2 != null) {
			if (foundIdx === fromIdx) {
				// advance head
				fromIdx++;
				// if all old vnodes adopted and more exist, stop searching
				if (fromIdx === olen && nlen > olen) {
					// short-circuit find, allow loop just create/init rest
					donor2 = null;
					doFind = false;
				}
			}
			else
				{ everNonseq = true; }

			if (olen > 100 && everNonseq && ++patched % 10 === 0)
				{ while (fromIdx < olen && alreadyAdopted(obody[fromIdx]))
					{ fromIdx++; } }
		}
	}

	// replace List w/ new body
	if (isLazy)
		{ vnode.body = nbodyNew; }

	domSync && syncChildren(vnode, donor);
}

// view + key serve as the vm's unique identity
function ViewModel(view, data, key, opts) {
	var vm = this;

	vm.view = view;
	vm.data = data;
	vm.key = key;

	if (opts) {
		vm.opts = opts;
		vm.config(opts);
	}

	var out = isPlainObj(view) ? view : view.call(vm, vm, data, key, opts);

	if (isFunc(out))
		{ vm.render = out; }
	else {
		vm.render = out.render;
		vm.config(out);
	}

	// these must be wrapped here since they're debounced per view
	vm._redrawAsync = raft(function (_) { return vm.redraw(true); });
	vm._updateAsync = raft(function (newData) { return vm.update(newData, true); });

	vm.init && vm.init.call(vm, vm, vm.data, vm.key, opts);
}

var ViewModelProto = ViewModel.prototype = {
	constructor: ViewModel,

	_diff:	null,	// diff cache

	init:	null,
	view:	null,
	key:	null,
	data:	null,
	state:	null,
	api:	null,
	opts:	null,
	node:	null,
	hooks:	null,
	onevent: noop,
	refs:	null,
	render:	null,

	mount: mount,
	unmount: unmount,
	config: function(opts) {
		var t = this;

		if (opts.init)
			{ t.init = opts.init; }
		if (opts.diff)
			{ t.diff = opts.diff; }
		if (opts.onevent)
			{ t.onevent = opts.onevent; }

		// maybe invert assignment order?
		if (opts.hooks)
			{ t.hooks = assignObj(t.hooks || {}, opts.hooks); }

		{
			if (opts.onemit)
				{ t.onemit = assignObj(t.onemit || {}, opts.onemit); }
		}
	},
	parent: function() {
		return getVm(this.node.parent);
	},
	root: function() {
		var p = this.node;

		while (p.parent)
			{ p = p.parent; }

		return p.vm;
	},
	redraw: function(sync) {
		var vm = this;
		sync ? vm._redraw(null, null, isHydrated(vm)) : vm._redrawAsync();
		return vm;
	},
	update: function(newData, sync) {
		var vm = this;
		sync ? vm._update(newData, null, null, isHydrated(vm)) : vm._updateAsync(newData);
		return vm;
	},

	_update: updateSync,
	_redraw: redrawSync,
	_redrawAsync: null,
	_updateAsync: null,
};

function mount(el, isRoot) {
	var vm = this;

	if (isRoot) {
		clearChildren({el: el, flags: 0});

		vm._redraw(null, null, false);

		// if placeholder node doesnt match root tag
		if (el.nodeName.toLowerCase() !== vm.node.tag) {
			hydrate(vm.node);
			insertBefore(el.parentNode, vm.node.el, el);
			el.parentNode.removeChild(el);
		}
		else
			{ insertBefore(el.parentNode, hydrate(vm.node, el), el); }
	}
	else {
		vm._redraw(null, null);

		if (el)
			{ insertBefore(el, vm.node.el); }
	}

	if (el)
		{ drainDidHooks(vm); }

	return vm;
}

// asSub means this was called from a sub-routine, so don't drain did* hook queue
function unmount(asSub) {
	var vm = this;

	var node = vm.node;
	var parEl = node.el.parentNode;

	// edge bug: this could also be willRemove promise-delayed; should .then() or something to make sure hooks fire in order
	removeChild(parEl, node.el);

	if (!asSub)
		{ drainDidHooks(vm); }
}

function reParent(vm, vold, newParent, newIdx) {
	if (newParent != null) {
		newParent.body[newIdx] = vold;
		vold.idx = newIdx;
		vold.parent = newParent;
		vold._lis = false;
	}
	return vm;
}

function redrawSync(newParent, newIdx, withDOM) {
	var isRedrawRoot = newParent == null;
	var vm = this;
	var isMounted = vm.node && vm.node.el && vm.node.el.parentNode;

	var vold = vm.node, oldDiff, newDiff;

	if (vm.diff != null) {
		oldDiff = vm._diff;
		vm._diff = newDiff = vm.diff(vm, vm.data);

		if (vold != null) {
			var cmpFn = isArr(oldDiff) ? cmpArr : cmpObj;
			var isSame = oldDiff === newDiff || cmpFn(oldDiff, newDiff);

			if (isSame)
				{ return reParent(vm, vold, newParent, newIdx); }
		}
	}

	isMounted && fireHook(vm.hooks, "willRedraw", vm, vm.data);

	var vnew = vm.render.call(vm, vm, vm.data, oldDiff, newDiff);

	if (vnew === vold)
		{ return reParent(vm, vold, newParent, newIdx); }

	// todo: test result of willRedraw hooks before clearing refs
	vm.refs = null;

	// always assign vm key to root vnode (this is a de-opt)
	if (vm.key != null && vnew.key !== vm.key)
		{ vnew.key = vm.key; }

	vm.node = vnew;

	if (newParent) {
		preProc(vnew, newParent, newIdx, vm);
		newParent.body[newIdx] = vnew;
	}
	else if (vold && vold.parent) {
		preProc(vnew, vold.parent, vold.idx, vm);
		vold.parent.body[vold.idx] = vnew;
	}
	else
		{ preProc(vnew, null, null, vm); }

	if (withDOM !== false) {
		if (vold) {
			// root node replacement
			if (vold.tag !== vnew.tag || vold.key !== vnew.key) {
				// hack to prevent the replacement from triggering mount/unmount
				vold.vm = vnew.vm = null;

				var parEl = vold.el.parentNode;
				var refEl = nextSib(vold.el);
				removeChild(parEl, vold.el);
				insertBefore(parEl, hydrate(vnew), refEl);

				// another hack that allows any higher-level syncChildren to set
				// reconciliation bounds using a live node
				vold.el = vnew.el;

				// restore
				vnew.vm = vm;
			}
			else
				{ patch(vnew, vold); }
		}
		else
			{ hydrate(vnew); }
	}

	isMounted && fireHook(vm.hooks, "didRedraw", vm, vm.data);

	if (isRedrawRoot && isMounted)
		{ drainDidHooks(vm); }

	return vm;
}

// this also doubles as moveTo
// TODO? @withRedraw (prevent redraw from firing)
function updateSync(newData, newParent, newIdx, withDOM) {
	var vm = this;

	if (newData != null) {
		if (vm.data !== newData) {
			fireHook(vm.hooks, "willUpdate", vm, newData);
			vm.data = newData;

			
		}
	}

	return vm._redraw(newParent, newIdx, withDOM);
}

function defineElement(tag, arg1, arg2, flags) {
	var attrs, body;

	if (arg2 == null) {
		if (isPlainObj(arg1))
			{ attrs = arg1; }
		else
			{ body = arg1; }
	}
	else {
		attrs = arg1;
		body = arg2;
	}

	return initElementNode(tag, attrs, body, flags);
}

//export const XML_NS = "http://www.w3.org/2000/xmlns/";
var SVG_NS = "http://www.w3.org/2000/svg";

function defineSvgElement(tag, arg1, arg2, flags) {
	var n = defineElement(tag, arg1, arg2, flags);
	n.ns = SVG_NS;
	return n;
}

function defineComment(body) {
	var node = new VNode;
	node.type = COMMENT;
	node.body = body;
	return node;
}

// placeholder for declared views
function VView(view, data, key, opts) {
	this.view = view;
	this.data = data;
	this.key = key;
	this.opts = opts;
}

VView.prototype = {
	constructor: VView,

	type: VVIEW,
	view: null,
	data: null,
	key: null,
	opts: null,
};

function defineView(view, data, key, opts) {
	return new VView(view, data, key, opts);
}

// placeholder for injected ViewModels
function VModel(vm) {
	this.vm = vm;
}

VModel.prototype = {
	constructor: VModel,

	type: VMODEL,
	vm: null,
};

function injectView(vm) {
//	if (vm.node == null)
//		vm._redraw(null, null, false);

//	return vm.node;

	return new VModel(vm);
}

function injectElement(el) {
	var node = new VNode;
	node.type = ELEMENT;
	node.el = node.key = el;
	return node;
}

function lazyList(items, cfg) {
	var len = items.length;

	var self = {
		items: items,
		length: len,
		// defaults to returning item identity (or position?)
		key: function(i) {
			return cfg.key(items[i], i);
		},
		// default returns 0?
		diff: function(i, donor) {
			var newVals = cfg.diff(items[i], i);
			if (donor == null)
				{ return newVals; }
			var oldVals = donor._diff;
			var same = newVals === oldVals || isArr(oldVals) ? cmpArr(newVals, oldVals) : cmpObj(newVals, oldVals);
			return same || newVals;
		},
		tpl: function(i) {
			return cfg.tpl(items[i], i);
		},
		map: function(tpl) {
			cfg.tpl = tpl;
			return self;
		},
		body: function(vnode) {
			var nbody = Array(len);

			for (var i = 0; i < len; i++) {
				var vnode2 = self.tpl(i);

			//	if ((vnode.flags & KEYED_LIST) === KEYED_LIST && self. != null)
			//		vnode2.key = getKey(item);

				vnode2._diff = self.diff(i);			// holds oldVals for cmp

				nbody[i] = vnode2;

				// run preproc pass (should this be just preProc in above loop?) bench
				preProc(vnode2, vnode, i);
			}

			// replace List with generated body
			vnode.body = nbody;
		}
	};

	return self;
}

var nano = {
	config: config,

	ViewModel: ViewModel,
	VNode: VNode,

	createView: createView,

	defineElement: defineElement,
	defineSvgElement: defineSvgElement,
	defineText: defineText,
	defineComment: defineComment,
	defineView: defineView,

	injectView: injectView,
	injectElement: injectElement,

	lazyList: lazyList,

	FIXED_BODY: FIXED_BODY,
	DEEP_REMOVE: DEEP_REMOVE,
	KEYED_LIST: KEYED_LIST,
	LAZY_LIST: LAZY_LIST,
};

function protoPatch(n, doRepaint) {
	patch$1(this, n, doRepaint);
}

// newNode can be either {class: style: } or full new VNode
// will/didPatch hooks?
function patch$1(o, n, doRepaint) {
	if (n.type != null) {
		// no full patching of view roots, just use redraw!
		if (o.vm != null)
			{ return; }

		preProc(n, o.parent, o.idx, null);
		o.parent.body[o.idx] = n;
		patch(n, o);
		doRepaint && repaint(n);
		drainDidHooks(getVm(n));
	}
	else {
		// TODO: re-establish refs

		// shallow-clone target
		var donor = Object.create(o);
		// fixate orig attrs
		donor.attrs = assignObj({}, o.attrs);
		// assign new attrs into live targ node
		var oattrs = assignObj(o.attrs, n);
		// prepend any fixed shorthand class
		if (o._class != null) {
			var aclass = oattrs.class;
			oattrs.class = aclass != null && aclass !== "" ? o._class + " " + aclass : o._class;
		}

		patchAttrs(o, donor);

		doRepaint && repaint(o);
	}
}

VNodeProto.patch = protoPatch;

function nextSubVms(n, accum) {
	var body = n.body;

	if (isArr(body)) {
		for (var i = 0; i < body.length; i++) {
			var n2 = body[i];

			if (n2.vm != null)
				{ accum.push(n2.vm); }
			else
				{ nextSubVms(n2, accum); }
		}
	}

	return accum;
}

function defineElementSpread(tag) {
	var args = arguments;
	var len = args.length;
	var body, attrs;

	if (len > 1) {
		var bodyIdx = 1;

		if (isPlainObj(args[1])) {
			attrs = args[1];
			bodyIdx = 2;
		}

		if (len === bodyIdx + 1 && (isVal(args[bodyIdx]) || isArr(args[bodyIdx]) || attrs && (attrs._flags & LAZY_LIST) === LAZY_LIST))
			{ body = args[bodyIdx]; }
		else
			{ body = sliceArgs(args, bodyIdx); }
	}

	return initElementNode(tag, attrs, body);
}

function defineSvgElementSpread() {
	var n = defineElementSpread.apply(null, arguments);
	n.ns = SVG_NS;
	return n;
}

ViewModelProto.emit = emit;
ViewModelProto.onemit = null;

ViewModelProto.body = function() {
	return nextSubVms(this.node, []);
};

nano.defineElementSpread = defineElementSpread;
nano.defineSvgElementSpread = defineSvgElementSpread;

return nano;

})));
//# sourceMappingURL=domvm.micro.js.map


/***/ }),
/* 48 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
var __spreadArray = (this && this.__spreadArray) || function (to, from, pack) {
    if (pack || arguments.length === 2) for (var i = 0, l = from.length, ar; i < l; i++) {
        if (ar || !(i in from)) {
            if (!ar) ar = Array.prototype.slice.call(from, 0, i);
            ar[i] = from[i];
        }
    }
    return to.concat(ar || Array.prototype.slice.call(from));
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.Calendar = void 0;
var core_1 = __webpack_require__(0);
var dom_1 = __webpack_require__(2);
var events_1 = __webpack_require__(4);
var view_1 = __webpack_require__(7);
var ts_timepicker_1 = __webpack_require__(49);
var helper_1 = __webpack_require__(62);
var date_1 = __webpack_require__(22);
var types_1 = __webpack_require__(63);
var html_1 = __webpack_require__(1);
var Calendar = /** @class */ (function (_super) {
    __extends(Calendar, _super);
    function Calendar(container, config) {
        if (config === void 0) { config = {}; }
        var _this = _super.call(this, container, (0, core_1.extend)({
            weekStart: "sunday",
            thisMonthOnly: false,
            dateFormat: window && window.dhx && window.dhx.dateFormat,
            width: "250px",
        }, config)) || this;
        _this._selected = [];
        _this.events = new events_1.EventSystem();
        _this.config.disabledDates = _this.config.disabledDates || _this.config.block; // TODO: remove suite_7.0
        _this.config.mode = _this.config.mode || _this.config.view; // TODO: remove suite_7.0
        if (!_this.config.dateFormat) {
            if (_this.config.timePicker) {
                if (_this.config.timeFormat === 12) {
                    _this.config.dateFormat = "%d/%m/%y %h:%i %A";
                }
                else {
                    _this.config.dateFormat = "%d/%m/%y %H:%i";
                }
            }
            else {
                _this.config.dateFormat = "%d/%m/%y";
            }
        }
        if (_this.config.value) {
            _this._setSelected(_this.config.value);
        }
        if (_this.config.date) {
            _this._currentDate = date_1.DateHelper.toDateObject(_this.config.date, _this.config.dateFormat);
        }
        else if (_this._getSelected()) {
            _this._currentDate = date_1.DateHelper.copy(_this._getSelected());
        }
        else {
            _this._currentDate = new Date();
        }
        switch (_this.config.mode) {
            case "month":
                _this._currentViewMode = "month";
                break;
            case "year":
                _this._currentViewMode = "year";
                break;
            case "timepicker":
                _this._currentViewMode = _this.config.timePicker ? "timepicker" : "calendar";
                break;
            default:
                _this._currentViewMode = "calendar";
        }
        _this._initHandlers();
        if (_this.config.timePicker) {
            _this._timepicker = new ts_timepicker_1.Timepicker(null, {
                timeFormat: _this.config.timeFormat,
                controls: true,
            });
            var initTime = _this._getSelected() || new Date();
            _this._timepicker.setValue(initTime);
            _this._time = _this._timepicker.getValue();
            _this._timepicker.events.on(ts_timepicker_1.TimepickerEvents.afterClose, function () {
                _this._timepicker.setValue(_this._time);
                _this.showDate(null, "calendar");
            });
            _this._timepicker.events.on(ts_timepicker_1.TimepickerEvents.afterApply, function () {
                var _a = _this._timepicker.getValue(true), hour = _a.hour, minute = _a.minute, AM = _a.AM;
                var oldDate = _this._getSelected();
                var newDate = date_1.DateHelper.withHoursAndMinutes(_this._getSelected() || new Date(), hour, minute, AM);
                if (_this.events.fire(types_1.CalendarEvents.beforeChange, [newDate, oldDate, true])) {
                    _this._selected[_this._selected.length - 1] = newDate;
                    _this.events.fire(types_1.CalendarEvents.change, [newDate, oldDate, true]);
                }
                _this._time = _this._timepicker.getValue();
                _this.showDate(null, "calendar");
            });
        }
        var render = function () { return _this._draw(); };
        _this.mount(container, (0, dom_1.create)({ render: render }));
        return _this;
    }
    Calendar.prototype.setValue = function (value) {
        if (!value || (value instanceof Array && value.length === 0)) {
            return false;
        }
        var currentDate = value instanceof Array ? value[0] : value;
        var date = date_1.DateHelper.toDateObject(currentDate, this.config.dateFormat);
        var oldDate = date_1.DateHelper.copy(this._getSelected());
        if (!this.events.fire(types_1.CalendarEvents.beforeChange, [date, oldDate, false])) {
            return false;
        }
        this._selected = [];
        this._setSelected(value);
        if (this._timepicker) {
            this._timepicker.setValue(date);
            this._time = this._timepicker.getValue();
        }
        this.showDate(this._getSelected());
        this.events.fire(types_1.CalendarEvents.change, [date, oldDate, false]);
        this.paint();
        return true;
    };
    Calendar.prototype.getValue = function (asDateObject) {
        var _this = this;
        if (asDateObject === void 0) { asDateObject = false; }
        if (!this._selected[0]) {
            return "";
        }
        if (this.config.range) {
            return asDateObject
                ? this._selected.map(function (date) { return date_1.DateHelper.copy(date); })
                : this._selected.map(function (date) { return (0, date_1.getFormattedDate)(_this.config.dateFormat, date); });
        }
        return asDateObject
            ? date_1.DateHelper.copy(this._selected[0])
            : (0, date_1.getFormattedDate)(this.config.dateFormat, this._selected[0]);
    };
    Calendar.prototype.getCurrentMode = function () {
        return this._currentViewMode;
    };
    Calendar.prototype.showDate = function (date, mode) {
        if (date) {
            this._currentDate = date_1.DateHelper.copy(date);
        }
        if (mode) {
            this._currentViewMode = mode;
        }
        this.paint();
    };
    Calendar.prototype.destructor = function () {
        this._linkedCalendar && this._unlink();
        this._timepicker && this._timepicker.destructor();
        this.events && this.events.clear();
        this.config = this.events = null;
        this._uid = this._selected = this._currentDate = this._currentViewMode = this._handlers = this._timepicker = this._time = null;
        this.unmount();
    };
    Calendar.prototype.clear = function () {
        var oldDate = this.getValue(true);
        if (!this.events.fire(types_1.CalendarEvents.beforeChange, ["", oldDate, false]))
            return;
        if (this.config.timePicker) {
            this._timepicker.clear();
            this._time = this._timepicker.getValue();
        }
        this._selected = [];
        this.showDate(null, this.config.mode);
        this.events.fire(types_1.CalendarEvents.change, [this.getValue(true), oldDate, false, "clear"]);
    };
    Calendar.prototype.link = function (targetCalendar) {
        var _this = this;
        if (this._linkedCalendar) {
            this._unlink();
        }
        this._linkedCalendar = targetCalendar;
        var rawLowerDate = this.getValue(true);
        var rawUpperDate = targetCalendar.getValue(true);
        var lowerDate = rawLowerDate && date_1.DateHelper.dayStart(rawLowerDate);
        var upperDate = rawUpperDate && date_1.DateHelper.dayStart(rawUpperDate);
        var getRangeClass = function (date) {
            if (date_1.DateHelper.isSameDay(upperDate, lowerDate)) {
                return null;
            }
            var positionInRange = "dhx_calendar-day--in-range";
            if (date_1.DateHelper.isSameDay(date, lowerDate)) {
                positionInRange += " dhx_calendar-day--first-date";
            }
            if (date_1.DateHelper.isSameDay(date, upperDate)) {
                positionInRange += " dhx_calendar-day--last-date";
            }
            return positionInRange;
        };
        var rangeMark = function (date) {
            if (lowerDate && upperDate) {
                return date >= lowerDate && date <= upperDate && getRangeClass(date);
            }
        };
        if (!this.config.$rangeMark || !this._linkedCalendar.config.$rangeMark) {
            this.config.$rangeMark = this._linkedCalendar.config.$rangeMark = rangeMark;
        }
        if (!this.config.disabledDates || !this._linkedCalendar.config.disabledDates) {
            this.config.disabledDates = function (date) {
                if (upperDate) {
                    return date > upperDate;
                }
            };
            this._linkedCalendar.config.disabledDates = function (date) {
                if (lowerDate) {
                    return date < lowerDate;
                }
            };
        }
        this.config.thisMonthOnly = true;
        targetCalendar.config.thisMonthOnly = true;
        this.events.on(types_1.CalendarEvents.change, function (date) {
            lowerDate = date ? date_1.DateHelper.dayStart(date) : null;
            _this._linkedCalendar.paint();
        }, "link");
        this._linkedCalendar.events.on(types_1.CalendarEvents.change, function (date) {
            upperDate = date ? date_1.DateHelper.dayStart(date) : null;
            _this.paint();
        }, "link");
        this._linkedCalendar.paint();
        this.paint();
    };
    Calendar.prototype._unlink = function () {
        if (this._linkedCalendar) {
            this.config.$rangeMark = this._linkedCalendar.config.$rangeMark = null;
            this.config.disabledDates = this._linkedCalendar.config.disabledDates = null;
            this.events.detach(types_1.CalendarEvents.change, "link");
            this._linkedCalendar.events.detach(types_1.CalendarEvents.change, "link");
            this._linkedCalendar.paint();
            this._linkedCalendar = null;
        }
    };
    Calendar.prototype._setSelected = function (value) {
        var _this = this;
        var currentDate = value instanceof Array ? value[0] : value;
        var date = date_1.DateHelper.toDateObject(currentDate, this.config.dateFormat);
        if (value instanceof Array && this.config.range) {
            var filterDate_1 = [];
            value.forEach(function (element, index) {
                if (index < 2) {
                    filterDate_1.push(date_1.DateHelper.toDateObject(element, _this.config.dateFormat));
                }
            });
            if (filterDate_1.length === 2 && filterDate_1[0] < filterDate_1[1]) {
                filterDate_1.forEach(function (element) { return _this._selected.push(element); });
            }
            else {
                this._selected[0] = filterDate_1[0];
            }
        }
        else {
            this._selected[0] = date;
        }
    };
    Calendar.prototype._getSelected = function () {
        return this._selected[this._selected.length - 1];
    };
    Calendar.prototype._draw = function () {
        switch (this._currentViewMode) {
            case "calendar":
                this.events.fire(types_1.CalendarEvents.modeChange, ["calendar"]);
                return this._drawCalendar();
            case "month":
                this.events.fire(types_1.CalendarEvents.modeChange, ["month"]);
                return this._drawMonthSelector();
            case "year":
                this.events.fire(types_1.CalendarEvents.modeChange, ["year"]);
                return this._drawYearSelector();
            case "timepicker":
                this.events.fire(types_1.CalendarEvents.modeChange, ["timepicker"]);
                return this._drawTimepicker();
        }
    };
    Calendar.prototype._initHandlers = function () {
        var _this = this;
        var ie_key_map = {
            Up: "ArrowUp",
            Down: "ArrowDown",
            Right: "ArrowRight",
            Left: "ArrowLeft",
            Esc: "Escape",
            Spacebar: "Space",
        };
        var getKey = function (e) {
            var key;
            if ((e.which >= 48 && e.which <= 57) || (e.which >= 65 && e.which <= 90)) {
                key = String.fromCharCode(e.which);
            }
            else {
                var keyName = e.which === 32 ? e.code : e.key;
                key = (0, html_1.isIE)() ? ie_key_map[keyName] || keyName : keyName;
            }
            return key;
        };
        var getVerticalRange = function (decrease) {
            if (decrease === void 0) { decrease = false; }
            var range = 0;
            switch (_this._currentViewMode) {
                case "calendar":
                    range = decrease ? -7 : 7;
                    break;
                case "month":
                    range = decrease ? -4 : 4;
                    break;
                case "year":
                    range = decrease ? -4 : 4;
            }
            return range;
        };
        this._handlers = {
            onkeydown: {
                ".dhx_calendar-year, .dhx_calendar-month, .dhx_calendar-day": function (_e, vn) {
                    switch (getKey(_e)) {
                        case "Enter":
                            _this._selectDate(_e, vn);
                            break;
                        case "ArrowLeft":
                            _this._moveBrowseFocus(_e, vn, -1);
                            break;
                        case "ArrowRight":
                            _this._moveBrowseFocus(_e, vn, 1);
                            break;
                        case "ArrowUp":
                            _this._moveBrowseFocus(_e, vn, getVerticalRange(true));
                            break;
                        case "ArrowDown":
                            _this._moveBrowseFocus(_e, vn, getVerticalRange());
                            break;
                    }
                },
            },
            onclick: {
                ".dhx_calendar-year, .dhx_calendar-month, .dhx_calendar-day": function (_e, vn) {
                    _this._selectDate(_e, vn);
                },
                ".dhx_calendar-action__cancel": function () {
                    _this.showDate(_this._getSelected(), "calendar");
                    _this.events.fire(types_1.CalendarEvents.cancelClick, []);
                },
                ".dhx_calendar-action__show-month": function () { return _this.showDate(null, "month"); },
                ".dhx_calendar-action__show-year": function () { return _this.showDate(null, "year"); },
                ".dhx_calendar-action__next": function () {
                    var newDate;
                    switch (_this._currentViewMode) {
                        case "calendar":
                            newDate = date_1.DateHelper.addMonth(_this._currentDate, 1);
                            break;
                        case "month":
                            newDate = date_1.DateHelper.addYear(_this._currentDate, 1);
                            break;
                        case "year":
                            newDate = date_1.DateHelper.addYear(_this._currentDate, 12);
                    }
                    _this.showDate(newDate);
                },
                ".dhx_calendar-action__prev": function () {
                    var newDate;
                    switch (_this._currentViewMode) {
                        case "calendar":
                            newDate = date_1.DateHelper.addMonth(_this._currentDate, -1);
                            break;
                        case "month":
                            newDate = date_1.DateHelper.addYear(_this._currentDate, -1);
                            break;
                        case "year":
                            newDate = date_1.DateHelper.addYear(_this._currentDate, -12);
                    }
                    _this.showDate(newDate);
                },
                ".dhx_calendar-action__show-timepicker": function () {
                    _this._currentViewMode = "timepicker";
                    _this.paint();
                },
            },
            onmouseover: {
                ".dhx_calendar-day": function (event, node) {
                    _this.events.fire(types_1.CalendarEvents.dateMouseOver, [new Date(node.attrs._date), event]);
                    _this.events.fire(types_1.CalendarEvents.dateHover, [new Date(node.attrs._date), event]); // TODO: remove suite_7.0
                },
            },
        };
    };
    Calendar.prototype._getData = function (date) {
        var _this = this;
        this._isSelectedInCurrentRange = false;
        var firstDay;
        switch (this.config.weekStart) {
            case "saturday":
                firstDay = -1;
                break;
            case "monday":
                firstDay = 1;
                break;
            default:
                firstDay = 0;
        }
        var first = date_1.DateHelper.weekStart(date_1.DateHelper.monthStart(date), firstDay);
        var data = [];
        var weeksCount = 6;
        var currentDate = first;
        while (weeksCount--) {
            var currentWeek = date_1.DateHelper.getWeekNumber(currentDate);
            var disabledDays = 0;
            var daysCount = 7;
            var days = [];
            var _loop_1 = function () {
                var isDateWeekEnd = date_1.DateHelper.isWeekEnd(currentDate);
                var isCurrentMonth = date.getMonth() === currentDate.getMonth();
                var isBlocked = this_1.config.disabledDates && this_1.config.disabledDates(currentDate);
                var css = [];
                if (this_1.config.range && this_1._selected[0] && this_1._selected[1]) {
                    var getRangeClass_1 = function () {
                        if (date_1.DateHelper.isSameDay(_this._selected[0], _this._selected[1])) {
                            return null;
                        }
                        return "dhx_calendar-day--in-range";
                    };
                    var rangeMark = function () {
                        if (_this._selected[0] && _this._selected[1]) {
                            var firstDate = date_1.DateHelper.dayStart(_this._selected[0]);
                            var lastDate = date_1.DateHelper.dayStart(_this._selected[1]);
                            return currentDate >= firstDate && currentDate <= lastDate && getRangeClass_1();
                        }
                    };
                    this_1.config.$rangeMark = rangeMark;
                }
                if (isDateWeekEnd) {
                    css.push("dhx_calendar-day--weekend");
                }
                if (!isCurrentMonth) {
                    if (this_1.config.thisMonthOnly) {
                        disabledDays++;
                        css.push("dhx_calendar-day--hidden");
                    }
                    else {
                        css.push("dhx_calendar-day--muffled");
                    }
                }
                if (this_1.config.mark) {
                    var markedCss = this_1.config.mark(currentDate);
                    if (markedCss) {
                        css.push(markedCss);
                    }
                }
                if (this_1.config.$rangeMark) {
                    var rangeMark = this_1.config.$rangeMark(currentDate);
                    if (rangeMark) {
                        css.push(rangeMark);
                    }
                }
                if (isBlocked) {
                    if (isDateWeekEnd) {
                        css.push("dhx_calendar-day--weekend-disabled");
                    }
                    else {
                        css.push("dhx_calendar-day--disabled");
                    }
                }
                this_1._selected.forEach(function (selected, index) {
                    if (selected && date_1.DateHelper.isSameDay(selected, currentDate)) {
                        _this._isSelectedInCurrentRange = true;
                        var dayCss = "dhx_calendar-day--selected";
                        if (_this.config.range) {
                            dayCss += " dhx_calendar-day--selected-".concat(index === 0 ? "first " : "last");
                        }
                        css.push(dayCss);
                    }
                });
                days.push({
                    date: currentDate,
                    day: currentDate.getDate(),
                    css: css.join(" "),
                });
                currentDate = date_1.DateHelper.addDay(currentDate);
            };
            var this_1 = this;
            while (daysCount--) {
                _loop_1();
            }
            data.push({
                weekNumber: currentWeek,
                days: days,
                disabledWeekNumber: disabledDays === 7,
            });
        }
        return data;
    };
    Calendar.prototype._drawCalendar = function () {
        var _this = this;
        var date = this._currentDate;
        var _a = this.config, weekStart = _a.weekStart, thisMonthOnly = _a.thisMonthOnly, css = _a.css, timePicker = _a.timePicker, width = _a.width;
        var weekDays;
        switch (weekStart) {
            case "saturday":
                weekDays = __spreadArray([date_1.locale.daysShort[6]], date_1.locale.daysShort.slice(0, -1), true);
                break;
            case "monday":
                weekDays = __spreadArray(__spreadArray([], date_1.locale.daysShort.slice(1), true), [date_1.locale.daysShort[0]], false);
                break;
            default:
                weekDays = date_1.locale.daysShort;
        }
        var weekDaysHeader = weekDays.map(function (day) { return (0, dom_1.el)(".dhx_calendar-weekday", day); });
        var data = this._getData(date);
        var isFirstItem = true;
        var selectedDate = this._getSelected();
        var isDateSelected = function (date) {
            return date && selectedDate && date.getTime() === selectedDate.getTime();
        };
        var getCellAriaAttrs = function (item) {
            var attrs = {
                role: "button",
                tabindex: -1,
                "aria-pressed": "false",
            };
            if (item) {
                if (_this._isSelectedInCurrentRange) {
                    // it is correct that conditions are separated
                    if (isDateSelected(item.date)) {
                        attrs["tabindex"] = 0;
                        attrs["aria-pressed"] = "true";
                    }
                }
                else if (isFirstItem) {
                    attrs["tabindex"] = 0;
                }
                isFirstItem = false;
            }
            return attrs;
        };
        var content = [];
        var weekNumbers = [];
        var weekNumbersWrapper;
        for (var _i = 0, data_1 = data; _i < data_1.length; _i++) {
            var week = data_1[_i];
            var weekRow = week.days.map(function (item) {
                return (0, dom_1.el)("div.dhx_calendar-day", __assign({ class: item.css, _date: item.date }, getCellAriaAttrs(item)), item.day);
            });
            if (this.config.weekNumbers && !(week.disabledWeekNumber && thisMonthOnly)) {
                weekNumbers.push((0, dom_1.el)("div", {
                    class: "dhx_calendar-week-number",
                }, week.weekNumber));
            }
            content = content.concat(weekRow);
        }
        if (this.config.weekNumbers) {
            weekNumbersWrapper = (0, dom_1.el)(".dhx_calendar__week-numbers", weekNumbers);
        }
        var widgetClass = "dhx_calendar dhx_widget" +
            (css ? " " + css : "") +
            (timePicker ? " dhx_calendar--with_timepicker" : "") +
            (this.config.weekNumbers ? " dhx_calendar--with_week-numbers" : "");
        return (0, dom_1.el)("div", __assign({ class: widgetClass, style: {
                width: this.config.weekNumbers ? parseInt(width.toString()) + 48 + "px" : width,
            } }, this._handlers), [
            (0, dom_1.el)(".dhx_calendar__wrapper", [
                this._drawHeader((0, dom_1.el)("button.dhx_calendar-action__show-month.dhx_button.dhx_button--view_link.dhx_button--size_small.dhx_button--color_secondary.dhx_button--circle", {
                    "aria-live": "polite",
                    type: "button",
                }, date_1.locale.months[date.getMonth()] + " " + date.getFullYear())),
                this.config.weekNumbers &&
                    (0, dom_1.el)(".dhx_calendar__dates-wrapper", [
                        (0, dom_1.el)(".dhx_calendar__weekdays", weekDaysHeader),
                        (0, dom_1.el)(".dhx_calendar__days", content),
                        weekNumbersWrapper,
                    ]),
                !this.config.weekNumbers && (0, dom_1.el)(".dhx_calendar__weekdays", weekDaysHeader),
                !this.config.weekNumbers && (0, dom_1.el)(".dhx_calendar__days", content),
                timePicker
                    ? (0, dom_1.el)(".dhx_timepicker__actions", [
                        (0, dom_1.el)("button.dhx_calendar__timepicker-button." +
                            "dhx_button.dhx_button--view_link.dhx_button--size_small.dhx_button--color_secondary.dhx_button--width_full.dhx_button--circle.dhx_calendar-action__show-timepicker", { type: "button" }, [
                            (0, dom_1.el)("span.dhx_button__icon.dxi.dxi-clock-outline"),
                            (0, dom_1.el)("span.dhx_button__text", this._time),
                        ]),
                    ])
                    : null,
            ]),
        ]);
    };
    Calendar.prototype._drawMonthSelector = function () {
        var date = this._currentDate;
        var currentMonth = date.getMonth();
        var currentYear = this._getSelected() ? this._getSelected().getFullYear() : null;
        var _a = this.config, css = _a.css, timePicker = _a.timePicker, weekNumbers = _a.weekNumbers, width = _a.width, mode = _a.mode;
        var widgetClass = "dhx_calendar dhx_widget" +
            (css ? " " + css : "") +
            (timePicker ? " dhx_calendar--with_timepicker" : "") +
            (weekNumbers ? " dhx_calendar--with_week-numbers" : "");
        var isFirstItem = true;
        var isCurrentYear = currentYear === date.getFullYear();
        var isMonthSelected = function (i) { return isCurrentYear && currentMonth === i; };
        var getCellAriaAttrs = function (item, i) {
            var attrs = {
                role: "button",
                tabindex: -1,
                "aria-pressed": "false",
            };
            if (item) {
                if (isCurrentYear) {
                    // it is correct that conditions are separated
                    if (isMonthSelected(i)) {
                        attrs["tabindex"] = 0;
                        attrs["aria-pressed"] = "true";
                    }
                }
                else if (isFirstItem) {
                    attrs["tabindex"] = 0;
                }
                isFirstItem = false;
            }
            return attrs;
        };
        return (0, dom_1.el)("div", __assign({ class: widgetClass, style: {
                width: weekNumbers ? parseInt(width.toString()) + 48 + "px" : width,
            } }, this._handlers), [
            (0, dom_1.el)(".dhx_calendar__wrapper", [
                this._drawHeader((0, dom_1.el)("button.dhx_calendar-action__show-year.dhx_button.dhx_button--view_link.dhx_button--size_small.dhx_button--color_secondary.dhx_button--circle", {
                    "aria-live": "polite",
                    type: "button",
                }, date.getFullYear())),
                (0, dom_1.el)(".dhx_calendar__months", date_1.locale.monthsShort.map(function (item, i) {
                    return (0, dom_1.el)("div", __assign(__assign({ class: "dhx_calendar-month" +
                            (isMonthSelected(i) ? " dhx_calendar-month--selected" : "") }, getCellAriaAttrs(item, i)), { _date: i }), item);
                })),
                mode !== "month"
                    ? (0, dom_1.el)(".dhx_calendar__actions", [
                        (0, dom_1.el)("button.dhx_button.dhx_button--color_primary.dhx_button--view_link.dhx_button--size_small.dhx_button--width_full.dhx_button--circle.dhx_calendar-action__cancel", { type: "button" }, date_1.locale.cancel),
                    ])
                    : null,
            ]),
        ]);
    };
    Calendar.prototype._drawYearSelector = function () {
        var _this = this;
        var date = this._currentDate;
        var yearsDiapason = date_1.DateHelper.getTwelweYears(date);
        var _a = this.config, css = _a.css, timePicker = _a.timePicker, weekNumbers = _a.weekNumbers, width = _a.width, mode = _a.mode;
        var widgetClass = "dhx_calendar dhx_widget" +
            (css ? " " + css : "") +
            (timePicker ? " dhx_calendar--with_timepicker" : "") +
            (weekNumbers ? " dhx_calendar--with_week-numbers" : "");
        var isFirstItem = true;
        var isSelectedYearInRange = this._getSelected() && yearsDiapason.includes(this._getSelected().getFullYear());
        var isYearSelected = function (item) { return _this._getSelected() && item === _this._getSelected().getFullYear(); };
        var getCellAriaAttrs = function (item) {
            var attrs = {
                role: "button",
                tabindex: -1,
                "aria-pressed": "false",
            };
            if (item) {
                if (isSelectedYearInRange) {
                    // it is correct that conditions are separated
                    if (isYearSelected(item)) {
                        attrs["tabindex"] = 0;
                        attrs["aria-pressed"] = "true";
                    }
                }
                else if (isFirstItem) {
                    attrs["tabindex"] = 0;
                }
                isFirstItem = false;
            }
            return attrs;
        };
        return (0, dom_1.el)("div", __assign({ class: widgetClass, style: {
                width: weekNumbers ? parseInt(width.toString()) + 48 + "px" : width,
            } }, this._handlers), [
            (0, dom_1.el)(".dhx_calendar__wrapper", [
                this._drawHeader((0, dom_1.el)("button.dhx_button.dhx_button--view_link.dhx_button--size_small.dhx_button--color_secondary.dhx_button--circle", {
                    "aria-live": "polite",
                    type: "button",
                }, yearsDiapason[0] + "-" + yearsDiapason[yearsDiapason.length - 1])),
                (0, dom_1.el)(".dhx_calendar__years", yearsDiapason.map(function (item) {
                    return (0, dom_1.el)("div", __assign({ class: "dhx_calendar-year" +
                            (isYearSelected(item) ? " dhx_calendar-year--selected" : ""), _date: item }, getCellAriaAttrs(item)), item);
                })),
                mode !== "year" && mode !== "month"
                    ? (0, dom_1.el)(".dhx_calendar__actions", [
                        (0, dom_1.el)("button.dhx_button.dhx_button--color_primary.dhx_button--view_link.dhx_button--size_small.dhx_button--width_full.dhx_button--circle.dhx_calendar-action__cancel", { type: "button" }, date_1.locale.cancel),
                    ])
                    : null,
            ]),
        ]);
    };
    Calendar.prototype._drawHeader = function (actionContent) {
        return (0, dom_1.el)(".dhx_calendar__navigation", [
            (0, dom_1.el)("button.dhx_calendar-navigation__button.dhx_calendar-action__prev" +
                helper_1.linkButtonClasses +
                ".dhx_button--icon.dhx_button--circle", {
                "aria-label": "prev",
                type: "button",
            }, [(0, dom_1.el)(".dhx_button__icon.dxi.dxi-chevron-left")]),
            actionContent,
            (0, dom_1.el)("button.dhx_calendar-navigation__button.dhx_calendar-action__next" +
                helper_1.linkButtonClasses +
                ".dhx_button--icon.dhx_button--circle", {
                "aria-label": "next",
                type: "button",
            }, [(0, dom_1.el)(".dhx_button__icon.dxi.dxi-chevron-right")]),
        ]);
    };
    Calendar.prototype._drawTimepicker = function () {
        var _a = this.config, css = _a.css, weekNumbers = _a.weekNumbers, width = _a.width;
        return (0, dom_1.el)(".dhx_widget.dhx-calendar", {
            class: css ? " " + css : "",
            style: {
                width: weekNumbers ? parseInt(width.toString()) + 48 + "px" : width,
            },
        }, [(0, dom_1.inject)(this._timepicker.getRootView())]);
    };
    Calendar.prototype._selectDate = function (_e, vn) {
        var date = vn.attrs._date;
        var oldDate = date_1.DateHelper.copy(this._getSelected());
        switch (this._currentViewMode) {
            case "calendar": {
                var mergedDate = this.config.timePicker
                    ? date_1.DateHelper.mergeHoursAndMinutes(date, this._getSelected() || this._currentDate)
                    : date;
                if (!this.events.fire(types_1.CalendarEvents.beforeChange, [mergedDate, oldDate, true])) {
                    return;
                }
                if (this.config.range && this._selected.length === 1 && this._selected[0] < mergedDate) {
                    this._selected.push(mergedDate);
                }
                else {
                    this._selected = [];
                    this._selected[0] = mergedDate;
                }
                vn.el.blur();
                this.showDate(this._getSelected());
                this.events.fire(types_1.CalendarEvents.change, [date, oldDate, true]);
                break;
            }
            case "month":
                if (this.config.mode !== "month") {
                    date_1.DateHelper.setMonth(this._currentDate, date);
                    this.showDate(null, "calendar");
                    this.events.fire(types_1.CalendarEvents.monthSelected, [date]);
                }
                else {
                    var newDate = date_1.DateHelper.fromYearAndMonth(this._currentDate.getFullYear() || this._getSelected().getFullYear(), date);
                    if (!this.events.fire(types_1.CalendarEvents.beforeChange, [newDate, oldDate, true])) {
                        return;
                    }
                    this._currentDate = newDate;
                    this._selected[0] = newDate;
                    this.events.fire(types_1.CalendarEvents.change, [this._getSelected(), oldDate, true]);
                    this.events.fire(types_1.CalendarEvents.monthSelected, [date]);
                    this.paint();
                }
                break;
            case "year":
                if (this.config.mode !== "year") {
                    date_1.DateHelper.setYear(this._currentDate, date);
                    this.showDate(null, "month");
                    this.events.fire(types_1.CalendarEvents.yearSelected, [date]);
                }
                else {
                    var newDate = date_1.DateHelper.fromYear(date);
                    if (!this.events.fire(types_1.CalendarEvents.beforeChange, [newDate, oldDate, true])) {
                        return;
                    }
                    this._currentDate = newDate;
                    this._selected[0] = newDate;
                    this.events.fire(types_1.CalendarEvents.change, [this._getSelected(), oldDate, true]);
                    this.events.fire(types_1.CalendarEvents.yearSelected, [date]);
                    this.paint();
                }
        }
    };
    Calendar.prototype._moveBrowseFocus = function (e, node, range) {
        if (node) {
            var nextNode = node.parent.body[node.idx + range];
            if (nextNode) {
                var $nextNode = nextNode.el;
                if ($nextNode) {
                    e.target.tabIndex = -1;
                    $nextNode.tabIndex = 0;
                    $nextNode.focus({ preventScroll: true });
                }
            }
        }
    };
    return Calendar;
}(view_1.View));
exports.Calendar = Calendar;


/***/ }),
/* 49 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    var desc = Object.getOwnPropertyDescriptor(m, k);
    if (!desc || ("get" in desc ? !m.__esModule : desc.writable || desc.configurable)) {
      desc = { enumerable: true, get: function() { return m[k]; } };
    }
    Object.defineProperty(o, k2, desc);
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __exportStar = (this && this.__exportStar) || function(m, exports) {
    for (var p in m) if (p !== "default" && !Object.prototype.hasOwnProperty.call(exports, p)) __createBinding(exports, m, p);
};
Object.defineProperty(exports, "__esModule", { value: true });
__exportStar(__webpack_require__(50), exports);
__exportStar(__webpack_require__(21), exports);


/***/ }),
/* 50 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.Timepicker = void 0;
var core_1 = __webpack_require__(0);
var dom_1 = __webpack_require__(2);
var events_1 = __webpack_require__(4);
var view_1 = __webpack_require__(7);
var ts_layout_1 = __webpack_require__(51);
var ts_slider_1 = __webpack_require__(56);
var en_1 = __webpack_require__(60);
var helper_1 = __webpack_require__(61);
var types_1 = __webpack_require__(21);
var html_1 = __webpack_require__(1);
function validate(value, max) {
    if (isNaN(value)) {
        return 0;
    }
    return Math.min(max, Math.max(0, value));
}
var Timepicker = /** @class */ (function (_super) {
    __extends(Timepicker, _super);
    function Timepicker(container, config) {
        if (config === void 0) { config = {}; }
        var _this = _super.call(this, container, (0, core_1.extend)({
            timeFormat: 24,
            controls: false,
            valueFormat: "string",
            actions: false, // TODO: remove suite_7.0
        }, config)) || this;
        _this.events = new events_1.EventSystem(_this);
        _this._time = {
            hour: 0,
            minute: 0,
            AM: true,
        };
        if (_this.config.timeFormat === 12) {
            _this._time.hour = 12;
        }
        _this.config.controls = _this.config.controls || _this.config.actions; // TODO: remove suite_7.0
        _this.config.value && _this._setValue(_this.config.value);
        _this._initUI(container);
        _this._initHandlers();
        _this._initEvents();
        return _this;
    }
    Timepicker.prototype.getValue = function (asObject) {
        if (this.config.timeFormat === 12)
            this._time.hour = this._time.hour % 12 || 12;
        return this._getValue(this._time, asObject);
    };
    Timepicker.prototype.setValue = function (value) {
        this._setValue(value);
        this._hoursSlider.setValue(this._time.hour);
        this._minutesSlider.setValue(this._time.minute);
        this._inputsView.paint();
    };
    Timepicker.prototype.clear = function () {
        if (this.config.timeFormat === 24) {
            this.setValue("00:00");
        }
        else {
            this.setValue("12:00AM");
        }
    };
    Timepicker.prototype.destructor = function () {
        this._minutesSlider && this._minutesSlider.destructor();
        this._hoursSlider && this._hoursSlider.destructor();
        this.events && this.events.clear();
        this.layout && this.layout.destructor();
        this.config = this.events = null;
        this._handlers = this._time = this._inputsView = this._minutesSlider = this._hoursSlider = null;
        this.unmount();
    };
    Timepicker.prototype.getRootView = function () {
        return this.layout.getRootView();
    };
    Timepicker.prototype._getValue = function (timeObj, asObj) {
        var hour = timeObj.hour, minute = timeObj.minute, AM = timeObj.AM;
        if (asObj) {
            var obj = { hour: hour, minute: minute };
            if (this.config.timeFormat === 12)
                obj.AM = AM;
            return obj;
        }
        return ((hour < 10 ? "0" + hour : hour) +
            ":" +
            (minute < 10 ? "0" + minute : minute) +
            (this.config.timeFormat === 12 ? (AM ? "AM" : "PM") : ""));
    };
    Timepicker.prototype._setValue = function (value) {
        // eslint-disable-next-line @typescript-eslint/no-unused-vars
        var m = 0;
        var h = 0;
        var isPM;
        if (typeof value === "number") {
            value = new Date(value);
        }
        if (value instanceof Date) {
            m = value.getMinutes();
            h = value.getHours();
        }
        else if (Array.isArray(value)) {
            h = validate(value[0], 23);
            m = validate(value[1], 59);
            if (value[2] && value[2].toLowerCase() === "pm") {
                isPM = true;
            }
        }
        else if (typeof value === "string") {
            var matches = value.match(/\d+/g);
            h = validate(+matches[0], 23);
            m = validate(+matches[1], 59);
            if (value.toLowerCase().includes("pm")) {
                isPM = true;
            }
        }
        else if (typeof value === "object" &&
            value.hasOwnProperty("hour") &&
            value.hasOwnProperty("minute")) {
            h = value.hour;
            m = value.minute;
            isPM = !value.AM;
        }
        if (isPM && h < 12) {
            h += 12;
        }
        if (this.config.timeFormat === 12 && !(0, helper_1.isTimeCheck)(value) && h >= 12)
            isPM = true;
        return (this._time = {
            hour: h,
            minute: m,
            AM: !isPM,
        });
    };
    Timepicker.prototype._initUI = function (container) {
        var _this = this;
        var layoutConfig = {
            gravity: false,
            css: "dhx_widget dhx_timepicker " +
                (this.config.css ? this.config.css : "") +
                (this.config.controls ? " dhx_timepicker--with-controls" : ""),
            rows: [
                {
                    id: "timepicker",
                    css: "dhx_timepicker__inputs",
                },
                {
                    id: "hour-slider",
                    css: "dhx_timepicker__hour",
                },
                {
                    id: "minute-slider",
                    css: "dhx_timepicker__minute",
                },
            ],
        };
        if (this.config.controls) {
            layoutConfig.rows.unshift({
                id: "close-action",
                css: "dhx_timepicker__close",
            });
            layoutConfig.rows.push({
                id: "save-action",
                css: "dhx_timepicker__save",
            });
        }
        var layout = (this.layout = new ts_layout_1.Layout(container, layoutConfig));
        var timepicker = (0, dom_1.create)({
            render: function () { return _this._draw(); },
        });
        var inputsView = (this._inputsView = (0, view_1.toViewLike)(timepicker));
        var mSlider = (this._minutesSlider = new ts_slider_1.Slider(null, {
            min: 0,
            max: 59,
            step: 1,
            tooltip: false,
            labelPosition: "top",
            label: en_1.default.minutes,
            value: this.config.value ? this._time.minute : 0,
        }));
        var hSlider = (this._hoursSlider = new ts_slider_1.Slider(null, {
            min: 0,
            max: 23,
            step: 1,
            tooltip: false,
            labelPosition: "top",
            label: en_1.default.hours,
            value: this.config.value ? (this._time.hour === 12 && this._time.AM ? 0 : this._time.hour) : 0,
        }));
        layout.getCell("timepicker").attach(inputsView);
        layout.getCell("hour-slider").attach(hSlider);
        layout.getCell("minute-slider").attach(mSlider);
        if (this.config.controls) {
            var save = function () {
                return (0, dom_1.el)("button.dhx_timepicker__button-save.dhx_button.dhx_button--view_flat.dhx_button--color_primary.dhx_button--size_small.dhx_button--circle.dhx_button--width_full", {
                    onclick: _this._outerHandlers.save,
                    type: "button",
                }, en_1.default.save);
            };
            var close_1 = function () {
                return (0, dom_1.el)("button.dhx_timepicker__button-close.dhx_button.dhx_button--view_link.dhx_button--size_medium.dhx_button--view_link.dhx_button--color_secondary.dhx_button--icon.dhx_button--circle", {
                    _ref: "close",
                    onclick: _this._outerHandlers.close,
                    type: "button",
                    "aria-label": "close timepicker",
                }, [(0, dom_1.el)("span.dhx_button__icon.dxi.dxi-close")]);
            };
            layout.getCell("save-action").attach(save);
            layout.getCell("close-action").attach(close_1);
        }
    };
    Timepicker.prototype._initHandlers = function () {
        var _this = this;
        var setMinutes = function (element) {
            var min = validate(parseInt(element.value, 10), 59);
            element.value = min.toString();
            _this._minutesSlider.setValue(min);
        };
        var setHours = function (element) {
            var hour = validate(parseInt(element.value, 10), 23);
            element.value = hour.toString();
            _this._hoursSlider.setValue(hour);
        };
        this._handlers = {
            onchange: {
                ".dhx_timepicker-input--hour": function (e) { return setHours(e.target); },
                ".dhx_timepicker-input--minutes": function (e) { return setMinutes(e.target); },
            },
            oninput: {
                ".dhx_timepicker-input--hour": function (e) {
                    if (!(0, html_1.isSafari)() && !(0, html_1.isFirefox)())
                        return;
                    setHours(e.target);
                },
                ".dhx_timepicker-input--minutes": function (e) {
                    if (!(0, html_1.isSafari)() && !(0, html_1.isFirefox)())
                        return;
                    setMinutes(e.target);
                },
            },
        };
        this._outerHandlers = {
            close: function () {
                if (!_this.events.fire(types_1.TimepickerEvents.beforeClose, [_this.getValue(_this._isTimeObj())])) {
                    return;
                }
                _this.events.fire(types_1.TimepickerEvents.afterClose, [_this.getValue(_this._isTimeObj())]);
                _this.events.fire(types_1.TimepickerEvents.close, []); // TODO: remove suite_7.0
            },
            save: function () {
                if (!_this.events.fire(types_1.TimepickerEvents.beforeApply, [_this.getValue(_this._isTimeObj())]))
                    return;
                _this.events.fire(types_1.TimepickerEvents.afterApply, [_this.getValue(_this._isTimeObj())]);
                _this.events.fire(types_1.TimepickerEvents.apply, [_this.getValue()]); // TODO: remove suite_7.0
                _this.events.fire(types_1.TimepickerEvents.save, [_this._time]); // TODO: remove suite_7.0
            },
        };
    };
    Timepicker.prototype._initEvents = function () {
        var _this = this;
        this._hoursSlider.events.on(ts_slider_1.SliderEvents.beforeChange, function (value) {
            if (value < _this._hoursSlider.config.min || value > _this._hoursSlider.config.max) {
                return;
            }
            var timeObj = __assign({}, _this._time);
            if (_this.config.timeFormat === 12) {
                timeObj.AM = value < 12;
                timeObj.hour = value % 12 || 12;
            }
            else {
                timeObj.hour = value;
            }
            var asObject = _this._isTimeObj();
            return _this.events.fire(types_1.TimepickerEvents.beforeChange, [_this._getValue(timeObj, asObject)]);
        });
        this._hoursSlider.events.on(ts_slider_1.SliderEvents.change, function (value) {
            if (value < _this._hoursSlider.config.min || value > _this._hoursSlider.config.max) {
                return;
            }
            if (_this.config.timeFormat === 12) {
                _this._time.AM = value < 12;
                _this._time.hour = value % 12 || 12;
            }
            else {
                _this._time.hour = value;
            }
            var asObject = _this._isTimeObj();
            _this.events.fire(types_1.TimepickerEvents.change, [_this.getValue(asObject)]);
            _this._inputsView.paint();
        });
        this._minutesSlider.events.on(ts_slider_1.SliderEvents.beforeChange, function (value) {
            if (value < _this._minutesSlider.config.min || value > _this._minutesSlider.config.max) {
                return;
            }
            var timeObj = __assign(__assign({}, _this._time), { minute: value });
            var asObject = _this._isTimeObj();
            return _this.events.fire(types_1.TimepickerEvents.beforeChange, [_this._getValue(timeObj, asObject)]);
        });
        this._minutesSlider.events.on(ts_slider_1.SliderEvents.change, function (value) {
            if (value < _this._minutesSlider.config.min || value > _this._minutesSlider.config.max) {
                return;
            }
            _this._time.minute = value;
            var asObject = _this._isTimeObj();
            _this.events.fire(types_1.TimepickerEvents.change, [_this.getValue(asObject)]);
            _this._inputsView.paint();
        });
    };
    Timepicker.prototype._draw = function () {
        this._minutesSlider.config.label = en_1.default.minutes;
        this._hoursSlider.config.label = en_1.default.hours;
        return (0, dom_1.el)(".dhx_timepicker-inputs", __assign({}, this._handlers), [
            (0, dom_1.el)("input.dhx_timepicker-input.dhx_timepicker-input--hour", {
                _key: "hour",
                _ref: "hour",
                value: this.getValue(true).hour.toString().length > 1
                    ? this.getValue(true).hour
                    : "0" + this.getValue(true).hour,
                "aria-label": "hours",
            }),
            (0, dom_1.el)("span.dhx_timepicker-delimer", ":"),
            (0, dom_1.el)("input.dhx_timepicker-input.dhx_timepicker-input--minutes", {
                _key: "minute",
                value: this.getValue(true).minute.toString().length > 1
                    ? this.getValue(true).minute
                    : "0" + this.getValue(true).minute,
                "aria-label": "minutes",
            }),
            this.config.timeFormat === 12
                ? (0, dom_1.el)(".dhx_timepicker-ampm", this._time.AM ? "AM" : "PM")
                : null,
        ]);
    };
    Timepicker.prototype._isTimeObj = function () {
        var _a;
        return ((_a = this.config.valueFormat) === null || _a === void 0 ? void 0 : _a.toLowerCase()) === "timeobject";
    };
    return Timepicker;
}(view_1.View));
exports.Timepicker = Timepicker;


/***/ }),
/* 51 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    var desc = Object.getOwnPropertyDescriptor(m, k);
    if (!desc || ("get" in desc ? !m.__esModule : desc.writable || desc.configurable)) {
      desc = { enumerable: true, get: function() { return m[k]; } };
    }
    Object.defineProperty(o, k2, desc);
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __exportStar = (this && this.__exportStar) || function(m, exports) {
    for (var p in m) if (p !== "default" && !Object.prototype.hasOwnProperty.call(exports, p)) __createBinding(exports, m, p);
};
Object.defineProperty(exports, "__esModule", { value: true });
__exportStar(__webpack_require__(11), exports);
__exportStar(__webpack_require__(53), exports);
__exportStar(__webpack_require__(12), exports);


/***/ }),
/* 52 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.getMarginSize = exports.getBlockRange = void 0;
function getBlockRange(block1, block2, isXLayout) {
    if (isXLayout === void 0) { isXLayout = true; }
    if (isXLayout) {
        return {
            min: block1.left + window.pageXOffset,
            max: block2.right + window.pageXOffset,
        };
    }
    return {
        min: block1.top + window.pageYOffset,
        max: block2.bottom + window.pageYOffset,
    };
}
exports.getBlockRange = getBlockRange;
function getMarginSize(config) {
    if (!config) {
        return 0;
    }
    if (config.type === "space" || config.type === "wide") {
        return 12;
    }
    return 0;
}
exports.getMarginSize = getMarginSize;


/***/ }),
/* 53 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
exports.ProLayout = void 0;
var Layout_1 = __webpack_require__(11);
var ProCell_1 = __webpack_require__(54);
var ProLayout = /** @class */ (function (_super) {
    __extends(ProLayout, _super);
    function ProLayout(parent, config) {
        return _super.call(this, parent, config) || this;
    }
    ProLayout.prototype._createCell = function (cell) {
        var view;
        if (cell.rows || cell.cols || cell.views) {
            cell.parent = this._root;
            view = new ProLayout(this, cell);
        }
        else {
            view = new ProCell_1.ProCell(this, cell);
        }
        // FIxME
        this._root._all[view.id] = view;
        if (cell.init) {
            cell.init(view, cell);
        }
        return view;
    };
    return ProLayout;
}(Layout_1.Layout));
exports.ProLayout = ProLayout;


/***/ }),
/* 54 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.ProCell = void 0;
var core_1 = __webpack_require__(0);
var dom_1 = __webpack_require__(2);
var ScrollView_1 = __webpack_require__(55);
var Cell_1 = __webpack_require__(19);
var ProCell = /** @class */ (function (_super) {
    __extends(ProCell, _super);
    function ProCell(parent, config) {
        var _this = _super.call(this, parent, config) || this;
        _this.scrollView = new ScrollView_1.ScrollView(function () {
            return _this._getFirstRootView();
        });
        if (!parent) {
            var view = (0, dom_1.create)({ render: function () { return _this.toVDOM(); } }, _this);
            _this.mount(parent, view);
        }
        return _this;
    }
    ProCell.prototype._getFirstRootView = function (self) {
        if (self === void 0) { self = this; }
        return self.getParent() && self.getParent().getRootView()
            ? self.getParent().getRootView()
            : this._getFirstRootView(self.getParent());
    };
    ProCell.prototype.toVDOM = function (nodes) {
        var _a;
        var _b, _c;
        this._saveTheme();
        if (this.config === null) {
            this.config = {};
        }
        if (this.config.hidden) {
            return;
        }
        var isFieldset = this.config.$fieldset;
        var style = this._calculateStyle();
        var stylePadding = (0, core_1.isDefined)(this.config.padding)
            ? !isNaN(Number(this.config.padding))
                ? { padding: "".concat(this.config.padding, "px") }
                : { padding: this.config.padding }
            : "";
        var fullStyle = this.config.full || this.config.html ? style : __assign(__assign({}, style), stylePadding);
        var progressBar = this._checkProgress() ? this._getProgressBar() : null;
        var kids;
        if (!this.config.html) {
            if (this._ui) {
                var view = this._ui.getRootView();
                if (view.render) {
                    view = (0, dom_1.inject)(view);
                }
                // kids = [view];
                kids = view ? [this.scrollView.render(view)] : view || null;
            }
            else {
                // kids = nodes || null;
                kids = nodes ? this.scrollView.render([nodes]) : nodes || null;
            }
        }
        var resizer = this.config.resizable && !this._isLastCell() && this._getNextCell() && !this.config.collapsed
            ? (0, dom_1.el)(".dhx_layout-resizer." +
                (this._isXDirection() ? "dhx_layout-resizer--x" : "dhx_layout-resizer--y"), __assign(__assign({}, this._resizerHandlers), { _ref: "resizer_" + this._uid }), [
                (0, dom_1.el)("span.dhx_layout-resizer__icon", {
                    class: "dxi " +
                        (this._isXDirection() ? "dxi-dots-vertical" : "dxi-dots-horizontal"),
                }),
            ])
            : null;
        var handlers = {};
        if (this.config.on) {
            for (var key in this.config.on) {
                handlers["on" + key] = this.config.on[key];
            }
        }
        var typeClass = "";
        var isParent = this.config.cols || this.config.rows;
        if (this.config.type && isParent) {
            switch (this.config.type) {
                case "line":
                    typeClass = " dhx_layout-line";
                    break;
                case "wide":
                    typeClass = " dhx_layout-wide";
                    break;
                case "space":
                    typeClass = " dhx_layout-space";
                    break;
                default:
                    break;
            }
        }
        var htmlContent = (0, dom_1.el)(".dhx_layout-cell-content", {
            _key: "".concat(this._uid, "_html"),
            style: stylePadding,
        }, [
            (0, dom_1.el)(".dhx_layout-cell-inner_html", {
                ".innerHTML": this.config.html,
            }),
        ]);
        var cellContent = isFieldset
            ? (0, dom_1.el)("fieldset.dhx_form-fieldset", {
                class: (this.config.$disabled && " dhx_form-fieldset--disabled") || "",
                style: stylePadding,
                disabled: this.config.$disabled,
            }, [
                (0, dom_1.el)("legend.dhx_form-fieldset-legend", {
                    class: "dhx_form-fieldset-legend--".concat(this.config.labelAlignment || "left"),
                }, this.config.label),
                (0, dom_1.el)(".dhx_layout-cell-content", {
                    class: this._getCss(false),
                }, [].concat(kids)),
            ])
            : this.config.full
                ? [
                    (0, dom_1.el)("div", {
                        tabindex: this.config.collapsable ? "0" : "-1",
                        class: "dhx_layout-cell-header" +
                            (this._isXDirection()
                                ? " dhx_layout-cell-header--col"
                                : " dhx_layout-cell-header--row") +
                            (this.config.collapsable ? " dhx_layout-cell-header--collapseble" : "") +
                            (this.config.collapsed ? " dhx_layout-cell-header--collapsed" : "") +
                            (((this.getParent() || {}).config || {}).isAccordion
                                ? " dhx_layout-cell-header--accordion"
                                : ""),
                        style: {
                            height: this.config.headerHeight,
                        },
                        onclick: this._handlers.toggle,
                        onkeydown: this._handlers.enterCollapse,
                    }, [
                        this.config.headerIcon &&
                            (0, dom_1.el)("span.dhx_layout-cell-header__icon", {
                                class: this.config.headerIcon,
                            }),
                        this.config.headerImage &&
                            (0, dom_1.el)(".dhx_layout-cell-header__image-wrapper", [
                                (0, dom_1.el)("img", {
                                    src: this.config.headerImage,
                                    class: "dhx_layout-cell-header__image",
                                }),
                            ]),
                        this.config.header && (0, dom_1.el)("h3.dhx_layout-cell-header__title", this.config.header),
                        this.config.collapsable
                            ? (0, dom_1.el)("div.dhx_layout-cell-header__collapse-icon", {
                                class: this._getCollapseIcon(),
                            })
                            : (0, dom_1.el)("div.dhx_layout-cell-header__collapse-icon", {
                                class: "dxi dxi-empty",
                            }),
                    ]),
                    !this.config.collapsed
                        ? (0, dom_1.el)("div", {
                            style: __assign(__assign({}, stylePadding), { height: "calc(100% - ".concat(this.config.headerHeight || 37, "px)") }),
                            class: this._getCss(true) +
                                " dhx_layout-cell-content" +
                                (this.config.type ? typeClass : ""),
                        }, this.config.html
                            ? [
                                (0, dom_1.el)("div", {
                                    ".innerHTML": this.config.html,
                                    class: "dhx_layout-cell dhx_layout-cell-inner_html",
                                }),
                            ]
                            : kids)
                        : null,
                ]
                : this.config.html &&
                    !(this.config.rows &&
                        this.config.cols &&
                        this.config.views)
                    ? [
                        !this.config.collapsed
                            ? this.scrollView && this.scrollView.config.enable && this.getParent()
                                ? this.scrollView.render([htmlContent], this._uid)
                                : htmlContent
                            : null,
                    ]
                    : kids;
        var cell = (0, dom_1.el)("div", __assign(__assign((_a = { _key: this.config.id || this._uid, _ref: this._uid }, _a["aria-label"] = this.config.id ? "tab-content-" + this.config.id : null, _a["data-cell-id"] = (_b = this.config.id) !== null && _b !== void 0 ? _b : null, _a["data-dhx-theme"] = (_c = this._theme) !== null && _c !== void 0 ? _c : null, _a), handlers), { class: this._getCss(false) +
                (this.config.css ? " " + this.config.css : "") +
                (this.config.collapsed ? " dhx_layout-cell--collapsed" : "") +
                (this.config.resizable ? " dhx_layout-cell--resizable" : "") +
                (this.config.type && !this.config.full ? typeClass : ""), style: isFieldset ? style : fullStyle }), cellContent || progressBar ? [].concat(cellContent, progressBar) : null);
        return resizer ? [].concat(cell, resizer) : cell;
    };
    return ProCell;
}(Cell_1.Cell));
exports.ProCell = ProCell;


/***/ }),
/* 55 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.ScrollView = exports.scrollViewConfig = void 0;
var core_1 = __webpack_require__(0);
var dom_1 = __webpack_require__(2);
var html_1 = __webpack_require__(1);
exports.scrollViewConfig = {
    enable: false,
    autoHide: true,
    timeout: 1000,
    scrollHandler: function () { },
};
var ScrollView = /** @class */ (function () {
    function ScrollView(getRootView, config) {
        var _a;
        if (config === void 0) { config = {}; }
        var _this = this;
        this.config = (0, core_1.extend)({
            enable: exports.scrollViewConfig.enable,
            autoHide: exports.scrollViewConfig.autoHide,
            timeout: exports.scrollViewConfig.timeout,
            scrollHandler: exports.scrollViewConfig.scrollHandler,
        }, config);
        this._wheelName = (0, html_1.isIE)() ? "onmousewheel" : "onwheel";
        this._getRootView = getRootView;
        this._scrollYTop = this._scrollXLeft = this._runnerYTop = this._runnerXLeft = this._runnerHeight = this._runnerWidth = 0;
        this._visibleYArea = this._visibleXArea = 1;
        this._scrollWidth = (0, html_1.getScrollbarWidth)();
        this._scrollHeight = (0, html_1.getScrollbarHeight)();
        this._handlers = (_a = {
                onscroll: function (e) {
                    _this.config.scrollHandler(e);
                    _this.update();
                }
            },
            _a[this._wheelName] = function (e) {
                var isY = !!(0, html_1.locateNodeByClassName)(e.target, "y-scroll");
                e.preventDefault();
                var sign = (e.deltaY || -e.wheelDelta) > 0 ? 1 : -1;
                var delta = sign * 40;
                var area = _this._getRefs().area;
                if (isY) {
                    var maxBottom = area.scrollHeight - _this._runnerHeight;
                    var newScrollTop = _this._scrollYTop + delta;
                    if (newScrollTop < 0) {
                        area.scrollTop = 0;
                    }
                    else if (newScrollTop > maxBottom) {
                        area.scrollTop = maxBottom;
                    }
                    else {
                        area.scrollTop = newScrollTop;
                    }
                }
                else {
                    var maxRight = area.scrollWidth - _this._runnerWidth;
                    var newScrollLeft = _this._scrollXLeft + delta;
                    if (newScrollLeft < 0) {
                        area.scrollLeft = 0;
                    }
                    else if (newScrollLeft > maxRight) {
                        area.scrollLeft = maxRight;
                    }
                    else {
                        area.scrollLeft = newScrollLeft;
                    }
                }
                _this.update();
            },
            _a.onmousedownRunner = function (mouseDownEv) {
                mouseDownEv.preventDefault();
                var isY = !!(0, html_1.locateNodeByClassName)(mouseDownEv.target, "y-scroll");
                var _a = _this._getRefs(), area = _a.area, runnerY = _a.runnerY, runnerX = _a.runnerX;
                var rect = area.getBoundingClientRect();
                var top = rect.top + window.pageYOffset;
                var bottom = rect.bottom + window.pageYOffset;
                var maxBottom = area.scrollHeight - _this._runnerHeight;
                var deltaY = mouseDownEv.pageY - runnerY.getBoundingClientRect().top - window.pageYOffset;
                var left = rect.left + window.pageXOffset;
                var right = rect.right + window.pageXOffset;
                var maxRight = area.scrollWidth - _this._runnerWidth;
                var deltaX = mouseDownEv.pageX - runnerX.getBoundingClientRect().left - window.pageXOffset;
                var mouseMove = function (e) {
                    if (isY) {
                        var y = e.pageY - deltaY;
                        if (y <= top) {
                            area.scrollTop = 0;
                        }
                        else if (y > bottom) {
                            area.scrollTop = maxBottom;
                        }
                        else {
                            area.scrollTop = (y - top) / _this._visibleYArea;
                        }
                    }
                    else {
                        var x = e.pageX - deltaX;
                        if (x <= left) {
                            area.scrollLeft = 0;
                        }
                        else if (x > right) {
                            area.scrollLeft = maxRight;
                        }
                        else {
                            area.scrollLeft = (x - left) / _this._visibleXArea;
                        }
                    }
                    _this.update();
                };
                var mouseUp = function () {
                    document.removeEventListener("mousemove", mouseMove);
                    document.removeEventListener("mouseup", mouseUp);
                    document.body.classList.remove("dhx-no-select");
                };
                document.body.classList.add("dhx-no-select");
                document.addEventListener("mousemove", mouseMove);
                document.addEventListener("mouseup", mouseUp);
            },
            _a.onmousedownArea = function (e) {
                if ((0, html_1.locateNodeByClassName)(e, "scroll-runner"))
                    return;
                e.preventDefault();
                var isY = !!(0, html_1.locateNodeByClassName)(e.target, "y-scroll");
                var _a = _this._getRefs(), area = _a.area, runnerY = _a.runnerY, runnerX = _a.runnerX;
                if (isY) {
                    area.scrollTop += (e.pageY - runnerY.getBoundingClientRect().top) / _this._visibleYArea;
                }
                else {
                    area.scrollLeft += (e.pageX - runnerX.getBoundingClientRect().left) / _this._visibleXArea;
                }
                _this.update();
            },
            _a.onmouseenter = function (e) {
                if ((0, html_1.locateNodeByClassName)(e, "scroll-runner"))
                    return;
                var refs = _this._getRefs();
                if (!refs) {
                    return;
                }
                var isY = !!(0, html_1.locateNodeByClassName)(e.target, "y-scroll");
                var areaX = refs.areaX, areaY = refs.areaY;
                if (isY && _this._runnerHeight > 0) {
                    areaY.style.background = "#eee";
                }
                else if (!isY && _this._runnerWidth > 0) {
                    areaX.style.background = "#eee";
                }
            },
            _a.onmouseleave = function (e) {
                if ((0, html_1.locateNodeByClassName)(e, "scroll-runner"))
                    return;
                var refs = _this._getRefs();
                if (!refs) {
                    return;
                }
                var isY = !!(0, html_1.locateNodeByClassName)(e.target, "y-scroll");
                var areaX = refs.areaX, areaY = refs.areaY;
                if (isY && _this._runnerHeight > 0) {
                    areaY.style.background = "transparent";
                }
                else if (!isY && _this._runnerWidth > 0) {
                    areaX.style.background = "transparent";
                }
            },
            _a);
    }
    ScrollView.prototype.enable = function () {
        this.config.enable = true;
        this._getRootView().redraw();
    };
    ScrollView.prototype.disable = function () {
        this.config.enable = false;
        this._getRootView().redraw();
    };
    ScrollView.prototype.render = function (element, uid) {
        var _a, _b;
        var _this = this;
        if (uid === void 0) { uid = ""; }
        if (!this.config.enable || !element.length) {
            return element;
        }
        if (uid)
            this._uid = uid;
        var scrollView = this.config.enable
            ? [
                (0, dom_1.el)(".y-scroll", (_a = {},
                    _a[this._wheelName] = this._handlers[this._wheelName],
                    _a._ref = uid ? "scroll-y-area-".concat(uid) : "scroll-y-area",
                    _a.onmousedown = this._handlers.onmousedownArea,
                    _a.onmouseenter = this._handlers.onmouseenter,
                    _a.onmouseleave = this._handlers.onmouseleave,
                    _a.style = {
                        width: "6px",
                        height: "100%",
                        right: 0,
                        top: 0,
                        position: "absolute",
                    },
                    _a), [
                    (0, dom_1.el)(".scroll-runner", {
                        _ref: uid ? "scroll-y-runner-".concat(uid) : "scroll-y-runner",
                        onmousedown: this._handlers.onmousedownRunner,
                        style: {
                            height: this._runnerHeight + "px",
                            top: this._runnerYTop,
                        },
                    }),
                ]),
                (0, dom_1.el)(".x-scroll", (_b = {},
                    _b[this._wheelName] = this._handlers[this._wheelName],
                    _b._ref = uid ? "scroll-x-area-".concat(uid) : "scroll-x-area",
                    _b.onmousedown = this._handlers.onmousedownArea,
                    _b.onmouseenter = this._handlers.onmouseenter,
                    _b.onmouseleave = this._handlers.onmouseleave,
                    _b.style = {
                        width: "100%",
                        height: "6px",
                        left: 0,
                        bottom: 0,
                        position: "absolute",
                    },
                    _b), [
                    (0, dom_1.el)(".scroll-runner", {
                        _ref: uid ? "scroll-x-runner-".concat(uid) : "scroll-x-runner",
                        onmousedown: this._handlers.onmousedownRunner,
                        style: {
                            width: this._runnerWidth + "px",
                            left: this._runnerXLeft,
                        },
                    }),
                ]),
            ]
            : null;
        return (0, dom_1.el)(".scroll-view-wrapper", [
            (0, dom_1.el)(".scroll-view", {
                onscroll: this._handlers.onscroll,
                _ref: uid ? "scroll-view-".concat(uid) : "scroll-view",
                _hooks: {
                    didInsert: function () {
                        _this.update();
                    },
                    didRecycle: function () {
                        _this.update();
                    },
                },
                style: {
                    width: "calc(100% + ".concat(this._scrollWidth, "px)"),
                    height: "calc(100% + ".concat(this._scrollHeight, "px)"),
                    "margin-bottom": "-".concat(this._scrollHeight, "px"),
                },
            }, element),
        ].concat(scrollView));
    };
    ScrollView.prototype.update = function () {
        var refs = this._getRefs();
        if (!refs) {
            return;
        }
        var area = refs.area, areaX = refs.areaX, areaY = refs.areaY, runnerY = refs.runnerY, runnerX = refs.runnerX;
        this._visibleYArea = area.clientHeight / area.scrollHeight;
        this._visibleXArea = area.clientWidth / area.scrollWidth;
        this._scrollYTop = area.scrollTop;
        this._scrollXLeft = area.scrollLeft;
        this._runnerYTop = this._scrollYTop * this._visibleYArea;
        this._runnerXLeft = this._scrollXLeft * this._visibleXArea;
        this._runnerHeight = this._visibleYArea < 1 ? area.clientHeight * this._visibleYArea : 0;
        this._runnerWidth = this._visibleXArea < 1 ? area.clientWidth * this._visibleXArea : 0;
        var initialTop = runnerY.style.top;
        var initialLeft = runnerX.style.left;
        // update dom
        runnerY.style.opacity = 1;
        runnerY.style.top = this._runnerYTop + "px";
        runnerY.style.height = this._runnerHeight + "px";
        runnerX.style.opacity = 1;
        runnerX.style.left = this._runnerXLeft + "px";
        runnerX.style.width = this._runnerWidth + "px";
        if (initialTop !== runnerY.style.top) {
            areaY.style.opacity = 0.9;
            areaY.style.width = "10px";
        }
        if (initialLeft !== runnerX.style.left) {
            areaX.style.opacity = 0.9;
            areaX.style.height = "10px";
        }
        if (this.config.autoHide) {
            !this._autoHideFunc &&
                (this._autoHideFunc = (0, core_1.debounce)(function () {
                    runnerY.style.opacity = 0;
                    areaY.style.width = "6px";
                    runnerX.style.opacity = 0;
                    areaX.style.height = "6px";
                }, this.config.timeout));
        }
        else {
            this._autoHideFunc = (0, core_1.debounce)(function () {
                areaY.style.width = "6px";
                areaX.style.height = "6px";
            }, this.config.timeout);
        }
        this._autoHideFunc();
    };
    ScrollView.prototype._getRefs = function () {
        var rootView = this._getRootView();
        var refsCheck = !!(rootView.refs["scroll-view"] &&
            (rootView.refs["scroll-x-runner"] || rootView.refs["scroll-y-runner"]));
        var refsIdCheck = !!(this._uid &&
            rootView.refs["scroll-view-".concat(this._uid)] &&
            (rootView.refs["scroll-x-runner-".concat(this._uid)] || rootView.refs["scroll-y-runner-".concat(this._uid)]));
        if (rootView.refs) {
            if (refsCheck) {
                return {
                    area: rootView.refs["scroll-view"].el,
                    areaY: rootView.refs["scroll-y-area"].el,
                    areaX: rootView.refs["scroll-x-area"].el,
                    runnerY: rootView.refs["scroll-y-runner"].el,
                    runnerX: rootView.refs["scroll-x-runner"].el,
                };
            }
            else if (refsIdCheck) {
                return {
                    area: rootView.refs["scroll-view-".concat(this._uid)].el,
                    areaY: rootView.refs["scroll-y-area-".concat(this._uid)].el,
                    areaX: rootView.refs["scroll-x-area-".concat(this._uid)].el,
                    runnerY: rootView.refs["scroll-y-runner-".concat(this._uid)].el,
                    runnerX: rootView.refs["scroll-x-runner-".concat(this._uid)].el,
                };
            }
        }
    };
    return ScrollView;
}());
exports.ScrollView = ScrollView;


/***/ }),
/* 56 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    var desc = Object.getOwnPropertyDescriptor(m, k);
    if (!desc || ("get" in desc ? !m.__esModule : desc.writable || desc.configurable)) {
      desc = { enumerable: true, get: function() { return m[k]; } };
    }
    Object.defineProperty(o, k2, desc);
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __exportStar = (this && this.__exportStar) || function(m, exports) {
    for (var p in m) if (p !== "default" && !Object.prototype.hasOwnProperty.call(exports, p)) __createBinding(exports, m, p);
};
Object.defineProperty(exports, "__esModule", { value: true });
__exportStar(__webpack_require__(57), exports);
__exportStar(__webpack_require__(20), exports);


/***/ }),
/* 57 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.Slider = void 0;
var core_1 = __webpack_require__(0);
var dom_1 = __webpack_require__(2);
var events_1 = __webpack_require__(4);
var KeyManager_1 = __webpack_require__(58);
var view_1 = __webpack_require__(7);
var ts_popup_1 = __webpack_require__(17);
var types_1 = __webpack_require__(20);
var html_1 = __webpack_require__(1);
function normalizeValue(value, min, max) {
    if (value < min) {
        return min;
    }
    if (value > max) {
        return max;
    }
    return value;
}
function parseValue(value, min, max) {
    var values;
    if (value === undefined) {
        values = [];
    }
    else if (Array.isArray(value)) {
        values = value;
    }
    else if (typeof value === "string") {
        values = value.split(",").map(function (v) { return parseInt(v, 10); });
    }
    else {
        values = [value];
    }
    values[0] = values[0] === undefined ? min : normalizeValue(values[0], min, max);
    values[1] = values[1] === undefined ? max : normalizeValue(values[1], min, max);
    return values;
}
var Slider = /** @class */ (function (_super) {
    __extends(Slider, _super);
    function Slider(container, config) {
        var _this = _super.call(this, container, (0, core_1.extend)({
            mode: "horizontal",
            min: 0,
            max: 100,
            step: 1,
            tooltip: true,
        }, config)) || this;
        _this._disabled = false;
        _this.config.helpMessage = _this.config.helpMessage || _this.config.help; // TODO: remove suite_7.0
        if (_this.config.thumbLabel !== undefined) {
            _this.config.tooltip = _this.config.thumbLabel; // TODO: remove suite_7.0
        }
        if (_this.config.labelInline) {
            _this.config.labelPosition = "left"; // TODO: remove suite_7.0
        }
        _this.events = new events_1.EventSystem(_this);
        _this._axis = _this.config.mode === "horizontal" ? "clientX" : "clientY";
        _this._initStartPosition();
        _this._keyManager = new KeyManager_1.KeyManager(function () {
            var _a, _b;
            var activeEl = document.activeElement;
            var element = (_b = (_a = _this.getRootView().refs) === null || _a === void 0 ? void 0 : _a[_this._isExtraActive ? "extraRunner" : "runner"]) === null || _b === void 0 ? void 0 : _b.el;
            return activeEl === element;
        });
        _this._initHotkeys();
        var vNode = (0, dom_1.create)({
            render: function () { return _this._draw(); },
            hooks: {
                didMount: function () { return _this._calcSliderPosition(); },
                didRedraw: function () { return _this._calcSliderPosition(); },
            },
        });
        _this._initHandlers();
        _this.mount(container, vNode);
        return _this;
    }
    Slider.prototype.disable = function () {
        this._disabled = true;
        this.paint();
    };
    Slider.prototype.enable = function () {
        this._disabled = false;
        this.paint();
    };
    Slider.prototype.isDisabled = function () {
        return this._disabled;
    };
    Slider.prototype.focus = function (extra) {
        this.getRootView().refs[extra ? "extraRunner" : "runner"].el.focus();
    };
    Slider.prototype.blur = function () {
        this.getRootView().refs[this._isExtraActive ? "extraRunner" : "runner"].el.blur();
    };
    Slider.prototype.getValue = function () {
        var res;
        if (this.config.range) {
            var a = this._getValue(this._currentPosition);
            var b = this._getValue(this._extraCurrentPosition);
            res = a < b ? [a, b] : [b, a];
        }
        else {
            res = [this._getValue(this._currentPosition)];
        }
        return res;
    };
    Slider.prototype.setValue = function (value) {
        var old = this._getValue(this._currentPosition);
        if (Array.isArray(value) && value.length > 1) {
            var oldExtra = this._getValue(this._extraCurrentPosition);
            if (this.events.fire(types_1.SliderEvents.beforeChange, [value[0], old, false])) {
                this._setValue(value[0], false);
                this.events.fire(types_1.SliderEvents.change, [value[0], old, false]);
            }
            if (this.events.fire(types_1.SliderEvents.beforeChange, [value[1], oldExtra, true])) {
                this._setValue(value[1], true);
                this.events.fire(types_1.SliderEvents.change, [value[1], oldExtra, true]);
            }
        }
        else {
            value = parseFloat(value);
            if (!isNaN(value)) {
                if (this.events.fire(types_1.SliderEvents.beforeChange, [value, old, false])) {
                    this._setValue(value);
                    this.events.fire(types_1.SliderEvents.change, [value, old, false]);
                }
            }
            else {
                throw new Error("Wrong value type, for more info check documentation https://docs.dhtmlx.com/suite/slider__api__slider_setvalue_method.html");
            }
        }
        this.paint();
    };
    Slider.prototype.destructor = function () {
        this._keyManager && this._keyManager.destructor();
        document.body.contains(this._tooltip) && document.body.removeChild(this._tooltip);
        this._tooltip = null;
        this.unmount();
    };
    Slider.prototype._calcSliderPosition = function () {
        var root = this.getRootView();
        if (!root) {
            return;
        }
        var tracker = root.refs.track.el;
        var rect = tracker.getBoundingClientRect();
        this._offsets = {
            left: rect.left + window.pageXOffset,
            top: rect.top + window.pageYOffset,
        };
        this._length = this.config.mode === "horizontal" ? rect.width : rect.height;
    };
    Slider.prototype._initHotkeys = function () {
        var _this = this;
        var handlers = {
            arrowLeft: function (e) {
                e.preventDefault();
                _this._move(-_this.config.step, e.target.classList.contains("dhx_slider__thumb--extra"));
            },
            arrowRight: function (e) {
                e.preventDefault();
                _this._move(_this.config.step, e.target.classList.contains("dhx_slider__thumb--extra"));
            },
            arrowUp: function (e) {
                e.preventDefault();
                _this._move(_this.config.step, e.target.classList.contains("dhx_slider__thumb--extra"));
            },
            arrowDown: function (e) {
                e.preventDefault();
                _this._move(-_this.config.step, e.target.classList.contains("dhx_slider__thumb--extra"));
            },
        };
        for (var key in handlers) {
            this._keyManager.addHotKey(key, handlers[key]);
        }
    };
    Slider.prototype._move = function (value, forExtra) {
        if (forExtra === void 0) { forExtra = false; }
        if (this.config.inverse) {
            value = -value;
        }
        var _a = this.config, max = _a.max, min = _a.min;
        var oldValue = forExtra
            ? this._getValue(this._extraCurrentPosition)
            : this._getValue(this._currentPosition);
        var newValue = oldValue + value;
        if (newValue > max || newValue < min) {
            newValue = oldValue;
        }
        if (!this.events.fire(types_1.SliderEvents.beforeChange, [newValue, oldValue, forExtra]))
            return;
        this._setValue(oldValue + value, forExtra);
        this.events.fire(types_1.SliderEvents.change, [newValue, oldValue, forExtra]);
        this.paint();
    };
    Slider.prototype._initStartPosition = function () {
        var _a = this.config, max = _a.max, min = _a.min, range = _a.range;
        var _b = parseValue(this.config.value, this.config.min, this.config.max), value = _b[0], extraValue = _b[1];
        this._currentPosition = ((value - min) / (max - min)) * 100;
        if (range) {
            this._extraCurrentPosition = ((max - extraValue) / (max - min)) * 100;
        }
        this._currentPosition = ((value - min) / (max - min)) * 100;
        if (range) {
            this._extraCurrentPosition = ((extraValue - min) / (max - min)) * 100;
        }
        if (this._isInverse()) {
            this._currentPosition = 100 - this._currentPosition;
            if (range) {
                this._extraCurrentPosition = 100 - this._extraCurrentPosition;
            }
        }
    };
    Slider.prototype._getValue = function (value) {
        if (this._isInverse()) {
            value = 100 - value;
        }
        var _a = this.config, min = _a.min, max = _a.max, step = _a.step;
        if (value === 100) {
            return max;
        }
        if (value === 0) {
            return min;
        }
        var val = (value * (max - min)) / 100;
        var remain = val % step;
        var rounder = remain >= step / 2 ? step : 0;
        var result = Number(min) + Number(val) - remain + rounder;
        return +result.toFixed(5);
    };
    Slider.prototype._setValue = function (val, forExtra) {
        if (forExtra === void 0) { forExtra = false; }
        var _a = this.config, max = _a.max, min = _a.min;
        if (val > max || val < min) {
            return false;
        }
        var rawValue = ((val - min) / (max - min)) * 100;
        var newValue = this._isInverse() ? 100 - rawValue : rawValue;
        if (forExtra) {
            this._extraCurrentPosition = newValue;
        }
        else {
            this._currentPosition = newValue;
        }
    };
    Slider.prototype._initHandlers = function () {
        var _this = this;
        var sliderMove = function (e) {
            e.cancelable && e.preventDefault();
            var currentPosition = e.targetTouches ? e.targetTouches[0][_this._axis] : e[_this._axis];
            var x = ((currentPosition - _this._getBegining()) / _this._length) * 100;
            if (_this._findNewDirection) {
                if (Math.abs(_this._currentPosition - x) < 1) {
                    return;
                }
                if (x > _this._currentPosition) {
                    _this._possibleRange = [_this._currentPosition, 100];
                }
                else {
                    _this._possibleRange = [0, _this._currentPosition];
                }
                _this._findNewDirection = null;
            }
            if (_this._inSide(x)) {
                _this._updatePosition(x, _this._isExtraActive);
            }
            _this.paint();
        };
        var sliderEnd = function (e) {
            _this.events.fire(types_1.SliderEvents.mouseup, [e]);
            setTimeout(function () {
                _this._isMouseMoving = false;
                _this.paint();
            }, 4);
            if (!e.targetTouches) {
                document.removeEventListener("mouseup", sliderEnd);
                document.removeEventListener("mousemove", sliderMove);
            }
            else {
                document.removeEventListener("touchend", sliderEnd);
                document.removeEventListener("touchmove", sliderMove);
            }
        };
        var sliderStart = function (e) {
            if (_this._disabled || e.which === 3) {
                return;
            }
            _this.events.fire(types_1.SliderEvents.mousedown, [e]);
            _this._isMouseMoving = true;
            var active;
            if (e.target.classList.contains("dhx_slider__thumb--extra")) {
                _this._isExtraActive = true;
                active = _this._extraCurrentPosition;
            }
            else {
                _this._isExtraActive = false;
                active = _this._currentPosition;
            }
            _this._findNewDirection = null;
            // define possible range
            if (_this.config.range) {
                var _a = _this._currentPosition > _this._extraCurrentPosition
                    ? [_this._currentPosition, _this._extraCurrentPosition]
                    : [_this._extraCurrentPosition, _this._currentPosition], more = _a[0], less = _a[1];
                if (_this._currentPosition === _this._extraCurrentPosition) {
                    _this._findNewDirection = active;
                    _this._possibleRange = [0, 100];
                }
                else if (active < more) {
                    _this._possibleRange = [0, more];
                }
                else {
                    _this._possibleRange = [less, 100];
                }
            }
            else {
                _this._possibleRange = [0, 100];
            }
        };
        if (this.config.helpMessage) {
            this._helper = new ts_popup_1.Popup({
                css: "dhx_tooltip dhx_tooltip--forced dhx_tooltip--light",
            });
            this._helper.attachHTML(this.config.helpMessage);
        }
        this._handlers = {
            showHelper: function (e) {
                e.preventDefault();
                e.stopPropagation();
                _this._helper.show(e.target, {
                    theme: e.target,
                });
            },
            onmousedown: function (e) {
                sliderStart(e);
                document.addEventListener("mousemove", sliderMove);
                document.addEventListener("mouseup", sliderEnd);
            },
            ontouchstart: function (e) {
                _this._setTooltip(e);
                _this._mouseIn = false;
                sliderStart(e);
                document.addEventListener("touchmove", sliderMove, { passive: false });
                document.addEventListener("touchend", sliderEnd);
                _this.paint();
            },
            ontouchend: function (e) {
                _this._setTooltip(e);
                _this._mouseIn = false;
                _this.paint();
            },
            onlabelClick: function () {
                var refs = _this.getRootView().refs;
                refs.runner.el.focus();
            },
            onclick: function (e) {
                if (_this._disabled || _this._isMouseMoving || e.which === 3) {
                    return;
                }
                var x = ((e[_this._axis] - _this._getBegining()) / _this._length) * 100;
                var refs = _this.getRootView().refs;
                if (_this.config.range) {
                    var dist = Math.abs(_this._currentPosition - x);
                    var extraDist = Math.abs(_this._extraCurrentPosition - x);
                    if (dist < extraDist) {
                        _this._updatePosition(x, false);
                        refs.runner.el.focus();
                    }
                    else {
                        _this._updatePosition(x, true);
                        refs.extraRunner.el.focus();
                    }
                }
                else {
                    _this._updatePosition(x, false);
                    refs.runner.el.focus();
                }
                _this.paint();
            },
            onmouseover: function (e) {
                _this._setTooltip(e);
                _this._mouseIn = true;
                _this.paint();
            },
            onmouseout: function (e) {
                _this._setTooltip(e);
                _this._mouseIn = false;
                _this.paint();
            },
            onfocus: function (e) {
                _this._setTooltip(e);
                _this._focusIn = true;
                _this.events.fire(types_1.SliderEvents.focus, []);
                _this.paint();
            },
            onblur: function (e) {
                _this._setTooltip(e);
                _this._focusIn = false;
                _this.events.fire(types_1.SliderEvents.blur, []);
                _this.paint();
            },
            onkeydown: function (e) {
                _this.events.fire(types_1.SliderEvents.keydown, [e]);
            },
        };
    };
    Slider.prototype._getBegining = function () {
        return this.config.mode === "horizontal"
            ? this._offsets.left - window.pageXOffset
            : this._offsets.top - window.pageYOffset;
    };
    Slider.prototype._inSide = function (x) {
        var range = this._possibleRange;
        if (x < range[0]) {
            this._updatePosition(range[0], this._isExtraActive);
            return false;
        }
        if (x > range[1]) {
            this._updatePosition(range[1], this._isExtraActive);
            return false;
        }
        return true;
    };
    Slider.prototype._updatePosition = function (x, extra) {
        if (extra === void 0) { extra = false; }
        if (x > 100) {
            x = 100;
        }
        if (x < 0) {
            x = 0;
        }
        var _a = this.config, max = _a.max, min = _a.min;
        var position = extra ? this._extraCurrentPosition : this._currentPosition;
        var oldValue = this._getValue(position);
        var newValue = this._getValue(x);
        if (oldValue === newValue ||
            !this.events.fire(types_1.SliderEvents.beforeChange, [newValue, oldValue, extra])) {
            return;
        }
        var rawValue = ((newValue - min) / (max - min)) * 100;
        var value = this._isInverse() ? 100 - rawValue : rawValue;
        if (extra) {
            this._extraCurrentPosition = value;
        }
        else {
            this._currentPosition = value;
        }
        this.events.fire(types_1.SliderEvents.change, [newValue, oldValue, extra]);
    };
    Slider.prototype._getRunnerStyle = function (forExtra) {
        var _a;
        if (forExtra === void 0) { forExtra = false; }
        var direction = this.config.mode === "horizontal" ? "left" : "top";
        var pos = forExtra ? this._extraCurrentPosition : this._currentPosition;
        return _a = {},
            _a[direction] = pos + "%",
            _a;
    };
    Slider.prototype._isInverse = function () {
        return ((this.config.inverse && this.config.mode === "horizontal") ||
            (!this.config.inverse && this.config.mode === "vertical"));
    };
    Slider.prototype._getRunnerCss = function (forExtra) {
        if (forExtra === void 0) { forExtra = false; }
        return ("dhx_slider__thumb" +
            (forExtra ? " dhx_slider__thumb--extra" : "") +
            (this._isMouseMoving && ((forExtra && this._isExtraActive) || (!forExtra && !this._isExtraActive))
                ? " dhx_slider__thumb--active"
                : "") +
            (this._disabled ? " dhx_slider__thumb--disabled" : "") +
            (this._isNullable(forExtra ? this._extraCurrentPosition : this._currentPosition) &&
                !this.config.range
                ? " dhx_slider__thumb--nullable"
                : ""));
    };
    Slider.prototype._draw = function () {
        var _a = this.config, labelPosition = _a.labelPosition, mode = _a.mode, hiddenLabel = _a.hiddenLabel, tick = _a.tick, majorTick = _a.majorTick, css = _a.css, helpMessage = _a.helpMessage;
        var labelStyle = (0, html_1.getLabelStyle)(__assign(__assign({}, this.config), { required: false }));
        if (this._tooltip && (!this._mouseIn || !this._focusIn || !this._isMouseMoving)) {
            document.body.contains(this._tooltip) && document.body.removeChild(this._tooltip);
        }
        return (0, dom_1.el)("div", {
            class: "dhx_slider" +
                " dhx_slider--mode_" +
                mode +
                (labelPosition === "left" ? " dhx_slider--label-inline" : "") +
                (hiddenLabel ? " dhx_slider--label_sr" : "") +
                (tick ? " dhx_slider--ticks" : "") +
                (majorTick ? " dhx_slider--major-ticks" : "") +
                (css ? " " + css : "") +
                (this._disabled ? " dhx_slider--disabled" : ""),
            style: {
                paddingBottom: this.config.tick ? "16px" : null,
            },
        }, [
            labelStyle
                ? (0, dom_1.el)("label.dhx_label.dhx_slider__label", {
                    style: labelStyle.style,
                    class: helpMessage ? "dhx_label--with-help" : "",
                    onclick: this._handlers.onlabelClick,
                }, helpMessage
                    ? [
                        labelStyle.label && (0, dom_1.el)("span.dhx_label__holder", labelStyle.label),
                        (0, dom_1.el)("span.dhx_label-help.dxi.dxi-help-circle-outline", {
                            tabindex: "0",
                            role: "button",
                            onclick: this._handlers.showHelper,
                        }),
                    ]
                    : labelStyle.label)
                : null,
            this._drawSlider(),
        ]);
    };
    Slider.prototype._drawSlider = function () {
        return (0, dom_1.el)(".dhx_widget.dhx_slider__track-holder", {
            "data-dhx-widget-id": this._uid,
        }, [
            (0, dom_1.el)(".dhx_slider__track", {
                _ref: "track",
                onmouseover: this._handlers.onmouseover,
                onmouseout: this._handlers.onmouseout,
                onclick: this._handlers.onclick,
            }, [
                this._getDetector(),
                (0, dom_1.el)("div", {
                    _ref: "runner",
                    class: this._getRunnerCss(),
                    ontouchstart: this._handlers.ontouchstart,
                    ontouchend: this._handlers.ontouchend,
                    onmousedown: this._handlers.onmousedown,
                    onfocus: this._handlers.onfocus,
                    onblur: this._handlers.onblur,
                    onkeydown: this._handlers.onkeydown,
                    style: this._getRunnerStyle(),
                    tabindex: 0,
                }),
                this.config.tooltip && (this._mouseIn || this._focusIn || this._isMouseMoving)
                    ? this._drawTooltip()
                    : null,
                this.config.tooltip &&
                    this.config.range &&
                    (this._mouseIn || this._focusIn || this._isMouseMoving)
                    ? this._drawTooltip(true)
                    : null,
                this.config.range
                    ? (0, dom_1.el)("div", {
                        _ref: "extraRunner",
                        class: this._getRunnerCss(true),
                        ontouchstart: this._handlers.ontouchstart,
                        ontouchend: this._handlers.ontouchend,
                        onmousedown: this._handlers.onmousedown,
                        onfocus: this._handlers.onfocus,
                        onblur: this._handlers.onblur,
                        onkeydown: this._handlers.onkeydown,
                        style: this._getRunnerStyle(true),
                        tabindex: 0,
                    })
                    : null,
            ]),
            this.config.tick ? this._drawTicks() : null,
        ]);
    };
    Slider.prototype._getDetector = function () {
        var _a, _b, _c;
        if (this._disabled) {
            return (0, dom_1.el)(".dhx_slider__range");
        }
        var direction = this.config.mode === "horizontal" ? "left" : "top";
        var size = this.config.mode === "horizontal" ? "width" : "height";
        if (this.config.range) {
            var _d = this._currentPosition > this._extraCurrentPosition
                ? [this._currentPosition, this._extraCurrentPosition]
                : [this._extraCurrentPosition, this._currentPosition], more = _d[0], less = _d[1];
            return (0, dom_1.el)(".dhx_slider__range", {
                style: (_a = {},
                    _a[direction] = less + "%",
                    _a[size] = more - less + "%",
                    _a),
            });
        }
        if (this._isInverse()) {
            return (0, dom_1.el)(".dhx_slider__range", {
                style: (_b = {},
                    _b[direction] = this._currentPosition + "%",
                    _b[size] = 100 - this._currentPosition + "%",
                    _b),
            });
        }
        return (0, dom_1.el)(".dhx_slider__range", {
            style: (_c = {},
                _c[direction] = 0,
                _c[size] = this._currentPosition + "%",
                _c),
        });
    };
    Slider.prototype._drawTooltip = function (forExtra) {
        if (forExtra === void 0) { forExtra = false; }
        if (this._activeTooltip === "none" || !this.getRootView())
            return;
        var pos = this._activeTooltip === "extraTooltip" ? this._extraCurrentPosition : this._currentPosition;
        var direction = this.config.mode === "horizontal" ? "left" : "top";
        var classNameModifiers = "";
        if ((forExtra && this._isExtraActive) || (!forExtra && !this._isExtraActive)) {
            classNameModifiers += " dhx_slider__thumb-label--active";
        }
        if (!this._tooltip) {
            this._tooltip = document.createElement("div");
        }
        var coords = this._activeTooltip === "tooltip"
            ? this.getRootView().refs.runner.el.getBoundingClientRect()
            : this.getRootView().refs.extraRunner.el.getBoundingClientRect();
        this._tooltip.className = "dhx_slider__thumb-label" + classNameModifiers;
        this._tooltip.style.left = coords.x + (direction === "left" ? 6 : -30) + window.pageXOffset + "px";
        this._tooltip.style.top = coords.y + (direction === "left" ? -30 : 6) + window.pageYOffset + "px";
        this._tooltip.innerText = this._getValue(pos).toString();
        document.body.appendChild(this._tooltip);
    };
    Slider.prototype._getTicks = function () {
        var _a = this.config, max = _a.max, min = _a.min, step = _a.step, tick = _a.tick, majorTick = _a.majorTick;
        var len = max - min;
        var tickLength = (step * tick) / len;
        var positions = [];
        var length = 0;
        var index = 0;
        while (length < 1) {
            var tickValue = +(Number(min) + length * len).toFixed(5);
            var isMultiple = index % majorTick === 0;
            positions.push({
                position: (this._isInverse() ? (1 - length) * 100 : length * 100) + "%",
                isMultiple: isMultiple,
                label: isMultiple && typeof this.config.tickTemplate === "function"
                    ? this.config.tickTemplate(tickValue)
                    : null,
            });
            length += tickLength;
            index++;
        }
        positions.push({
            position: (this._isInverse() ? 0 : 100) + "%",
            isMultiple: true,
            label: typeof this.config.tickTemplate === "function" ? this.config.tickTemplate(max) : null,
        });
        return positions;
    };
    Slider.prototype._drawTicks = function () {
        var direction = this.config.mode === "horizontal" ? "left" : "top";
        return (0, dom_1.el)(".dhx_slider__ticks-holder", this._getTicks().map(function (tick) {
            var _a;
            return (0, dom_1.el)("div", {
                class: "dhx_slider__tick" + (tick.isMultiple ? " dhx_slider__tick--major" : ""),
                style: (_a = {},
                    _a[direction] = tick.position,
                    _a),
            }, tick.label !== undefined ? [(0, dom_1.el)(".dhx_slider__tick-label", tick.label)] : null);
        }));
    };
    Slider.prototype._isNullable = function (value) {
        if (this._isInverse()) {
            return value === 100;
        }
        else {
            return value === 0;
        }
    };
    Slider.prototype._setTooltip = function (e) {
        if (e.target.classList.contains("dhx_slider__thumb--extra")) {
            this._activeTooltip = "extraTooltip";
        }
        else if (e.target.classList.contains("dhx_slider__thumb")) {
            this._activeTooltip = "tooltip";
        }
        else {
            this._activeTooltip = "none";
        }
    };
    return Slider;
}(view_1.View));
exports.Slider = Slider;


/***/ }),
/* 58 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.KeyManager = void 0;
var FocusManager_1 = __webpack_require__(59);
var html_1 = __webpack_require__(1);
function getHotKeyCode(code) {
    var matches = code.toLowerCase().match(/\w+/g);
    var comp = 0;
    var key = "";
    for (var i = 0; i < matches.length; i++) {
        var check = matches[i];
        if (check === "ctrl") {
            comp += 4;
        }
        else if (check === "shift") {
            comp += 2;
        }
        else if (check === "alt") {
            comp += 1;
        }
        else {
            key = check;
        }
    }
    return comp + key;
}
var ie_key_map = {
    Up: "arrowUp",
    Down: "arrowDown",
    Right: "arrowRight",
    Left: "arrowLeft",
    Esc: "escape",
    Spacebar: "space",
};
var KeyManager = /** @class */ (function () {
    function KeyManager(beforeCall) {
        var _this = this;
        this._keysStorage = {};
        this._initHandler = function (e) {
            var key;
            if ((e.which >= 48 && e.which <= 57) || (e.which >= 65 && e.which <= 90)) {
                key = String.fromCharCode(e.which);
            }
            else {
                var keyName = e.which === 32 ? e.code : e.key;
                key = (0, html_1.isIE)() ? ie_key_map[keyName] || keyName : keyName;
            }
            var actions = _this._keysStorage[(e.ctrlKey || e.metaKey ? 4 : 0) +
                (e.shiftKey ? 2 : 0) +
                (e.altKey ? 1 : 0) +
                (key && key.toLowerCase())];
            if (actions) {
                for (var i = 0; i < actions.length; i++) {
                    if (_this._beforeCall && _this._beforeCall(e, FocusManager_1.focusManager.getFocusId()) === false) {
                        return;
                    }
                    actions[i].handler(e);
                }
            }
        };
        if (beforeCall) {
            this._beforeCall = beforeCall;
        }
        document.addEventListener("keydown", this._initHandler);
    }
    KeyManager.prototype.destructor = function () {
        document.removeEventListener("keydown", this._initHandler);
        this.removeHotKey();
    };
    KeyManager.prototype.addHotKey = function (key, handler) {
        var code = getHotKeyCode(key);
        if (!this._keysStorage[code]) {
            this._keysStorage[code] = [];
        }
        this._keysStorage[code].push({ handler: handler });
    };
    KeyManager.prototype.removeHotKey = function (key, handler) {
        var _this = this;
        if (key) {
            if (key && handler) {
                var code_1 = getHotKeyCode(key);
                var functionToString_1 = function (fun) {
                    return fun
                        .toString()
                        .replace(/\n/g, "")
                        .replace(/\s/g, "");
                };
                this._keysStorage[code_1].forEach(function (existHotKey, i) {
                    if (functionToString_1(existHotKey.handler) === functionToString_1(handler)) {
                        delete _this._keysStorage[code_1][i];
                        _this._keysStorage[code_1] = _this._keysStorage[code_1].filter(function (el) { return el; });
                    }
                });
            }
            else {
                var code = getHotKeyCode(key);
                delete this._keysStorage[code];
            }
        }
        else {
            this._keysStorage = {};
        }
    };
    KeyManager.prototype.exist = function (key) {
        var code = getHotKeyCode(key);
        return !!this._keysStorage[code];
    };
    KeyManager.prototype.getKeyStorageLength = function () {
        return Object.keys(this._keysStorage).length;
    };
    return KeyManager;
}());
exports.KeyManager = KeyManager;


/***/ }),
/* 59 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.focusManager = void 0;
var html_1 = __webpack_require__(1);
var FocusManager = /** @class */ (function () {
    function FocusManager() {
        var _this = this;
        this._initHandler = function (e) { return (_this._activeWidgetId = (0, html_1.locate)(e, "data-dhx-widget-id")); };
        this._removeFocusClass = function (e) {
            var classList = document.body.classList;
            if (classList.contains("utilityfocus"))
                classList.remove("utilityfocus");
        };
        this._addFocusClass = function (e) {
            var classList = document.body.classList;
            if (e.code === "Tab") {
                if (!classList.contains("utilityfocus"))
                    classList.add("utilityfocus");
            }
            else {
                if (classList.contains("utilityfocus"))
                    classList.remove("utilityfocus");
            }
        };
        document.addEventListener("focusin", this._initHandler);
        document.addEventListener("pointerdown", this._initHandler);
        document.addEventListener("mousedown", this._removeFocusClass);
        document.addEventListener("keydown", this._addFocusClass);
    }
    FocusManager.prototype.getFocusId = function () {
        return this._activeWidgetId;
    };
    FocusManager.prototype.setFocusId = function (id) {
        this._activeWidgetId = id;
    };
    return FocusManager;
}());
exports.focusManager = new FocusManager();


/***/ }),
/* 60 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
var locale = {
    hours: "Hours",
    minutes: "Minutes",
    save: "Save",
};
exports.default = locale;


/***/ }),
/* 61 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.isTimeCheck = void 0;
/**
 * This function is designed to resolve conflicts with the time setting for the 12 hour format.
 */
function isTimeCheck(value) {
    return /(^12:[0-5][0-9]?AM$)/i.test(value);
}
exports.isTimeCheck = isTimeCheck;


/***/ }),
/* 62 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.linkButtonClasses = void 0;
exports.linkButtonClasses = ".dhx_button.dhx_button--view_link.dhx_button--icon.dhx_button--size_medium.dhx_button--color_secondary";


/***/ }),
/* 63 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.CalendarEvents = void 0;
var CalendarEvents;
(function (CalendarEvents) {
    CalendarEvents["change"] = "change";
    CalendarEvents["beforeChange"] = "beforechange";
    CalendarEvents["modeChange"] = "modeChange";
    CalendarEvents["monthSelected"] = "monthSelected";
    CalendarEvents["yearSelected"] = "yearSelected";
    CalendarEvents["cancelClick"] = "cancelClick";
    CalendarEvents["dateMouseOver"] = "dateMouseOver";
    /** @deprecated See a documentation: https://docs.dhtmlx.com/ */
    CalendarEvents["dateHover"] = "dateHover";
})(CalendarEvents || (exports.CalendarEvents = CalendarEvents = {}));


/***/ }),
/* 64 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    var desc = Object.getOwnPropertyDescriptor(m, k);
    if (!desc || ("get" in desc ? !m.__esModule : desc.writable || desc.configurable)) {
      desc = { enumerable: true, get: function() { return m[k]; } };
    }
    Object.defineProperty(o, k2, desc);
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __exportStar = (this && this.__exportStar) || function(m, exports) {
    for (var p in m) if (p !== "default" && !Object.prototype.hasOwnProperty.call(exports, p)) __createBinding(exports, m, p);
};
Object.defineProperty(exports, "__esModule", { value: true });
__exportStar(__webpack_require__(5), exports);
__exportStar(__webpack_require__(23), exports);
__exportStar(__webpack_require__(69), exports);
__exportStar(__webpack_require__(70), exports);
__exportStar(__webpack_require__(8), exports);
__exportStar(__webpack_require__(72), exports);
__exportStar(__webpack_require__(3), exports);
__exportStar(__webpack_require__(14), exports);
__exportStar(__webpack_require__(25), exports);
__exportStar(__webpack_require__(73), exports);
__exportStar(__webpack_require__(24), exports);
__exportStar(__webpack_require__(13), exports);
__exportStar(__webpack_require__(27), exports);


/***/ }),
/* 65 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(Promise) {
var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.Loader = void 0;
var core_1 = __webpack_require__(0);
var helpers_1 = __webpack_require__(3);
var types_1 = __webpack_require__(5);
var core_2 = __webpack_require__(0);
var Loader = /** @class */ (function () {
    function Loader(parent, changes) {
        this._parent = parent;
        this._changes = changes; // todo: [dirty] mutation
    }
    Loader.prototype.load = function (url, driver) {
        var _this = this;
        // TODO: change way for checking lazyLoad
        if (url.config && !this._parent.events.fire(types_1.DataEvents.beforeLazyLoad, [])) {
            return;
        }
        return (this._parent.loadData = url
            .load()
            .then(function (data) {
            if (data) {
                return _this.parse(data, driver);
            }
            else {
                return [];
            }
        })
            .catch(function (error) {
            _this._parent.events.fire(types_1.DataEvents.loadError, [error]);
        }));
    };
    Loader.prototype.parse = function (data, driver) {
        var _this = this;
        if (driver === void 0) { driver = types_1.DataDriver.json; }
        if (driver === "json" && !(0, helpers_1.hasJsonOrArrayStructure)(data)) {
            this._parent.events.fire(types_1.DataEvents.loadError, ["Uncaught SyntaxError: Unexpected end of input"]);
        }
        driver = (0, helpers_1.toDataDriver)(driver);
        data = driver.toJsonArray(data);
        if (!(data instanceof Array)) {
            var totalCount = data.total_count - 1;
            var from_1 = data.from;
            data = data.data;
            if (this._parent.getLength() === 0) {
                var newData = [];
                for (var i = 0, j = 0; i <= totalCount; i++) {
                    if (i >= from_1 && i <= from_1 + data.length - 1) {
                        newData.push(data[j]);
                        j++;
                    }
                    else {
                        newData.push({ $empty: true });
                    }
                }
                data = newData;
            }
            else {
                data.forEach(function (newItem, i) {
                    var index = from_1 + i;
                    var oldId = _this._parent.getId(index);
                    if ((0, core_1.isId)(oldId)) {
                        var emptyItem = _this._parent.getItem(oldId);
                        if (emptyItem && emptyItem.$empty) {
                            var id = newItem.id || emptyItem.id;
                            if ((0, core_2.isDefined)(newItem.id)) {
                                _this._parent.changeId(oldId, id, true);
                            }
                            _this._parent.update(id, __assign(__assign({}, newItem), { $empty: undefined }), true);
                        }
                    }
                    else {
                        (0, helpers_1.dhxWarning)("item not found");
                    }
                });
                this._parent.events.fire(types_1.DataEvents.afterLazyLoad, [from_1, data.length]);
                this._parent.events.fire(types_1.DataEvents.change);
                return data;
            }
        }
        if (this._parent.getInitialData()) {
            this._parent.removeAll();
        }
        this._parent.$parse(data);
        return data;
    };
    Loader.prototype.save = function (url) {
        var _this = this;
        var uniqueChanges = this._getUniqueOrder();
        var _loop_1 = function (el) {
            if (el.saving || el.pending) {
                (0, helpers_1.dhxWarning)("item is saving");
            }
            else {
                var prevEl_1 = this_1._findPrevState(el.id);
                if (prevEl_1 && prevEl_1.saving) {
                    var pending = new Promise(function (res, rej) {
                        prevEl_1.promise
                            .then(function () {
                            el.pending = false;
                            res(_this._setPromise(el, url));
                        })
                            .catch(function (err) {
                            _this._removeFromOrder(prevEl_1);
                            _this._setPromise(el, url);
                            (0, helpers_1.dhxWarning)(err);
                            rej(err);
                        });
                    });
                    this_1._addToChain(pending);
                    el.pending = true;
                }
                else {
                    this_1._setPromise(el, url);
                }
            }
        };
        var this_1 = this;
        for (var _i = 0, uniqueChanges_1 = uniqueChanges; _i < uniqueChanges_1.length; _i++) {
            var el = uniqueChanges_1[_i];
            _loop_1(el);
        }
        if (uniqueChanges.length) {
            this._parent.saveData.then(function () {
                _this._saving = false;
            });
        }
    };
    Loader.prototype.updateChanges = function (changes) {
        this._changes = changes;
    };
    Loader.prototype._setPromise = function (el, url) {
        var _this = this;
        var status;
        switch (el.status) {
            case "remove":
                status = "delete";
                break;
            case "add":
                status = "insert";
                break;
            default:
                status = el.status;
                break;
        }
        el.promise = url.save(el.obj, status);
        el.promise
            .then(function () {
            _this._removeFromOrder(el);
        })
            .catch(function (err) {
            el.saving = false;
            el.error = true;
            (0, helpers_1.dhxError)(err);
        });
        el.saving = true;
        this._saving = true;
        this._addToChain(el.promise);
        return el.promise;
    };
    Loader.prototype._addToChain = function (promise) {
        // eslint-disable-next-line @typescript-eslint/no-misused-promises
        if (this._parent.saveData && this._saving) {
            this._parent.saveData = this._parent.saveData.then(function () { return promise; });
        }
        else {
            this._parent.saveData = promise;
        }
    };
    Loader.prototype._findPrevState = function (id) {
        for (var _i = 0, _a = this._changes.order; _i < _a.length; _i++) {
            var el = _a[_i];
            if (el.id === id) {
                return el;
            }
        }
        return null;
    };
    Loader.prototype._removeFromOrder = function (el) {
        this._changes.order = this._changes.order.filter(function (item) { return !(0, helpers_1.isEqualObj)(item, el); });
    };
    Loader.prototype._getUniqueOrder = function () {
        return this._changes.order.reduce(function (unique, el) {
            var ind = unique.findIndex(function (item) { return item.id === el.id; });
            var involvedElem = ind > -1 ? unique[ind] : null;
            if (involvedElem && involvedElem.saving === false && involvedElem.status === "add") {
                if (el.status === "remove") {
                    unique.splice(ind, 1);
                }
                else {
                    involvedElem.obj = el.obj;
                }
            }
            else if (involvedElem && involvedElem.saving === false && involvedElem.status === "update") {
                unique.splice(ind, 1, el);
            }
            else {
                unique.push(el);
            }
            return unique;
        }, []);
    };
    return Loader;
}());
exports.Loader = Loader;

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(6)))

/***/ }),
/* 66 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.jsonToXML = void 0;
var INDENT_STEP = 4;
function ws(count) {
    return " ".repeat(count);
}
function itemToXML(item, indent) {
    if (indent === void 0) { indent = INDENT_STEP; }
    var result = ws(indent) + "<item>\n";
    for (var key in item) {
        if (Array.isArray(item[key])) {
            result += ws(indent + INDENT_STEP) + "<".concat(key, ">\n");
            result +=
                item[key].map(function (subItem) { return itemToXML(subItem, indent + INDENT_STEP * 2); }).join("\n") +
                    "\n";
            result += ws(indent + INDENT_STEP) + "</".concat(key, ">\n");
        }
        else {
            result += ws(indent + INDENT_STEP) + "<".concat(key, ">").concat(item[key], "</").concat(key, ">\n");
        }
    }
    result += ws(indent) + "</item>";
    return result;
}
function jsonToXML(data, root) {
    if (root === void 0) { root = "root"; }
    var result = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n<".concat(root, ">");
    for (var i = 0; i < data.length; i++) {
        result += "\n" + itemToXML(data[i]);
    }
    return result + "\n</".concat(root, ">");
}
exports.jsonToXML = jsonToXML;


/***/ }),
/* 67 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.Sort = void 0;
var helpers_1 = __webpack_require__(3);
var Sort = /** @class */ (function () {
    function Sort() {
    }
    Sort.prototype.sort = function (array, by, perm) {
        this._createSorter(by);
        if (perm === by)
            by = null;
        if (perm || by)
            this._sort(array, perm, by);
    };
    Sort.prototype._createSorter = function (by) {
        var _this = this;
        if (by && !by.rule) {
            by.rule = function (a, b) {
                var _a, _b;
                var aa = (_a = _this._checkVal(by.as, a[by.by])) !== null && _a !== void 0 ? _a : "";
                var bb = (_b = _this._checkVal(by.as, b[by.by])) !== null && _b !== void 0 ? _b : "";
                // [TODO] why we need naturalCompare
                return (0, helpers_1.naturalCompare)(aa.toString(), bb.toString());
            };
        }
    };
    Sort.prototype._checkVal = function (method, val) {
        return method ? method.call(this, val) : val;
    };
    Sort.prototype._sort = function (arr, conf, conf2) {
        var _this = this;
        var dir = {
            asc: 1,
            desc: -1,
        };
        var sorted = arr.sort(function (a, b) {
            var t = 0;
            if (conf)
                t = conf.rule.call(_this, a, b) * (dir[conf.dir] || dir.asc);
            if (t === 0 && conf2)
                t = conf2.rule.call(_this, a, b) * (dir[conf2.dir] || dir.asc);
            return t;
        });
        var summaryIndex = sorted.findIndex(function (i) { return i.$groupSummary; });
        if (summaryIndex !== -1) {
            var summary = sorted[summaryIndex];
            sorted.splice(summaryIndex, 1);
            switch (summary.$groupSummary) {
                case "top":
                    sorted.unshift(summary);
                    break;
                case "bottom":
                    sorted.push(summary);
            }
        }
        return sorted;
    };
    return Sort;
}());
exports.Sort = Sort;


/***/ }),
/* 68 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
var __spreadArray = (this && this.__spreadArray) || function (to, from, pack) {
    if (pack || arguments.length === 2) for (var i = 0, l = from.length, ar; i < l; i++) {
        if (ar || !(i in from)) {
            if (!ar) ar = Array.prototype.slice.call(from, 0, i);
            ar[i] = from[i];
        }
    }
    return to.concat(ar || Array.prototype.slice.call(from));
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.Group = void 0;
var core_1 = __webpack_require__(0);
var methods_1 = __webpack_require__(27);
var Group = /** @class */ (function () {
    function Group() {
        this._init = [];
        this._groupSet = new Set();
    }
    Group.prototype.group = function (order, arr, config) {
        if (config === void 0) { config = {}; }
        if (!(order === null || order === void 0 ? void 0 : order.length) || !(arr === null || arr === void 0 ? void 0 : arr.length) || !Array.isArray(order)) {
            return arr || [];
        }
        this._init = __spreadArray([], arr, true);
        this._groupSet.clear();
        this._config = this.getGroupConfig(config);
        return this._group(order, arr);
    };
    Group.prototype.ungroup = function (modifiedData) {
        var data = this._init;
        this._init = [];
        this._groupSet.clear();
        if (modifiedData) {
            var pull_1 = {};
            var _loop_1 = function (index) {
                var i = modifiedData[index];
                if (i.$group)
                    return "continue";
                Object.keys(i).forEach(function (key) {
                    if (key.startsWith("$"))
                        delete i[key];
                });
                delete i.parent;
                pull_1[i.id] = i;
            };
            for (var index = 0; index < modifiedData.length; index++) {
                _loop_1(index);
            }
            return data.map(function (i) { return (__assign(__assign({}, i), pull_1[i.id])); });
        }
        return data || [];
    };
    Group.prototype.isGrouped = function () {
        return !!this._init.length;
    };
    Group.prototype.getGroupedFields = function () {
        return Array.from(this._groupSet);
    };
    Group.prototype.getGroupConfig = function (config) {
        var _a;
        if (config) {
            return {
                displayMode: config.displayMode || "column",
                field: config.field || "group",
                showMissed: (_a = config.showMissed) !== null && _a !== void 0 ? _a : true,
            };
        }
        return this._config;
    };
    Group.prototype._group = function (order, arr, parentId, level) {
        var _this = this;
        if (level === void 0) { level = 0; }
        if (level >= order.length) {
            return;
        }
        var flatTree = [];
        var grouped = {};
        var missed = [];
        var missedGroupField = "";
        var config = {};
        for (var index = 0; index < arr.length; index++) {
            var item = arr[index];
            var current = order[level];
            var isFunc = typeof current === "function" || typeof (current === null || current === void 0 ? void 0 : current.by) === "function";
            config = this._getOrderConfig(current, item);
            var ownProperty = item[config.by];
            var groupKey = isFunc ? config.by : ownProperty;
            if (!isFunc && !ownProperty && ownProperty !== 0) {
                if (this._config.showMissed) {
                    delete item.parent;
                    missed.push(item);
                }
                if (typeof this._config.showMissed === "string") {
                    missedGroupField = this._config.showMissed;
                }
                continue;
            }
            this._groupSet.add(config.by);
            if (!grouped[groupKey]) {
                grouped[groupKey] = [];
            }
            grouped[groupKey].push(item);
        }
        var groupedFields = Object.keys(grouped);
        if (missedGroupField) {
            groupedFields.push(missedGroupField);
        }
        groupedFields.forEach(function (groupKey) {
            var _a;
            var groupItems = grouped[groupKey] || missed;
            var nodeId = parentId ? "".concat(parentId, ":").concat(groupKey) : "$".concat((0, core_1.uid)(), ":").concat(groupKey);
            var aggregate = {};
            if (config.map) {
                Object.keys(config.map).forEach(function (field) {
                    aggregate[field] = _this._toAggregate(groupItems, config.map[field]);
                });
            }
            var groupNode = __assign((_a = { id: nodeId, $group: true, $row: _this._config.displayMode === "row", $count: groupItems.length }, _a[config.by] = groupKey, _a), aggregate);
            if (_this._config.displayMode === "column") {
                groupNode[_this._config.field] = groupKey;
            }
            if (parentId) {
                groupNode.parent = parentId;
            }
            flatTree.push(groupNode);
            if (level < order.length - 1) {
                flatTree.push.apply(flatTree, _this._group(order, groupItems, nodeId, level + 1));
            }
            if (level === order.length - 1) {
                groupItems.forEach(function (item) {
                    flatTree.push(__assign(__assign({}, item), { parent: nodeId }));
                });
            }
            if (config.summary) {
                _this._addSummaryRow(flatTree, nodeId, config.summary, aggregate);
            }
        });
        if (!missedGroupField)
            flatTree.push.apply(flatTree, missed);
        return flatTree;
    };
    Group.prototype._addSummaryRow = function (flatTree, groupKey, position, aggregate) {
        var summaryRow = __assign({ id: "".concat(groupKey, ":summary"), parent: groupKey, $groupSummary: position }, aggregate);
        if (position === "top") {
            var groupIndex = flatTree.findIndex(function (item) { return item.id === groupKey; });
            flatTree.splice(groupIndex + 1, 0, summaryRow);
        }
        else {
            flatTree.push(summaryRow);
        }
    };
    Group.prototype._toAggregate = function (items, order) {
        if (typeof order === "function") {
            return order(items);
        }
        var field = order[0], type = order[1];
        if (methods_1.methods[type]) {
            return methods_1.methods[type](items, field);
        }
        return "";
    };
    Group.prototype._getOrderConfig = function (order, item) {
        var by = (typeof order === "string" && order) ||
            (typeof order.by === "string" && order.by) ||
            (typeof order === "function" && order(item)) ||
            (typeof order.by === "function" && order.by(item));
        var config = { by: by };
        if (order.map) {
            config.map = order.map;
        }
        if (order.summary) {
            config.summary = order.summary;
        }
        return config;
    };
    return Group;
}());
exports.Group = Group;


/***/ }),
/* 69 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
var __spreadArray = (this && this.__spreadArray) || function (to, from, pack) {
    if (pack || arguments.length === 2) for (var i = 0, l = from.length, ar; i < l; i++) {
        if (ar || !(i in from)) {
            if (!ar) ar = Array.prototype.slice.call(from, 0, i);
            ar[i] = from[i];
        }
    }
    return to.concat(ar || Array.prototype.slice.call(from));
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.TreeCollection = exports.addToOrder = void 0;
var core_1 = __webpack_require__(0);
var datacollection_1 = __webpack_require__(23);
var dataproxy_1 = __webpack_require__(8);
var helpers_1 = __webpack_require__(3);
var types_1 = __webpack_require__(5);
function addToOrder(store, obj, parent, index) {
    if (index !== undefined && index !== -1 && store[parent] && store[parent][index]) {
        store[parent].splice(index, 0, obj);
    }
    else {
        if (!store[parent]) {
            store[parent] = [];
        }
        store[parent].push(obj);
    }
}
exports.addToOrder = addToOrder;
var TreeCollection = /** @class */ (function (_super) {
    __extends(TreeCollection, _super);
    function TreeCollection(config, events) {
        var _a;
        var _this = _super.call(this, config, events) || this;
        _this._childs = {};
        var root = (_this._root = (config && config.rootId) || "_ROOT_" + (0, core_1.uid)());
        _this._childs = (_a = {}, _a[root] = [], _a);
        _this._initChilds = null;
        return _this;
    }
    TreeCollection.prototype.add = function (newItem, index, parent) {
        var _this = this;
        if (index === void 0) { index = -1; }
        if (parent === void 0) { parent = this._root; }
        if (!this.events.fire(types_1.DataEvents.beforeAdd, [newItem])) {
            return;
        }
        if (typeof newItem !== "object") {
            newItem = {
                value: newItem,
            };
        }
        var out;
        if (Array.isArray(newItem)) {
            out = newItem.map(function (element, key) {
                return _this._add(element, index, parent, key);
            });
        }
        else {
            out = this._add(newItem, index, parent);
        }
        this._reapplyFilters();
        return out;
    };
    TreeCollection.prototype.getRoot = function () {
        return this._root;
    };
    TreeCollection.prototype.getParent = function (id, asObj) {
        if (asObj === void 0) { asObj = false; }
        if (!this._pull[id]) {
            return null;
        }
        var parent = this._pull[id].parent;
        return asObj ? this._pull[parent] : parent;
    };
    TreeCollection.prototype.getItems = function (id) {
        if (this._childs && this._childs[id]) {
            return this._childs[id];
        }
        return [];
    };
    TreeCollection.prototype.getLength = function (id) {
        if (id === void 0) { id = this._root; }
        if (!this._childs[id]) {
            return null;
        }
        return this._childs[id].length;
    };
    TreeCollection.prototype.removeAll = function (id) {
        var _a;
        if (!(0, core_1.isId)(id)) {
            _super.prototype.removeAll.call(this);
            var root = this._root;
            this._initChilds = null;
            this._childs = (_a = {}, _a[root] = [], _a);
        }
        else if (this._childs[id]) {
            var childs = __spreadArray([], this._childs[id], true);
            for (var _i = 0, childs_1 = childs; _i < childs_1.length; _i++) {
                var child = childs_1[_i];
                this.remove(child.id);
            }
        }
    };
    TreeCollection.prototype.update = function (id, newItem, silent) {
        var parent = newItem.parent;
        if ((0, core_1.isDefined)(parent) && !this.exists(parent) && parent !== this._root) {
            (0, helpers_1.dhxWarning)("Item parent doesn't exist");
            return;
        }
        _super.prototype.update.call(this, id, newItem, silent);
    };
    TreeCollection.prototype.getIndex = function (id) {
        var parent = this.getParent(id);
        if (!parent || !this._childs[parent]) {
            return -1;
        }
        return this._childs[parent].findIndex(function (i) { return (i === null || i === void 0 ? void 0 : i.id) == id; });
    };
    TreeCollection.prototype.sort = function (rule, config, ignore) {
        var _this = this;
        var _a, _b;
        if (ignore === void 0) { ignore = false; }
        if (config === null || config === void 0 ? void 0 : config.smartSorting) {
            this._sorter = rule;
        }
        if (!ignore &&
            (!this._sortingStates.length ||
                (config === null || config === void 0 ? void 0 : config.smartSorting) ||
                (!((_a = this._sortingStates[0]) === null || _a === void 0 ? void 0 : _a.smartSorting) && !(config === null || config === void 0 ? void 0 : config.smartSorting)))) {
            this._sortingStates = [__assign(__assign({}, rule), config)];
        }
        if (rule) {
            if (!ignore) {
                this._initSortOrder = this._initSortOrder || __spreadArray([], (this._initFilterOrder || this._order), true);
                if (!(config === null || config === void 0 ? void 0 : config.smartSorting) && ((_b = this._sortingStates[0]) === null || _b === void 0 ? void 0 : _b.smartSorting)) {
                    var sortIndex = this._sortingStates.findIndex(function (i) { return i.by == rule.by; });
                    if (sortIndex !== -1) {
                        this._sortingStates[sortIndex].dir = rule.dir;
                        this._sortingStates.forEach(function (sort, index) {
                            _this.sort(sort, { smartSorting: !index }, true);
                        });
                    }
                    else {
                        this._sortingStates.push(rule);
                    }
                }
            }
            this._applySorters(rule);
        }
        else if (this._initSortOrder) {
            this._childs = {};
            this._order = [];
            this._sortingStates = [];
            this._initSortOrder.forEach(function (item) { return _this._parseItem(item); });
            this._sorter = this._initSortOrder = this._initChilds = null;
            if (this._initFilterOrder) {
                this._initFilterOrder = null;
                this.filter(null, { $restore: true }, true);
            }
        }
        if (!ignore) {
            this._reapplyFilters();
            this.events.fire(types_1.DataEvents.change, [undefined, "sort", rule]);
        }
    };
    TreeCollection.prototype.filter = function (rule, config, silent) {
        if (config === null || config === void 0 ? void 0 : config.$restore) {
            rule = this._normalizeFilters(rule || this._filters);
        }
        if (!rule || !(config === null || config === void 0 ? void 0 : config.add)) {
            if (this._initChilds) {
                this._childs = this._initChilds;
                this._initChilds = null;
            }
            if (!(config === null || config === void 0 ? void 0 : config.$restore)) {
                for (var key in this._filters) {
                    var _a = this._filters[key], rule_1 = _a.rule, conf = _a.config;
                    if (conf === null || conf === void 0 ? void 0 : conf.permanent) {
                        this._applyFilter(rule_1, conf);
                    }
                    else {
                        delete this._filters[key];
                    }
                }
            }
        }
        var id;
        if (rule && !(config === null || config === void 0 ? void 0 : config.$restore)) {
            id = (config === null || config === void 0 ? void 0 : config.id) || (0, core_1.uid)();
            if (!config)
                config = {};
            config.type = config.type || types_1.TreeFilterType.all;
            this._filters[id] = { rule: rule, config: config };
            this._applyFilter(rule, config);
        }
        else {
            for (var key in rule) {
                this._applyFilter(rule[key], this._filters[key].config);
            }
        }
        if (!silent) {
            var filters = this._getPureFilters(this._filters);
            this.events.fire(types_1.DataEvents.filter, [(0, core_1.isEmptyObj)(filters) ? null : filters]);
        }
        return id;
    };
    TreeCollection.prototype.restoreOrder = function () {
        this.resetFilter({ permanent: true }, true);
        this.sort();
    };
    TreeCollection.prototype.copy = function (id, index, target, targetId) {
        var _this = this;
        if (target === void 0) { target = this; }
        if (targetId === void 0) { targetId = this._root; }
        if (id instanceof Array) {
            return id.map(function (elementId, key) {
                return _this._copy(elementId, index, target, targetId, key);
            });
        }
        else {
            return this._copy(id, index, target, targetId);
        }
    };
    TreeCollection.prototype.move = function (id, index, target, targetId) {
        var _this = this;
        var _a;
        if (targetId === void 0) { targetId = this._root; }
        target = target || this;
        if (id instanceof Array) {
            var movedIds_1 = [];
            id.forEach(function (elementId, key) {
                if ((0, core_1.isId)(_this._move(elementId, index, target, targetId, key))) {
                    movedIds_1.push(elementId);
                }
                else {
                    (0, helpers_1.throwMoveWarning)(elementId, _this.exists(elementId));
                }
            });
            return movedIds_1;
        }
        else {
            return (_a = this._move(id, index, target, targetId)) !== null && _a !== void 0 ? _a : (0, helpers_1.throwMoveWarning)(id, this.exists(id));
        }
    };
    TreeCollection.prototype.forEach = function (callback, parent, level) {
        if (parent === void 0) { parent = this._root; }
        if (level === void 0) { level = Infinity; }
        if (!this.haveItems(parent) || level < 1) {
            return;
        }
        var array = this._childs[parent];
        for (var i = 0; i < array.length; i++) {
            callback.call(this, array[i], i, array);
            if (this.haveItems(array[i].id)) {
                this.forEach(callback, array[i].id, --level);
            }
        }
    };
    TreeCollection.prototype.eachChild = function (id, callback, direct, checkItem) {
        if (direct === void 0) { direct = true; }
        if (checkItem === void 0) { checkItem = function () { return true; }; }
        if (!this.haveItems(id)) {
            return;
        }
        for (var i = 0; i < this._childs[id].length; i++) {
            callback.call(this, this._childs[id][i], i);
            if (direct && checkItem(this._childs[id][i])) {
                this.eachChild(this._childs[id][i].id, callback, direct, checkItem);
            }
        }
    };
    TreeCollection.prototype.getNearId = function (id) {
        return id; // for selection
    };
    TreeCollection.prototype.loadItems = function (id, driver) {
        var _this = this;
        if (driver === void 0) { driver = types_1.DataDriver.json; }
        if (!this.events.fire(types_1.DataEvents.beforeItemLoad, [id])) {
            return;
        }
        var urlPart = this.config.autoload.toString();
        var url = urlPart + (urlPart.includes("?") ? "&id=".concat(id) : "?id=".concat(id));
        var proxy = new dataproxy_1.DataProxy(url);
        proxy
            .load()
            .then(function (data) {
            driver = (0, helpers_1.toDataDriver)(driver);
            data = driver.toJsonArray(data);
            _this._parse_data(data, id);
            _this.events.fire(types_1.DataEvents.change);
            _this.events.fire(types_1.DataEvents.afterItemLoad, [id]);
        })
            .catch(function (error) {
            _this.events.fire(types_1.DataEvents.loadError, [error]);
        });
    };
    TreeCollection.prototype.refreshItems = function (id, driver) {
        if (driver === void 0) { driver = types_1.DataDriver.json; }
        this.removeAll(id);
        this.loadItems(id, driver);
    };
    TreeCollection.prototype.eachParent = function (id, callback, self) {
        if (self === void 0) { self = false; }
        var item = this.getItem(id);
        if (!item) {
            return;
        }
        if (self) {
            callback.call(this, item);
        }
        if (item.parent === this._root) {
            return;
        }
        var parent = this.getItem(item.parent);
        callback.call(this, parent);
        this.eachParent(item.parent, callback);
    };
    TreeCollection.prototype.haveItems = function (id) {
        return id in this._childs;
    };
    TreeCollection.prototype.canCopy = function (id, target) {
        if (id === target) {
            return false;
        }
        var canCopy = true;
        this.eachParent(target, function (item) { return (item.id === id ? (canCopy = false) : null); }); // locate return string
        return canCopy;
    };
    TreeCollection.prototype.serialize = function (driver, checkItem) {
        if (driver === void 0) { driver = types_1.DataDriver.json; }
        var data = this._serialize(this._root, checkItem);
        var dataDriver = (0, helpers_1.toDataDriver)(driver);
        if (dataDriver) {
            return dataDriver.serialize(data);
        }
    };
    TreeCollection.prototype.getId = function (index, parent) {
        if (parent === void 0) { parent = this._root; }
        if (!this._childs[parent] || !this._childs[parent][index]) {
            return;
        }
        return this._childs[parent][index].id;
    };
    // Non public API from suite_6.4
    TreeCollection.prototype.map = function (callback, parent, direct) {
        if (parent === void 0) { parent = this._root; }
        if (direct === void 0) { direct = true; }
        var result = [];
        if (!this.haveItems(parent)) {
            return result;
        }
        for (var i = 0; i < this._childs[parent].length; i++) {
            result.push(callback.call(this, this._childs[parent][i], i, this._childs));
            if (direct) {
                var childResult = this.map(callback, this._childs[parent][i].id, direct);
                result = result.concat(childResult);
            }
        }
        return result;
    };
    TreeCollection.prototype.getRawData = function (from, to, order, mode, parent) {
        parent = parent !== null && parent !== void 0 ? parent : this._root;
        var out;
        if (!this._childs[parent])
            return [];
        if (parent === this._root)
            out = _super.prototype.getRawData.call(this, from, to, this._childs[parent]);
        else
            out = this._childs[parent];
        if (mode === 2) {
            return this.flatten(out);
        }
        return out;
    };
    TreeCollection.prototype.flatten = function (input) {
        var _this = this;
        var out = [];
        input.forEach(function (a) {
            out.push(a);
            var kids = _this._childs[a.id];
            if (kids && a.$opened) {
                out = out.concat(_this.flatten(kids));
            }
        });
        return out;
    };
    TreeCollection.prototype._add = function (newItem, index, parent, key) {
        if (index === void 0) { index = -1; }
        if (parent === void 0) { parent = this._root; }
        this._setParent(newItem, parent);
        if (key > 0 && index !== -1) {
            index = index + 1;
        }
        var id = _super.prototype._add.call(this, newItem, index);
        if (Array.isArray(newItem.items)) {
            for (var _i = 0, _a = newItem.items; _i < _a.length; _i++) {
                var item = _a[_i];
                this.add(item, -1, newItem.id);
            }
        }
        return id;
    };
    TreeCollection.prototype._setParent = function (item, parent) {
        item.parent = item.parent ? item.parent.toString() : parent;
        var parentItem = this._pull[item.parent];
        if (parentItem && !parentItem.items) {
            parentItem.items = [];
        }
    };
    TreeCollection.prototype._copy = function (id, index, target, targetId, key) {
        if (target === void 0) { target = this; }
        if (targetId === void 0) { targetId = this._root; }
        if (!this.exists(id)) {
            return null;
        }
        var currentChilds = this._childs[id];
        if (key) {
            index = index === -1 ? -1 : index + key;
        }
        if (target === this && !this.canCopy(id, targetId)) {
            return null;
        }
        var itemCopy = (0, helpers_1.copyWithoutInner)(this.getItem(id), { items: true });
        if (target.exists(id)) {
            itemCopy.id = (0, core_1.uid)();
        }
        if (!(0, helpers_1.isTreeCollection)(target)) {
            target.add(itemCopy, index);
            return;
        }
        if (this.exists(id)) {
            itemCopy.parent = targetId;
            if (target !== this && targetId === this._root) {
                itemCopy.parent = target.getRoot();
            }
            target.add(itemCopy, index);
            id = itemCopy.id;
        }
        if (currentChilds) {
            for (var _i = 0, currentChilds_1 = currentChilds; _i < currentChilds_1.length; _i++) {
                var child = currentChilds_1[_i];
                var childId = child.id;
                var childIndex = this.getIndex(childId);
                this.copy(childId, childIndex, target, id);
            }
        }
        return id;
    };
    TreeCollection.prototype._move = function (id, index, target, targetId, key) {
        if (target === void 0) { target = this; }
        if (targetId === void 0) { targetId = this._root; }
        if (!this.exists(id)) {
            return null;
        }
        if (key && index < this.getIndex(id)) {
            index = index === -1 ? -1 : index + key;
        }
        if (target !== this) {
            if (!(0, helpers_1.isTreeCollection)(target)) {
                // move to datacollection
                target.add((0, helpers_1.copyWithoutInner)(this.getItem(id)), index);
                this.remove(id);
                return;
            }
            var returnId = this.copy(id, index, target, targetId);
            this.remove(id);
            return returnId;
        }
        // move inside
        if (!this.canCopy(id, targetId)) {
            return null;
        }
        this._moveItem(id, targetId, index);
        this.events.fire(types_1.DataEvents.change, [id, "update", this.getItem(id)]);
        return id;
    };
    TreeCollection.prototype._moveItem = function (id, targetId, index) {
        var parentId = this.getParent(id);
        var childs = this._initChilds || this._childs;
        [this._childs, this._initChilds].forEach(function (store) {
            if (!store || !store[parentId])
                return;
            var i = store[parentId].findIndex(function (item) { return item.id === id; });
            if (i === -1)
                return;
            var item = store[parentId].splice(i, 1)[0];
            item.parent = targetId;
            addToOrder(store, item, targetId, index);
            if (!store[parentId].length)
                delete store[parentId];
        });
        if (parentId !== this._root && parentId !== targetId) {
            var parent_1 = this.getItem(parentId);
            if (childs[parentId]) {
                parent_1.items = __spreadArray([], childs[parentId], true);
            }
            else {
                delete parent_1.items;
            }
        }
        if (targetId !== this._root) {
            var target = this.getItem(targetId);
            target.items = __spreadArray([], (childs[targetId] || []), true);
        }
    };
    TreeCollection.prototype._reset = function (config) {
        var _a;
        if ((0, core_1.isId)(config === null || config === void 0 ? void 0 : config.id)) {
            var childs = __spreadArray([], this._childs[config === null || config === void 0 ? void 0 : config.id], true);
            for (var _i = 0, childs_2 = childs; _i < childs_2.length; _i++) {
                var child = childs_2[_i];
                this.remove(child.id);
            }
        }
        else {
            _super.prototype._reset.call(this, config);
            var root = this._root;
            this._initChilds = null;
            this._childs = (_a = {}, _a[root] = [], _a);
        }
    };
    TreeCollection.prototype._removeCore = function (id) {
        if (this._pull[id]) {
            var parent_2 = this.getParent(id);
            this._childs[parent_2] = this._childs[parent_2].filter(function (item) { return item.id !== id; });
            if (parent_2 !== this._root && !this._childs[parent_2].length) {
                delete this._childs[parent_2];
            }
            if (this._initChilds && this._initChilds[parent_2]) {
                this._initChilds[parent_2] = this._initChilds[parent_2].filter(function (item) { return item.id !== id; });
                if (parent_2 !== this._root && !this._initChilds[parent_2].length) {
                    delete this._initChilds[parent_2];
                }
            }
            this._fastDeleteChilds(this._childs, id);
            if (this._initChilds) {
                this._fastDeleteChilds(this._initChilds, id);
            }
        }
    };
    TreeCollection.prototype._addToOrder = function (_order, obj, index) {
        var childs = this._childs;
        var initChilds = this._initChilds;
        var parent = obj.parent;
        this._pull[obj.id] = obj;
        if (obj.parent &&
            this._pull[obj.parent] &&
            this._pull[obj.parent].items &&
            !this._pull[obj.parent].items.find(function (item) { return item.id === obj.id; })) {
            this._pull[obj.parent].items.push(obj);
        }
        _super.prototype._addToOrder.call(this, _order, obj, index);
        addToOrder(childs, obj, parent, index);
        if (initChilds) {
            addToOrder(initChilds, obj, parent, index);
        }
    };
    TreeCollection.prototype._parse_data = function (data, parent) {
        var _a;
        if (parent === void 0) { parent = this._root; }
        for (var _i = 0, data_1 = data; _i < data_1.length; _i++) {
            var obj = data_1[_i];
            if (this.config.init) {
                obj = this.config.init(obj);
            }
            if (obj && typeof obj !== "object") {
                obj = {
                    value: obj,
                };
            }
            obj.id = (_a = obj.id) !== null && _a !== void 0 ? _a : (0, core_1.uid)();
            obj.parent =
                typeof obj.parent === "undefined" || obj.parent === null || (obj.parent && obj.$items)
                    ? parent
                    : obj.parent;
            if (this._pull[obj.id]) {
                (0, helpers_1.dhxError)("Item ".concat(obj.id, " already exist"));
            }
            this._parseItem(obj);
            if (obj.items && obj.items instanceof Object) {
                this._parse_data(obj.items, obj.id);
            }
        }
    };
    TreeCollection.prototype._parseItem = function (item) {
        this._pull[item.id] = item;
        this._order[this._order.length] = item;
        if (!this._childs[item.parent]) {
            this._childs[item.parent] = [];
        }
        this._childs[item.parent].push(item);
    };
    TreeCollection.prototype._fastDeleteChilds = function (target, id) {
        var _a, _b;
        if (this._pull[id]) {
            if ((_a = this._initFilterOrder) === null || _a === void 0 ? void 0 : _a.length) {
                this._initFilterOrder = this._initFilterOrder.filter(function (el) { return el.id !== id; });
            }
            if ((_b = this._initSortOrder) === null || _b === void 0 ? void 0 : _b.length) {
                this._initSortOrder = this._initSortOrder.filter(function (el) { return el.id !== id; });
            }
            this._order = this._order.filter(function (el) { return el.id !== id; });
            delete this._pull[id];
        }
        if (!target[id]) {
            return;
        }
        for (var i = 0; i < target[id].length; i++) {
            this._fastDeleteChilds(target, target[id][i].id);
        }
        delete target[id];
    };
    TreeCollection.prototype._recursiveFilter = function (rule, config, current, level, newChilds) {
        var _this = this;
        var childs = this._childs[current];
        if (!childs) {
            return;
        }
        var condition = function (item) {
            switch (config.type) {
                case types_1.TreeFilterType.all: {
                    return true;
                }
                case types_1.TreeFilterType.level: {
                    return level === config.level;
                }
                case types_1.TreeFilterType.leafs: {
                    return !_this.haveItems(item.id);
                }
            }
        };
        if (typeof rule === "function") {
            var customRule = function (item) { return condition(item) && rule(item); };
            var filtered = childs.filter(customRule);
            if (filtered.length) {
                newChilds[current] = filtered;
            }
            else if (current === this._root) {
                newChilds[current] = [];
            }
        }
        else {
            var customRule = function (item) {
                var _a;
                var responseOfRule = true;
                for (var compare in rule) {
                    if (rule[compare].by && rule[compare].match !== "") {
                        responseOfRule = rule[compare].compare
                            ? rule[compare].compare(item[rule[compare].by], rule[compare].match, item)
                            : ((_a = item[rule[compare].by]) === null || _a === void 0 ? void 0 : _a.toString().toLocaleLowerCase().indexOf(rule[compare].match.toString().toLowerCase())) !== -1;
                    }
                    if (!responseOfRule)
                        break;
                }
                return condition(item) && responseOfRule;
            };
            var filtered = childs.filter(customRule);
            if (filtered.length) {
                newChilds[current] = filtered;
            }
            else if (current === this._root) {
                newChilds[current] = [];
            }
        }
        for (var _i = 0, childs_3 = childs; _i < childs_3.length; _i++) {
            var child = childs_3[_i];
            this._recursiveFilter(rule, config, child.id, level + 1, newChilds);
        }
    };
    TreeCollection.prototype._serialize = function (parent, fn) {
        var _this = this;
        if (parent === void 0) { parent = this._root; }
        return this.map(function (item) {
            var itemCopy = {};
            for (var key in item) {
                if (key === "parent" || key === "items" || key.startsWith("$")) {
                    continue;
                }
                itemCopy[key] = item[key];
            }
            if (fn) {
                itemCopy = fn(itemCopy);
            }
            if (_this.haveItems(item.id)) {
                itemCopy.items = _this._serialize(item.id, fn);
            }
            return itemCopy;
        }, parent, false);
    };
    TreeCollection.prototype._applyFilter = function (rule, config) {
        var _this = this;
        if (!rule || (typeof rule !== "function" && (0, core_1.isEmptyObj)(rule)))
            return;
        if (!this._checkFilterRule(rule)) {
            throw new Error("Invalid filter rule");
        }
        if (!this._initFilterOrder) {
            this._initFilterOrder = this._order;
        }
        if (!this._initChilds) {
            this._initChilds = this._childs;
        }
        var filter;
        var newChilds = {};
        if (typeof rule !== "function") {
            filter = {};
            if ((0, core_1.isDefined)(rule.by)) {
                filter[rule.by] = rule;
            }
            else {
                for (var key in rule) {
                    filter[key] = rule[key];
                }
            }
        }
        else {
            filter = rule;
        }
        this._recursiveFilter(filter, config, this._root, 0, newChilds);
        Object.keys(newChilds).forEach(function (key) {
            var parentId = _this.getParent(key);
            var current = _this.getItem(key);
            while (parentId) {
                if (!newChilds[parentId]) {
                    newChilds[parentId] = [];
                }
                if (current && !newChilds[parentId].find(function (x) { return x.id === current.id; })) {
                    newChilds[parentId].push(current);
                }
                current = _this.getItem(parentId);
                parentId = _this.getParent(parentId);
            }
        });
        this._childs = newChilds;
    };
    TreeCollection.prototype._normalizeFilters = function (filters) {
        var rules = {};
        for (var key in filters) {
            rules[key] = filters[key].rule;
        }
        return rules;
    };
    TreeCollection.prototype._checkFilterRule = function (rule) {
        var _this = this;
        return (_super.prototype._checkFilterRule.call(this, rule) ||
            Object.values(rule).every(function (value) { return typeof value !== "function" && _super.prototype._checkFilterRule.call(_this, value); }));
    };
    TreeCollection.prototype._applySorters = function (by) {
        for (var key in this._childs) {
            this._sort.sort(this._childs[key], by, this._sorter);
        }
        if (this._initChilds && Object.keys(this._initChilds).length) {
            for (var key in this._initChilds) {
                this._sort.sort(this._initChilds[key], by, this._sorter);
            }
        }
    };
    return TreeCollection;
}(datacollection_1.DataCollection));
exports.TreeCollection = TreeCollection;


/***/ }),
/* 70 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
var __spreadArray = (this && this.__spreadArray) || function (to, from, pack) {
    if (pack || arguments.length === 2) for (var i = 0, l = from.length, ar; i < l; i++) {
        if (ar || !(i in from)) {
            if (!ar) ar = Array.prototype.slice.call(from, 0, i);
            ar[i] = from[i];
        }
    }
    return to.concat(ar || Array.prototype.slice.call(from));
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.dragManager = void 0;
var html_1 = __webpack_require__(1);
var CollectionStore_1 = __webpack_require__(71);
var types_1 = __webpack_require__(5);
var helpers_1 = __webpack_require__(3);
var core_1 = __webpack_require__(0);
function getVerticalPosition(e) {
    var y = e.targetTouches
        ? e.targetTouches[0].clientY
        : e.clientY;
    var element = (0, html_1.locateNode)((0, html_1.getElementFromPoint)(e));
    if (!element) {
        return null;
    }
    var treeLine = element.childNodes[0];
    if (treeLine) {
        var _a = treeLine.getBoundingClientRect(), top_1 = _a.top, height = _a.height;
        return (y - top_1) / height;
    }
}
function dragEventContent(element, elements, exhaustiveList) {
    if (exhaustiveList === void 0) { exhaustiveList = false; }
    var rect = element.getBoundingClientRect();
    var ghost = document.createElement("div");
    var clone = element.cloneNode(true);
    var fontSize = window.getComputedStyle(element.parentElement).fontSize;
    clone.style.width = rect.width + "px";
    clone.style.height = rect.height + "px";
    clone.style.maxHeight = rect.height + "px";
    clone.style.opacity = "0.8";
    clone.style.fontSize = fontSize;
    if (!exhaustiveList || !elements || !elements.length) {
        ghost.appendChild(clone);
    }
    if (elements && elements.length) {
        elements.forEach(function (node, key) {
            var nodeClone = node.cloneNode(true);
            if (!nodeClone.style.getPropertyPriority("width")) {
                nodeClone.style.width = rect.width + "px";
            }
            nodeClone.style.height = rect.height + "px";
            nodeClone.style.maxHeight = rect.height + "px";
            nodeClone.style.top = (key + 1) * 12 - rect.height - rect.height * key + "px";
            nodeClone.style.left = (key + 1) * 12 + "px";
            nodeClone.style.opacity = "0.6";
            nodeClone.style.zIndex = "".concat(-key - 1);
            if (!exhaustiveList) {
                nodeClone.style.fontSize = fontSize;
                nodeClone.style.overflow = "hidden";
            }
            ghost.appendChild(nodeClone);
        });
    }
    ghost.className = "dhx_drag-ghost";
    return ghost;
}
var isGrid = function (component) { var _a; return (_a = component.name) === null || _a === void 0 ? void 0 : _a.includes("grid"); };
var isProGrid = function (component) {
    return isGrid(component) && component.hasOwnProperty("scrollView");
};
var DragManager = /** @class */ (function () {
    function DragManager() {
        var _this = this;
        this._transferData = {};
        this._canMove = true;
        this._isDrag = false;
        this._lastOverItemId = null;
        this._onMouseMove = function (e) {
            if (!_this._transferData.start) {
                return;
            }
            var element = (0, html_1.getElementFromPoint)(e);
            var overAreaType = (0, html_1.locate)(element, "data-dhx-drop-area");
            var isCommonDropArea = overAreaType === "common";
            var pageX = e.targetTouches ? e.targetTouches[0].pageX : e.pageX;
            var pageY = e.targetTouches ? e.targetTouches[0].pageY : e.pageY;
            if (_this._transferData.type === "column" && overAreaType === "group") {
                _this._transferData.type = "group";
                _this._transferData.isWasColumn = true;
            }
            if (_this._transferData.type === "group" &&
                overAreaType === "column" &&
                _this._transferData.isWasColumn &&
                !_this._transferData.groupOnly) {
                _this._transferData.type = "column";
            }
            var targetId = (0, html_1.locate)(element);
            if (overAreaType === _this._transferData.type || isCommonDropArea) {
                var _a = _this._transferData, x = _a.x, y = _a.y, start = _a.start, componentId = _a.componentId;
                if (!_this._transferData.ghost) {
                    if (Math.abs(x - pageX) < 3 && Math.abs(y - pageY) < 3) {
                        return;
                    }
                    else {
                        var ghost = _this._onDragStart(start, componentId, e);
                        if (!ghost) {
                            _this._endDrop(e);
                            return;
                        }
                        else {
                            _this._transferData.ghost = ghost;
                            document.body.appendChild(_this._transferData.ghost);
                        }
                    }
                }
                var targetComponentId = (0, html_1.locate)(element, "data-dhx-widget-id");
                if ((overAreaType === "column" || overAreaType === "group") &&
                    targetComponentId === componentId) {
                    if (targetId !== _this._lastOverItemId) {
                        _this._lastOverItemId = targetId;
                        _this._onDrag(e);
                    }
                }
                else {
                    _this._onDrag(e);
                }
            }
            else if (_this._canMove) {
                _this.cancelCanDrop(e);
            }
            _this._notAllowedDropArea((overAreaType !== _this._transferData.type && !isCommonDropArea) ||
                (!_this._transferData.groupable && overAreaType === "group") ||
                (_this._transferData.groupOnly &&
                    overAreaType !== "group" &&
                    !isCommonDropArea &&
                    _this._transferData.start != targetId));
            _this._moveGhost(pageX, pageY);
        };
        this._onMouseUp = function (e) {
            if (!_this._transferData.x) {
                return;
            }
            if (_this._transferData.ghost) {
                _this._removeGhost();
                _this._onDrop(e);
            }
            else {
                _this._endDrop(e);
            }
            if (!e.targetTouches) {
                document.removeEventListener("mousemove", _this._onMouseMove);
                document.removeEventListener("mouseup", _this._onMouseUp);
            }
            else {
                document.removeEventListener("touchmove", _this._onMouseMove);
                document.removeEventListener("touchend", _this._onMouseUp);
            }
        };
    }
    DragManager.prototype.setItem = function (id, item) {
        CollectionStore_1.collectionStore.setItem(id, item);
    };
    DragManager.prototype.onMouseDown = function (_a) {
        var event = _a.event, itemsForGhost = _a.itemsForGhost, ghost = _a.ghost, source = _a.source, type = _a.type, groupable = _a.groupable, groupOnly = _a.groupOnly;
        // onmousedown only for target objects
        if (event.which !== 1 && !event.targetTouches) {
            return;
        }
        if (!event.targetTouches) {
            document.addEventListener("mousemove", this._onMouseMove);
            document.addEventListener("mouseup", this._onMouseUp);
        }
        else {
            document.addEventListener("touchmove", this._onMouseMove, false);
            document.addEventListener("touchend", this._onMouseUp, false);
        }
        var element = (0, html_1.getElementFromPoint)(event);
        var item = (0, html_1.locateNode)(element, "data-dhx-id");
        var id = item && item.getAttribute("data-dhx-id");
        var component = (0, html_1.locateNode)(element, "data-dhx-widget-id");
        var componentId = component === null || component === void 0 ? void 0 : component.getAttribute("data-dhx-widget-id");
        if (ghost)
            this._ghost = ghost;
        if (Array.isArray(source) && source.includes(id)) {
            this._transferData.source = __spreadArray([], source, true);
            this._itemsForGhost = itemsForGhost;
        }
        else {
            this._transferData.source = [id];
            this._itemsForGhost = null;
        }
        if (id && componentId) {
            var itemBox = (0, html_1.getBox)(item);
            var left = isGrid(CollectionStore_1.collectionStore.getItem(componentId)) ? (0, html_1.getBox)(component).left : itemBox.left;
            var pageX = event.targetTouches
                ? event.targetTouches[0].pageX
                : event.pageX;
            var pageY = event.targetTouches
                ? event.targetTouches[0].pageY
                : event.pageY;
            this._transferData.initXOffset = type === "row" ? pageX - left : 0;
            this._transferData.initYOffset = type === "row" ? pageY - itemBox.top : 0;
            this._transferData.x = pageX;
            this._transferData.y = pageY;
            this._transferData.componentId = componentId;
            this._transferData.start = id;
            this._transferData.item = item;
            this._transferData.type = type;
            this._transferData.groupable = groupable;
            this._transferData.groupOnly = groupOnly;
        }
    };
    DragManager.prototype.isDrag = function () {
        return this._isDrag;
    };
    DragManager.prototype.cancelCanDrop = function (event) {
        this._canMove = false;
        var _a = this._transferData, start = _a.start, source = _a.source, target = _a.target, dropComponentId = _a.dropComponentId, type = _a.type;
        var data = {
            start: start,
            source: source,
            target: target,
            dragItem: type,
        };
        var collection = CollectionStore_1.collectionStore.getItem(dropComponentId);
        if (collection && target) {
            collection.events.fire(types_1.DragEvents.cancelDrop, [data, event, this._transferData.type]);
        }
        this._transferData.dropComponentId = null;
        this._transferData.target = null;
    };
    DragManager.prototype._moveGhost = function (x, y) {
        if (this._transferData.ghost) {
            this._transferData.ghost.style.left = x - this._transferData.initXOffset + "px";
            this._transferData.ghost.style.top = y - this._transferData.initYOffset + "px";
        }
    };
    DragManager.prototype._removeGhost = function () {
        this._ghost = null;
        document.body.removeChild(this._transferData.ghost);
    };
    DragManager.prototype._onDrop = function (e) {
        if (!this._canMove) {
            this._endDrop(e);
            return;
        }
        var _a = this._transferData, start = _a.start, source = _a.source, target = _a.target, dropComponentId = _a.dropComponentId, dropPosition = _a.dropPosition;
        var data = { start: start, source: source, target: target, dropPosition: dropPosition };
        var component = CollectionStore_1.collectionStore.getItem(dropComponentId);
        var config = component && component.config;
        if (!component || config.dragMode === "source") {
            this._endDrop(e);
            return;
        }
        if (component.events.fire(types_1.DragEvents.beforeDrop, [data, e, this._transferData.type])) {
            var to = {
                id: target,
                component: component,
            };
            var from = {
                id: start,
                component: this._transferData.component,
                newId: null,
            };
            this._move(from, to);
            if (from.newId && from.component !== to.component)
                data.start = from.newId;
            to.component.events.fire(types_1.DragEvents.afterDrop, [data, e, this._transferData.type]);
        }
        this._endDrop(e);
    };
    DragManager.prototype._onDragStart = function (id, componentId, e) {
        var component = CollectionStore_1.collectionStore.getItem(componentId);
        var config = component.config;
        var _a = this._transferData, start = _a.start, source = _a.source, target = _a.target;
        var data = {
            start: start,
            source: source,
            target: target,
        };
        if (config.dragMode === "target" || component._pregroupData) {
            return null;
        }
        var ghost = this._transferData.type === "row"
            ? dragEventContent(this._transferData.item, this._itemsForGhost, isGrid(component))
            : this._ghost;
        var ans = component.events.fire(types_1.DragEvents.beforeDrag, [data, e, ghost, this._transferData.type]);
        if (!ans || !(0, core_1.isId)(id)) {
            return null;
        }
        component.events.fire(types_1.DragEvents.dragStart, [data, e, this._transferData.type]);
        this._isDrag = true;
        this._toggleTextSelection(true);
        this._transferData.component = component;
        this._transferData.dragConfig = config;
        return ghost;
    };
    DragManager.prototype._onDrag = function (e) {
        var element = (0, html_1.getElementFromPoint)(e);
        var collectionId = (0, html_1.locate)(element, "data-dhx-widget-id");
        var component = CollectionStore_1.collectionStore.getItem(collectionId);
        if (!component) {
            if (this._canMove) {
                this.cancelCanDrop(e);
            }
            return;
        }
        var isTreeHeaderOrFooter = !!(0, html_1.locateNodeByClassName)(element, "dhx_grid-header") ||
            !!(0, html_1.locateNodeByClassName)(element, "dhx_grid-footer");
        var gridConfig = component.config.columns
            ? component.config
            : undefined;
        var isColumnDrag = gridConfig && (gridConfig.dragItem === "both" || gridConfig.dragItem === "column");
        if (isTreeHeaderOrFooter && !isColumnDrag) {
            if (this._canMove) {
                this.cancelCanDrop(e);
            }
            return;
        }
        var id = (0, html_1.locate)(element, "data-dhx-id");
        var rootId = (0, html_1.locate)(element, "data-dhx-root-id");
        if (!id && !rootId) {
            this.cancelCanDrop(e);
            this._transferData.dropComponentId = collectionId;
            this._transferData.target = null;
            this._canDrop(e);
            return;
        }
        var _a = this._transferData, dropComponentId = _a.dropComponentId, start = _a.start, source = _a.source, target = _a.target, componentId = _a.componentId, dropPosition = _a.dropPosition;
        if (component.config.dropBehaviour === "complex") {
            var pos = getVerticalPosition(e);
            if (component.config.group) {
                if (pos <= 0.5) {
                    this._transferData.dropPosition = "top";
                }
                else {
                    this._transferData.dropPosition = "bottom";
                }
            }
            else {
                if (pos <= 0.25) {
                    this._transferData.dropPosition = "top";
                }
                else if (pos >= 0.75) {
                    this._transferData.dropPosition = "bottom";
                }
                else {
                    this._transferData.dropPosition = "in";
                }
            }
        }
        else if ((target === id || (!id && target === rootId)) && dropComponentId === collectionId) {
            return;
        }
        var from = {
            id: start,
            component: this._transferData.component,
        };
        if (component.config.dragMode === "source") {
            return;
        }
        from.component.events.fire(types_1.DragEvents.dragOut, [
            {
                start: start,
                source: source,
                target: target,
            },
            e,
            this._transferData.type,
        ]);
        if (collectionId !== componentId ||
            !(0, helpers_1.isTreeCollection)(from.component.data) ||
            ((0, helpers_1.isTreeCollection)(from.component.data) && from.component.data.canCopy(from.id, id))) {
            this.cancelCanDrop(e); // clear last
            var target_1 = (this._transferData.target = id || rootId);
            this._transferData.dropComponentId = collectionId;
            var canMove = from.component.events.fire(types_1.DragEvents.dragIn, [
                {
                    start: start,
                    source: source,
                    target: target_1,
                    dropPosition: dropPosition,
                },
                e,
                this._transferData.type,
            ]);
            if (canMove) {
                this._canDrop(e);
            }
        }
        else {
            this.cancelCanDrop(e);
        }
    };
    DragManager.prototype._move = function (from, to) {
        var grid = from.component;
        var nextGrid = to.component;
        var fromData = from.component.data;
        var toData = to.component.data;
        var index = 0;
        var componentId = to.id;
        var behaviour = (0, helpers_1.isTreeCollection)(toData) ? to.component.config.dropBehaviour : undefined;
        var gridConfig = from.component.config.columns
            ? from.component.config
            : undefined;
        var isColumnDrag = gridConfig &&
            (gridConfig.dragItem === "both" || gridConfig.dragItem === "column") &&
            gridConfig.columns.map(function (c) { return c.id; }).filter(function (id) { return id === from.id || id === to.id; }).length;
        if (isColumnDrag && from.component === to.component) {
            if (from.id === to.id)
                return;
            var currentCols = grid.config.columns.map(function (c) { return (__assign({}, c)); });
            var sourceIndex = currentCols.findIndex(function (c) { return c.id === from.id; });
            var componentIndex = currentCols.findIndex(function (c) { return c.id === to.id; });
            if (componentIndex === -1)
                return;
            currentCols.splice(componentIndex, 0, currentCols.splice(sourceIndex, 1)[0]);
            grid.setColumns(currentCols);
            grid.paint();
            return;
        }
        else if (isColumnDrag &&
            from.component &&
            isProGrid(from.component) &&
            to.component &&
            isProGrid(to.component)) {
            var currentCols = grid.config.columns.map(function (c) { return (__assign({}, c)); });
            var sourceIndex = currentCols.findIndex(function (c) { return c.id === from.id; });
            var nextGridCols = nextGrid.config.columns.map(function (c) { return (__assign({}, c)); });
            var nextGridLength = nextGrid.data.getLength();
            var componentIndex = nextGridCols.findIndex(function (c) { return c.id === to.id; });
            var currentColumnData_1 = [];
            var currentColumnId_1 = from.id;
            grid.data.forEach(function (item) {
                var _a;
                currentColumnData_1.push((_a = { id: item.id }, _a[currentColumnId_1] = item[from.id], _a));
            });
            if (nextGridLength) {
                grid.data.forEach(function (item, index) {
                    var nextGridItem = nextGrid.data.getItem(item.id);
                    if (nextGridItem) {
                        nextGrid.data.update(nextGridItem.id, __assign(__assign({}, nextGridItem), currentColumnData_1[index]));
                    }
                    else {
                        nextGrid.data.add(currentColumnData_1[index]);
                    }
                });
            }
            else {
                nextGrid.data.parse(currentColumnData_1);
            }
            var col = currentCols.splice(sourceIndex, 1)[0];
            nextGridCols.find(function (c) { return c.id === currentColumnId_1; }) || nextGridCols.splice(componentIndex, 0, col);
            nextGrid.setColumns(nextGridCols);
            nextGrid.paint();
            grid.setColumns(currentCols);
            grid.paint();
            return;
        }
        var isRootParent = to.id === nextGrid.config.rootParent;
        switch (behaviour) {
            case "child":
                break;
            case "sibling":
                componentId = toData.getParent(componentId);
                index = toData.getIndex(to.id) + 1;
                break;
            case "complex": {
                var dropPosition = this._transferData.dropPosition;
                if (isRootParent) {
                    componentId = to.id;
                    index = toData.getLength();
                }
                else {
                    var fromIndex = toData.getIndex(from.id);
                    if (dropPosition === "top") {
                        componentId = toData.getParent(componentId);
                        index =
                            toData.getIndex(to.id) -
                                (fromIndex === -1 || fromIndex > toData.getIndex(to.id) ? 0 : 1);
                    }
                    else if (dropPosition === "bottom") {
                        componentId = toData.getParent(componentId);
                        index =
                            toData.getIndex(to.id) +
                                (fromIndex === -1 || fromIndex > toData.getIndex(to.id) ? 1 : 0);
                    }
                }
                break;
            }
            default:
                // list move
                if (!(0, core_1.isId)(to.id)) {
                    index = -1;
                }
                else {
                    if (toData.getIndex(from.id) > -1)
                        from.newId = (0, core_1.uid)();
                    index = toData.getIndex(to.id);
                }
        }
        if (this._transferData.dragConfig.dragCopy) {
            if (this._transferData.source instanceof Array && this._transferData.source.length > 1) {
                this._transferData.source.map(function (selctedId) {
                    fromData.copy(selctedId, index, toData, componentId);
                    if (index > -1) {
                        index++;
                    }
                });
            }
            else {
                fromData.copy(from.id, index, toData, componentId);
            }
        }
        else {
            if (this._transferData.source instanceof Array && this._transferData.source.length > 1) {
                fromData.move(this._transferData.source, index, toData, componentId);
            }
            else {
                if (isGrid(nextGrid) && !nextGrid.config.columns.length) {
                    var gridItem = grid.data.getItem(from.id);
                    nextGrid.data.parse([__assign({}, gridItem)]);
                    nextGrid.setColumns(__spreadArray([], grid.config.columns, true));
                    nextGrid.paint();
                    grid.data.remove(from.id);
                    grid.paint();
                }
                else {
                    fromData.move(from.id, index, toData, componentId, from.newId);
                }
            }
        }
    };
    DragManager.prototype._endDrop = function (e) {
        this._toggleTextSelection(false);
        this._notAllowedDropArea(false);
        if (this._transferData.component) {
            var _a = this._transferData, start = _a.start, source = _a.source, target = _a.target;
            var data = { start: start, source: source, target: target };
            this._transferData.component.events.fire(types_1.DragEvents.afterDrag, [
                data,
                e,
                this._transferData.type,
            ]);
        }
        this.cancelCanDrop(e);
        this._canMove = true;
        this._isDrag = false;
        this._lastOverItemId = null;
        this._transferData = {};
        this._transferData.target = null;
        this._transferData.dropComponentId = null;
    };
    DragManager.prototype._canDrop = function (e) {
        this._canMove = true;
        var _a = this._transferData, start = _a.start, source = _a.source, target = _a.target, dropPosition = _a.dropPosition;
        var data = {
            start: start,
            source: source,
            target: target,
            dropPosition: dropPosition,
        };
        var component = CollectionStore_1.collectionStore.getItem(this._transferData.dropComponentId);
        if (component && this._transferData.target) {
            component.events.fire(types_1.DragEvents.canDrop, [data, e, this._transferData.type]);
        }
    };
    DragManager.prototype._toggleTextSelection = function (add) {
        if (add) {
            document.body.classList.add("dhx_no-select");
        }
        else {
            document.body.classList.remove("dhx_no-select");
        }
    };
    DragManager.prototype._notAllowedDropArea = function (notAllowed) {
        if (notAllowed) {
            if (!document.body.classList.contains("dhx_drop-area--not-allowed")) {
                document.body.classList.add("dhx_drop-area--not-allowed");
            }
        }
        else {
            document.body.classList.remove("dhx_drop-area--not-allowed");
        }
    };
    return DragManager;
}());
var dhx = (window.dhxHelpers = window.dhxHelpers || {});
dhx.dragManager = dhx.dragManager || new DragManager();
exports.dragManager = dhx.dragManager;


/***/ }),
/* 71 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.collectionStore = exports.CollectionStore = void 0;
var core_1 = __webpack_require__(0);
var CollectionStore = /** @class */ (function () {
    function CollectionStore() {
        this._store = {};
    }
    CollectionStore.prototype.setItem = function (id, target) {
        this._store[id] = target;
    };
    CollectionStore.prototype.getItem = function (id) {
        if (!(0, core_1.isId)(id) || !this._store[id]) {
            return null;
        }
        return this._store[id];
    };
    return CollectionStore;
}());
exports.CollectionStore = CollectionStore;
var dhx = (window.dhxHelpers = window.dhxHelpers || {});
dhx.collectionStore = dhx.collectionStore || new CollectionStore();
exports.collectionStore = dhx.collectionStore;


/***/ }),
/* 72 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(Promise) {
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
exports.LazyDataProxy = void 0;
var dataproxy_1 = __webpack_require__(8);
var core_1 = __webpack_require__(0);
var ajax_1 = __webpack_require__(13);
var LazyDataProxy = /** @class */ (function (_super) {
    __extends(LazyDataProxy, _super);
    function LazyDataProxy(url, config) {
        var _this = _super.call(this, url) || this;
        _this.config = (0, core_1.extend)({
            from: 0,
            limit: 50,
            delay: 50,
            prepare: 0,
        }, config);
        _this.updateUrl(url, { from: _this.config.from, limit: _this.config.limit });
        return _this;
    }
    LazyDataProxy.prototype.load = function () {
        var _this = this;
        return new Promise(function (resolve, reject) {
            if (!_this._timeout) {
                ajax_1.ajax.get(_this.url, { responseType: "text" })
                    .then(resolve)
                    .catch(reject);
                _this._cooling = true;
                _this._timeout = setTimeout(function () {
                    return;
                });
            }
            else {
                clearTimeout(_this._timeout);
                _this._timeout = setTimeout(function () {
                    ajax_1.ajax.get(_this.url, { responseType: "text" })
                        .then(resolve)
                        .catch(reject);
                    _this._cooling = true;
                }, _this.config.delay);
                if (_this._cooling) {
                    resolve(null);
                    _this._cooling = false;
                }
            }
        });
    };
    return LazyDataProxy;
}(dataproxy_1.DataProxy));
exports.LazyDataProxy = LazyDataProxy;

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(6)))

/***/ }),
/* 73 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.Selection = void 0;
var events_1 = __webpack_require__(4);
var types_1 = __webpack_require__(74);
var types_2 = __webpack_require__(5);
var core_1 = __webpack_require__(0);
var Selection = /** @class */ (function () {
    function Selection(config, data, events) {
        var _this = this;
        this.events = events || new events_1.EventSystem(this);
        this.config = config;
        this._data = data;
        this._selected = null;
        this._data.events.on(types_2.DataEvents.removeAll, function () {
            _this._selected = null;
        });
        this._data.events.on(types_2.DataEvents.change, function () {
            if ((0, core_1.isId)(_this._selected)) {
                var near = _this._data.getNearId(_this._selected);
                if (near !== _this._selected) {
                    _this._selected = null;
                    if (near) {
                        _this.add(near);
                    }
                }
            }
        });
    }
    Selection.prototype.getId = function () {
        return this._selected;
    };
    Selection.prototype.getItem = function () {
        if ((0, core_1.isId)(this._selected)) {
            return this._data.getItem(this._selected);
        }
        return null;
    };
    Selection.prototype.remove = function (id) {
        id = id !== null && id !== void 0 ? id : this._selected;
        if (!(0, core_1.isDefined)(id)) {
            return true;
        }
        if (this.events.fire(types_1.SelectionEvents.beforeUnSelect, [id])) {
            this._data.update(id, { $selected: false }, true);
            this._selected = null;
            this.events.fire(types_1.SelectionEvents.afterUnSelect, [id]);
            return true;
        }
        return false;
    };
    Selection.prototype.add = function (id) {
        if (this._selected === id || !!this.config.disabled || !this._data.exists(id)) {
            return;
        }
        this.remove();
        this._addSingle(id);
    };
    Selection.prototype.enable = function () {
        this.config.disabled = false;
    };
    Selection.prototype.disable = function () {
        this.remove();
        this.config.disabled = true;
    };
    Selection.prototype._addSingle = function (id) {
        if (this.events.fire(types_1.SelectionEvents.beforeSelect, [id])) {
            this._selected = id;
            this._data.update(id, { $selected: true }, true);
            this.events.fire(types_1.SelectionEvents.afterSelect, [id]);
        }
    };
    return Selection;
}());
exports.Selection = Selection;


/***/ }),
/* 74 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.SelectionEvents = void 0;
var SelectionEvents;
(function (SelectionEvents) {
    SelectionEvents["beforeUnSelect"] = "beforeunselect";
    SelectionEvents["afterUnSelect"] = "afterunselect";
    SelectionEvents["beforeSelect"] = "beforeselect";
    SelectionEvents["afterSelect"] = "afterselect";
})(SelectionEvents || (exports.SelectionEvents = SelectionEvents = {}));


/***/ })
/******/ ]);
});if (window.dhx_legacy) { 
					if (window.dhx){
						for (var key in dhx)
							if (key === 'i18n') {
								for (var lang in dhx[key])
									window.dhx_legacy[key][lang] = dhx[key][lang];
							} else {
								dhx_legacy[key] = dhx[key];
							}
					}
					window.dhx = dhx_legacy; delete window.dhx_legacy;
				}
//# sourceMappingURL=calendar.js.map