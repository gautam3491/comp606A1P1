<?php require("dbconnect.php"); ?>
<?php

$email = $_POST['email'];
$password = $_POST['pwd'];

$sql = "select * from customers where email='".$email."' and password='".$password."'";

$result = $mysqli->query($sql);
while($row = $result->fetch_row()){
    session_start();
    $_SESSION['username'] = $row[4];
    header("Location: index.php");
    //echo $_SESSION['username'];
  }

?>