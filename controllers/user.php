<?php
Class Usuario {
  private $id;
  private $name;
  private $idnumber;
  private $admin;
  private $password;
  private $email;
  private $management;
  private $hiredate;
  private $birthdate;

  public function __construct($name, $idnumber, $password, $admin=0,$email, $management,$hiredate,$birthdate, $id=null ) {
     $this->name = $name;
     $this->idnumber = $idnumber;
     $this->admin = $admin;
     $this->id = $id;
     $this->password=$password;
     $this->email = $email;
     $this->management = $management;
     $this->hiredate = $hiredate;
     $this->birthdate = $birthdate;

  }
  public function getId() {
     return $this->id;
  }
  public function getName() {
     return $this->name;
  }
  public function getIdnumber() {
     return $this->idnumber;
  }
  public function getAdmin() {
     return $this->admin;
  }
  public function getPassword() {
     return $this->password;
  }
  public function setId($id) {
     $this->id = $id;
  }
  public function setName($name) {
     $this->name = $name;
  }
  public function setLegajo($legajo) {
     $this->legajo = $legajo;
  }
  public function setAdmin($admin) {
     $this->admin = $admin;
  }
  public function setPassword($password) {
     $this->password = $password;
  }
  public function getEmail() {
     return $this->email;
  }
  public function setEmail($email) {
     $this->email = $email;
  }
  public function getManagement() {
     return $this->management;
  }
  public function setManagement($management) {
     $this->management = $management;
  }
  public function getHire() {
     return $this->hiredate;
  }
  public function setHire($hiredate) {
     $this->hiredate = $hiredate;
  }
  public function getBirth() {
     return $this->birthdate;
  }
  public function setBirth($birthdate) {
     $this->birthdate = $birthdate;
  }


}


 ?>
