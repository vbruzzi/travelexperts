<?php
require "queries.php";
$flag = setpassword("Zz111111","7");
if($flag){
    echo "password set success";
}
else{
    echo "password set failed";
}
?>