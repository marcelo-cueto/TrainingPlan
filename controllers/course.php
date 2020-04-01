<?php
Class Course {
  private $id;
  private $name;
  private $startDate;
  private $endDate;
  private $training;
  private $cost;
  private $internal;


  public function __construct($name, $startDate, $endDate, $training,$cost, $internal, $id=null ) {
     $this->name = $name;
     $this->startDate = $startDate;
     $this->endDate = $endDate;
     $this->id = $id;
     $this->training=$training;
     $this->cost = $cost;
     $this->internal = $internal;


  }
  public function getId() {
     return $this->id;
  }
  public function getName() {
     return $this->name;
  }
  public function getStartDate() {
     return $this->startDate;
  }
  public function getEndDate() {
     return $this->endDate;
  }
  public function getTraining() {
     return $this->training;
  }
  public function setId($id) {
     $this->id = $id;
  }
  public function setNombre($name) {
     $this->name = $name;
  }
  public function setStartDate($startDate) {
     $this->startDate = $startDate;
  }
  public function setEndDate($endDate) {
     $this->endDate = $endDate;
  }
  public function setTraining($training) {
     $this->training = $training;
  }
  public function getCost() {
     return $this->cost;
  }
  public function setCost($cost) {
     $this->cost= $cost;
  }
  public function getInternal() {
     return $this->internal;
  }
  public function setInternal($internal) {
     $this->internal = $internal;
  }



}


 ?>
