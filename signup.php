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
        height: 680px;
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
            <form action="signup_page.php" method="POST">
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>
                <div class="form-group">
                    <label for="middlename">Middle Name:</label>
                    <input type="text" class="form-control" id="middlename" name="middlename" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" required>
                </div>
                <button type="submit" class="btn btn-default btn-block">Sign up</button>
                <br/>
                <a href="login.php"><input type="button" value="Already Registered!!" class="btn btn-default btn-block"/></a>
            </form>
        </div>
    </div>
    <div class="row sign-btn">
        <!--<input type="submit" value="Log in" class="btn btn-light btn-block text-white"/>-->
    </div>
</div>
</body>