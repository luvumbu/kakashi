<?php

header("Access-Control-Allow-Origin: *");
 /*



 
$servername = "localhost";
$username = "u481158665_kakashi_bokonz";
$password = "v3p9r3e@59A";
$dbname = "u481158665_kakashi_bokonz" ;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
/*
$sql = "INSERT INTO kakashi_bokonzi (name_doc,type_info, innerHTML,offsetTop)
VALUES ('$name_doc','$type_info', '$innerHTML', '$offsetTop')";
*/

/*
$sql = "INSERT INTO kakashi_bokonzi (name_doc,type_info, innerHTML,offsetTop)
VALUES ('c','cc', 'ccc', 'ccccc')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/
?>




<?php
$servername = "localhost";
$username = "u481158665_kakashi_bokonz";
$password = "v3p9r3e@59A";
$dbname = "u481158665_kakashi_bokonz";





$title_web = $_POST["title_web"] ;   
$innerHTML =$_POST["innerHTML"] ;
$offsetTop =$_POST["offsetTop"] ;
$type_info = $_POST["type_info"] ;
   
  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO kakashi_bokonzi (title_web,	innerHTML,offsetTop,type_info)
VALUES ('$title_web ','$innerHTML ','$offsetTop','$type_info')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>