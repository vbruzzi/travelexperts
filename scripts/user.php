<?php
# User class for sessions
class User {
    private $username;
    private $firstName;
    private $role;

    public function __construct($uname, $fname, $role){
        $this->username = $uname;
        $this->firstName = $fname;
        $this->role = $role;
    }
    public function getRole() {
        return $this->role;
    }
}
    
?>