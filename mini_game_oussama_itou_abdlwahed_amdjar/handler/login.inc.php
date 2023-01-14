<?php 
    include './dbh.classes.php';
    include './login.classes.php';
    include './login.contr.classes.php';
if (isset($_POST['submit'])) {
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $signup = new LoginContr($uid,$pwd);

    $signup->loginUser();

    header("Location: ../game.php");
}
?>