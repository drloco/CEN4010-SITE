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
$friend = $_GET["friend"];
echo "friend:".$friend;
echo "you:".$user;

$sql = "INSERT INTO friends (username, friendname) VALUES ('".$user."','".$friend."')";

$result = $conn->query($sql);
echo $sql;
echo "<br>";
header("Location: /~mmoral41/CEN4010/server/friends.php?user=".$user);

?>