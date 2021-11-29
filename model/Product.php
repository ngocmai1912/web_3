<?php
    class Product{
        public $id;
        public $name;
        public $inputDate;
        public $importPrice;
        public $price;
        public $type;
        public $quantity;
        public $image;
        
        public function __construct($id, $name, $inputDate, $importPrice, $price, $type, $quantity, $image)
        {
            $this->id = $id;
            $this->name = $name;
            $this->inputDate = $inputDate;
            $this->importPrice = $importPrice;
            $this->price = $price;
            $this->type = $type;
            $this->quantity = $quantity;
            $this->image = $image;
        }

    }

?>