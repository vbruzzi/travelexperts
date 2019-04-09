<!-- Logout page by Kun Zhang -->
<!-- Team 2 Purple -->
<?php

session_start();
unset($_SESSION["username"]);  
header("Location: index.php");
?>