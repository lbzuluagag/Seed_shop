<?php
    class Review{
        private $cust;
        private $seed;
        private $score;
        private $content;
        private $acc;

        function __construct($score,$content,$acc){
            $this->score = $score;
            $this->content = $content;
            $this->acc = $acc;
        }

        function getScore(){
            return $this->score;
        }

        function getContent(){
            return $this->content;
        }

        function getAcc(){
            return $this->acc;
        }

        function setScore($score){
            $this->score = $score;
        }

        function setContent($content){
            $this->content = $content;
        }

        function setAcc($acc){
            $this->acc = $acc;
        }

        function approval(){

        }
        function delete(){

        }    
    }

?>