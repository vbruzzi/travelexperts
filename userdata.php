<?php  
require "scripts/showuserguest.php";
session_start();
if(!isset($_SESSION["username"])){
    $user = "Guest";
    $_SESSION["ref"] = "packages.php";
    $ref = $_SESSION["ref"];
}
else{
    $user = $_SESSION["username"];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New User Registration </title>
</head>
<body>
<?php showUserGuest($user); 
        if($user=="Guest") {
        echo "<a href='register.php?ref='".$_SERVER['REQUEST_URI']."'><small>[login]</small></a>";
    }?>
    <?php
        require_once("scripts/queries.php");
        require_once("scripts/userClass.php");
        $userData = new userClass($_POST);

        function addUser($user){

        //Check firstname and lastname
        $regex = "/^[A-Z][a-zA-Z .]*$/";
            $has_matches = preg_match($regex,$user->getUser()["FirstName"]);

            if(!$has_matches){
            print("please check your first name".$user->getUser()["FirstName"]);
            }
            else{
                $has_matches = preg_match($regex,$user->getUser()["LastName"]);
                    if(!$has_matches){
                        echo "Please check your last name";
                    }
            }
        //Check email
            if(!filter_var($user->getUser()['Email'], FILTER_VALIDATE_EMAIL)){
                print("Please check your email address");
            }

        $sql = "insert into users (";
        $sql .= "FirstName, LastName, Username, Password, Email, Phone, Address, City, Province, Country, Postal ";
        $sql .= ") values (";
        $sql .= "'". $user->getUser()["FirstName"] . "'";
        $sql .= ", '".$user->getUser()["LastName"]. "'";
        $sql .= ", '".$user->getUser()["Username"] . "'";
        $sql .= ", '".$user->getUser()["Password"] . "'";
        $sql .= ", '".$user->getUser()["Email"] . "'";
        $sql .= ", '".$user->getUser()["Phone"] . "'";
        $sql .= ", '".$user->getUser()["Address"] . "'";
        $sql .= ", '".$user->getUser()["City"] . "'";
        $sql .= ", '".$user->getUser()["Province"] . "'";
        $sql .= ", '".$user->getUser()["Country"] . "'";
        $sql .= ", '".$user->getUser()["Postal"] . "'";
        $sql .= ")";

        return $sql;
        }
        
        if(doQuery(addUser($userData)))
        {
            print("New User Inserted.");
            header("Location:$ref");
        }
        else{
            echo addUser($userData);
            
            print("Something is wrong...failed");

        }
    ?>

</body>
</html>