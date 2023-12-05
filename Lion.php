<?php
    require "Animal.php";
    
    class Lion extends Animal{

        public function seDeplacer()
        {
            $mere = Animal::seDeplacer();
            echo $mere. "<hr>";

            $mere=" et je suis la classe Fille, j'hérite de ma mére"; 
            
            return $mere;
        }

        public function calculSalaire()
        {
            $salaire = Animal::calculSalaire();
       
            $salaire = $salaire+1000; 
            
            return $salaire;
        }

        public function dormir() {
            echo "Je dors comme un lion";
        }
    }

?>