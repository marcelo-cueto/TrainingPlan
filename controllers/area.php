<?php
    Class Area {
      private $id;
      private $name;
      private $idmanagement;


      public function __construct($name, Management $idmanagement ) {
         $this->name = $name;
          $this->management = $management;
         $this->id = $id;

      }
      public function getId() {
         return $this->id;
      }
      public function getName() {
         return $this->name;
      }

      public function setId($id) {
         $this->id = $id;
      }
      public function setName($name) {
         $this->name = $name;
      }
      public function getIdmanagement() {
         return $this->idmanagement;
      }

      public function setIdmanagement($idmanagement) {
         $this->idmanagement = $idmanagement;
      }




    }
?>
