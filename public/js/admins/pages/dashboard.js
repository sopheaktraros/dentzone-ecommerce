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
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admins/pages/dashboard.js":
/*!************************************************!*\
  !*** ./resources/js/admins/pages/dashboard.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*========Dashboard=======*/\n$(document).ready(function () {\n  /*-------------ApexCharts - Charts Audiences Overview----------*/\n  function generateDayWiseTimeSeries(baseval, count, yrange) {\n    var i = 0;\n    var series = [];\n\n    while (i < count) {\n      var x = baseval;\n      var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;\n      series.push([x, y]);\n      baseval += 86400000;\n      i++;\n    }\n\n    return series;\n  }\n\n  var optionAudiences = {\n    series: [{\n      name: 'South',\n      data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {\n        min: 10,\n        max: 60\n      })\n    }, {\n      name: 'North',\n      data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {\n        min: 10,\n        max: 20\n      })\n    }, {\n      name: 'Central',\n      data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {\n        min: 10,\n        max: 15\n      })\n    }],\n    chart: {\n      type: 'area',\n      height: 350,\n      stacked: true,\n      events: {\n        selection: function selection(chart, e) {\n          console.log(new Date(e.xaxis.min));\n        }\n      }\n    },\n    colors: ['#008FFB', '#00E396', '#CED4DC'],\n    dataLabels: {\n      enabled: false\n    },\n    stroke: {\n      curve: 'smooth'\n    },\n    fill: {\n      type: 'gradient',\n      gradient: {\n        opacityFrom: 0.6,\n        opacityTo: 0.8\n      }\n    },\n    legend: {\n      position: 'top',\n      horizontalAlign: 'left'\n    },\n    xaxis: {\n      type: 'datetime'\n    }\n  };\n  new ApexCharts(document.querySelector(\"#chartArea-Audiences\"), optionAudiences).render();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL2Rhc2hib2FyZC5qcz9jNWY4Il0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiZ2VuZXJhdGVEYXlXaXNlVGltZVNlcmllcyIsImJhc2V2YWwiLCJjb3VudCIsInlyYW5nZSIsImkiLCJzZXJpZXMiLCJ4IiwieSIsIk1hdGgiLCJmbG9vciIsInJhbmRvbSIsIm1heCIsIm1pbiIsInB1c2giLCJvcHRpb25BdWRpZW5jZXMiLCJuYW1lIiwiZGF0YSIsIkRhdGUiLCJnZXRUaW1lIiwiY2hhcnQiLCJ0eXBlIiwiaGVpZ2h0Iiwic3RhY2tlZCIsImV2ZW50cyIsInNlbGVjdGlvbiIsImUiLCJjb25zb2xlIiwibG9nIiwieGF4aXMiLCJjb2xvcnMiLCJkYXRhTGFiZWxzIiwiZW5hYmxlZCIsInN0cm9rZSIsImN1cnZlIiwiZmlsbCIsImdyYWRpZW50Iiwib3BhY2l0eUZyb20iLCJvcGFjaXR5VG8iLCJsZWdlbmQiLCJwb3NpdGlvbiIsImhvcml6b250YWxBbGlnbiIsIkFwZXhDaGFydHMiLCJxdWVyeVNlbGVjdG9yIiwicmVuZGVyIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUVBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVk7QUFDMUI7QUFDQSxXQUFTQyx5QkFBVCxDQUFtQ0MsT0FBbkMsRUFBNENDLEtBQTVDLEVBQW1EQyxNQUFuRCxFQUEyRDtBQUN2RCxRQUFJQyxDQUFDLEdBQUcsQ0FBUjtBQUNBLFFBQU1DLE1BQU0sR0FBRyxFQUFmOztBQUNBLFdBQU9ELENBQUMsR0FBR0YsS0FBWCxFQUFrQjtBQUNkLFVBQU1JLENBQUMsR0FBR0wsT0FBVjtBQUNBLFVBQU1NLENBQUMsR0FDSEMsSUFBSSxDQUFDQyxLQUFMLENBQVdELElBQUksQ0FBQ0UsTUFBTCxNQUFpQlAsTUFBTSxDQUFDUSxHQUFQLEdBQWFSLE1BQU0sQ0FBQ1MsR0FBcEIsR0FBMEIsQ0FBM0MsQ0FBWCxJQUE0RFQsTUFBTSxDQUFDUyxHQUR2RTtBQUdBUCxZQUFNLENBQUNRLElBQVAsQ0FBWSxDQUFDUCxDQUFELEVBQUlDLENBQUosQ0FBWjtBQUNBTixhQUFPLElBQUksUUFBWDtBQUNBRyxPQUFDO0FBQ0o7O0FBQ0QsV0FBT0MsTUFBUDtBQUNIOztBQUVELE1BQU1TLGVBQWUsR0FBRztBQUNwQlQsVUFBTSxFQUFFLENBQ0o7QUFDSVUsVUFBSSxFQUFFLE9BRFY7QUFFSUMsVUFBSSxFQUFFaEIseUJBQXlCLENBQUMsSUFBSWlCLElBQUosQ0FBUyxpQkFBVCxFQUE0QkMsT0FBNUIsRUFBRCxFQUF3QyxFQUF4QyxFQUE0QztBQUN2RU4sV0FBRyxFQUFFLEVBRGtFO0FBRXZFRCxXQUFHLEVBQUU7QUFGa0UsT0FBNUM7QUFGbkMsS0FESSxFQVFKO0FBQ0lJLFVBQUksRUFBRSxPQURWO0FBRUlDLFVBQUksRUFBRWhCLHlCQUF5QixDQUFDLElBQUlpQixJQUFKLENBQVMsaUJBQVQsRUFBNEJDLE9BQTVCLEVBQUQsRUFBd0MsRUFBeEMsRUFBNEM7QUFDdkVOLFdBQUcsRUFBRSxFQURrRTtBQUV2RUQsV0FBRyxFQUFFO0FBRmtFLE9BQTVDO0FBRm5DLEtBUkksRUFlSjtBQUNJSSxVQUFJLEVBQUUsU0FEVjtBQUVJQyxVQUFJLEVBQUVoQix5QkFBeUIsQ0FBQyxJQUFJaUIsSUFBSixDQUFTLGlCQUFULEVBQTRCQyxPQUE1QixFQUFELEVBQXdDLEVBQXhDLEVBQTRDO0FBQ3ZFTixXQUFHLEVBQUUsRUFEa0U7QUFFdkVELFdBQUcsRUFBRTtBQUZrRSxPQUE1QztBQUZuQyxLQWZJLENBRFk7QUF3QnBCUSxTQUFLLEVBQUU7QUFDSEMsVUFBSSxFQUFFLE1BREg7QUFFSEMsWUFBTSxFQUFFLEdBRkw7QUFHSEMsYUFBTyxFQUFFLElBSE47QUFJSEMsWUFBTSxFQUFFO0FBQ0pDLGlCQUFTLEVBQUUsbUJBQVVMLEtBQVYsRUFBaUJNLENBQWpCLEVBQW9CO0FBQzNCQyxpQkFBTyxDQUFDQyxHQUFSLENBQVksSUFBSVYsSUFBSixDQUFTUSxDQUFDLENBQUNHLEtBQUYsQ0FBUWhCLEdBQWpCLENBQVo7QUFDSDtBQUhHO0FBSkwsS0F4QmE7QUFrQ3BCaUIsVUFBTSxFQUFFLENBQUMsU0FBRCxFQUFZLFNBQVosRUFBdUIsU0FBdkIsQ0FsQ1k7QUFtQ3BCQyxjQUFVLEVBQUU7QUFDUkMsYUFBTyxFQUFFO0FBREQsS0FuQ1E7QUFzQ3BCQyxVQUFNLEVBQUU7QUFDSkMsV0FBSyxFQUFFO0FBREgsS0F0Q1k7QUF5Q3BCQyxRQUFJLEVBQUU7QUFDRmQsVUFBSSxFQUFFLFVBREo7QUFFRmUsY0FBUSxFQUFFO0FBQ05DLG1CQUFXLEVBQUUsR0FEUDtBQUVOQyxpQkFBUyxFQUFFO0FBRkw7QUFGUixLQXpDYztBQWdEcEJDLFVBQU0sRUFBRTtBQUNKQyxjQUFRLEVBQUUsS0FETjtBQUVKQyxxQkFBZSxFQUFFO0FBRmIsS0FoRFk7QUFvRHBCWixTQUFLLEVBQUU7QUFDSFIsVUFBSSxFQUFFO0FBREg7QUFwRGEsR0FBeEI7QUF5REEsTUFBSXFCLFVBQUosQ0FBZTNDLFFBQVEsQ0FBQzRDLGFBQVQsQ0FBdUIsc0JBQXZCLENBQWYsRUFBOEQ1QixlQUE5RCxFQUErRTZCLE1BQS9FO0FBQ0gsQ0EzRUQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL2Rhc2hib2FyZC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qPT09PT09PT1EYXNoYm9hcmQ9PT09PT09Ki9cclxuXHJcbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuICAgIC8qLS0tLS0tLS0tLS0tLUFwZXhDaGFydHMgLSBDaGFydHMgQXVkaWVuY2VzIE92ZXJ2aWV3LS0tLS0tLS0tLSovXHJcbiAgICBmdW5jdGlvbiBnZW5lcmF0ZURheVdpc2VUaW1lU2VyaWVzKGJhc2V2YWwsIGNvdW50LCB5cmFuZ2UpIHtcclxuICAgICAgICBsZXQgaSA9IDA7XHJcbiAgICAgICAgY29uc3Qgc2VyaWVzID0gW107XHJcbiAgICAgICAgd2hpbGUgKGkgPCBjb3VudCkge1xyXG4gICAgICAgICAgICBjb25zdCB4ID0gYmFzZXZhbDtcclxuICAgICAgICAgICAgY29uc3QgeSA9XHJcbiAgICAgICAgICAgICAgICBNYXRoLmZsb29yKE1hdGgucmFuZG9tKCkgKiAoeXJhbmdlLm1heCAtIHlyYW5nZS5taW4gKyAxKSkgKyB5cmFuZ2UubWluO1xyXG5cclxuICAgICAgICAgICAgc2VyaWVzLnB1c2goW3gsIHldKTtcclxuICAgICAgICAgICAgYmFzZXZhbCArPSA4NjQwMDAwMDtcclxuICAgICAgICAgICAgaSsrO1xyXG4gICAgICAgIH1cclxuICAgICAgICByZXR1cm4gc2VyaWVzO1xyXG4gICAgfVxyXG5cclxuICAgIGNvbnN0IG9wdGlvbkF1ZGllbmNlcyA9IHtcclxuICAgICAgICBzZXJpZXM6IFtcclxuICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgbmFtZTogJ1NvdXRoJyxcclxuICAgICAgICAgICAgICAgIGRhdGE6IGdlbmVyYXRlRGF5V2lzZVRpbWVTZXJpZXMobmV3IERhdGUoJzExIEZlYiAyMDE3IEdNVCcpLmdldFRpbWUoKSwgMjAsIHtcclxuICAgICAgICAgICAgICAgICAgICBtaW46IDEwLFxyXG4gICAgICAgICAgICAgICAgICAgIG1heDogNjBcclxuICAgICAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgIG5hbWU6ICdOb3J0aCcsXHJcbiAgICAgICAgICAgICAgICBkYXRhOiBnZW5lcmF0ZURheVdpc2VUaW1lU2VyaWVzKG5ldyBEYXRlKCcxMSBGZWIgMjAxNyBHTVQnKS5nZXRUaW1lKCksIDIwLCB7XHJcbiAgICAgICAgICAgICAgICAgICAgbWluOiAxMCxcclxuICAgICAgICAgICAgICAgICAgICBtYXg6IDIwXHJcbiAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICBuYW1lOiAnQ2VudHJhbCcsXHJcbiAgICAgICAgICAgICAgICBkYXRhOiBnZW5lcmF0ZURheVdpc2VUaW1lU2VyaWVzKG5ldyBEYXRlKCcxMSBGZWIgMjAxNyBHTVQnKS5nZXRUaW1lKCksIDIwLCB7XHJcbiAgICAgICAgICAgICAgICAgICAgbWluOiAxMCxcclxuICAgICAgICAgICAgICAgICAgICBtYXg6IDE1XHJcbiAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgXSxcclxuICAgICAgICBjaGFydDoge1xyXG4gICAgICAgICAgICB0eXBlOiAnYXJlYScsXHJcbiAgICAgICAgICAgIGhlaWdodDogMzUwLFxyXG4gICAgICAgICAgICBzdGFja2VkOiB0cnVlLFxyXG4gICAgICAgICAgICBldmVudHM6IHtcclxuICAgICAgICAgICAgICAgIHNlbGVjdGlvbjogZnVuY3Rpb24gKGNoYXJ0LCBlKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2cobmV3IERhdGUoZS54YXhpcy5taW4pKVxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgY29sb3JzOiBbJyMwMDhGRkInLCAnIzAwRTM5NicsICcjQ0VENERDJ10sXHJcbiAgICAgICAgZGF0YUxhYmVsczoge1xyXG4gICAgICAgICAgICBlbmFibGVkOiBmYWxzZVxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgc3Ryb2tlOiB7XHJcbiAgICAgICAgICAgIGN1cnZlOiAnc21vb3RoJ1xyXG4gICAgICAgIH0sXHJcbiAgICAgICAgZmlsbDoge1xyXG4gICAgICAgICAgICB0eXBlOiAnZ3JhZGllbnQnLFxyXG4gICAgICAgICAgICBncmFkaWVudDoge1xyXG4gICAgICAgICAgICAgICAgb3BhY2l0eUZyb206IDAuNixcclxuICAgICAgICAgICAgICAgIG9wYWNpdHlUbzogMC44LFxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSxcclxuICAgICAgICBsZWdlbmQ6IHtcclxuICAgICAgICAgICAgcG9zaXRpb246ICd0b3AnLFxyXG4gICAgICAgICAgICBob3Jpem9udGFsQWxpZ246ICdsZWZ0J1xyXG4gICAgICAgIH0sXHJcbiAgICAgICAgeGF4aXM6IHtcclxuICAgICAgICAgICAgdHlwZTogJ2RhdGV0aW1lJ1xyXG4gICAgICAgIH0sXHJcbiAgICB9O1xyXG5cclxuICAgIG5ldyBBcGV4Q2hhcnRzKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjY2hhcnRBcmVhLUF1ZGllbmNlc1wiKSxvcHRpb25BdWRpZW5jZXMpLnJlbmRlcigpO1xyXG59KTtcclxuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/admins/pages/dashboard.js\n");

/***/ }),

/***/ 5:
/*!******************************************************!*\
  !*** multi ./resources/js/admins/pages/dashboard.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\wamp64\www\dentzone-ecommerce\resources\js\admins\pages\dashboard.js */"./resources/js/admins/pages/dashboard.js");


/***/ })

/******/ });