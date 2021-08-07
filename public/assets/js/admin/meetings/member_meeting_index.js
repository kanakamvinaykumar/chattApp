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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 11);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/admin/meetings/member_meeting_index.js":
/*!********************************************************************!*\
  !*** ./resources/assets/js/admin/meetings/member_meeting_index.js ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).ready(function () {
  var tbl = $('#memberMeetingTable').DataTable({
    processing: true,
    serverSide: true,
    'bStateSave': true,
    'order': [[0, 'asc']],
    ajax: {
      url: meetingsUrl,
      data: function data(_data) {
        _data.filter_user = $('#filter_user').find('option:selected').val();
      }
    },
    columnDefs: [{
      'targets': [1],
      'className': 'text-center',
      'width': '20%'
    }, {
      'targets': [2, 4, 3],
      'className': 'text-center',
      'width': '70px'
    }, {
      'targets': [5],
      'orderable': false,
      'className': 'text-center',
      'width': '100px'
    }],
    columns: [{
      data: 'topic',
      name: 'topic'
    }, {
      data: function data(row) {
        return moment(row.start_time, 'YYYY-MM-DD hh:mm:ss').format('Do MMM, YYYY hh:mm A');
      },
      name: 'id'
    }, {
      data: function data(row) {
        return "".concat(row.duration, " minutes");
      },
      name: 'duration'
    }, {
      data: 'status_text',
      name: 'status'
    }, {
      data: 'password',
      name: 'password'
    }, {
      data: function data(row) {
        var btn = "<a href=\"javascript:void(0)\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-video-camera\"></i> Finished</a>";

        if (row.status == 1) {
          btn = "<a href=\"".concat(row.meta.join_url, "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-video-camera\"></i> Join Meeting</a>");
        }

        return btn;
      },
      name: 'duration',
      'searchable': false
    }],
    drawCallback: function drawCallback() {
      this.api().state.clear();
    },
    'fnInitComplete': function fnInitComplete() {
      $('#filter_user').change(function () {
        tbl.ajax.reload();
      });
    }
  });
});

/***/ }),

/***/ 11:
/*!**************************************************************************!*\
  !*** multi ./resources/assets/js/admin/meetings/member_meeting_index.js ***!
  \**************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/supportChat/resources/assets/js/admin/meetings/member_meeting_index.js */"./resources/assets/js/admin/meetings/member_meeting_index.js");


/***/ })

/******/ });