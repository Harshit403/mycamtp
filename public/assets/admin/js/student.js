$(document).ready(function() {
    if (pageType == 'student_list') {
        loadStudentList();
    }

    function loadStudentList() {
        $("#studentListTable").DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, 100],
                [10, 25, 50, 100],
            ],
            "language": {
                "search": "_INPUT_",
                "searchPlaceholder": "search_records",
            },
            "iDisplayLength": 10,
            "order": [
                [7, "desc"],
            ],
            'responsive': true,
            'scrollX': true,
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "serverMethod": 'POST',
            "columnDefs": [{
                targets: [6],
                orderable: false,
                className: 'text-center',
            }],
            "ajax": {
                "url": baseUrl + 'admin/fetch-student-list',
            },
            drawCallback: function(settings, json) {
                $(".flexSwitchCheckChecked").on('change', function() {
                    var student_id = $(this).data('student-id');
                    var blocked = $(this).is(':checked');
                    blocked = blocked == true ? 1 : 0;
                    $.ajax({
                        url: baseUrl + 'admin/change-block-status',
                        type: 'POST',
                        data: {
                            student_id: student_id,
                            blocked: blocked,
                        },
                        dataType: 'json',
                        success: function(response) {
                            bootbox.alert({
                                message: response.message,
                                closeButton: false,
                                callback: function() {
                                    if (response.success) {
                                        loadStudentList();
                                    }
                                }
                            })
                        }
                    })
                });

                $(".studentSubjectAccess").on('click', function() {
                    var student_id = $(this).data('student-id');
                    // fetchSubjectStatus(student_id);
                    fetchStudentInfo(student_id);
                });
            }
        });
    }

    function fetchStudentInfo(student_id) {
        var html = '<div class="d-flex align-items-start">' +
            '<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">' +
            '<button class="nav-link active" id="v-pills-purchase-history-tab" data-bs-toggle="pill" data-bs-target="#v-pills-purchase-history" type="button" role="tab" aria-controls="v-pills-purchase-history" aria-selected="true">Purchase History</button>' +
            '<button class="nav-link" id="v-pills-active-course-tab" data-bs-toggle="pill" data-bs-target="#v-pills-active-course" type="button" role="tab" aria-controls="v-pills-active-course" aria-selected="false">Active Course</button>' +
            '<button class="nav-link" id="v-pills-deactive-course-tab" data-bs-toggle="pill" data-bs-target="#v-pills-deactive-course" type="button" role="tab" aria-controls="v-pills-deactive-course" aria-selected="false">Block Course</button>' +
            '<button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Payment Mode</button>' +
            '</div>' +
            '<div class="tab-content w-100" id="v-pills-tabContent">' +
            '<div class="tab-pane fade show active w-100" id="v-pills-purchase-history" role="tabpanel" aria-labelledby="v-pills-purchase-history-tab">purchase_history</div>' +
            '<div class="tab-pane fade" id="v-pills-active-course" role="tabpanel" aria-labelledby="v-pills-active-course-tab">active_course</div>' +
            '<div class="tab-pane fade" id="v-pills-deactive-course" role="tabpanel" aria-labelledby="v-pills-deactive-course-tab">Block Course</div>' +
            '<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Payment Mode</div>' +
            '</div>';
        let dialog = bootbox.dialog({
            message: html,
            closeButton: false,
            size: 'large',
            buttons: {
                cancel: {
                    label: 'Cancel',
                    className: 'btn btn-sm btn-secondary',
                    callback: function() {

                    }
                }
            }
        });
        dialog.init(function() {
            fetchPurchaseHistory(student_id, dialog);
            $("#v-pills-purchase-history-tab").on('click', function() {
                fetchPurchaseHistory(student_id, dialog);
            });
            $("#v-pills-active-course-tab").on('click', function() {
                fetchActiveCourse(student_id, dialog);
            });
            $("#v-pills-deactive-course-tab").on('click', function() {
                fetchDeactiveCourse(student_id, dialog);
            });
        });

    }

    function fetchPurchaseHistory(student_id, dialog) {
        $.ajax({
            url: baseUrl + 'admin/fetch-purchase-history',
            type: 'POST',
            data: {
                student_id: student_id
            },
            dataType: 'json',
            success: function(res) {
                var html = '<div style="max-height:400px;overflow: auto;">';
                if (res != '') {
                    $.each(res, function(i, v) {
                        var purchaseStatusColor = 'text-danger';
                        if (v.payment_status == 'Pending') {
                            purchaseStatusColor = 'text-warning';
                        } else if (v.payment_status == 'PAID') {
                            purchaseStatusColor = 'text-success';
                        }
                        html += '<div class="row m-2">' +
                            '<div class="col-md-12">' +
                            '<div class="card p-3">' +
                            '<div class="row">' +
                            '<div class="col-md-6">' + v.order_id + '</div>' +
                            '<div class="col-md-6 d-flex justify-content-end">' + v.total_payment_amount + '</div>' +
                            '</div>' +
                            '<div class="row">' +
                            '<div class="col-md-12 d-flex justify-content-end ' + purchaseStatusColor + '">' + v.payment_status + '</div>' +
                            '<div class="col-md-12  d-flex justify-content-end"> <b>Purchase Date:</b> ' + v.create_date + '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    });
                } else {
                    html += 'No purchase history available';
                }

                html += '</div>';
                $(dialog).find('#v-pills-purchase-history').html(html);
            }
        });
    }

    function fetchActiveCourse(student_id, dialog) {
        $.ajax({
            url: baseUrl + 'admin/fetch-active-course',
            type: 'POST',
            data: {
                student_id: student_id
            },
            dataType: 'json',
            success: function(res) {
                var html = '<div style="max-height:400px;overflow: auto;">';
                if (res.success != '') {
                    $.each(res.info, function(i, v) {
                        html += '<div class="row m-2">' +
                            '<div class="col-md-12">' +
                            '<div class="card p-3">' +
                            '<div class="row">' +
                            '<div class="col-md-6"><b>Subject Name: </b>' + v.subject_name + '</div>' +
                            '<div class="col-md-6 d-flex justify-content-end"><b>Purchase Date: </b>' + v.date_of_purchase + '</div>' +
                            '<div class="col-md-12"><b>Type Name: </b>' + v.type_name + '</div>' +
                            '<div class="col-md-12"><b>Level Name: </b>' + v.level_name + '</div>' +
                            '<div class="col-md-6"><b>Category Name: </b>' + v.category_name + '</div>' +
                            '<div class="col-md-6 d-flex justify-content-end">' +
                            '<div class="form-check form-switch">' +
                            '<input class="form-check-input deactivePurchaseItem" type="checkbox" role="switch"  data-cart-items-id="' + v.cart_items_id + '">' +
                            '<label class="form-check-label" for="deactivePurchaseItem">Deactive</label>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    });
                } else {
                    html += 'No active course available';
                }
                html += '</div>';
                $(dialog).find('#v-pills-active-course').html(html);
                $(dialog).find(".deactivePurchaseItem").on('change', function() {
                    var cart_items_id = $(this).data('cart-items-id');
                    var is_checked = 0;
                    updateCartItemsStatus(cart_items_id, 0, student_id, dialog, 'active');
                })
            }
        });
    }

    function fetchDeactiveCourse(student_id, dialog) {
        $.ajax({
            url: baseUrl + 'admin/fetch-de-active-course',
            type: 'POST',
            data: {
                student_id: student_id
            },
            dataType: 'json',
            success: function(res) {
                var html = '<div style="max-height:400px;overflow: auto;">';
                if (res.success != '') {
                    $.each(res.info, function(i, v) {
                        html += '<div class="row m-2">' +
                            '<div class="col-md-12">' +
                            '<div class="card p-3">' +
                            '<div class="row">' +
                            '<div class="col-md-6"><b>Subject Name: </b>' + v.subject_name + '</div>' +
                            '<div class="col-md-6 d-flex justify-content-end"><b>Purchase Date: </b>' + v.date_of_purchase + '</div>' +
                            '<div class="col-md-12"><b>Type Name: </b>' + v.type_name + '</div>' +
                            '<div class="col-md-12"><b>Level Name: </b>' + v.level_name + '</div>' +
                            '<div class="col-md-6"><b>Category Name: </b>' + v.category_name + '</div>' +
                            '<div class="col-md-6 d-flex justify-content-end">' +
                            '<div class="form-check form-switch">' +
                            '<input class="form-check-input deactivePurchaseItem" type="checkbox" role="switch"  data-cart-items-id="' + v.cart_items_id + '">' +
                            '<label class="form-check-label" for="deactivePurchaseItem">Active</label>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    });
                } else {
                    html += 'No active course available';
                }
                html += '</div>';
                $(dialog).find('#v-pills-deactive-course').html(html);
                $(dialog).find(".deactivePurchaseItem").on('change', function() {
                    var cart_items_id = $(this).data('cart-items-id');
                    var is_checked = 1;
                    updateCartItemsStatus(cart_items_id, is_checked, student_id, dialog, 'deactive');
                })
            }
        });
    }

    function updateCartItemsStatus(cart_items_id, is_checked, student_id, dialog, functionType) {
        $.ajax({
            url: baseUrl + 'admin/update-cart-items-status',
            type: 'POST',
            data: {
                cart_items_id: cart_items_id,
                active: is_checked,
            },
            dataType: 'json',
            success: function(res) {
                if (res.success) {
                    bootbox.alert({
                        message: 'Status change successfully',
                        closeButton: false,
                        callback: function() {
                            if (functionType == 'active') {
                                fetchActiveCourse(student_id, dialog);
                            } else {
                                fetchDeactiveCourse(student_id, dialog);
                            }
                        }
                    })
                }
            }
        })
    }

    function fetchSubjectStatus(student_id) {
        $.ajax({
            url: baseUrl + 'admin/subject-list',
            type: 'POST',
            data: {
                student_id: student_id,
            },
            dataType: 'json',
            success: function(response) {
                if (response.length > 0) {
                    $.each(response, function(i, v) {
                        if (v.active == '1') {
                            var check = 'checked';
                        } else {
                            var check = '';
                        }
                        html += '<div class="row border border-1 mb-2">' +
                            '<div class="col-md-8">' +
                            '<div><b>Level : </b>' + v.level_name + '</div>' +
                            '<div><b>Type : </b>' + v.type_name + '</div>' +
                            '<div><b>Subject : </b>' + v.subject_name + '</div>' +
                            '<div><b> Date of Purchase : </b>' + v.purchase_date + '</div>' +
                            '<div><b>Payment Mode : </b>' + v.payment_mode + '</div>' +
                            '<div><b>Amount Paid : </b>' + v.total_payment_amount + '</div>' +
                            '<div><b>Promocode Used : </b>' + v.promo_code_name + '</div>' +
                            '</div>' +
                            '<div class="col-md-4 text-right d-flex align-items-center justify-content-end">' +
                            '<div class="form-group">' +
                            '<div class="custom-control custom-switch">' +
                            '<input type="checkbox" class="custom-control-input activeToggleClass" id="activeBtn' + v.cart_items_id + '" ' + check + ' data-cart-items-id="' + v.cart_items_id + '">' +
                            '<label class="custom-control-label" for="activeBtn' + v.cart_items_id + '"></label>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';

                    });
                }
            }
        });
    }

    $("#exportStudentDetails").on('click', function() {
        var searchData = $('.dataTables_filter input').val();
        var url = baseUrl + '/admin/student-export?Search=' + searchData;
        window.open(url, '_blank');
    })
})