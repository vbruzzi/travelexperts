
<?php
      //Check user login information
    require "scripts/queries.php";
      //retrieve userID and passWord from user login page
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);  
    //   echo "user password is".$password; 
       //retrieve  passWord from user table in database
      $dbPwd = getPwd($username);
    //   echo "password is".$dbPwd;
      if(!$dbPwd){
        echo '<script> alert("Please check your username!"); </script> ';
      }
      else{
         if(password_verify($password, $dbPwd)){
           
              session_start();
              $_SESSION["username"]=$username;
              $url = $_SESSION['ref'];
              echo $url;
              header("Location:$url"); 
            }
            else
            {
              echo '<script> alert("password Invalid!"); </script> ';
            }
      }
    
         
    ?>
