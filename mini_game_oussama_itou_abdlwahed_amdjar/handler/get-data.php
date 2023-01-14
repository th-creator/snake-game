<?php
session_start();
if (isset($_SESSION['user']) && $_SESSION['user'][0]['id']) {
  $value = array(
    "id"         => $_SESSION['user'][0]['id'],
    "name"         => $_SESSION['user'][0]['name'],
    "email"       => $_SESSION['user'][0]['email'],
    "current_score" => $_SESSION['user'][0]['current_score'],
    "max_score"          => $_SESSION['user'][0]['max_score']
  );
  $val = array("name" => "oussama");
  exit(json_encode($value));
}

?>