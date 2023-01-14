<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/game.css">
  <title>Snake</title>
</head>
<body>
<?php
  include './header.php';
?>
  <div class="container noselect">
    <div class="wrapper">
      <button id="replay">
        <i class="fas fa-play"></i>
        RESTART
      </button>
      <div id="canvas">
  
      </div>
      <div id="ui">
        <h2>SCORE
        </h2>
        <span id="score">00</span>
      </div>
    </div>
    <div id="author">
      <h1>SNAKE</h1> <span>by Fariat</span>
    </div>
  </div>

</body>
</html>
<script src="./game.js"></script>
<?php
if(( isset($_SESSION['user']))){
?>
<script>
    fetch("handler/get-data.php").then((res) => res.json())
    .then(response => {
      console.log(response);
      localStorage.setItem('maxScore',response.max_score)
      localStorage.setItem('currentScore',response.current_score)
      localStorage.setItem('id',response.id)
    })
    .catch(error => {
      console.log(error);
    })
</script>
<?php
} else {
  ?>
  <script>
    localStorage.setItem('maxScore',0)
    localStorage.removeItem('id')
  </script>
  <?php
}
?>