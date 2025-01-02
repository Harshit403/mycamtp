$(document).ready(function() {
    levelUpdate();
    $("#category_id").on('change', function() {
        levelUpdate();
    });

    function levelUpdate() {
        var category_id = $("#category_id").val();
        $.ajax({
            url: baseUrl + '/fetch-level-list',
            type: 'POST',
            data: {
                category_id: category_id,
            },
            dataType: 'json',
            success: function(res) {
                var html = '';
                if (res.data != '') {
                    $.each(res.data, function(i, v) {
                        html += '<option value="' + v.level_id + '">' + v.level_name + '</option>';
                    });
                }
                $("#current_level").html(html);
            }
        });
    }

    $(".udpateStudentProfile").on('click', function() {
        var formInfo = $("#studentProfileForm").serializeArray();
        var formdata = new FormData();
        $.each(formInfo, function(i, v) {
            formdata.append(v.name, v.value);
        });
        var error = new Array;
        if (formdata.get('student_name') == '') {
            error.push('Please enter the name');
        }
        if (formdata.get('mobile_no') == '') {
            error.push('Please enter the mobile no');
        }
        if (formdata.get('city_name') == '') {
            error.push('Please enter the city name');
        }
        if (formdata.get('state_name') == '') {
            error.push('Please enter the state name');
        }
        if (formdata.get('category_id') == '') {
            error.push('Please select the category');
        }
        if (error.length > 0) {
            boobox.alert({
                message: error.join('</br>'),
            });
            return false;
        }
        $.ajax({
            url: baseUrl + 'update/user-profile',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(res) {
                bootbox.alert({
                    message: res.message,
                    closeButton: false,
                    callback: function() {
                        if (res.success) {
                            window.location.reload();
                        }
                    }
                })
            }
        });
    });

    $(".changeStudentPass").on('click', function() {
        var password = $("#student_password").val().trim();
        bootbox.dialog({
            message: 'Are you sure you want to change the password?',
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class="bi bi-x"></i> Cancel',
                    className: 'btn-sm btn-danger',
                },
                yes: {
                    label: '<i class="bi bi-check"></i> Yes',
                    className: 'btn-sm btn-success',
                    callback: function() {
                        if (password == '') {
                            bootbox.alert({
                                message: 'Please enter a password',
                                closeButton: false,
                            });
                            return false;
                        }
                        $.ajax({
                            url: baseUrl + 'update/change-password',
                            type: 'POST',
                            data: {
                                password: btoa(password),
                            },
                            dataType: 'json',
                            success: function(res) {
                                bootbox.alert({
                                    message: res.message,
                                    closeButton: false,
                                    callback: function() {
                                        if (res.success) {
                                            $("#student_password").val('');
                                        }
                                    }
                                })
                            }
                        })
                    }
                }
            }
        })
    })
})
