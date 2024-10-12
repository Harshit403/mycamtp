<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User <?= ($addClass == 'sign_up') ? 'Signup' : 'Login'; ?></title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Existing CSS -->
    <!--<link rel="stylesheet" href="<?= base_url() ?>/assets/css/login.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

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
            background: linear-gradient(135deg, #2FBCCD, #fceabb);
            overflow: hidden;
        }

        .container {
            width: 400px;
            padding: 25px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            text-align: center;
            position: relative;
            transition: transform 0.6s ease-in-out;
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
            color: #2FBCCD;
        }

        .input-box input:focus,
        .input-box select:focus {
            border-bottom-color: #2FBCCD;
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
            color: #2FBCCD;
            text-decoration: none;
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
        }
    </style>
</head>

<body>
    <div class="form-container">
        <!-- SignIn Container -->
        <div class="container" style="display: <?= ($addClass == 'register') ? 'none' : ''; ?>">
            <h2>Sign In</h2>
            <form id="sign_in_form">
                <div class="input-box">
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <ion-icon name="eye-off-outline" class="viewPassWord" style="position: absolute; top: 1rem; right: 1rem;"></ion-icon>
                </div>
                <div class="pass"><a href="<?= base_url() ?>forgot-password">Forgot Password?</a></div>
                <a class="btn loginBtn authButton">Sign In</a>
                <p>Not a member? <a href="<?= base_url() ?>auth?auth=register">Sign Up</a></p>
            </form>
        </div>

        <!-- SignUp Container -->
        <div class="container" style="display: <?= ($addClass == 'login') ? 'none' : ''; ?>">
            <h2>Sign Up</h2>
            <form id="sign_up_form">
                <div class="input-box">
                    <input type="text" name="student_name" required>
                    <label>Student Name</label>
                </div>
                <div class="input-box">
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="text" name="mobile_no" required>
                    <label>Mobile No</label>
                </div>
                <div class="input-box">
                    <select name="category_id" id="category_id">
                        <option value="" disabled selected>Select Category</option>
                        <!-- Dynamically populated options -->
                    </select>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <ion-icon name="eye-off-outline" class="viewPassWord" style="position: absolute; top: 1rem; right: 1rem;"></ion-icon>
                </div>
                <a class="btn signUpBtn authButton">Sign Up</a>
                <p>Already a member? <a href="<?= base_url() ?>auth?auth=login">Sign In</a></p>
                <p><a href="<?= base_url() ?>"><i class="fas fa-undo-alt"></i> Return to Home</a></p>
            </form>
        </div>
    </div>

    <script>
        document.querySelectorAll('.viewPassWord').forEach(icon => {
            icon.addEventListener('click', function () {
                const input = this.previousElementSibling;
                input.type = input.type === 'password' ? 'text' : 'password';
                this.name = this.name === 'eye-off-outline' ? 'eye-outline' : 'eye-off-outline';
            });
        });
    </script>
</body>
</html>
