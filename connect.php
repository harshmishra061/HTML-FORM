<?php
  $name = $_POST['username'];
  $emailid = $_POST['emailid'];
  $gender = $_POST['gender'];
  $number = $_POST['mobno'];

  $conn = new mysqli('localhost', 'root', '', 'test');
  if($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into registration(name, emailid, gender, number) values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $name, $emailid, $gender, $number);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  }
 ?>
