<?php
    class Personne{
        private $prenom;
        private $nom;
        private $email;

        //LES GETTERS - ACCESSEURs
        public function getPrenom() {
            return $this->prenom;
        } 
        public function getNom() {
            return $this->nom;
        } 
        public function getEmail() {
            return $this->email;
        } 

        //LES SETTERS - MUTATEURs
        public function setPrenom($prenom) {
             $this->prenom = $prenom;
        }
        public function setNom($nom) {
             $this->nom = $nom;
        }
       
        //Affichage de l'objet en chaine de caractére
        public function __toString()
        {
            return $this->prenom.' '.$this->nom;
        }
    }

    $nouvellePersonne = new Personne();
     $nouvellePersonne->setPrenom("Momo");
     $nouvellePersonne->setNom("du 76");
    //echo $nouvellePersonne->getPrenom();

    echo "<br>";
    echo $nouvellePersonne;

    // echo $nouvellePersonne->getPrenom();
    // echo $nouvellePersonne->getNom();
    // echo $nouvellePersonne->getEmail();
?>