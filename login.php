
<?php

  require "scripts/queries.php";
  require_once("scripts/userClass.php");
  require_once("scripts/user.php");
  require_once("scripts/serverdef.php");


  $dbh = mysqli_connect(dbHost, dbUser, dbPass, dbName);

  //retrieve userID and passWord from user login page
  $username = $_POST['username'];
  $password = $_POST['password'];
    //retrieve  passWord from user table in database
  $query = $dbh->query(userLogin($username, crypt($password, SALT)))->fetch_assoc();
  echo userLogin($username, crypt($password, SALT));
  echo ($query);
  if(!$query){
    echo '<script> alert("Please check your username!"); </script> ';
  }
  else{
    $_SESSION["user"] = new User($query["FirstName"], $query["Username"], $query["Role"]);
    header("Location: index.php");
    die();
  }

?>
