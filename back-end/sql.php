<?php

 require_once("dbconnect.php");
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `contact` (`nom`, `email`,`tel`,`message`)
  VALUES ('$nom', '$email',  '$tel','$message')";
  // use exec() because no results are returned

  $conn->exec($sql);
  echo "Message envoyé";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

 header("Refresh:1; url=../index.php");
?>

