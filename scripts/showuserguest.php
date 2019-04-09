<?php
function showUserGuest(){
    if(isset($_SESSION["user"])){
        $user=$_SESSION["user"]->getName();
    } 
    else{
        $user="Guest";
    }
    echo '<p class="color">Welcome '.$user;
}
?>