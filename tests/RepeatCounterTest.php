<?php

    require_once "src/RepeatCounter.php";

    class TestRepeatCounter extends PHPUnit_Framework_TestCase
    {
        //Match single letters.
        function test_oneLetterMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "k";
            $input_string = "k";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals("k", 1, $result);
        }
    }

?>