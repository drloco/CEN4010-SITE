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
$user = $_POST["UserName"];

$sql= "select username,password,firstname,lastname,age,location from account where username='" .$_POST["UserName"]. "' and password='" .$_POST["Password"]. "'" ;
$result = $conn->query($sql);
//echo $result;
/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["username"]. " - pass: " . $row["password"]."fname".$row["firstname"]."lname".$row["lastname"].
            "location".$row["location"]."<br>";
        
        echo "<form action='mypage.php' method='post'>
        <input type='hidden' name='username' value=".$_POST['UserName']."><br>
        Click here to start!<input type='submit'></form>";
    }
} else {
    echo "Your login information is incorrect.";
}*/
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <link href="css.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <p><?php if ($result->num_rows > 0) {
            header("Location: /~mmoral41/CEN4010/server/messages.php?user=".$user);
} else {
    echo "Your login information is incorrect.";
}?></p>
      
      
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
  </body>
</html>

