<!-- Welcome user function page by Kun Zhang -->
<!-- Team 2 Purple -->

<?php
function showUserGuest(){
    if(isset($_SESSION["user"])){
        $user=$_SESSION["user"]->getName();
        echo "<small>Welcome, $user</small>";
    } 
    else{ echo '<p class="color">Welcome, Guest';
        echo "<a href='register.php'><small> [Login]</small></a>";
       
    }
}
//Generate a random booking number with 2 capital letters followed by 3 digits
function bookingNum(){
       $num=rand(100,500);
       $letter1=strtoupper(chr(rand(65,90)));
       $letter2=strtoupper(chr(rand(65,90)));
       $bNum = $letter1.$letter2.(string)$num;
       return $bNum;
}

//  showUserGuest('tom');
//  echo "<br>";
//  echo bookingNum();
?>