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
else {
    echo "Connected successfully";
}

$user = $_POST["username"];

//messages
$sql= "select content,sender from messages where username='".$user."'" ;
$result = $conn->query($sql);
echo $sql;
echo "<br>";
//echo $result;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Sender: " . $row["sender"]. " - Reciever: " . $row["username"]."<br>content".$row["content"]."<br>";
    }
}
else
    echo "You have no messages";
//Send Message
?>
        <form action='friends.php' method='get'>
        <input type='hidden' name='user' value=<?php echo "'".$user."'"; ?></input>
        Click here to start!<input type='submit'></form>