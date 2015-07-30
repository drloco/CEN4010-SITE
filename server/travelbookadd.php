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
$country = $_GET["country"];
$spot = $_GET["spot"];
$date = $_GET["date"];
$notes = $_GET["notes"];

$sql = "INSERT INTO travelbook (username,country,spot,date,notes) VALUES ('".$user."','".$country."','".$spot."','".$date."','".$notes."')";

$result = $conn->query($sql);
echo $sql;
echo "<br>";
header("Location: /~mmoral41/CEN4010/server/travelbook.php?user=".$user);

?>