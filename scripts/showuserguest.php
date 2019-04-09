<!-- Welcome user function page by Kun Zhang -->
<!-- Team 2 Purple -->

<?php

    // function shows welcome guest or welcome username and also login logout link 

function showUserGuest($user=""){
    if(($user=="Guest")||($user=='')){
        if(!isset($ref)){
            $ref="index.php";
        }
        echo '<p class="color">Welcome Guest';
        echo "<a href='register.php?ref=".$ref."'><small>[login]</small></a>";
    } 
    else{ echo '<p class="color">Welcome '.$user;
        echo "<a href='logout.php?'><small>[logout]</small></a>";
       
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