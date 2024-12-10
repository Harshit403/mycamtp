<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User <?= ($addClass == 'sign_up') ? 'Signup' : 'Login'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <style>
        /* Hide unnecessary fields */
        .hidden {
            display: none !important;
        }

        /* Common styles for both pages */
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
            background: linear-gradient(135deg, #2fbccd, #fceabb);
            overflow: hidden;
        }

        .container {
            width: 400px;
            padding: 25px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            display: none; /* Initially hide all containers */
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

        .input-box input, .input-box select {
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
            padding: 12px;
            background: #2FBCCD;
            color: #fff;
            border: none;
            border-radius: 25px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #d35400;
        }

        p {
            margin: 15px 0;
            font-size: 0.9em;
        }

        p a {
            color: #e67e22;
            text-decoration: none;
            cursor: pointer;
        }

        p a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                width: 320px;
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
    </style>

</head>

<body>
    <!-- Signup Container -->
    <div class="container" id="signup-container" style="display: <?= ($addClass == 'login') ? 'none' : 'block'; ?>">
        <h2>Sign Up</h2>
        <form id="sign_up_form">
            <div class="inputBox">
                <input type="text" class="item" name="student_name" required>
                <span>Student Name</span>
            </div>
            <div class="inputBox">
                <input type="text" class="item" name="email" required>
                <span>Email</span>
            </div>
            <div class="inputBox">
                <input type="text" class="item" name="mobile_no" required>
                <span>Mobile No</span>
            </div>
            <div class="inputBox">
                <input type="text" class="item" name="state_name" required>
                <span>State</span>
            </div>
            <div class="inputBox">
                <select class="form-control mb-4" name="category_id" id="category_id" required>
                    <option value="" disabled selected>Choose Category</option>
                    <?php if (!empty($category_list)) {
                        foreach ($category_list as $categorysRow) { ?>
                            <option value="<?= $categorysRow->category_id ?>"><?= $categorysRow->category_name ?></option>
                    <?php }
                    } ?>
                </select>
            </div>
            <div class="inputBox">
                <input type="password" class="item" name="password" required>
                <ion-icon name="eye-off-outline" class="viewPassWord" style="position: absolute;top: 1rem;right: 1rem;"></ion-icon>
                <span>Password</span>
            </div>
            <!-- Hidden Fields -->
            <div class="inputBox hidden">
                <input type="text" class="item" name="city_name" value="N/A">
                <span>City</span>
            </div>
            <div class="inputBox hidden">
                <input type="password" id="confirm_password" class="item" name="confirm_password" value="N/A">
                <span>Confirm Password</span>
            </div>
            <div class="inputBox hidden">
                <select class="form-control mb-4" name="current_level" id="current_level">
                    <option value="N/A" selected>N/A</option>
                </select>
            </div>
            <button class="btn signUpBtn">Sign Up</button>
            <p>Already have an account? <a href="<?=base_url()?>auth?auth=login">Sign In</a></p>
        </form>
    </div>

    <!-- Login Container -->
    <div class="container" id="login-container" style="display: <?= ($addClass == 'register') ? 'none' : 'block'; ?>">
        <h2>Login</h2>
        <form id="sign_in_form">
            <div class="inputBox">
                <input type="text" class="item" name="email" required>
                <span>Email</span>
            </div>
            <div class="inputBox">
                <input type="password" class="item" name="password" required>
                <ion-icon name="eye-off-outline" class="viewPassWord" style="position: absolute;top: 1rem;right: 1rem;"></ion-icon>
                <span>Password</span>
            </div>
            <div class="pass"><a href="<?=base_url()?>forgot-password">Forgot Password?</a></div>
            <button class="btn loginBtn">Sign In</button>
            <p>Don't have an account? <a href="<?=base_url()?>auth?auth=register">Sign Up</a></p>
        </form>
    </div>
    <script>
// Automatically copy password value to confirm password
document.getElementById('password').addEventListener('input', function () {
    document.getElementById('confirm_password').value = this.value;
});
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
</body>

</html>
