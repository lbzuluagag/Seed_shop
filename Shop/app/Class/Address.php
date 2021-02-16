<?php
    class Address {
        private $region;
        private $city;
        private $street;
        private $phone;
        private $additional_info;
        private $cust;
        
        function __construct($region, $city, $street, $phone, $additional_info, $cust){
        
            $this->region = $region;
            $this->city = $city;
            $this->street = $street;
            $this->phone = $phone;
            $this->additional_info = $additional_info;
            $this->cust = $cust;
        }
        function getRegion() {
             return $this->region;
        }
        
        function getCity() {
             return $this->city;
        }
        
        function getStreet() {
             return $this->street;
        }
        
        function getPhone() {
             return $this->phone;
        }
        
        function getAdditionalInfo() {
             return $this->additional_info;
        }
        
        function getCust() {
             return $this->cust;
        }
        
        function setRegion($new_region) {
             $this->region = $new_region;
        }
        
        function setCity($new_city) {
             $this->city = $new_city;
        }
        
        function setStreet($new_street) {
             $this->street = $new_street;
        }
        
        function setPhone($new_phone) {
             $this->phone = $new_phone;
        }
        
        function setAdditionalInfo($new_additional_info) {
             $this->additional_info = $new_additional_info;
        }
        
        function setCust($new_cust) {
             $this->cust = $new_cust;
        }
    }


?>