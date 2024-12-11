$(document).ready(function() {
    levelUpdate();

    $(".viewPassWord").on('click', function() {
        var type = $(this).closest(".inputBox").find('input').attr('type');
        $(this).closest(".inputBox").find('ion-icon').toggleAttrVal('name', "eye-outline", "eye-off-outline");
        if (type === 'password') {
            $(this).closest(".inputBox").find('input').attr('type', 'text');
        } else {
            $(this).closest(".inputBox").find('input').attr('type', 'password');
        }
    });

    var emailPattern = /^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var mobilePattern = /^[6-9]\d{9}$/;
    var namePattern = /^[a-zA-Z\s]+$/; // Only alphabets and spaces
    var statePattern = /^[a-zA-Z\s]+$/; // Only alphabets and spaces

    $(".signUpBtn").on('click', function() {
        addSignUpData();
    });

    $(".loginBtn").on('click', function() {
        validateSignInData();
    });

    function addSignUpData() {
        var formData = $("#sign_up_form").serializeArray();
        var data = new FormData();
        var errors = [];

        $.each(formData, function(i, v) {
            data.append(v.name, $.trim(v.value));
        });

        var name = data.get('student_name');
        var email = data.get('email');
        var mobile = data.get('mobile_no');
        var password = data.get('password');
        var state = data.get('state_name');

        if (!name || !namePattern.test(name)) {
            errors.push('Please enter a valid name (alphabets only).');
        }
        if (!email || !emailPattern.test(email)) {
            errors.push('Please enter a valid email address.');
        }
        if (!mobile || !mobilePattern.test(mobile)) {
            errors.push('Please enter a valid 10-digit Indian mobile number.');
        }
        if (!password) {
            errors.push('Please enter a password.');
        } else if (password.length < 7) {
            errors.push('Your password must be at least 7 characters long.');
        } else if (!/[a-z]/i.test(password)) {
            errors.push('Your password must contain at least one letter.');
        } else if (!/[0-9]/.test(password)) {
            errors.push('Your password must contain at least one digit.');
        }
        if (!state || !statePattern.test(state)) {
            errors.push('Please enter a valid state (alphabets only).');
        }

        if (errors.length > 0) {
            bootbox.alert({
                closeButton: false,
                message: errors.join("</br>"),
            });
            return false;
        }

        $.ajax({
            url: baseUrl + 'register-details',
            type: 'POST',
            data: data,
            dataType: 'text',
            processData: false,
            contentType: false,
            success: function(response) {
                try {
                    var jsonResponse = JSON.parse(response);
                    if (jsonResponse.success) {
                        bootbox.alert({
                            message: 'Registration successful! Redirecting to login...',
                            closeButton: false,
                            callback: function() {
                                window.location.href = baseUrl + "auth?auth=login";
                            }
                        });
                    } else {
                        bootbox.alert({
                            closeButton: false,
                            message: jsonResponse.message,
                        });
                    }
                } catch (e) {
                    bootbox.alert({
                        message: 'Error parsing response: ' + e.message + '<br>Raw response: ' + response,
                        closeButton: false
                    });
                }
            },
            error: function(xhr, status, error) {
                bootbox.alert({
                    message: 'An error occurred: ' + xhr.status + ' ' + error + '<br>Response: ' + xhr.responseText,
                    closeButton: false
                });
            }
        });
    }

    function validateSignInData() {
        var formData = $("#sign_in_form").serializeArray();
        var data = new FormData();
        var errors = [];

        $.each(formData, function(i, v) {
            data.append(v.name, $.trim(v.value));
        });

        $.ajax({
            url: baseUrl + '/sign-in',
            type: "POST",
            dataType: 'JSON',
            data: data,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    window.location.href = baseUrl + 'dashboard';
                } else {
                    bootbox.alert({
                        closeButton: false,
                        message: response.message,
                    });
                }
            }
        });
    }

    $(".forgotPassBtn").on('click', function() {
        var email = $("#email").val();
        if (!email || !emailPattern.test(email)) {
            bootbox.alert({
                message: 'Please enter a valid email address.',
                closeButton: false,
            });
            return false;
        }

        $(this).find('span').html('<i class="fas fa-spinner fa-spin"></i> Sending ');
        $.ajax({
            url: baseUrl + '/forgot-pass-email',
            type: 'POST',
            data: { email: email },
            dataType: 'json',
            success: function(data) {
                bootbox.alert({
                    message: data.message,
                    closeButton: false,
                    callback: function() {
                        if (data.success) {
                            $(".otp_section").show();
                            $(".forgotPassBtn").hide();
                            $(".verifyOTP").show();
                        }
                    }
                });
            }
        });
    });

    // Other functions remain unchanged...

    $("#category_id").on('change', function() {
        levelUpdate();
    });

    function levelUpdate() {
        var category_id = $("#category_id").val();
        $.ajax({
            url: baseUrl + '/fetch-level-list',
            type: 'POST',
            data: { category_id: category_id },
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
});
