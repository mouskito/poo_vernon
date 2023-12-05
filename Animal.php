<?php

    abstract class Animal extends Mouv{
        
        
        public function calculSalaire(){
            return 1500;
        }
        
        public function manger(Personne $parametre){

            echo "Je mange  " .$parametre;
        }

        // public function dormir(){
        //     echo "Je dors";
        // }

        abstract public function dormir();



    }

?>