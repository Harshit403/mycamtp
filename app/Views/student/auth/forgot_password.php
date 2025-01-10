<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/login.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script type="text/javascript" src="<?=base_url()?>assets/cdn/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/cdn/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/cdn/js/bootbox.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript">
    var pageType = "student_auth_page";
    var baseUrl = "<?=base_url()?>";
    </script>
    <script type="text/javascript" src="<?=base_url()?>assets/student/js/student_auth.js?v=1.0.1"></script>
</head>

<body>
    <div class="forgotPasswordContainer">
        <div class="registration-form">
            <h1 class="text-center pb-3">Forgot Password</h1>
            <form id="forgot_pass_form">
                <div class="inputBox">
                    <input type="text" required name="email" id="email" class="item">
                    <span>Email</span>
                </div>
                <div class="inputBox otp_section" style="display: none;">
                    <input type="text" required name="otp" id="otp" class="item">
                    <span>OTP</span>
                </div>
            </form>
            <a class="btn btn-custom btn-sm forgotPassBtn mb-2 authButton w-100">OTP</a>
            <a class="btn btn-custom btn-sm verifyOTP mb-2 authButton w-100" style="display:none;">
                Verify OTP
            </a>
        </div>
    </div>
</body>

</html>
