<?php
    class Customer{
        public $id;
        public $fullname;
        public $address;
        public $phone;

        public function __construct($id, $fullname, $address, $phone)
        {
            $this->id = $id;
            $this->fullname = $fullname;
            $this->address = $address;
            $this->phone = $phone;
        }
    }
?>