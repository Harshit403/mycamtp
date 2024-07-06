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
            success: function(res) {
                boobox.alert({
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
})