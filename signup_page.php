<!--This page gets data from signup.php page and inserts the data to database-->
<?php 
session_start();
require_once("dbconnect.php");

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['pwd'];

$statement = $mysqli->prepare("INSERT INTO customers( first_name, middle_name, last_name,
  email, password) values(?, ?, ?, ?, ?)");


$statement->bind_param("sssss", $firstname, $middlename, $lastname, $email, $password);
$statement->execute();

if ($statement->affected_rows == 1){
  $_SESSION['success'] = "Register Successfull!!";
  $statement->close();
  header("Location: login.php");
}else{
  $_SESSION['error'] = "Can not register at the moment!!";
  $statement->close();
  header("Location: signup.php");
}

?>