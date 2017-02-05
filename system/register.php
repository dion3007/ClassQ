<?php
$connect = mysqli_connect('localhost', 'root', 'Masalah22++', 'ClassQ');

$query = "INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `user_birth`, `user_gender`, `user_email`, `user_password`, `user_phone`) VALUES (NULL, '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['birth'] . "', '1', '" . $_POST['email'] . "', MD5('" . $_POST['password'] . "'), '" . $_POST['phone'] . "')";

mysqli_query($connect, $query);
?>
