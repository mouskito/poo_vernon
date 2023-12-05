<?php
    require "Personne.php";
    require "Ville.php";
    
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
   ?>