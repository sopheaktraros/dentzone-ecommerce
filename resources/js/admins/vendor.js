/*
* The Vendor Script using to admin dashboard and add all plugin on this script files.
* */

/*===============Plugin=============*/
import jquery from 'jquery/dist/jquery';
import 'jquery-validation';
import 'jquery-form-validation';
import ApexCharts from 'apexcharts';
import Chart from 'chart.js';
import dt from 'datatables.net-bs4';
import buttons from 'datatables.net-buttons';
import CKEDITOR from 'ckeditor4/ckeditor';
import select2 from 'select2'
import toastr from "toastr";
import swal from 'sweetalert';
import PerfectScrollbar from 'perfect-scrollbar';
import Scrollbar from 'smooth-scrollbar';
import 'multiple-select/dist/multiple-select';

window.$ = window.jQuery = jquery;
window.dt = dt;
window.buttons = buttons;
window.ApexCharts = ApexCharts;
window.Chart = Chart;
window.CKEDITOR = CKEDITOR;
window.PerfectScrollbar = PerfectScrollbar;
window.Scrollbar = Scrollbar;
window.select2 = select2;
window.toastr=toastr;
window.swal =swal;

require ('bootstrap/js/dist/tooltip');
require ('jquery-ui');
require( 'datatables.net-autofill-bs4' );
require( 'datatables.net-buttons/js/buttons.colVis.js' );
require( 'datatables.net-buttons/js/buttons.flash.js' );
require( 'datatables.net-buttons/js/buttons.html5.js' );
require( 'datatables.net-buttons/js/buttons.print.js' );
require( 'datatables.net-colreorder-bs4' );
require( 'datatables.net-fixedcolumns-bs4' );
require( 'datatables.net-fixedheader-bs4' );
require( 'datatables.net-keytable-bs4' );
require( 'datatables.net-responsive-bs4' );
require( 'datatables.net-rowgroup-bs4' );
require( 'datatables.net-rowreorder-bs4' );
require( 'datatables.net-scroller-bs4' );
require( 'datatables.net-searchpanes-bs4' );
require( 'datatables.net-select-bs4' );


//Setup Ajax Request and Respond
$.ajaxSetup( {
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
} );

$.fn.PerfectScrollbar = function (options) {

    return this.each((k, elm) => new PerfectScrollbar(elm, options || {}));
};

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
})

/* initializate the tooltips after ajax requests, if not already done */
$( document ).ajaxComplete(function( event, request, settings ) {
    $('[data-toggle="tooltip"]').not( '[data-original-title]' ).tooltip();
})







