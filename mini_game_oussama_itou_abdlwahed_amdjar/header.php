<link rel="stylesheet" href="table/home.css">
<?php
session_start();
?>
<main>
  <nav>
    <ul class="nav-wrapper">
      <li class="logo"><a href="./game.php"><u>Snake-Game</u></a></li>
      <div class="nav-items">
        <?php
        if(!( isset($_SESSION['user']) && $_SESSION['user'][0]['id'])) {
        ?>
        <li><a href="./signupForm.php">Register</a></li>
        <li><a href="./login.php">Login</a></li>
        <?php
        } else {
        ?>
          <li><a href="./handler/logout.inc.php">logout</a></li>
        <?php
        }
        ?>
      </div>  
    </ul>
  </nav>
</main>