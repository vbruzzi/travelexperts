<?php require "scripts/header.php"?>


<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">View users<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">View packages</a>
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
          $.ajax({
           type: 'POST',
           url: "scripts/changeuser.php",
           data: {val: val, id: id},
           success: function(result){
               //do something here with return value like alert
               alert(result);
           }
     })
        }
    </script>
<?php
    $url = $_SERVER['QUERY_STRING'];
    if($url == "users") {
        echo "<select name=\"145\" id=\"user\" onchange=\"changeUser(this)\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
        </select>";
    } elseif ($url == "packages") {

    } else {
        header('Location: dash.php?users');
        die();
    }

?>
</div>



<?php require "scripts/footer.php"?>