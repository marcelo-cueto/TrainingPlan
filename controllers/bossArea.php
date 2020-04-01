<?php
    Class BossArea {
      private $id;
      private $iduser;
      private $idarea;


      public function __construct(User $iduser, Area $idarea ) {
         $this->id = $id;
         $this->iduser = $iduser;
         $this->idarea = $idarea;

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

      public function getIdAdmin() {
         return $this->idadmin;
      }

      public function setIdAdmin($idadmin) {
         $this->idadmin = $idadmin;
      }




    }
?>
