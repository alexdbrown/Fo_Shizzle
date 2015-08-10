<?php

    require_once "src/FoShizzle.php";

    class FoShizzleTest extends PHPUnit_Framework_TestCase
    {
        function test_makeFoShizzle_printZs()
        {
            $test_makeFoShizzle = new FoShizzle;
            $input_phrase = "s";

            $result = $test_makeFoShizzle->makeFoShizzle($input_phrase);


            $this->assertEquals("z", $result);
        }

        function test_makeFoShizzle_leaveCapitalSs()
        {
            $test_makeFoShizzle = new FoShizzle;
            $input_phrase = "S";

            $result = $test_makeFoShizzle->makeFoShizzle($input_phrase);


            $this->assertEquals("S", $result);
        }

        function test_makeFoShizzle_leaveFirstLetterOfWord()
        {
            $test_makeFoShizzle = new FoShizzle;
            $input_phrase = "sunshine";

            $result = $test_makeFoShizzle->makeFoShizzle($input_phrase);


            $this->assertEquals("sunzhine", $result);
        }
    }

?>
