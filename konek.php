<?php
$link = mysqli_connect('localhost','root','ClassQ');
if($link === false){
    die("error: Could not Connect." 
    mysqli_connect_error());
}

$sql = "INSERT INTO CQ_Register(FirstName,LastName,Birthday,Gender,Email,Wordpass,Tele) VALUES ('". $_POST['FirstName'] ."','". $_POST['LastName'] ."','". $_POST['Birthday'] ."','". $_POST['JenisKelamin'] ."','". $_POST['Email'] ."','". $_POST['password'] ."','". $_POST['handphone'] ."')";

if(mysqli_query($link, $sql)){
    echo"Sudah Tersimpan. :)";
}else{
    echo"ERROR: Could not able to execute $sql.".mysqli_error($link);
}

mysqli_close($link)

?>