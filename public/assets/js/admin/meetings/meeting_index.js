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
/******/ 	return __webpack_require__(__webpack_require__.s = 10);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/admin/meetings/meeting_index.js":
/*!*************************************************************!*\
  !*** ./resources/assets/js/admin/meetings/meeting_index.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _this = this;

$(document).ready(function () {
  var tbl = $('#meetingsTable').DataTable({
    processing: true,
    serverSide: true,
    'bStateSave': true,
    'order': [[1, 'desc']],
    ajax: {
      url: meetingsUrl
    },
    columnDefs: [{
      'targets': [1],
      'className': 'text-center',
      'width': '15%'
    }, {
      'targets': [2],
      'className': 'text-center',
      'width': '10%'
    }, {
      'targets': [3],
      'orderable': false,
      'width': '15%',
      'className': 'text-center'
    }, {
      'targets': [4],
      'orderable': false,
      'className': 'text-center',
      'width': '100px'
    }, {
      'targets': [5],
      'orderable': false,
      'className': 'text-center',
      'width': '150px'
    }],
    columns: [{
      data: 'topic',
      name: 'topic'
    }, {
      data: function data(row) {
        return moment(row.start_time, 'YYYY-MM-DD hh:mm:ss').format('Do MMM, YYYY hh:mm A');
      },
      name: 'start_time'
    }, {
      data: function data(row) {
        return "".concat(row.duration, " minutes");
      },
      name: 'duration'
    }, {
      data: function data(row) {
        return "<select class=\"statusDrp\" data-id=\"".concat(row.id, "\">") + "<option value=\"1\" ".concat(row.status == 1 ? 'selected' : '', ">Awaited</option><option value=\"2\" ").concat(row.status == 2 ? 'selected' : '', ">Finished</option>") + "</select>";
      },
      name: 'status'
    }, {
      data: 'password',
      name: 'password'
    }, {
      data: function data(row) {
        var startBtn = '<a href="' + row.meta.start_url + '" target="_blank" class="btn btn-primary btn-sm mr-1"><i class="fa fa-video-camera"></i> Start Meeting</a>';
        var editBtn = '<a title="Edit" class="index__btn btn btn-ghost-success btn-sm edit-btn" href="' + meetingsUrl + '/' + row.id + '/edit' + '">' + '<i class="cui-pencil action-icon"></i>' + '</a>';
        startBtn = row.status == 1 ? startBtn + editBtn : '';
        return startBtn + '<button title="Delete" class="index__btn btn btn-ghost-danger btn-sm delete-btn" data-id="' + row.id + '">' + '<i class="cui-trash action-icon"></i></button>';
      },
      name: 'id',
      'searchable': false
    }],
    drawCallback: function drawCallback() {
      this.api().state.clear();
      $('.statusDrp').select2({
        width: '100%',
        minimumResultsForSearch: -1,
        placeholder: "Select Members"
      });
    }
  });
  $(document).on('change', '.statusDrp', function () {
    var meetingId = $(this).data('id');
    console.log(meetingId);
    $.ajax({
      url: meetingsUrl + '/' + meetingId + '/change-status',
      type: 'GET',
      success: function success(obj) {
        if (obj.success) {
          tbl.ajax.reload();
        }
      },
      error: function error(data) {
        displayToastr('Error', 'error', data.responseJSON.message);
      }
    });
  });
});
var deleteBtn;
var swalDelete = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-danger mr-2 btn-lg',
    cancelButton: 'btn btn-secondary btn-lg'
  },
  buttonsStyling: false
});

function deleteItem(url, tableId, header) {
  var callFunction = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;
  swalDelete.fire({
    title: 'Are you sure?',
    html: 'Are you sure want to delete this "' + header + '" ?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Delete',
    input: 'text',
    inputPlaceholder: 'Write "delete" to delete this user',
    inputValidator: function inputValidator(value) {
      if (value !== "delete") {
        return 'You need to write "delete"';
      }
    }
  }).then(function (result) {
    if (result.value) {
      deleteBtn.addClass('invisible');
      deleteItemAjax(url, tableId, header, callFunction = null);
    }
  });
} // open delete confirmation model


$(document).on('click', '.delete-btn', function (event) {
  var meetingId = $(this).data('id');
  deleteBtn = $(this);
  deleteItem(meetingsUrl + '/' + meetingId, '#meetingsTable', 'Meeting');
});
setTimeout(function () {
  $('.alert').slideUp(function () {
    $(_this).addClass('d-none');
  });
}, 1500);

/***/ }),

/***/ 10:
/*!*******************************************************************!*\
  !*** multi ./resources/assets/js/admin/meetings/meeting_index.js ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/supportChat/resources/assets/js/admin/meetings/meeting_index.js */"./resources/assets/js/admin/meetings/meeting_index.js");


/***/ })

/******/ });