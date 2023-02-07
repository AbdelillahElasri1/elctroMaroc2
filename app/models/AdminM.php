<?php

    // class admin models

    class AdminM extends Database
    {
        private $id;
        private $email;
        private $password;
        private $db;

        // method
        public function __construct()
        {
            $this->db = new Database();
        }
        
        // login method
        public function getLogin()
        {
            if($_REQUEST['email'] && $_REQUEST['password'])
            {
                if($_REQUEST['email'] == 'elasri@gmail.com' && $_REQUEST['password'] == '123')
                {
                    return 'login';
                } else {
                    return 'invalid user';
                }
            }
        }


    }