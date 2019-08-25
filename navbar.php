<!--navbar page for menus-->
<div class="row">
    <div class="col text-right" >
        <nav class="navbar navbar-expand-sm">
            <ul class="navbar-nav">
                <li class="nav-item">
                <h2 class="text-white">Sharesies</h2>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col">
        <nav class="navbar navbar-expand-sm  justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">Work with us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">Gifts</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">Auto-invest</a>
                </li>
                <?php 
                    //toggle to show login, signup and logout button
                    if($_SESSION['username']==''){ 
                    echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link text-white\" href=\"login.php\">Log in</a>";
                    echo "</li>";
                    echo "<li class=\"nav-item\">";
                    echo "<a href=\"signup.php\" class=\"btn btn-light text-white\">Sign up</a>";
                    echo "</li>";
                 }else{
                    echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link text-white\" href=\"logout.php\">Log out</a>";
                    echo "</li>";     
                 } 
                 ?>    

            </ul>
        </nav>
    </div>
</div>