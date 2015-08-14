<?php

    class RepeatCounter
    {
        function countRepeats($word, $string)
        {
            $match = 0;

            //Convert all inputs to lowercase before comparing
            $word = strtolower($word);
            $string = strtolower($string);

            $string_array = explode(" ", $string);

            foreach ($string_array as $word_string) {
                if ($word_string == $word) {
                    $match.= +1;
                }
            }

            return $match;
        }
    }

?>
