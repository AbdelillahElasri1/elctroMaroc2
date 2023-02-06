<?php

    // class product models
    class Product extends Database 
    {
        private $id;
        public $libelle;
        public $code_barre;
        public $prix_achat;
        public $prix_final;
        public $prix_offre;
        public $description;
        public $category;
    }