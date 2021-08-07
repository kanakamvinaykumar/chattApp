$(document).ready(function () {
    let roleTable = $('#roles-table').DataTable({
        processing: true,
        serverSide: true,
        'order': [[0, 'asc']],
        ajax: {
            url: roleUrl,
        },
        columnDefs: [
            {
                'targets': [2],
                'orderable': false,
                'className': 'text-center',
                'width': '7%',
            },
            {
                'targets': [1],
                'orderable': false,
            },
        ],
        columns: [
            {
                data: 'name',
                name: 'name',
            },
            {
                data:function (row){
                    let html = '<div>';
                    if (row.permissions.length > 0) {
                        $.each(row.permissions, function (i, v){
                            html += '<span class="bg-regent-opacity-3 font-size-3 p-1 mr-4 mb-2">'+ v.display_name +'</span>';
                        });
                    }else {
                        html += '<span class="bg-regent-opacity-3 font-size-3 p-1 mr-4 mb-2">N/A</span>';
                    }
                    html += '</div>';

                    return html;
                },
                name: 'permissions.display_name',
            },
            {
                data: function (row) {
                    if (row.is_default) {
                        return '';
                    }
                    if(row.id == AuthUserRoleId){
                        return `<button title="Delete" class="index__btn btn btn-ghost-danger btn-sm delete-btn" data-id="${row.id}"><i class="cui-trash action-icon"></i></button>`;
                    }
                    return `<a title="Edit" class="index__btn btn btn-ghost-success btn-sm edit-btn" href="${roleUrl + '/' + row.id + '/edit'}">
                            <i class="cui-pencil action-icon"></i></a>
                            <button title="Delete" class="index__btn btn btn-ghost-danger btn-sm delete-btn" data-id="${row.id}"><i class="cui-trash action-icon"></i></button>
                            `;
                }, name: 'id',
            },
        ],
    });

    const swalDelete = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-danger mr-2 btn-lg',
            cancelButton: 'btn btn-secondary btn-lg',
        },
        buttonsStyling: false,
    });

// open delete confirmation model
    $(document).on('click', '.delete-btn', function (event) {
        let roleId = $(this).data('id');
        swalDelete.fire({
            title: 'Are you sure?',
            html: 'Are you sure want to delete this "Role" ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Delete',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: roleUrl + '/'+roleId,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function (obj) {
                        displayToastr(
                            'Success', 'success', 'Role deleted successfully.',
                        );
                        if (obj.success) {
                            if ($('#roles-table').DataTable().data().count() == 1) {
                                $('#roles-table').DataTable().page('previous').draw('page');
                            } else {
                                $('#roles-table').DataTable().ajax.reload(null, false);
                            }
                        }
                    },
                    error: function (data) {
                        displayToastr('Error', 'error',
                            data.responseJSON.message);
                    },
                });
            }
        });
    });
});
