<?php
    Class Management {
      private $id;
      private $name;
      private $manager;


      public function __construct($name, User $manager ) {
         $this->name = $name;
          $this->manager = $manager;
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
      public function getIdmanager() {
         return $this->idmanager;
      }

      public function setIdmanager($idmanager) {
         $this->idmanager = $idmanager;
      }




    }
?>
