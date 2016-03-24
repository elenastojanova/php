<?php

class Database {
  private $userName;
  private $password;
  private $email;

  public function __construct ( $UserName, $Password, $DbName ) {
    $this->userName = $UserName;
    $this->password = $Password;
    $this->email = $DbName;
  }

  public function user(){
  	echo "The last user was ".$this->userName. "with password:  ".$this->password." and the email: ".$this->email."<br>";
  }
}


$person = new Database ( 'Elena', 'pass$$$$', 'elena$yahoo.com' );
$person->user();

?>