<?php 
    function showUserGuest($user){
    echo ' <p class="color"><small> Welcome '.$user.'</small>';
    if($user != "Guest"){
        echo  "<a href='logout.php'><small>[logout]</small></a>";
        echo '</p>';
    }
    // else{
    //     echo "<a href='register.php?ref='".$_SERVER['REQUEST_URI']."'><small>[login]</small></a>";
    // }

}
?>