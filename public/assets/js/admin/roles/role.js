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
/******/ 	return __webpack_require__(__webpack_require__.s = 13);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/admin/roles/role.js":
/*!*************************************************!*\
  !*** ./resources/assets/js/admin/roles/role.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).ready(function () {
  var roleTable = $('#roles-table').DataTable({
    processing: true,
    serverSide: true,
    'order': [[0, 'asc']],
    ajax: {
      url: roleUrl
    },
    columnDefs: [{
      'targets': [2],
      'orderable': false,
      'className': 'text-center',
      'width': '7%'
    }, {
      'targets': [1],
      'orderable': false
    }],
    columns: [{
      data: 'name',
      name: 'name'
    }, {
      data: function data(row) {
        var html = '<div>';

        if (row.permissions.length > 0) {
          $.each(row.permissions, function (i, v) {
            html += '<span class="bg-regent-opacity-3 font-size-3 p-1 mr-4 mb-2">' + v.display_name + '</span>';
          });
        } else {
          html += '<span class="bg-regent-opacity-3 font-size-3 p-1 mr-4 mb-2">N/A</span>';
        }

        html += '</div>';
        return html;
      },
      name: 'permissions.display_name'
    }, {
      data: function data(row) {
        if (row.is_default) {
          return '';
        }

        if (row.id == AuthUserRoleId) {
          return "<button title=\"Delete\" class=\"index__btn btn btn-ghost-danger btn-sm delete-btn\" data-id=\"".concat(row.id, "\"><i class=\"cui-trash action-icon\"></i></button>");
        }

        return "<a title=\"Edit\" class=\"index__btn btn btn-ghost-success btn-sm edit-btn\" href=\"".concat(roleUrl + '/' + row.id + '/edit', "\">\n                            <i class=\"cui-pencil action-icon\"></i></a>\n                            <button title=\"Delete\" class=\"index__btn btn btn-ghost-danger btn-sm delete-btn\" data-id=\"").concat(row.id, "\"><i class=\"cui-trash action-icon\"></i></button>\n                            ");
      },
      name: 'id'
    }]
  });
  var swalDelete = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-danger mr-2 btn-lg',
      cancelButton: 'btn btn-secondary btn-lg'
    },
    buttonsStyling: false
  }); // open delete confirmation model

  $(document).on('click', '.delete-btn', function (event) {
    var roleId = $(this).data('id');
    swalDelete.fire({
      title: 'Are you sure?',
      html: 'Are you sure want to delete this "Role" ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Delete'
    }).then(function (result) {
      if (result.value) {
        $.ajax({
          url: roleUrl + '/' + roleId,
          type: 'DELETE',
          dataType: 'json',
          success: function success(obj) {
            displayToastr('Success', 'success', 'Role deleted successfully.');

            if (obj.success) {
              if ($('#roles-table').DataTable().data().count() == 1) {
                $('#roles-table').DataTable().page('previous').draw('page');
              } else {
                $('#roles-table').DataTable().ajax.reload(null, false);
              }
            }
          },
          error: function error(data) {
            displayToastr('Error', 'error', data.responseJSON.message);
          }
        });
      }
    });
  });
});

/***/ }),

/***/ 13:
/*!*******************************************************!*\
  !*** multi ./resources/assets/js/admin/roles/role.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/supportChat/resources/assets/js/admin/roles/role.js */"./resources/assets/js/admin/roles/role.js");


/***/ })

/******/ });