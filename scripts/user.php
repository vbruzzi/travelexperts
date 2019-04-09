<?php
class User {
    private $username;
    private $firstName;
    private $role;

    public function __construct($uname, $fname, $role){
        $this->username = $uname;
        $this->firstName = $fname;
        $this->role = $role;
    }
}
?>