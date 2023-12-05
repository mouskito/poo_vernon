<?php
    //Les classes
    class User{
        //LEs attributs ou propriétés
        public $prenom;
        public $nom;
        public $email;

        //CONSTANTES
        const NOMBRE_DE_BRAS = 2;


        //Constructeur par défaut (sans parametre)
        /*public function __construct() {
           //$this->prenom = "nom par defaut";
        }*/
        //Constructeur avec parametre
        public function __construct($prenomPara, $nomPara) {
           $this->prenom = $prenomPara;
           $this->nom = $nomPara;
        }
        //Les méthodes
        public function hello(){
            echo "Salut les gens";
        }

        
    }
    //Les objets
    //instanciation
    $homer = new User("homer","simpson"); // Variable d'instance
    $bart = new User("bart","simpson"); // Variable d'instance
    
    //Affichage de la variable prenom
    echo $homer->prenom;
    $homer->prenom = "MOMO";
    echo $homer->prenom;
    
    //Affichage de la constante
    echo User::NOMBRE_DE_BRAS;

    $homer->hello();

    echo "<br>";

    print_r ($homer);
    print_r ($bart);



?>