<?php
    class User{
        public $id;
        public $username;
        public $password;
        public $fullname;
        public $email;

        public function __construct($id, $username, $password, $fullname, $email)
        {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->fullname = $fullname;
            $this->email = $email;
        }

        function set_id($id){
            $this->id = $id;
        }
        function get_id() {
            return $this->id;
        }

        function set_username($username){
            $this->username = $username;
        }
        function get_username(){
            return $this->username;
        }

        function set_password($password){
            $this->password = $password;
        }
        function get_password(){
            return $this-> password;
        }

        function set_fullname($fullname){
            $this->fullname = $fullname;
        }
        function get_fullname(){
            return $this->fullname;
        }

        function set_email($email){
            $this->email = $email;
        }
        function get_email(){
            return $this->email;
        }
    }
?>