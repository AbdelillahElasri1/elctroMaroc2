<?php

    // user = {clients, admin}
    class User extends Controller
    {
        public function __construct()
        {

        }
        public function register()
        {
            // check for post
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                // proccess form
                // sanitize post data 
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //init data
                $data = [
                    'firstName' => trim($_POST['firstName']),
                    'lastName' => trim($_POST['lastName']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'firstName_err' => '',
                    'lastName_err' => '',
                    'email_err' => '',
                    'password_err' => ''
                ];

                // validate email
                if(empty($data['email']))
                {
                    $data['email_err'] = 'please enter email';
                }

                // validate firstName
                if(empty($data['firstName']))
                {
                    $data['firstName_err'] = 'please enter firstName';
                }

                // validate lastName
                if(empty($data['lastName']))
                {
                    $data['lastName_err'] = 'please enter lastName';
                }
                
                //validate password
                if(empty($data['password']))
                {
                    $data['password_err'] = 'please enter password';
                } elseif(strlen($data['password']) < 6)
                {
                    $data['password_err'] = 'Password must be at least 6 characters';
                }
                
                // make sure errors are empty
                if(empty($data['firstName_err']) && empty($data['lastName_err']) && empty($data['email_err']) && empty($data['password_err']))
                {
                    // validated
                    die('SUCCESS');
                } else {
                    // load view with errors
                    $this->view('pagesClients/register', $data);
                }

            } else {
                // init data
                $data = [
                    'firstName' => '',
                    'lastName' => '',
                    'email' => '',
                    'password' => '',
                    'firstName_err' => '',
                    'lastName_err' => '',
                    'email_err' => '',
                    'password_err' => ''
                ];
                // load view 
                $this->view('user/register', $data);
            }
        }
        public function login()
        {
            // check for post
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                // proccess form
            } else {
                // load form
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_err' => '',
                    'password_err' => ''
                ];
                // load view 
                $this->view('user/login', $data);
            }
        }
    }