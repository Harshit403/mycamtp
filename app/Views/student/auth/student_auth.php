<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User
        <?=($addClass=='sign_up') ? ' Signup':' Login'; ?>
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/login.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
</head>

<body>
    <div class="signin_container" style="display: <?=($addClass=='register') ? 'none':''; ?>">
        <div class="registration-form">
            <h1 class="text-center pb-3">SignIn</h1>
            <form id="sign_in_form">
                <div class="inputBox">
                    <input type="text" class="item" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="password" class="item" name="password" required="required">
                    <ion-icon name="eye-off-outline" class="viewPassWord" style="position: absolute;top: 1rem;right: 1rem;"></ion-icon>
                    <span>Password</span>
                </div>
                <div class="pass"><a href="<?=base_url()?>forgot-password">forgot Password?</a></div>
            </form>
            <!-- <button class="btn btn-block loginBtn authButton">Sign In</button> -->
            <a class="btn btn-sm btn-custom has-before loginBtn authButton w-100">
                <span class="span"><i class="bi bi-key-fill"></i> Sign In</span>
            </a>
            <div class="signup_link">
                Not a member? <a href="<?=base_url()?>auth?auth=register">Signup</a>
            </div>
        </div>
    </div>
    <div class="signup_container" style="display: <?=($addClass=='login') ? 'none':''; ?>">
        <div class="registration-form">
            <form id="sign_up_form">
                <div class="form-icon">
                    <span><i class="icon icon-user"></i></span>
                </div>
                <div class="inputBox">
                    <input type="text" class=" item" name="student_name" required="required">
                    <span>Student Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" class="item" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="text" class="item" name="mobile_no" required="required">
                    <span>Mobile No</span>
                </div>
               
                            
                <div class="inputBox">
                    <input type="password" class="item" name="password" required="required">
                    <ion-icon name="eye-off-outline" class="viewPassWord" style="position: absolute;top: 1rem;right: 1rem;"></ion-icon>
                    <span>Password</span>
                </div>
                
            </form>
            <a class="btn btn-sm btn-custom signUpBtn authButton  w-100">
                <span class="span"><i class="bi bi-key-fill"></i> Sign Up</span>
            </a>
            <div class="signup_link">
                Already a member? <a href="<?=base_url()?>auth?auth=login">Signin</a>
                <div><a href="<?=base_url()?>"><i class="fas fa-undo-alt"></i> Return to Home</a></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?=base_url()?>assets/cdn/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/cdn/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/cdn/js/bootbox.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript">
    var pageType = "student_auth_page";
    var baseUrl = "<?=base_url()?>";
    </script>
    <script type="text/javascript" src="<?=base_url()?>assets/student/js/student_auth.js"></script>
</body>

</html>
