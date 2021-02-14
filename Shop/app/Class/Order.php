<?php
class Order {
    private $total;
    private $cust;
    private $id;
    private $date;
    private $ship_addr;
    private $acc;
    private $seed_order;
    
    function __construct($total, $cust, $id, $date, $ship_addr, $acc){
    
        $this->total = $total;
        $this->cust = $cust;
        $this->id = $id;
        $this->date = $date;
        $this->ship_addr = $ship_addr;
        $this->acc = $acc;
    }

    function getTotal() {
         return $this->total;
    }
    
    function getCust() {
         return $this->cust;
    }
    
    function getId() {
         return $this->id;
    }
    
    function getDate() {
         return $this->date;
    }
    
    function getShipAddr() {
         return $this->ship_addr;
    }
    
    function getAcc() {
         return $this->acc;
    }
    
    function getSeedOrder() {
         return $this->seed_order;
    }
    
    function setTotal($new_total) {
         $this->total = $new_total;
    }
    
    function setCust($new_cust) {
         $this->cust = $new_cust;
    }
    
    function setId($new_id) {
         $this->id = $new_id;
    }
    
    function setDate($new_date) {
         $this->date = $new_date;
    }
    
    function setShipAddr($new_ship_addr) {
         $this->ship_addr = $new_ship_addr;
    }
    
    function setAcc($new_acc) {
         $this->acc = $new_acc;
    }
    
    function setSeedOrder($new_seed_order) {
         $this->seed_order = $new_seed_order;
    }

    function add_seed($seed) {}

    function del_seed($seed) {}
        
}

?>