<?php
include './header.php';
?>
<link rel="stylesheet" href="style/login.css">
<main class="centering">
  <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="handler/login.inc.php" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" class="login__input" id="email1" name="uid" placeholder="Email..." value="<?php if(isset($_GET['uid'])) echo $_GET['uid']; ?>">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="pwd" id="pwd" placeholder="Password...">
				</div>
				<button class="button login__submit" d="btn1" type="submit" name="submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
  
</main>