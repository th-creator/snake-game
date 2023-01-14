<?php


// $sql = mysqli_query($conn,'SELECT * FROM user');
// $result = mysqli_fetch_all($sql,MYSQLI_ASSOC);

// exit(json_encode($result));

// session_start();
$data = file_get_contents("php://input");
$decode = json_decode($data,true);
$id = $decode['id'];
$maxScore = $decode['maxScore'];
$currentScore = $decode['currentScore'];
// echo $maxScore;
// print_r($data);
$conn =  mysqli_connect('localhost','th_creator','password.1','GameScore');
// // $_SESSION["val"] = $_POST["id"];
// if (isset($_SESSION['user'])) {
  // $_SESSION['val']= $_POST['maxScore'];
  // Create connection
  // $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE user SET current_score={$currentScore} WHERE id={$id};";
  
  if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE user SET max_score={$maxScore} WHERE id={$id};";
    if ($conn->query($sql) === TRUE) {
    exit(json_encode(array("success" => "Score updated")));}
  } else {
    exit(json_encode(array("error" => "Score didn't update")));
  }
//   // echo $data; 
//   // $conn->close();
// // }

// ?>