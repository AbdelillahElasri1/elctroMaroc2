<?php

    // class client model
    class Client extends Database
    {
        // properties
        private $id;
        public $libelle;
        public $code_barre;
        public $prix_achat;
        public $prix_final;
        public $prix_offre;
        public $description;
        public $category;

        public function __construct()
        {
            $this->connect();
        }  
        
        
    }