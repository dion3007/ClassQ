<?php
$connect = mysqli_connect('localhost', 'root', '', 'ClassQ');

$fName = $_POST["fname"];
$lName = $_POST["lname"];
$birth = $_POST["date"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];

$query = "INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `user_birth`, `user_gender`, `user_email`, `user_password`, `user_phone`) VALUES (NULL, '$fName', '$lName', '$birth', '$gender', '$email', MD5('$password'), '$phone');\n";

mysqli_query($connect, $query);
?>
