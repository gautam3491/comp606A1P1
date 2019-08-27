<!--This page gets data from signup.php page and inserts the data to database-->
<?php 
session_start();
require_once("../dbconnect.php");

$username = $_POST['username'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$now = "now()";

$sql = "select * from users where username = '".$username."'";
$result = mysqli_query($mysqli,$sql);
$row = mysqli_num_rows($result);

//to check if username already exist or not
if($row == 0){
    // $sql = "insert into users (username,age,dob,completed) values('$username','$age','$dob',now())";
    // mysqli_query($mysqli, $sql);
    
   $statement = $mysqli->prepare("INSERT INTO users( username, age, dob, completed
     ) values(?, ?, ?, now())");

   $statement->bind_param("sis", $username, $age, $dob);
   $statement->execute();

   if ($statement->affected_rows == 1){
     $_SESSION['success'] = "Register Successfull!!";
     $statement->close();
     header("Location: display.php");
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