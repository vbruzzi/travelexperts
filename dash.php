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
        function changeUser($user){
            
    </script>
<?php
    $url = $_SERVER['QUERY_STRING'];
    if($url == "users") {
        echo "<select id=\"myDropDown\" onchange=\"changeUser()\">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        </select>";
    } elseif ($url == "packages") {

    } else {
        header('Location: dash.php?users');
        die();
    }

?>
</div>



<?php require "scripts/footer.php"?>