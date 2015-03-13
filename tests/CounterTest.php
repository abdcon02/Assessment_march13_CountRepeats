<?php

   require_once "src/Counter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_check_singleLetter()
        {
            //Arrange
            $test_Counter = new RepeatCounter;
            $input_string = "a";
            $input_search = "a";

            //Act
            $result = $test_Counter->countRepeats($input_string, $input_search);

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_check_singleLetter_False()
        {
            //Arrange
            $test_Counter = new RepeatCounter;
            $input_string = "a";
            $input_search = "b";

            //Act
            $result = $test_Counter->countRepeats($input_string, $input_search);

            //Assert
            $this->assertEquals(0, $result);

        }

        function test_check_singleWord()
        {
            //Arrange
            $test_Counter = new RepeatCounter;
            $input_string = "the";
            $input_search = "the";

            //Act
            $result = $test_Counter->countRepeats($input_string, $input_search);

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_check_singleLetterTwice()
        {
            //Arrange
            $test_Counter = new RepeatCounter;
            $input_string = "a a";
            $input_search = "a";

            //Act
            $result = $test_Counter->countRepeats($input_string, $input_search);

            //Assert
            $this->assertEquals(2, $result);

        }

        function test_check_singleWordTwice()
        {
            //Arrange
            $test_Counter = new RepeatCounter;
            $input_string = "big big house";
            $input_search = "big";

            //Act
            $result = $test_Counter->countRepeats($input_string, $input_search);

            //Assert
            $this->assertEquals(2, $result);

        }

        function test_check_singleLetterWordInString()
        {
            //Arrange
            $test_Counter = new RepeatCounter;
            $input_string = "there was a large mouse";
            $input_search = "a";

            //Act
            $result = $test_Counter->countRepeats($input_string, $input_search);

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_check_singleLetter_noResults()
        {
            //Arrange
            $test_Counter = new RepeatCounter;
            $input_string = "hello world";
            $input_search = "o";

            //Act
            $result = $test_Counter->countRepeats($input_string, $input_search);

            //Assert
            $this->assertEquals(0, $result);

        }




    }


 ?>
