<?php
    class Address {
        private $region;
        private $city;
        private $street;
        private $phone;
        private $additional_info;
        private $cust;

        function __construct($region,$city,$street,$phone,$additional_info){
            $this->region = $region;
            $this->city = $city;
            $this->street = $street;
            $this->phone = $phone;
            $this->additional_info = $additional_info;
        }


        
    }


?>