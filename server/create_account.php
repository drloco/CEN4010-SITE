<?php
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
echo "Connected successfully";
echo "<br>";

$user = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$location = $_POST['location'];

$sql = "INSERT INTO account (username, password,firstname,lastname,age,location)
VALUES ('".$user."','".$password."','".$firstname."','".$lastname."','".$age."','".$location."')";

echo $sql;
echo "<br>";

if ($conn->query($sql) === TRUE) {
    echo "Your Account has been created!";
} else {
    echo "fail";
    if($conn->errno == 1062)
        echo "The username you have chosen is already in use. Please try again";
}
header("Location: /~mmoral41/CEN4010/index.html");
$conn->close();
?>