$(document).ready(function (){
    const shopContainer = $('#shops');
    const shopDatatable = $('#shop-table');
    const shopFilter = $('#sidebar-filter');
    const formNewShop= $('#fm-create-shop');

    /*----Role List---*/
    let t = shopDatatable.DataTable({
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
            url: shopDatatable.data('route'),
            data: function (d) {
                return $.extend({}, d, $.fn.formToObject(shopFilter.find('form')));
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',className: 'text-center', width: "10px",searchable: false},
            {data: 'name', name: 'name',searchable: true},
            {data: 'slug', name: 'slug',searchable: true},
            {data: 'description', name: 'description',searchable: true},
            {data: 'status', name: 'status',className: 'text-center', searchable: false,width:"70px" },
            {data: 'action', name: 'action', className: 'text-center', searchable: false,width:"54px"},
        ],
        fnInitComplete: function () {
            const myCustomScrollbar = document.querySelector('#shop-table_wrapper .dataTables_scrollBody');
            const ps = new PerfectScrollbar(myCustomScrollbar);
        },
        drawCallback: function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-sm pagination-rounded"');
        },
        scrollX: true,
    });

    $('.dataTables_length').addClass('bs-select');

    shopFilter.find('form').submit(function (e) {
        e.preventDefault();
        t.ajax.reload();
    });

    shopContainer.on('click','.btn-close',function (){
        shopContainer.find('#filter').trigger('click');
    });

    shopContainer.on('click', '.btn-clear', function () {
        $('#form-role-filter').trigger('reset');
        t.ajax.reload();
    });

    shopContainer.on('click', '#form-role-filter .btn-filter', function () {
        t.ajax.reload();
    });


    /*----Create Role---*/
    formNewShop.validate({
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

    /*----Delete Role---*/
    shopContainer.on('click','.btn-delete',function (){
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



