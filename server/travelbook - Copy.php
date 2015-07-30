<?php
session_start();
$servername = "localhost";
$username = "mmoral41";
$password = "GOh1C19rUNbyh";
$DB = "mmoral41";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully";
}
$user = $_POST["user"];
echo $user;


$sql= "SELECT country,spot,date,notes FROM travelbook WHERE username ='".$user."'"; 
$result = $conn->query($sql);

?>
