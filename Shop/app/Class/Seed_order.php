<?php
class Seed_order {
    private $seed;
    private $order;
    private $amount;
    
    function __construct($seed, $order, $amount){
    
        $this->seed = $seed;
        $this->order = $order;
        $this->amount = $amount;
    }
    function getSeed() {
         return $this->seed;
    }
    
    function getOrder() {
         return $this->order;
    }
    
    function getAmount() {
         return $this->amount;
    }
    
    function setSeed($new_seed) {
         $this->seed = $new_seed;
    }
    
    function setOrder($new_order) {
         $this->order = $new_order;
    }
    
    function setAmount($new_amount) {
         $this->amount = $new_amount;
    }
    
}
?>