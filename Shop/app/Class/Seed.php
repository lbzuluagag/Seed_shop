<?php
class Cust {
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
                        $germination_percent, $type, $id, $keyws, $category, $price) {
        $this->name = $name;
        $this->brand = $brand;
        $this->reviews = $reviews;
        $this->weight_amount = $weight_amount;
        $this->water_amount = $water_amount;
        $this->ground_fertility = $ground_fertility;
        $this->drought_tolerance = $drought_tolerance;
        $this->germination_percent = $germination_percent;
        $this->type = $type;
        $this->id = $id;
        $this->keyws = $keyws;
        $this->category  = $category;
        $this->price =  $price;
    }

}

?>