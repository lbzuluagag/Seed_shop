<?php
    class Cust {
        private $username;
        private $password;
        private $email;
        private $wallet;
        private $reviews;
        private $addresses;
        private $orders;
    
        function __construct($username,$password,$email,$wallet,$addresses) {
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->wallet = $wallet;
            // $this->name = $reviews;
            $this->addresses = $addresses;
        }

        function getUsername(){
            return $this->username;
        }
        function getPassword(){
            return $this->password;
        }
        function getEmail(){
            return $this->email;
        }
        function getWallet(){
            return $this->wallet;
        }
        // function getReviews(){
        //     return $this->reviews;
        // }
        function getAddresses(){
            return $this->addresses;
        }
        function setUsername($username){
            $this->username = $username;
        }
        function setPassword($password){
            $this->password = $password;
        }
        function setEmail($email){
            $this->email = $email;
        }
        function setWallet($wallet){
            $this->wallet = $wallet;
        }
        // function setReviews($reviews){
        //     $this->reviews = $reviews;
        // }
        function setAddresses($addresses){
            $this->addresses = $addresses;
        }
        function placeOrd(){

        }
        function cancelOrd(){

        }
        function placeReturn(){

        }

    }


?>