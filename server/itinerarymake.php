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

$user = $_GET["user"];
$location = $_GET["location"];
$title = $_GET["title"];
$content = $_GET["content"];

$sql = "INSERT INTO itinerary (username,title,location,content,score) VALUES ('".$user."','".$title."','".$location."','".$content."','0')";
$result = $conn->query($sql);
header("Location: /~mmoral41/CEN4010/server/itinerary.php?user=".$user);


?>
