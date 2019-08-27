<?php 
session_start();
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
  <h2>Stacked form</h2>
  <form action="insert.php" method="POST">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age" required>
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth:</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter Date of Birth" name="dob" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <br />
        <?php 
            if(isset($_SESSION['error'])){
            echo "<p class='alert alert-danger text-center'>";
            echo $_SESSION['error'];
            echo "</p>";
            session_destroy();
                } 
        ?>
  </form>
</div>

</body>
</html>
