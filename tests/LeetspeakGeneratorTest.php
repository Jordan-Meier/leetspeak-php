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
        function test_translate_replaceO()
        {
            //Arange
            $test_LeetspeakGenerator = new LeetspeakGenerator;
            $input = "look";
            $input2 = "Organ";

            //Act
            $result = $test_LeetspeakGenerator->translate($input);
            $result2 = $test_LeetspeakGenerator->translate($input2);

            //Assert
            $this->assertEquals("l00k", $result);
            $this->assertEquals("0rgan", $result2);

        }
        function test_translate_replaceI()
        {
            //Arange
            $test_LeetspeakGenerator = new LeetspeakGenerator;
            $input = "Irritate";

            //Act
            $result = $test_LeetspeakGenerator->translate($input);

            //Assert
            $this->assertEquals("1rritat3", $result);
        }
        function test_translate_replaceS()
        {
            //Arange
            $test_LeetspeakGenerator = new LeetspeakGenerator;
            $input = "access";
            $input2 = "success";
            $input3 = "I love success not 'strings'";

            //Act
            $result = $test_LeetspeakGenerator->translate($input);
            $result2 = $test_LeetspeakGenerator->translate($input2);
            $result3 = $test_LeetspeakGenerator->translate($input3);

            //Assert
            $this->assertEquals("acc3zz", $result);
            $this->assertEquals("succ3zz", $result2);
            $this->assertEquals("1 l0v3 succ3zz n0t 'stringz'", $result3);
        }
    }




?>
