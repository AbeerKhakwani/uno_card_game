<?php

    /**
    * @backupGlobals disabled
    * $backupStaticAttribute disabled
    */

    require_once "src/Card.php";
    require_once "src/AllCards.php";

    class MyProjectClassTest extends PHPUnit_Framework_TestCase
    {
        function test_getNumber()
        {
            //Arrange
            $test_getNumber = new Card(7,"blue");

            //Act
            $result = $test_getNumber->getNumber();

            //Assert
            $this->assertEquals(7, $result);
        }
        function test_getColor()
        {
            //Arrange
            $test_getColor = new Card(7,"blue");

            //Act
            $result = $test_getColor->getColor();

            //Assert
            $this->assertEquals("blue", $result);
        }

        function test_setNumber()
        {
            //Arrange
            $number = 8;
            $color = "red";
            $test_setNumber = new Card($number, $color);


            $number2 = 5;

            //Act
            $test_setNumber->setNumber($number2);
            $result = $test_setNumber->getNumber();

            //Assert
            $this->assertEquals(5, $result);
        }
        function test_setColor()
        {
            //Arrange
            $number = 8;
            $color = "red";
            $test_setColor = new Card($number, $color);


            $color2 = "yellow";
            $allcards= new AllCards();
            $allcards2 =$allcards->getArray();
            var_dump($allcards2);

            //Act
            $test_setColor->setColor($color2);
            $result = $test_setColor->getColor();

            //Assert
            $this->assertEquals("yellow", $result);
        }



    }

?>
