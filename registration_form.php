<?php
include("path.php");
include("app/controllers/users.php");
global $errMsg;
global $name;
global $email;
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Requires meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!--  Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>My blog</title>
</head>
<body>

<?php include("app/include/header.php"); ?>

<!--Block Main-->
<div class="main">
    <div class="container-main a-container" id="a-container">
        <form class="form" id="a-form" method="post" action="registration_form.php">
            <h2 class="form_title title">Create Account</h2>
            <div class="form__span err">
                <p><?=$errMsg?></p>
            </div>
            <span class="form__span">or use email for registration</span>
            <label>
                <input name="name" value="<?=$name?>" class="form__input" type="text" placeholder="Name">
            </label>
            <label>
                <input name="mail" value="<?=$email?>" class="form__input" type="text" placeholder="Email">
            </label>
            <label>
                <input name="pass-first" class="form__input" type="password" placeholder="Password">
            </label>
            <div>
                <button class="form__button button" type="submit" name="button-reg">SIGN UP</a>
                </button>
            </div>
        </form>
    </div>
    <div class="container-main b-container" id="b-container">
        <form class="form" id="b-form" method="post" action="registration_form.php">
            <h2 class="form_title title">Sign in to Website</h2>
            <div class="form__span err">
                <p><?=$errMsg?></p>
            </div>
            <span class="form__span">or use your email account</span>
            <label>
                <input value="<?=$email?>" class="form__input" type="text" name="mail" placeholder="Email">
            </label>
            <label>
                <input value="" class="form__input" type="password" name="password" placeholder="Password">
            </label><a class="form__link">Forgot your
                password?</a>
            <button class="form__button button" type="submit" name="button-log">SIGN IN</a></button>
        </form>
    </div>
    <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
            <h2 class="switch__title title">Welcome Back !</h2>
            <p class="switch__description description">To keep connected with us please log in with your personal
                info</p>
            <button class="switch__button button switch-btn" type="submit" name="button-log">SIGN IN</button>
        </div>
        <div class="switch__container is-hidden" id="switch-c2">
            <h2 class="switch__title title">Hello Friend !</h2>
            <p class="switch__description description">Enter your personal details and start journey with us</p>
            <button class="switch__button button switch-btn">SIGN UP</button>
        </div>
    </div>
</div>
<script src="assets/js/registe.js"></script>
<!--Block Main END-->
<!--Footer-->
<?php include("app/include/footer.php"); ?>
<!-- END footer-->
<!-- Optional JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>