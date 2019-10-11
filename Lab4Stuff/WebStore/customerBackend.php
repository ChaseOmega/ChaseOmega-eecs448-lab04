<?php
//access the global array called $_POST to get the values from the text fields
$storestore= $_POST["storeStore"];
$normalstore= $_POST["normalStore"];
$random= $_POST["random"];
$username= $_POST["username"];
$password= $_POST["password"];
$cost = 0;
if (!empty($_POST)) {

  echo "Welcome Back" . $username . "Your Pasword is " . $password . "<br>";
  // code...
  $cost = $storestore;

  echo  $cost;
}
else {
}


?>
