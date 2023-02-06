<?php

    // class category models
    class Category extends Database 
    {
        // properties
        public $name;
        public $description;
        public $image;

        // method
        public function __construct()
        {
            $this->connect();
        }
    }