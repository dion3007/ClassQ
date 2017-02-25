<?php
$connect = mysqli_connect('localhost', 'root', '', 'ClassQ');

$fName = $_POST["fname"];
$lName = $_POST["lname"];
$birth = $_POST["date"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$phone = $_POST["phone"];

if ($password == $repassword) {
  $query = "SELECT `user_email` FROM `user` WHERE `user_email` = '$email';";
  $result = mysqli_query($connect, $query);
  $rs = mysqli_fetch_array($result);
  $registeredEmail = $rs['user_email'];

  if ($registeredEmail != null) {
    echo '<script language="javascript">';
    echo 'alert("E-mail has been registered by somebody else!")';
    echo '</script>';
  }
  else {
    $query = "INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `user_birth`, `user_gender`, `user_email`, `user_password`, `user_phone`)
              VALUES (NULL, '$fName', '$lName', '$birth', '$gender', '$email', MD5('$password'), '$phone');\n";
    $result = mysqli_query($connect, $query);

    if ($result) {
      echo '<script language="javascript">';
      echo 'alert("Successful!")';
      echo '</script>';
    }
    else {
      echo '<script language="javascript">';
      echo 'alert("Error!")';
      echo '</script>';
    }
  }
}
else {
  echo '<script language="javascript">';
  echo 'alert("Invalid Password Input!")';
  echo '</script>';
}
?>
