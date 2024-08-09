$(document).ready(function() {

    $("#level_id").on('change', function() {
        var level_id = $(this).val();
        fetchTypeList(level_id);
        $("#type_id").empty();
        $("#subject_id").empty();
    });

    function fetchTypeList(level_id = '') {
        var type_id = $("#type_edit_id").val();
        $.ajax({
            url: baseUrl + 'admin/get-type-list',
            type: 'POST',
            data: {
                level_id: level_id
            },
            dataType: 'json',
            success: function(response) {
                $("#type_id").empty();
                var html = '<option value="">All Types</option>';
                if (response.length > 0) {
                    $.each(response, function(i, v) {
                        html += '<option value="' + v.type_id + '">' + v.type_name + '</option>';
                    });
                }
                $("#type_id").append(html);
                if (type_id != '') {
                    $("#type_id").val(type_id);
                }
            }
        })
    }

    $("#type_id").on('change', function() {
        var type_id = $(this).val();
        fetchSubjectList(type_id);
    })

    function fetchSubjectList(type_id = '') {
        var subject_id = $("#subject_edit_id").val();
        $.ajax({
            url: baseUrl + 'admin/get-subject-list',
            type: 'POST',
            data: {
                type_id: type_id
            },
            dataType: 'json',
            success: function(response) {
                $("#subject_id").empty();
                var html = '<option value="">All Subjects</option>';
                if (response.length > 0) {
                    $.each(response, function(i, v) {
                        html += '<option value="' + v.subject_id + '">' + v.subject_name + '</option>';
                    });
                }
                $("#subject_id").append(html);
                if (subject_id != '') {
                    $("#subject_id").val(subject_id);
                }
            }
        })
    }

    if (pageType == 'change_pass') {
        $("#changePassBtn").on('click', function() {
            var changePassForm = $("#change_password_form").serializeArray();
            var formdata = new FormData();
            var errors = new Array();
            $.each(changePassForm, function(i, v) {
                formdata.append(v.name, v.value);
            });
            if (formdata.get('current_pass') == '') {
                errors.push('Please enter the current password');
            }
            if (formdata.get('new_pass') == '') {
                errors.push('Please enter the new password');
            }
            if (errors.length > 0) {
                bootbox.alert({
                    message: errors.join(',</br>'),
                    closeButton: false
                });
                return false;
            }

            $.ajax({
                url: baseUrl + 'admin/change-password',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
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
            })

        })
    }
});