<!--This page gets data from signup.php page and inserts the data to database-->
<?php 
session_start();
require_once("dbconnect.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$password = $_POST['pwd'];

$sql = "select * from customers where email = '".$email."'";
$result = mysqli_query($mysqli,$sql);
$row = mysqli_num_rows($result);

//to check if email already exist or not
if($row == 0){

  $statement = $mysqli->prepare("INSERT INTO customers( first_name, last_name, phoneno,
    email, password) values(?, ?, ?, ?, ?)");

  $statement->bind_param("ssiss", $firstname, $lastname, $phoneno, $email, $password);
  $statement->execute();

  if ($statement->affected_rows == 1){
    $_SESSION['success'] = "Register Successfull!!";
    $statement->close();
    header("Location: login.php");
  }else{
    $_SESSION['error'] = "Can not register at the moment!!";
    $statement->close();
    //to keep the form data
    echo "<script>history.back();</script>";
  }
}else{
  $_SESSION['error'] = "Email is already in use!! Can not register at the moment!!";
  //to keep the form data
  echo "<script>history.back();</script>";
}
?>