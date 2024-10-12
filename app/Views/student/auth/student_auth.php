<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags & Title -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User <?= ($addClass == 'sign_up') ? 'Signup' : 'Login'; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Existing CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
    
    <!-- Font Awesome & Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <!-- Custom CSS -->
    <style>
        /* Reset & Font */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        /* Body Styling */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #2FBCCD, #fceabb);
            overflow: hidden;
        }

        /* Form Container */
        .form-container {
            width: 100%;
            max-width: 400px;
        }

        /* Common Container Styling */
        .container {
            width: 100%;
            padding: 25px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            text-align: center;
            position: relative;
            transition: transform 0.6s ease-in-out;
            margin-bottom: 20px;
        }

        /* Heading */
        h2 {
            margin-bottom: 30px;
            font-size: 1.8em;
            color: #333;
        }

        /* Input Box */
        .input-box {
            position: relative;
            margin: 25px 0;
        }

        .input-box input,
        .input-box select {
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

        .input-box input:focus~label,
        .input-box input:valid~label,
        .input-box select:focus~label,
        .input-box select:valid~label {
            top: -20px;
            font-size: 0.8em;
            color: #2FBCCD;
        }

        .input-box input:focus,
        .input-box select:focus {
            border-bottom-color: #2FBCCD;
        }

        /* Button Styling */
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
            margin-top: 20px;
        }

        .btn:hover {
            background: #d35400;
        }

        /* Links */
        p {
            margin: 15px 0;
            font-size: 0.9em;
        }

        p a {
            color: #2FBCCD;
            text-decoration: none;
            cursor: pointer;
        }

        p a:hover {
            text-decoration: underline;
        }

        /* Password Toggle Icon */
        .viewPassWord {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
        }

        /* Media Queries */
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
        }
    </style>
</head>

<body>
    <div class="form-container">
        <!-- Sign In Container -->
        <div class="container" style="display: <?= ($addClass == 'register') ? 'none' : ''; ?>;">
            <h2>Sign In</h2>
            <form id="sign_in_form">
                <div class="input-box">
                    <input type="text" name="email" required="required">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required="required">
                    <label>Password</label>
                    <ion-icon name="eye-off-outline" class="viewPassWord"></ion-icon>
                </div>
                <div class="pass"><a href="<?= base_url() ?>forgot-password">Forgot Password?</a></div>
                <button type="button" class="btn loginBtn authButton">Sign In</button>
                <p>Not a member? <a href="<?= base_url() ?>auth?auth=register">Sign Up</a></p>
            </form>
        </div>

        <!-- Sign Up Container -->
        <div class="container" style="display: <?= ($addClass == 'login') ? 'none' : ''; ?>;">
            <h2>Sign Up</h2>
            <form id="sign_up_form">
                <div class="input-box">
                    <input type="text" name="student_name" required="required">
                    <label>Student Name</label>
                </div>
                <div class="input-box">
                    <input type="text" name="email" required="required">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="text" name="mobile_no" required="required">
                    <label>Mobile No</label>
                </div>

                <!-- Category Dropdown -->
                <div class="input-box">
                    <select name="category_id" id="category_id" required="required">
                        <option value="" disabled selected>Select Category</option>
                        <?php
                        if (!empty($category_list)) {
                            foreach ($category_list as $categorysRow) {
                        ?>
                                <option value="<?= $categorysRow->category_id ?>">
                                    <?= $categorysRow->category_name ?>
                                </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label>Category</label>
                </div>

                <!-- Password Field -->
                <div class="input-box">
                    <input type="password" name="password" required="required">
                    <label>Password</label>
                    <ion-icon name="eye-off-outline" class="viewPassWord"></ion-icon>
                </div>

                <!-- Sign Up Button -->
                <button type="button" class="btn signUpBtn authButton">Sign Up</button>
                <p>Already a member? <a href="<?= base_url() ?>auth?auth=login">Sign In</a></p>
                <p><a href="<?= base_url() ?>"><i class="fas fa-undo-alt"></i> Return to Home</a></p>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="<?= base_url() ?>assets/cdn/js/jquery.min.js"></script>
    <script>
        // Password Toggle Functionality
        document.querySelectorAll('.viewPassWord').forEach(icon => {
            icon.addEventListener('click', function() {
                const input = this.previousElementSibling;
                if (input.type === 'password') {
                    input.type = 'text';
                    this.setAttribute('name', 'eye-outline');
                } else {
                    input.type = 'password';
                    this.setAttribute('name', 'eye-off-outline');
                }
            });
        });

        // Sign In Button Click Event
        document.querySelector('.loginBtn').addEventListener('click', function() {
            // Submit the Sign In form via AJAX or regular form submission
            $('#sign_in_form').submit();
        });

        // Sign Up Button Click Event
        document.querySelector('.signUpBtn').addEventListener('click', function() {
            // Submit the Sign Up form via AJAX or regular form submission
            $('#sign_up_form').submit();
        });
    </script>

    <!-- Existing Scripts -->
    <script type="text/javascript" src="<?= base_url() ?>assets/cdn/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/cdn/js/bootbox.min.js"></script>
    <script type="text/javascript">
        var pageType = "student_auth_page";
        var baseUrl = "<?= base_url() ?>";
    </script>
    <script type="text/javascript" src="<?= base_url() ?>assets/student/js/student_auth.js?v=1.0.1"></script>

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
