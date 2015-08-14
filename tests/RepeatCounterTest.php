<?php

    require_once "src/RepeatCounter.php";

    class TestRepeatCounter extends PHPUnit_Framework_TestCase
    {
        //Input the same letter into both fields to receive a successful match.
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

        //Input the same word, no matter the case, into both fields to receive a successful match.
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

        //Receive successful match for a word when it is found in a string of words.
        function test_wordinStringMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "Disneyland";
            $input_string = "We are going to Disneyland";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(1, $result);
        }

        //Receive successful match when a word is used multiple times in a string of words.
        function test_multWordsinString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "House";
            $input_string = "My house is your house";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(2, $result);

        }
    }

?>
