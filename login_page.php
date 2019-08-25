<!--this page gets the data from login.php page and check with the database-->
<?php 
session_start();
require_once("dbconnect.php");

$email = $_POST['email'];
$password = $_POST['pwd'];

$sql = "select * from customers where email='".$email."' and password='".$password."'";

$result = mysqli_query($mysqli,$sql);
$row = mysqli_num_rows($result);

if ($row==1){
  $row = $result->fetch_row();
  $_SESSION['username'] = $row[4];
  header("Location: index.php");
}else{
  $_SESSION['error'] = "Invalid email or password!!";
  header("Location: login.php");
}
?>