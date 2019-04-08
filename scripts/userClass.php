<?php

class userClass{

  private  $UserId = 0;
  private  $Username = '';
  private  $Password = '';
  private  $FirstName = '';
  private  $MiddleInitial = '';
  private  $LastName = '';
  private  $Email = '';
  private  $Phone = '';
  private  $Address = '';
  private  $City = '';
  private  $Province = '';
  private  $Country = '';
  private  $Postal = '';
  private  $Role = '';

  Public function __construct($UserArray){
    $this->setUsername($UserArray['username']);
    $this->setPassword($UserArray['passwd1']);
    $this->setFirstName($UserArray['firstname']);
   // $this->setMiddleInitial($UserArray['middleini']);
    $this->setLastName($UserArray['lastname']);
    $this->setEmail($UserArray['email']);
    $this->setPhone($UserArray['phone']);
    $this->setAddress($UserArray['address']);
    $this->setCity($UserArray['city']);    
    $this->setProvince($UserArray['state']);
    $this->setCountry($UserArray['country']);
    $this->setPostal($UserArray['postal']);
    
  }

  public function setUsername($user){
    $this->Username = $user;
  }

  public function setPassword($pwd){
    $this->Password = password_hash($pwd, PASSWORD_DEFAULT);
  }

  public function setFirstName($fname){
    $this->FirstName = $fname;
  }

  public function setMiddleInitial($midini){
    $this->MiddleInitial = $midini;
  }

  public function setLastName($lname){
    $this->LastName = $lname;
  }

  public function setEmail($email){
    $this->Email = $email;
  }

  public function setPhone($phone){
    $this->Phone = $phone;
  }

  public function setAddress($address){
    $this->Address = $address;
  }

  public function setCity($city){
    $this->City = $city;
  }

  public function setProvince($province){
    $this->Province = $province;
  }

  public function setCountry($country){
    $this->Country = $country;
  }

  public function setPostal($postal){
    $this->Postal = $postal;
  }

  public function getUser(){
  return array("Username" => $this->Username,
                "Password" => $this->Password,
                "FirstName" => $this->FirstName,
                "MiddleInitial" => $this->MiddleInitial,
                "LastName" => $this->LastName,
                "Email" => $this->Email,
                "Phone" => $this->Phone,
                "Postal" => $this->Postal,
                "Address" => $this->Address,
                "City" => $this->City,
                "Province" => $this->Province,
                "Country" => $this->Country,
                "Role" => $this->Role
              );
  }

  public function __toString(){
    return $this->UserId.', '.
           $this->FirstName.', '.
           $this->MiddleInitial.', '.
           $this->LastName.', '.
           $this->Email.', '.
           $this->Position.', '.
           $this->Phone.', '.
           $this->Postal;
    }
}

 ?>
