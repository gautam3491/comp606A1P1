<!--logout page to destroy session-->
<?php
    session_start();
    session_destroy();
    header("Location: index.php");
?>
