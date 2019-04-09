<!-- Welcome user function page by Kun Zhang -->
<!-- Team 2 Purple -->

<?php
function showUserGuest($user){
    if(isset($_SESSION["username"])){
        $user=$_SESSION["username"];
    } 
    else{
        $user="Guest";
    }
    echo '<p class="color">Welcome '.$user;
}
?>