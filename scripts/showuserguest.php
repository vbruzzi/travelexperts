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