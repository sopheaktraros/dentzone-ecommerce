$(document).ready(function (){
    const navigationContainer = $('#navigations');
    const navigationDatatable = $('#navigation-table');
    const navigationFilter = $('#sidebar-filter');
    const formNewNavigation = $('#fm-create-navigation');

    /*----navigation List---*/
    let t = navigationDatatable.DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        bSort: true,
        ordering:false,
        searching:true,
        paging: true,
        language: {
            processing:'<div id="preloader"><div id="loader"></div></div>',
            zeroRecords: "Sorry!, No record available to matching",
            infoEmpty: "Sorry!, No record available right now.",
            paginate:{
                previous:'<i class="far fa-angle-left">',
                next:'<i class="far fa-angle-right">'
            }
        },
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        ajax: {
            url: navigationDatatable.data('route'),
            data: function (d) {
                return $.extend({}, d, $.fn.formToObject(navigationFilter.find('form')));
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',className: 'text-center', width: "10px",searchable: false},
            {data: 'name', name: 'name',searchable: true},
            {data: 'slug', name: 'slug',searchable: true},
            {data: 'parent', name: 'parent',searchable: true,className: 'text-center'},
            {data: 'type', name: 'type',searchable: true,className: 'text-center'},
            {data: 'status', name: 'status',className: 'text-center', searchable: false,width:"70px" },
            {data: 'action', name: 'action', className: 'text-center', searchable: false,width:"54px"},
        ],
        fnInitComplete: function () {
            const myCustomScrollbar = document.querySelector('#navigation-table_wrapper .dataTables_scrollBody');
            const ps = new PerfectScrollbar(myCustomScrollbar);
        },
        drawCallback: function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-sm pagination-rounded"');
        },
        scrollX: true,
    });

    $('.dataTables_length').addClass('bs-select');

    navigationFilter.find('form').submit(function (e) {
        e.preventDefault();
        t.ajax.reload();
    });

    navigationContainer.on('click','.btn-close',function (){
        navigationContainer.find('#filter').trigger('click');
    });

    navigationContainer.on('click', '.btn-clear', function () {
        $('#form-navigation-filter').trigger('reset');
        t.ajax.reload();
    });

    navigationContainer.on('click', '#form-navigation-filter .btn-filter', function () {
        t.ajax.reload();
    });


    /*----Create navigation---*/
    formNewNavigation.validate({
        rules:{
            name:{
                required:true
            }
        },
        messages:{
            name:{
                required: 'The field name are required.'
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    /*----Delete navigation---*/
    navigationContainer.on('click','.btn-delete',function (){
        swal({
            title: "Are you sure?",
            text: "",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $(this).closest('.fm-delete').submit();
                }
            });
    });

});



