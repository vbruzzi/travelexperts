
<?php

  require "scripts/queries.php";
  require_once("scripts/userClass.php");
  require_once("scripts/user.php");
  require_once("scripts/serverdef.php");


  $dbh = mysqli_connect(dbHost, dbUser, dbPass, dbName);

  //retrieve userID and passWord from user login page and sanitize
  $username = mysqli_real_escape_string($dbh, $_POST['username']);
  $password = mysqli_real_escape_string($dbh, $_POST['password']);

  # gets user from database and set it as the user session
  $query = $dbh->query(userLogin($username, crypt($password, SALT)))->fetch_assoc();
  if(!$query){
    header("Location: register.php");
    die();
  }
  else{
    session_start();
    $_SESSION["user"] = new User($query["firstname"], $query["username"], $query["role"]);
    header("Location: index.php");
    die();
  }

?>
