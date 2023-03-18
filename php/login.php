<?php

header('Access-Control-Allow-Origin: *');


$conn = mysqli_connect('localhost', 'root', '', 'users_details',3307);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

  $username = $_GET['username'];
  $password = $_GET['password'];

  //$hashed_password = md5($password);
  $qry = "Select * from registered_users where username = '" . $username . "' and password = '" . $password . "'";
  $result = $conn->query($qry);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if ($count == 1) {
    $response = true;
    
  } else {
     $response = false;

   
      }
  echo json_encode($response);
  exit();