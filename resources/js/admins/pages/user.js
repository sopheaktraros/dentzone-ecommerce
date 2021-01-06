$(document).ready(function (){
    const userContainer = $('#users');
    const userDatatable = $('#user-table');
    const userFilter = $('#sidebar-filter');
    const formNewUser = $('#fm-create-user');

    /*----user List---*/
    let t = userDatatable.DataTable({
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
            url: userDatatable.data('route'),
            data: function (d) {
                return $.extend({}, d, $.fn.formToObject(userFilter.find('form')));
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',className: 'text-center', width: "10px",searchable: false},
            {data: 'name', name: 'name',searchable: true},
            {data: 'username', name: 'username',searchable: true},
            {data: 'email', name: 'email',searchable: false},
            {data: 'role', name: 'role',searchable: false},
            {data: 'create_by', name: 'create_by',searchable: false},
            {data: 'create_at', name: 'create_at',searchable: false},
            {data: 'status', name: 'status',className: 'text-center', searchable: false,width:"70px" },
            {data: 'action', name: 'action', className: 'text-center', searchable: false,width:"54px"},
        ],
        fnInitComplete: function () {
            const myCustomScrollbar = document.querySelector('#user-table_wrapper .dataTables_scrollBody');
            const ps = new PerfectScrollbar(myCustomScrollbar);
        },
        drawCallback: function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-sm pagination-rounded"');
        },
        scrollX: true,
    });

    $('.dataTables_length').addClass('bs-select');

    userFilter.find('form').submit(function (e) {
        e.preventDefault();
        t.ajax.reload();
    });

    userContainer.on('click','.btn-close',function (){
        userContainer.find('#filter').trigger('click');
    });

    userContainer.on('click', '.btn-clear', function () {
        $('#form-user-filter').trigger('reset');
        t.ajax.reload();
    });

    userContainer.on('click', '#form-user-filter .btn-filter', function () {
        t.ajax.reload();
    });


    /*----Create user---*/
    formNewUser.validate({
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

    /*----Delete user---*/
    userContainer.on('click','.btn-delete',function (){
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



