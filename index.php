<?php
    require "Personne.php";
    require "Ville.php";
    require "Lion.php";
    require "Serpent.php";
    
    //instanciation
    $nouvellePersonne = new Personne();
    $nouvellePersonne->setPrenom("Momo");
    $nouvellePersonne->setNom("du 76");
   //echo $nouvellePersonne->getPrenom();

   echo "<br>";
   //echo $nouvellePersonne;
   
   // echo $nouvellePersonne->getPrenom();
   // echo $nouvellePersonne->getNom();
   // echo $nouvellePersonne->getEmail();
   
   //VILLE
   $ville = new Ville();
   
   //Affichage par défaut
   echo $ville;
   echo "<br>";
   
   //ajout ville
   $ville->setNom("Paris");
   $ville->setDepartement(75);
   echo $ville;
   
   echo "<br>";
   echo "<hr>";
   echo "<hr>";
   //HERITAGE
   $simba = new Lion();
   
   echo $simba->seDeplacer();
   echo $simba->calculSalaire();
   
   //Les typages
   echo "<hr>";
   echo "<hr>";
   echo "------------";
   $pers = new Personne();
   $pers->setNom("Camara");
   echo $simba->manger($pers);
   echo "------------<hr>";

   
   $snake = new Serpent();
   //echo $snake->calculSalaire();


   ?>