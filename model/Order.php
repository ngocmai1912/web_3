<?php
    class Order{
        public $id;
        public $customerID;
        public $productID;
        public $userID;
        public $timeCreate;
        public $totalPrice;
        public $dateOfIssue;
        public $status;

        public function __construct($id, $customerID, $productID, $userID, $timeCreate, $totalPrice, $dateOfIssue, $status)
        {
            $this->id = $id;
            $this->customerID = $customerID;
            $this->productID = $productID;
            $this->userID = $userID;
            $this->timeCreate = $timeCreate;
            $this->totalPrice = $totalPrice;
            $this->dateOfIssue = $dateOfIssue;
            $this->status = $status;
        }
    }
?>