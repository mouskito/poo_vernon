<?php
    class Ville{
        private $nom;
        private $departement;

        function __construct()
        {
            $this->nom = "Vernon";
            $this->departement = 27;
        }

        public function getNom(){
            return $this->nom;
        }
        public function setNom($nom){
             $this->nom = $nom;
        }

        public function getDepartement(){
            return $this->departement;
        }
        public function setDepartement($departement){
             $this->departement = $departement;
        }

        public function __toString()
        {
            return "La ville ". $this->nom." est dans le departement de ".$this->departement;
        }
    }
?>