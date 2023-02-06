<?php

    // class client model
    class Client extends Database
    {
        // properties
        private $id;
        public $nom_complete;
        public $email;
        public $nbr_tele;
        public $addresse;
        public $ville;
        public $password;
    

        public function __construct()
        {
            $this->connect();
        }  
        
        
    }