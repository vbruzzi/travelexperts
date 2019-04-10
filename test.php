<?php 
require "scripts/serverdef.php";
require_once("scripts/queries.php");

echo userLogin("JDelton", crypt("Change", SALT));
echo crypt("Change", SALT);

?>