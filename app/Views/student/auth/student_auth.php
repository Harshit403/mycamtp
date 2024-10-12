<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup & Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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

        .input-box input:focus, .input-box select:focus {
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
            margin-top: 20px;
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
    <div class="form-container">
        <!-- Signup Form -->
        <div class="container" id="signup-container">
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
                    <select name="category_id" id="category_id" required>
                        <option value="" disabled selected>Select Category</option>
                    </select>
                    <label>Category</label>
                </div>
                <button type="submit" class="btn" id="signup-btn">Sign Up</button>
            </form>
            <p>Already a member? <a href="#" id="signin-link">Sign In</a></p>
        </div>

        <!-- Signin Form -->
        <div class="container" id="signin-container" style="display:none;">
            <h2>Sign In</h2>
            <form id="sign_in_form">
                <div class="input-box">
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn" id="signin-btn">Sign In</button>
            </form>
            <p>Not a member? <a href="#" id="signup-link">Sign Up</a></p>
        </div>
    </div>

    <script>
        // Toggle between Sign Up and Sign In forms
        document.getElementById('signup-link').addEventListener('click', function () {
            document.getElementById('signup-container').style.display = 'block';
            document.getElementById('signin-container').style.display = 'none';
        });

        document.getElementById('signin-link').addEventListener('click', function () {
            document.getElementById('signup-container').style.display = 'none';
            document.getElementById('signin-container').style.display = 'block';
        });

        // Fetch and populate category options (mock AJAX example)
        document.addEventListener('DOMContentLoaded', function () {
            const categorySelect = document.getElementById('category_id');
            const categories = [
                { id: 1, name: 'Science' },
                { id: 2, name: 'Arts' },
                { id: 3, name: 'Commerce' }
            ];

            categories.forEach(category => {
                const option = document.createElement('option');
                option.value = category.id;
                option.textContent = category.name;
                categorySelect.appendChild(option);
            });
        });

        // Handle form submissions (mock)
        document.getElementById('sign_up_form').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Sign Up form submitted');
        });

        document.getElementById('sign_in_form').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Sign In form submitted');
        });
    </script>
</body>
</html>
