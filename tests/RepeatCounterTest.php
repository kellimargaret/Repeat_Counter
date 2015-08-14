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
            $this->assertEquals(1, $result);
        }

        //Match same word no matter the case
        function test_caseWordMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "HELLO";
            $input_string = "hello";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(1, $result);
        }
    }

?>
