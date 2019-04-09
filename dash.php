


<?php 

  if(!isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
    if ($user["role"] == 3) {    
    } else {
      header('Location: index.php');
      die();
    }
  } else {
    header('Location: /');
    die();
  }

  $url = $_SERVER['QUERY_STRING'];
  if($url != "users" ){
      header('Location: dash.php?users');
      die();
}

echo $x; 



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

<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">View users<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?packages">View packages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">View packages</a>
      </li>
    </ul>
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
  require "scripts/showusers.php";
    $url = $_SERVER['QUERY_STRING'];
    if($url == "users") {
      showUsers();
    } elseif ($url == "packages") {

    } 
?>
</div>



<?php require "scripts/footer.php"?>