$(document).ready(function() {
    levelUpdate();
    $(".viewPassWord").on('click', function() {
        var type = $(this).closest(".inputBox").find('input').attr('type');
        $(this).closest(".inputBox").find('ion-icon').toggleAttrVal('name', "eye-outline", "eye-off-outline");
        if (type == 'password') {
            $(this).closest(".inputBox").find('input').attr('type', 'text');
        } else {
            $(this).closest(".inputBox").find('input').attr('type', 'password');
        }
    });

    var emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    var passwordPattern = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{7,}$/;
    $(".signUpBtn").on('click', function() {
        addSignUpData();
    });

    $(".loginBtn").on('click', function() {
        validateSignInData();
    });

    function addSignUpData() {
        var formData = $("#sign_up_form").serializeArray();
        var data = new FormData();
        var errors = new Array;
        $.each(formData, function(i, v) {
            data.append(v.name, $.trim(v.value));
        });
        var password = data.get('password');
        if (data.get('student_name') == '') {
            errors.push('Please enter your name');
        }
        if (data.get('email') == '') {
            errors.push('Please enter a email');
        }
        if (data.get('email') != '' && !emailPattern.test(data.get('email'))) {
            errors.push('Email does not a valid email');
        }
        if (data.get('mobile_no') == '') {
            errors.push('Please enter a mobile no');
        }
        if (password == '') {
            errors.push('Please enter a password');
        }
        if (data.get('password') != '') {
            if (password.length < 7) {
                errors.push("Your password must be at least 7 characters");
            }
            if (password.search(/[a-z]/i) < 0) {
                errors.push("Your password must contain at least one letter.");
            }
            if (password.search(/[0-9]/) < 0) {
                errors.push("Your password must contain at least one digit.");
            }
        }
        if (data.get('password') != data.get('confirm_password')) {
            errors.push('Password does not matched');
        }
        if (data.get('city_name') == '') {
            errors.push('Please enter a city');
        }
        if (data.get('state_name') == '') {
            errors.push('Please enter a state');
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
            dataType: 'JSON',
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    window.location.href = baseUrl + "auth?auth=login";
                } else {
                    bootbox.alert({
                        closeButton: false,
                        message: response.message,
                    })
                }
            }
        });
    }

    function validateSignInData() {
        var formData = $("#sign_in_form").serializeArray();
        var data = new FormData();
        var errors = new Array;
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
                    })
                }
            }
        })
    }

    $(".forgotPassBtn").on('click', function() {
        var email = $("#email").val();
        if (email == '') {
            bootbox.alert({
                message: 'Please enter a email',
                closeButton: false,
            });
            // $(this).find('span').html('');
            return false;
        } else if (email != '' && !emailPattern.test(email)) {
            bootbox.alert({
                message: 'Please enter a valid email',
                closeButton: false,
            });
            // $(this).find('span').html('');
            return false;
        }
        $(this).find('span').html('<i class="fas fa-spinner fa-spin"></i> Sending ');
        $.ajax({
            url: baseUrl + '/forgot-pass-email',
            type: 'POST',
            data: {
                email: email,
            },
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
                            // $(this).find('span').html('');
                        }
                    }
                });
            }
        })
    });

    $(".verifyOTP").on('click', function() {
        var email = $("#email").val();
        var otp = $("#otp").val();
        $.ajax({
            url: baseUrl + '/verify-otp',
            type: 'POST',
            data: {
                email: email,
                otp: otp,
            },
            dataType: 'json',
            success: function(data) {
                bootbox.alert({
                    message: data.message,
                    closeButton: false,
                    callback: function() {
                        if (data.success) {
                            window.location.href = baseUrl + 'set-password';
                        }
                    }
                });
            }
        });
    });

    $(".setPassword").on('click', function() {
        var password = $("#password").val();
        var confirm_password = $("#con_password").val();
        if (password != confirm_password) {
            bootbox.alert({
                message: 'Password and confirm password does not matched',
                closeButton: false,
            });
            return false;
        }

        $.ajax({
            url: baseUrl + 'set-new-password',
            type: 'POST',
            data: {
                password: password,
            },
            dataType: 'json',
            success: function(data) {
                bootbox.alert({
                    message: data.message,
                    closeButton: false,
                    callback: function() {
                        window.location.href = baseUrl + '/auth?auth=login';
                    }
                })
            }

        })

    });
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
});
$.fn.toggleAttrVal = function(attr, val1, val2) {
    var test = $(this).attr(attr);
    if (test === val1) {
        $(this).attr(attr, val2);
        return this;
    }
    if (test === val2) {
        $(this).attr(attr, val1);
        return this;
    }
    // default to val1 if neither
    $(this).attr(attr, val1);
    return this;
};