

<body>
    <div class="signin_container" style="display: <?= ($addClass == 'register') ? 'none' : ''; ?>">
        <div class="registration-form">
            <h1 class="text-center pb-3">SignIn</h1>
            <form id="sign_in_form">
                <div class="inputBox">
                    <input type="email" class="item" name="email" required="required" title="Enter a valid email address.">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="password" class="item" name="password" required="required">
                    <ion-icon name="eye-off-outline" class="viewPassWord" style="position: absolute;top: 1rem;right: 1rem;"></ion-icon>
                    <span>Password</span>
                </div>
                <div class="pass"><a href="<?= base_url() ?>forgot-password">Forgot Password?</a></div>
            </form>
            <a class="btn btn-sm btn-custom has-before loginBtn authButton w-100">
                <span class="span"><i class="bi bi-key-fill"></i> Sign In</span>
            </a>
            <div class="signup_link">
                Not a member? <a href="<?= base_url() ?>auth?auth=register">Signup</a>
            </div>
        </div>
    </div>

    <div class="signup_container" style="display: <?= ($addClass == 'login') ? 'none' : ''; ?>">
        <div class="registration-form">
            <form id="sign_up_form">
                <div class="form-icon">
                    <span><i class="icon icon-user"></i></span>
                </div>
                <div class="inputBox">
                    <input type="text" class="item" name="student_name" required="required" pattern="[A-Za-z\s]+" title="Name can only contain alphabets and spaces.">
                    <span>Student Name</span>
                </div>
                <div class="inputBox">
                    <input type="email" class="item" name="email" required="required" title="Enter a valid email address.">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="text" class="item" name="mobile_no" required="required" pattern="[6-9]\d{9}" title="Enter a valid 10-digit Indian mobile number starting with 6-9.">
                    <span>10 Digit Mobile No.</span>
                </div>
                <div class="inputBox" style="display: none;">
                    <input type="text" class="item" name="city_name" value="N/A" required="required">
                </div>
                <div class="inputBox">
                    <input type="text" class="item" name="state_name" required="required" pattern="[A-Za-z\s]+" title="State can only contain alphabets and spaces.">
                    <span>State</span>
                </div>
              <!--  <div class="inputBox">
                    <select class="form-control mb-4" name="category_id" id="category_id">
                        <?php if (!empty($category_list)) {
                            foreach ($category_list as $categorysRow) { ?>
                                <option value="<?= $categorysRow->category_id ?>">
                                    <?= $categorysRow->category_name ?>
                                </option>
                        <?php } } ?>
                    </select>
                </div> -->
                <div class="inputBox">
                    <select class="form-control mb-4" name="current_level" id="current_level">
                    </select>
                </div>
                <div class="inputBox">
                    <input type="password" class="item" name="password" id="password" required="required">
                    <ion-icon name="eye-off-outline" class="viewPassWord" style="position: absolute;top: 1rem;right: 1rem;"></ion-icon>
                    <span>Password</span>
                </div>
                <div class="inputBox" style="display: none;">
                    <input type="password" id="confirm_password" class="item" name="confirm_password" required="required">
                    <span>Confirm Password</span>
                </div>
            </form>
            <a class="btn btn-sm btn-custom signUpBtn authButton  w-100">
                <span class="span"><i class="bi bi-key-fill"></i> Sign Up</span>
            </a>
            <div class="signup_link">
                Already a member? <a href="<?= base_url() ?>auth?auth=login">Signin</a>
                <div><a href="<?= base_url() ?>"><i class="fas fa-undo-alt"></i> Return to Home</a></div>
            </div>
        </div>
    </div>

    




<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User <?= ($addClass == 'sign_up') ? ' Signup' : ' Login'; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" 
            integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" 
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            text-align: center;
            position: relative;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #333;
        }

        .input-box {
            position: relative;
            margin: 20px 0;
        }

        .input-box input, .input-box select {
            width: 100%;
            padding: 8px;
            font-size: 0.9em;
            border: none;
            border-bottom: 2px solid #333;
            outline: none;
            background: transparent;
            transition: all 0.3s ease;
        }

        .input-box label {
            position: absolute;
            top: -10px;
            left: 0;
            font-size: 0.8em;
            color: #666;
        }

        .input-box input:focus ~ label,
        .input-box input:valid ~ label {
            color: #e63e58;
        }

        .input-box input:focus,
        .input-box select:focus {
            border-bottom-color: #e63e58;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #e63e58;
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 1em;
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
            color: #e63e58;
            text-decoration: none;
            cursor: pointer;
        }

        p a:hover {
            text-decoration: underline;
        }

        .form-container {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 400px;
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 12px;
            cursor: pointer;
            color: #666;
            font-size: 1em;
        }

        .mobile-wrapper {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #333;
        }

        .mobile-wrapper span {
            padding: 0 8px;
            font-size: 0.9em;
        }

        .mobile-wrapper input {
            border: none;
            outline: none;
            width: 100%;
            padding: 8px;
            font-size: 0.9em;
            background: transparent;
        }

        .mobile-wrapper.valid {
            border-bottom-color: green;
        }

        .mobile-wrapper.invalid {
            border-bottom-color: red;
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
                font-size: 1.3em;
            }

            .btn {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <!-- Signup Form -->
        <div class="container" id="signup-container">
            <h2>Sign Up</h2>
            <form>
                <div class="input-box">
                    <input type="text" required>
                    <label>Student Name</label>
                </div>
                <div class="input-box">
                    <div class="mobile-wrapper" id="mobile-wrapper">
                        <span>+91</span>
                        <input type="tel" id="mobile" required pattern="[0-9]{10}" maxlength="10" placeholder="Mobile">
                    </div>
                    <label>Mobile</label>
                </div>
                <div class="input-box">
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="text" required>
                    <label>State</label>
                </div>
                <div class="input-box">
                    <select required>
                        <option value="" disabled selected>CSEET</option>
                    </select>
                </div>
                <div class="input-box">
                    <input type="password" id="password" required>
                    <label>Password</label>
                    <i class="fas fa-eye password-toggle" onclick="togglePassword('password', this)"></i>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">I agree to the <a href="#">Terms & Conditions</a></label>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <p>Already have an account? <a onclick="showLogin()">Sign In</a></p>
            </form>
        </div>

        <!-- Login Form -->
        <div class="container" id="login-container" style="display: none;">
            <h2>Login</h2>
            <form>
                <div class="input-box">
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" id="login-password" required>
                    <label>Password</label>
                    <i class="fas fa-eye password-toggle" onclick="togglePassword('login-password', this)"></i>
                </div>
                <p><a href="#">Forgot Password?</a></p>
                <button type="submit" class="btn">Sign In</button>
                <p>Don't have an account? <a onclick="showSignup()">Sign Up</a></p>
            </form>
        </div>
    </div>

    <script>
        function showLogin() {
            document.getElementById('signup-container').style.display = 'none';
            document.getElementById('login-container').style.display = 'block';
        }

        function showSignup() {
            document.getElementById('login-container').style.display = 'none';
            document.getElementById('signup-container').style.display = 'block';
        }

        function togglePassword(inputId, icon) {
            const passwordField = document.getElementById(inputId);
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        document.getElementById('mobile').addEventListener('input', function () {
            const mobileWrapper = document.getElementById('mobile-wrapper');
            if (this.value.match(/^[0-9]{10}$/)) {
                mobileWrapper.classList.add('valid');
                mobileWrapper.classList.remove('invalid');
            } else {
                mobileWrapper.classList.add('invalid');
                mobileWrapper.classList.remove('valid');
            }
        });

        // Automatically copy password value to confirm password
        document.getElementById('password').addEventListener('input', function () {
            document.getElementById('confirm_password').value = this.value;
        });

        // Client-side validation feedback
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', () => {
                if (!input.checkValidity()) {
                    input.setCustomValidity(input.title);
                } else {
                    input.setCustomValidity('');
                }
            });
        });
    <script type="text/javascript" src="<?= base_url() ?>assets/cdn/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/cdn/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/cdn/js/bootbox.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript">
        var pageType = "student_auth_page";
        var baseUrl = "<?= base_url() ?>";
    </script>
    <script type="text/javascript" src="<?= base_url() ?>assets/student/js/student_auth.js?v=1.0.1"></script>
    </script>
</body>
</html>
