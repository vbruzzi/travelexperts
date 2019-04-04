<?php 
    require 'queries.php';
    require "serverdef.php";
    $dbh = mysqli_connect(dbHost, dbUser, dbPass, dbName);
    if(isset($_POST['val'])) 
        {
            echo $_POST['val'];
            echo $_POST['id'];
            $newRole = $_POST['val'];
            $userId = $_POST['id'];
            $dbh->query(changeUser($userId, $newRole));
            switch($newRole) {  
                case "1":
                    break;
                case "3":
                    $dbh->query(insertAgent($id));
                    break;
            }
        }
    mysqli_close($dbh);
?>

<!--


 -->