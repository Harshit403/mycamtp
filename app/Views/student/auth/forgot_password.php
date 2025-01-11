<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forget Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/cdn/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/cdn/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/cdn/js/bootbox.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript">
    var pageType = "student_auth_page";
    var baseUrl = "<?=base_url()?>";
    </script>
    <script type="text/javascript" src="<?=base_url()?>assets/student/js/student_auth.js?v=1.0.1"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .container {
            width: 400px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            margin-bottom: 30px;
            font-size: 1.8em;
            color: #333;
        }

        .input-box {
            position: relative;
            margin: 25px 0;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: none;
            border-bottom: 2px solid #333;
            outline: none;
            background: transparent;
            transition: all 0.3s ease;
        }

        .input-box label {
            position: absolute;
            top: 10px;
            left: 0;
            pointer-events: none;
            transition: 0.5s;
            color: #666;
        }

        .input-box input:focus ~ label,
        .input-box input:valid ~ label {
            top: -20px;
            font-size: 0.8em;
            color: #e67e22;
        }

        .input-box input:focus {
            border-bottom-color: #e67e22;
        }

        .btn {
            width: 100%;
            padding: 7px 12px;
            background: #e63e58; /* Matching background */
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #c0392b;
        }

        p {
            margin: 15px 0;
            font-size: 0.9em;
        }

        p a {
            color: #e67e22;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        .back-to-login {
            margin-top: 20px;
            font-size: 0.9em;
        }

        .back-to-login a {
            color: #2c3e50;
            text-decoration: none;
            font-weight: bold;
        }

        .back-to-login a:hover {
            color: #e63e58;
            text-decoration: underline;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                width: 320px;
                padding: 30px;
            }
        }

        @media (max-width: 480px) {
            .container {
                width: 280px;
            }

            h2 {
                font-size: 1.5em;
            }

            .btn {
                padding: 14px;
            }
        }

        @media (min-width: 1024px) {
            .container {
                width: 500px; /* Adjust width for desktops */
                padding: 50px;
            }

            h2 {
                font-size: 2em; /* Larger font for heading on desktops */
            }

            .btn {
                font-size: 1.2em; /* Slightly larger button for desktop */
            }
        }
    </style>
</head>
<body>
    <div class="container forgotPasswordContainer">
        <h2>Forget Password</h2>
        <form>
            <div class="input-box inputBox">
                <input type="email" required id="email" class="item" name="email">
                <label>Email</label>
            </div>
            <div class="input-box inputBox">
                <input type="text" class="item otp_section" inputmode="numeric" required pattern="\d{6}" maxlength="6" style="display: none;" oninput="this.value = this.value.replace(/\D/g, '')">
                <label>OTP</label>
            </div>
            <button type="submit" name="otp" id="otp" class="btn item authButton forgotPassBtn">Reset Password</button>
            <button type="submit" class="btn item authButton verifyOTP" style="display:none;">Verify</button>
        </form>
        <div class="back-to-login">
            <p><a href="login.html">Back to Login</a></p>
        </div>
    </div>
</body>
</html>
