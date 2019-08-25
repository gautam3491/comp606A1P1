<!--signup page-->
<?php
session_start();
if(isset($_SESSION['username'])){
    header("location:index.php");
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
 
<style>
    body{
        background-color: grey;
        margin: 0 400 0 400;
    }
    .sign-up{
        background-color: #EF496F;
    }
    .sign-info{
        background-color: white;
        height: 780px;
    }
    .sign-btn{
        background-color: white;
    }
    .btn{
        border-radius: 50px;
        background-color: grey;
    }
</style>
<body>
<div class="container">
    <div class="row sign-up">
        <div class="col text-white">
            <h3><a href="index.php" class="text-white"><</a></h3>
        </div>
        <div class="col text-center text-white">
            <h3>Sign up</h3>
        </div>
        <div class="col text-right text-white">
            <h3>?</h3>
        </div>
    </div>
    <div class="row sign-info">
        <div class="container">
            <form action="signup_page.php" method="POST" id="registration" name="registration">
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" >
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" >
                </div>
                <div class="form-group">
                    <label for="phoneno">Phone No:</label>
                    <input type="number" class="form-control" id="phoneno" name="phoneno" >
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="emails" >
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" >
                </div>
                <button type="submit" class="btn btn-default btn-block">Sign up</button>
                <br/>
                <a href="login.php"><input type="button" value="Already Registered!!" class="btn btn-default btn-block"/></a>
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
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--jquery validation plugin-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<!--validation jquery script-->
<script src="form_validation.js"></script>