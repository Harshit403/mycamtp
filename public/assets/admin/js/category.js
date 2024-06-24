$(document).ready(function() {
    $("#addCategoryBtn").on('click', function() {
        var formdata = $("#category_form").serializeArray();
        $.ajax({
            url: baseUrl + 'admin/add-category',
            type: 'POST',
            data: formdata,
            dataType: 'JSON',
            success: function(response) {
                bootbox.alert({
                    message: response.message,
                    closeButton: false,
                    callback: function() {
                        if (response.success) {
                            window.location.reload();
                        }
                    }
                });
            }
        })
    });

    if (pageType == 'category_list') {
        loadCategoryTable();
    }

    function loadCategoryTable() {
        $("#category_table").DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, 100],
                [10, 25, 50, 100],
            ],
            "responsive": true,
            "language": {
                "search": "_INPUT_",
                "searchPlaceholder": "search_records",
            },
            "iDisplayLength": 10,
            "order": [
                [0, "asc"],
            ],
            "scrollX": true,
            "autoWidth": false,
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "serverMethod": 'POST',
            "ajax": {
                "url": baseUrl + 'admin/fetch-category-list',
            },
            "columnDefs": [{
                targets: '_all',
                orderable: false,
            }],
            drawCallback: function(settings, json) {
                $(".flexSwitchCheckChecked").on('change', function() {
                    var is_checked = $(this).is(":checked");
                    var category_id = $(this).data("category-id");
                    changeStatusUpdate(is_checked, category_id);
                });

                $(".deleteButton").on('click', function() {
                    var category_id = $(this).data('category-id');
                    deleteCategory(category_id);
                })
            }
        });
    }

    function changeStatusUpdate(is_checked, category_id) {
        var active_status = is_checked ? 1 : 0;
        bootbox.dialog({
            message: 'Are you sure, you want to change the status ?',
            closeButton: false,
            buttons: {
                cancel: {
                    label: ' Cancel',
                    className: 'btn btn-secondary',
                    callback: function() {
                        loadCategoryTable();
                    }
                },
                yes: {
                    label: ' Yes',
                    className: 'btn btn-success',
                    callback: function() {
                        $.ajax({
                            url: baseUrl + '/admin/category-status',
                            type: 'POST',
                            data: {
                                active: active_status,
                                category_id: category_id,
                            },
                            dataType: 'json',
                            success: function(response) {
                                bootbox.alert({
                                    message: response.message,
                                    closeButton: false,
                                    callback: function() {
                                        loadCategoryTable();
                                    }
                                })
                            }
                        });
                    }
                }
            }
        });
    }

    function deleteCategory(category_id) {
        bootbox.dialog({
            message: 'Are you sure, you want to delete category items ?',
            closeButton: false,
            buttons: {
                cancel: {
                    label: ' No',
                    className: 'btn btn-secondary',
                },
                yes: {
                    label: ' Yes',
                    className: 'btn btn-success',
                    callback: function() {
                        $.ajax({
                            url: baseUrl + '/admin/delete-category',
                            type: 'POST',
                            data: {
                                category_id: category_id
                            },
                            dataType: 'json',
                            success: function(response) {
                                bootbox.alert({
                                    message: response.message,
                                    closeButton: false,
                                    callback: function() {
                                        if (response.success) {
                                            loadCategoryTable();
                                        }
                                    }
                                })
                            }
                        })
                    }
                }
            }
        })
    }
})