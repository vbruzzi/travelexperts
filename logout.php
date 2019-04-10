<!-- Logout page by Kun Zhang -->
<!-- Team 2 Purple -->
<?php
#Log out
session_start();
unset($_SESSION["user"]);  
header("Location: index.php");
?>