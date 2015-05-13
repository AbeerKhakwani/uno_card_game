<?php

    class Card
    {
        private $number;
        private $color;
        private $image;


        function __construct($number, $color)
        {
            $this->number= $number;
            $this->color = $color;
        }

        function getNumber() {
            return $this->number;
        }

        function getColor() {
            return $this->color;
        }

        function setNumber($new_number) {
            $this->number = $new_number;
        }

        function setColor($new_color) {
            $this->color = $new_color;
        }



    }





?>
