<?php
    class FoShizzle
    {
        function makeFoShizzle($input_phrase)
        {
            for($i = 0; $i < strlen($input_phrase); $i++){
                if ($input_phrase[$i] === strtolower("s") ) {
                    $input_phrase[$i] = "z";
                }

            }
            return $input_phrase;
        }
    }

?>
