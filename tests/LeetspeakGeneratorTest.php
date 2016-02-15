<?php
    require_once "src/LeetspeakGenerator.php";

    class LeetspeakGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_translate_replaceE()
        {
            //Arange
            $test_LeetspeakGenerator = new LeetspeakGenerator;
            $input = "leek";
            $input2 = "Edge";

            //Act
            $result = $test_LeetspeakGenerator->translate($input);
            $result2 = $test_LeetspeakGenerator->translate($input2);

            //Assert
            $this->assertEquals("l33k", $result);
            $this->assertEquals("3dg3", $result2);

        }
    }




?>
