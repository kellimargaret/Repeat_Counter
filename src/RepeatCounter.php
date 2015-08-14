<?php

    class RepeatCounter
    {
        function countRepeats($word, $string)
        {
            $match = 0;

            //Convert all inputs to lowercase before comparing
            $word = strtolower($word);
            $string = strtolower($string);

            if ($word == $string) {
                $match = $match + 1;
            } else {
                return "No matches";
            }

            return $match;
        }
    }

?>
