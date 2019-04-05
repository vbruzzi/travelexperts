<?php 
    require 'queries.php';
    require "serverdef.php";
    $dbh = mysqli_connect(dbHost, dbUser, dbPass, dbName);
    if(isset($_POST['val'])) 
        {
            $newRole = $_POST['val'];
            $userId = (int)$_POST['id'];
            $previous = $_POST['prev'];
            if($_POST['field'] == "role") {
                $dbh->query(changeUser($userId, $newRole));
                if($previous == "2" && $newRole != "2") {
                    $dbh->query(removeAgent($userId));
                }
                switch($newRole) {  
                    case "1":
                        break;
                    case "2":
                        $dbh->query(insertAgent($userId));
                        break;
                    case "3":
                        
                        break;
                }
            } elseif($_POST["field"] == "position") {
                $dbh->query(updateAgentPosition($userId, $newRole));
            } elseif($_POST["field"] == "city") {
                $dbh->query(updateAgentLocation($userId, $newRole));
            }
            
        }
    mysqli_close($dbh);
?>

<!--


 -->