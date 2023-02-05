<?php

    // class admin models

    class Admin extends Database
    {
        private $id;
        private $email;
        private $password;

        public function __construct()
        {
            $this->connect();
        }


    }