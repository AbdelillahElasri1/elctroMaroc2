<?php

    // class command models
    class Command extends Database 
    {
        // properties
        public $date_creation;
        public $date_envoie;
        public $quantite;
        public $date_livraison;
        public $id_product;
        public $id_client;
        public $prix_total_product;
        public $prix_total_command;

        // method
        public function __construct()
        {
            $this->connect();
        }
    }