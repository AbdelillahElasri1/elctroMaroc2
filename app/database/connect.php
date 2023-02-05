<?php

// class database 

    class Database 
    {
        private $servername = "localhost";
        private $username = "root";
        private $db_name = "electromaroc";
        private $password = "";

        public function connect()
        {
            try {
                $conn = new PDO("mysql:host=".$this->servername.";dbname=". $this->db_name , $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
                } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                }
        }
    }