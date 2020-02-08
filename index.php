<?php 
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  $user = array("first_name" => "James", "last_name" => "Roncesvalles");

  echo json_encode($user);
?>