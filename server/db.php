<?php
/*
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
*/

$TABLE = "CREATE TABLE IF NOT EXISTS account(
username VARCHAR(30) NOT NULL UNIQUE,
firstname VARCHAR(30),
lastname VARCHAR(30),
password VARCHAR(30) NOT NULL)";
if ($conn->query($TABLE) === TRUE) {
    echo "Table Account created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>