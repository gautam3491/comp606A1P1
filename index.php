<?php
include_once("header.php");
include_once("navbar.php");
if (isset($_SESSION["username"]) && ($_SESSION["username"]!='')) {
    $username = $_SESSION['username'];
    
}else
{
    $username = "";    
}

?>
<h1 class="text-white"> Making investment easy</h1>
<h2></h2>
<?php
include_once("footer.php");
?>