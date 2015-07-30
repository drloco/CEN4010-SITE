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

$msg = $_POST["msg"];
$user = $_POST["user"];
$friendP = $_POST["friendP"];
$subject = $_POST["subject"];
$date = date("m.d.y");

echo $user;
echo $msg;
echo $friendP;
echo $subject;
echo $date;


$sql = "INSERT INTO messages (username, content, sender,subject,time)
VALUES ('".$friendP."','".$msg."','".$user."','".$subject."','".$date."')";
$result = $conn->query($sql);

header("Location: /~mmoral41/CEN4010/server/messages.php?user=".$user."&?friend=".$friendP);

?>

