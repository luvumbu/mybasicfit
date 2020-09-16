<?php

session_start();
 
 
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "localhost" || $REMOTE_ADDR == "127.0.0.1" || $REMOTE_ADDR=="::1" ) {
 
	$localisation = "localhost"; // atribution delement variable	
	$_SESSION["REMOTE_ADDR"] = $localisation;
	$_SESSION["country"] = "country_local";
  $_SESSION["city"] = "city_local";
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "basicfit"; 
} else {
  $servername = "localhost";
  $username = "u481158665_basicfit";
  $password = "v3p9r3e@59A";
  $dbname = $username;

}
$_SESSION["localisation"] = $localisation;


















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
