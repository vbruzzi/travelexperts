<?php
# Checks if user has permission and if they're accessing the ?user or ?package url query
include "scripts/user.php";
session_start();
  if(isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
    if ($user->getRole() == 3) {
    } else {
      header('Location: index.php');
      die();
    }
  } else {
    header('Location: index.php');
    die();
  }

  $url = $_SERVER['QUERY_STRING'];
  if($url != "users" ){
      header('Location: dash.php?users');
      die();
}



?>
<?php require "scripts/header.php"?>
<div>
<style>
.agent {
  background-color: #E1D2EC;
}

.agent:hover {
  background: #D4B5EA !important;
}

</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Uses ajax to send data to server so it can change the table without refreshing 
    val is the new value, id is the user id, field is the field altered and prev is the previous value, necessary for changing to and from agent
-->
    <script>
        function changeUser(user){
          const val = user.value;
          const id = user.name;
          let field = user.className.split(" ");
          const prev = field[1];
          field = field[0];
          $.ajax({
           type: 'POST',
           url: "scripts/changeuser.php",
           data: {val: val, id: id, field:field, prev: prev},
           success: function() {
             alert ("Success!");
           }
     })
        }
    </script>


<?php
  # displays users if the url is ?users and packages if ?packages
  require "scripts/showusers.php";
    $url = $_SERVER['QUERY_STRING'];
    if($url == "users") {
      showUsers();
    } elseif ($url == "packages") {

    } 
?>
</div>



<?php require "scripts/footer.php"?>