<?php
    Class CoursesUsers {
      private $id;
      private $iduser;
      private $idcourse;
      private $attendance;
      private $employee;
      private $manager;

      public function __construct(User $iduser, Course $idcourse,$attendance=0, ) {
         $this->id = $id;
         $this->iduser = $iduser;
         $this->idcourse = $idcourse;
         $this->employee=$employee;
         $this->manager=$manager;

      }
      public function getId() {
         return $this->id;
      }

      public function setId($id) {
         $this->id = $id;
      }
      public function getIdUser() {
         return $this->iduser;
      }

      public function setIdUser($iduser) {
         $this->iduser = $iduser;
      }

      public function getIdCourse() {
         return $this->idcourse;
      }

      public function setIdCourse($idcourse) {
         $this->idcourse = $idcourse;
      }
      public function getEmployee() {
         return $this->employee;
      }

      public function setEmployee($employee) {
         $this->employee = $employee;
      }
      public function getManager() {
         return $this->manager;
      }

      public function setManager($manager) {
         $this->manager = $manager;
      }




    }
?>
