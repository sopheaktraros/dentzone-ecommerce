$(document).ready(function (){
    const permissionContainer = $('#permissions');
    const permissionDatatable = $('#permission-table');
    const permissionFilter = $('#sidebar-filter');
    const formNewPermission = $('#fm-create-permission');

    /*----Permission List---*/
    let t = permissionDatatable.DataTable({
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
            url: permissionDatatable.data('route'),
            data: function (d) {
                return $.extend({}, d, $.fn.formToObject(permissionFilter.find('form')));
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',className: 'text-center', width: "10px",searchable: false},
            {data: 'name', name: 'name',searchable: true},
            {data: 'slug', name: 'slug',searchable: true},
            {data: 'description', name: 'description',searchable: true},
            {data: 'roles', name: 'roles',searchable: true,className: 'text-center',width:"auto"},
            {data: 'status', name: 'status',className: 'text-center', searchable: false,width:"70px" },
            {data: 'action', name: 'action', className: 'text-center', searchable: false,width:"54px"},
        ],
        fnInitComplete: function () {
            const myCustomScrollbar = document.querySelector('#permission-table_wrapper .dataTables_scrollBody');
            const ps = new PerfectScrollbar(myCustomScrollbar);
        },
        drawCallback: function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-sm pagination-rounded"');
        },
        scrollX: true,
    });

    $('.dataTables_length').addClass('bs-select');

    permissionFilter.find('form').submit(function (e) {
        e.preventDefault();
        t.ajax.reload();
    });

    permissionContainer.on('click','.btn-close',function (){
        permissionContainer.find('#filter').trigger('click');
    });

    permissionContainer.on('click', '.btn-clear', function () {
        $('#form-permission-filter').trigger('reset');
        t.ajax.reload();
    });

    permissionContainer.on('click', '#form-permission-filter .btn-filter', function () {
        t.ajax.reload();
    });


    /*----Create permission--*/
    formNewPermission.validate({
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

    /*----Delete permission---*/
    permissionContainer.on('click','.btn-delete',function (){
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

    $('#roles').multipleSelect()
});



