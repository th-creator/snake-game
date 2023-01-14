<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signupForm.css">
    <title>Document</title>
</head>
<body>
<?php
include './header.php';
?>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="handler/signup.inc.php" method="post">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" name="uid" placeholder="username" value="<?php if(isset($_GET['name'])) echo $_GET['name']; ?>">
                        <input type="email" class="login__input" name="email" placeholder="email" value="<?php if(isset($_GET['email'])) echo $_GET['email']; ?>">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" name="pwd" placeholder="password">
                        <input type="password" class="login__input" name="pwdrepeat" placeholder="repeat password">
                    </div>
                    <button type="submit" name="submit" class="button login__submit">
                        <span class="button__text">Register Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                <div class="social-login">
                    <h5><a href="login.php"> already have an account</a></h5>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
    
</body>
</html>