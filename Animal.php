<?php

    abstract class Animal{
        protected function seDeplacer(){
            echo "Je me déplace";
        }
        
        public function calculSalaire(){
            return 1500;
        }
        
        public function manger(){
            echo "Je mange";
        }

        // public function dormir(){
        //     echo "Je dors";
        // }

        abstract public function dormir();



    }

?>