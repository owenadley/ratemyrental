<?php
include 'connectionStrs.php';

$table = 'ratings';

// Create connection
$conn = mysqli_connect('localhost', 'owenyhae_rmr', 'passwordtest', 'owenyhae_ratemyrental');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$phone = mysqli_real_escape_string($conn, $phone);
$message = mysqli_real_escape_string($conn, $message);
$form = 'Name: '.$name.'/n'.'Email: '.$email.'/n'.'Phone: '.$phone.'/n'.'Message: '.$message;

if (isset($name)) {
  mail('owen.adley@gmail.com', 'Contact Form', $form);
  echo ("<script>window.location.replace ('https://www.ratemyrental.cc/index.html');</script>");
}

?>
