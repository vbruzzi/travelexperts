<?php 
    require 'queries.php';
    require "scripts/serverdef.php";
    $dbh = mysqli_connect(dbHost, dbUser, dbPass, dbName);
    if(isset($_POST['newRole'])) 
        {
            $newRole = $_POST['newRole'];
            $userId = $_POST['UserId'];
            $dbh->query(changeUser($userId, $newRole));
            switch($newRole) {
                case "1":
                    break;
                case "2":
                    $dbh->query(insertAgent($id));
                    break;
            }
        }
    mysqli_close($dbh);
?>