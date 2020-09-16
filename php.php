<?php

session_start();
 $_SESSION["nom"] =sha1(rand(5, 1000));

 $nom=$_SESSION["nom"];
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "basicfit";   
// Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO informations (name_informations)
VALUES ('$nom')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>