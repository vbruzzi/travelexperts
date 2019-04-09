<!-- User login page by Ken Zhang -->
<!-- Team 2 Purple -- -->
<?php

      //Check user login information
    require "scripts/queries.php";
      //retrieve userID and passWord from user login page
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);  
      // echo "user password is".$password; 
       //retrieve  passWord from user table in database
      $dbPwd = getPwd($username);
      // echo "password is".$dbPwd;
      if(!$dbPwd){
        echo '<script> alert("Please check your username!"); </script> ';
        header("Location:register.php");
      }
      else{
         if(password_verify($password, $dbPwd)){
           // login information is good, jump to order page for check out 
           // or packages page for selections
              session_start();
              $_SESSION["username"]=$username;
              if(!isset($_SESSION["pkg"])){
                header("Location:packages.php");
              }
              else
              {
                header("Location:order.php");
              }
            }
            else
            {
              echo '<script> alert("password Invalid!"); </script> ';
              header("Location:register.php");
            }
      }
    
         
    ?>
