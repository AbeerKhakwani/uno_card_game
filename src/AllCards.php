<?php

    class AllCards {

        private $all_cards= array();

    function __construct(){

        $this->all_cards[]=     new Card(0,"red");
        $this->all_cards[]=     new Card(1,"red");
        $this->all_cards[]=     new Card(2,"red");
        $this->all_cards[]=     new Card(3,"red");
        $this->all_cards[]=     new Card(4,"red");
        $this->all_cards[]=     new Card(5,"red");
        $this->all_cards[]=     new Card(6,"red");
        $this->all_cards[]=     new Card(7,"red");
        $this->all_cards[]=     new Card(8,"red");
        $this->all_cards[]=     new Card(9,"red");
        $this->all_cards[]=     new Card(0,"yellow");
        $this->all_cards[]=     new Card(1,"yellow");
        $this->all_cards[]=     new Card(2,"yellow");
        $this->all_cards[]=     new Card(3,"yellow");
        $this->all_cards[]=     new Card(4,"yellow");
        $this->all_cards[]=     new Card(5,"yellow");
        $this->all_cards[]=     new Card(6,"yellow");
        $this->all_cards[]=     new Card(7,"yellow");
        $this->all_cards[]=     new Card(8,"yellow");
        $this->all_cards[]=     new Card(9,"yellow");
        $this->all_cards[]=     new Card(0,"green");
        $this->all_cards[]=     new Card(1,"green");
        $this->all_cards[]=     new Card(2,"green");
        $this->all_cards[]=     new Card(3,"green");
        $this->all_cards[]=     new Card(4,"green");
        $this->all_cards[]=     new Card(5,"green");
        $this->all_cards[]=     new Card(6,"green");
        $this->all_cards[]=     new Card(7,"green");
        $this->all_cards[]=     new Card(8,"green");
        $this->all_cards[]=     new Card(9,"green");
        $this->all_cards[]=     new Card(0,"blue");
        $this->all_cards[]=     new Card(1,"blue");
        $this->all_cards[]=     new Card(2,"blue");
        $this->all_cards[]=     new Card(3,"blue");
        $this->all_cards[]=     new Card(4,"blue");
        $this->all_cards[]=     new Card(5,"blue");
        $this->all_cards[]=     new Card(6,"blue");
        $this->all_cards[]=     new Card(7,"blue");
        $this->all_cards[]=     new Card(8,"blue");
        $this->all_cards[]=     new Card(9,"blue");
        $this->all_cards[]=     new Card(10,"red");
        $this->all_cards[]=     new Card(11,"red");
        $this->all_cards[]=     new Card(12,"red");
        $this->all_cards[]=     new Card(13,"red");
        $this->all_cards[]=     new Card(10,"yellow");
        $this->all_cards[]=     new Card(11,"yellow");
        $this->all_cards[]=     new Card(12,"yellow");
        $this->all_cards[]=     new Card(13,"yellow");
        $this->all_cards[]=     new Card(10,"green");
        $this->all_cards[]=     new Card(11,"green");
        $this->all_cards[]=     new Card(12,"green");
        $this->all_cards[]=     new Card(13,"green");
        $this->all_cards[]=     new Card(10,"blue");
        $this->all_cards[]=     new Card(11,"blue");
        $this->all_cards[]=     new Card(12,"blue");
        $this->all_cards[]=     new Card(13,"blue");


    
    }


        function addToArray() {

        }


        function getArray(){
            return $this->all_cards;
        }

    }

?>
