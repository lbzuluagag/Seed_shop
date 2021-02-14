<?php
class Seed {
    private $name;
    private $brand;
    private $reviews;
    private $weight_amount;
    private $water_amount;
    private $ground_fertility;
    private $drought_tolerance;
    private $germination_percent;
    private $type;
    private $id;
    private $keyws;
    private $category;
    private $price;
    private $seed_orders;
    
    function __construct($name, $brand, $weight_amount, $water_amount, $ground_fertility, $drought_tolerance, 
                         $germination_percent, $type, $id, $keyws, $category, $price){
    
        $this->name = $name;
        $this->brand = $brand;
        $this->weight_amount = $weight_amount;
        $this->water_amount = $water_amount;
        $this->ground_fertility = $ground_fertility;
        $this->drought_tolerance = $drought_tolerance;
        $this->germination_percent = $germination_percent;
        $this->type = $type;
        $this->id = $id;
        $this->keyws = $keyws;
        $this->category = $category;
        $this->price = $price;
    }

    function getName() {
         return $this->name;
    }
    
    function getBrand() {
         return $this->brand;
    }
    
    function getReviews() {
         return $this->reviews;
    }
    
    function getWeightAmount() {
         return $this->weight_amount;
    }
    
    function getWaterAmount() {
         return $this->water_amount;
    }
    
    function getGroundFertility() {
         return $this->ground_fertility;
    }
    
    function getDroughtTolerance() {
         return $this->drought_tolerance;
    }
    
    function getGerminationPercent() {
         return $this->germination_percent;
    }
    
    function getType() {
         return $this->type;
    }
    
    function getId() {
         return $this->id;
    }
    
    function getKeyws() {
         return $this->keyws;
    }
    
    function getCategory() {
         return $this->category;
    }
    
    function getPrice() {
         return $this->price;
    }
    
    function getSeedOrders() {
         return $this->seed_orders;
    }
    
    function setName($new_name) {
         $this->name = $new_name;
    }
    
    function setBrand($new_brand) {
         $this->brand = $new_brand;
    }
    
    function setReviews($new_reviews) {
         $this->reviews = $new_reviews;
    }
    
    function setWeightAmount($new_weight_amount) {
         $this->weight_amount = $new_weight_amount;
    }
    
    function setWaterAmount($new_water_amount) {
         $this->water_amount = $new_water_amount;
    }
    
    function setGroundFertility($new_ground_fertility) {
         $this->ground_fertility = $new_ground_fertility;
    }
    
    function setDroughtTolerance($new_drought_tolerance) {
         $this->drought_tolerance = $new_drought_tolerance;
    }
    
    function setGerminationPercent($new_germination_percent) {
         $this->germination_percent = $new_germination_percent;
    }
    
    function setType($new_type) {
         $this->type = $new_type;
    }
    
    function setId($new_id) {
         $this->id = $new_id;
    }
    
    function setKeyws($new_keyws) {
         $this->keyws = $new_keyws;
    }
    
    function setCategory($new_category) {
         $this->category = $new_category;
    }
    
    function setPrice($new_price) {
         $this->price = $new_price;
    }
    
    function setSeedOrders($new_seed_orders) {
         $this->seed_orders = $new_seed_orders;
    }

    static function recommend() {}

    static function search() {}
}

?>