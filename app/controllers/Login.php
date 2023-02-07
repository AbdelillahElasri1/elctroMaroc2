<?php

    // login controller
    class Login extends AdminM
    {
        // properties
        public $admin;

        //method
        public function __construct()
        {
            $this->admin = new AdminM();
        }
        public function login()
        {
            $result = $this->admin->getLogin();
            if($result == 'login')
            {
                header('location:pages/index');
            } else {
                header('location:pages/login');
            }
        }
    }