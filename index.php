<?php
error_reporting(0);
session_start();

require_once("header.php");
require_once("navbar.php");

if((!isset($_SESSION['username']))||($_SESSION['username']=='')) {
    $username = "";       
}else
{
    $username = $_SESSION['username'];
}

?>
<h1 class="text-white"> Making investment easy  </h1>
<h3 class="text-white"><?php echo $username ?></h3>
<?php
require_once("footer.php");
?>