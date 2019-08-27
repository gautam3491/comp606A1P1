<?php
session_start();
require_once("../dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Week 7 Practise</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<br />
<?php  
    if(isset($_SESSION['success'])){
        echo "<p class='alert alert-success text-center'>";
        echo $_SESSION['success'];
        echo "</p>";
        session_destroy();
        }
?>
  <h2>User List</h2>
  <p>Order by completed:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Age</th>
        <th>Dob</th>
        <th>Completed</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $sql = "select * from users order by completed desc";
    $result = mysqli_query($mysqli, $sql);
    while($row=mysqli_fetch_array($result)){
    ?>
      <tr>
        <td class="date"><?php echo $row['username'];?></td>
        <td><?php echo $row['age'];?></td>
        <td><?php echo date('d-M-Y',strtotime($row['dob']));?></td>
        <td><?php echo date('d-M-Y',strtotime($row['completed']));?></td>
      </tr>
    <?php } ?>  
    </tbody>
  </table>
</div>

</body>
</html>
<!-- reference for date format -->
<!-- https://code.tutsplus.com/tutorials/working-with-date-and-time-in-php--cms-31768 -->
