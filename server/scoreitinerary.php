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
$user = $_GET['user'];
$title = $_GET['title'];
$score = $_GET['score'];
$score = $score+1;
echo $user;
echo $title;
echo $score;

$sql = "UPDATE itinerary SET score='".$score."' WHERE title='".$title."'";
$result = $conn->query($sql);
header("Location: /~mmoral41/CEN4010/server/itinerary.php?user=".$user);


?>