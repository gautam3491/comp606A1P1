<?php
session_start();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
<style>
    body{
        background-color: grey;
        margin: 0 400 0 400;
    }
    .log-in{
        background-color: #EF496F;
    }
    .log-info{
        background-color: white;
        height: 680px;
    }
    .log-btn{
        background-color: white;
    }
    .btn{
        border-radius: 50px;
        background-color: grey;
    }
</style>
<body>
<div class="container">
    <div class="row log-in">
        <div class="col text-white">
            <h3><a href="index.php" class="text-white"><</a></h3>
        </div>
        <div class="col text-center text-white">
            <h3>Log in</h3>
        </div>
        <div class="col text-right text-white">
            <h3>?</h3>
        </div>
    </div>
    <div class="row log-info">
        <div class="container">
            <form action="login_page.php" method="POST">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" required>
                </div>
                <button type="submit" class="btn btn-default btn-block">Log in</button>
                <br/>
                <a href="signup.php"><input type="button" value="Not Registered Yet!!" class="btn btn-default btn-block"/></a>
                <br />
                <?php if(isset($_SESSION['error'])){
                    echo "<p class='alert alert-danger text-center'>";
                    echo $_SESSION['error'];
                    echo "</p>";
                    session_destroy();
                } ?>
            </form>
        </div>
    </div>
    <div class="row log-btn">
        <!--<input type="submit" value="Log in" class="btn btn-light btn-block text-white"/>-->
    </div>
</div>
</body>