<?php

    class AllCards {

        private $all_cards= array();

    function __construct(){

        $arrayColors = array("yellow", "blue", "green", "red");

        foreach($arrayColors as $color){
            for($i=0; $i <= 13 ;$i++){
                $newCard = new Card($i,$color);
                array_push($this->all_cards,$newCard);
            }
        }



    }


        function addToArray() {

        }


        function getArray(){
            return $this->all_cards;
        }

    }

?>
