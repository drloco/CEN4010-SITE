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
$sql= "SELECT sender,content,Time,subject FROM messages WHERE username ='".$user."'"; 
$result = $conn->query($sql);

echo $user;
?>

<p><?php if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border='1'><tr><td>Sender</td><td>Date</td><td>Subject</td><td>Contents</td><td>Reply</td></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["sender"]."</td><td>".$row["Time"]."</td><td>".$row["subject"]."</td><td>". $row["content"]."</td><td>
        <a href='/~mmoral41/CEN4010/server/messages.php?user=".$user."&friend=".$row["sender"]."'>Message</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "You have no messages :(.";
}?></p>    

</table>

 <form action='travelbook.php' method='post'>
        <input type='hidden' name='user' value=<?php echo "'".$user."'"; ?></input>
        Click here for travelbook!<input type='submit'></form>