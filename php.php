<?php
header("Access-Control-Allow-Origin: *");
 


$innerText =$_POST["innerText"] ;
$offsetTop =$_POST["offsetTop"] ;
$type_info = $_POST["type_info"] ;
$name_doc = $_POST["name_doc"] ;
 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "kakashi_bokonzi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO info (name_doc,type_info, innerText,offsetTop)
VALUES ('$name_doc','$type_info', '$innerText', '$offsetTop')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>