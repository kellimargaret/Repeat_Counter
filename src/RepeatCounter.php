<?php

    class RepeatCounter
    {
        function countRepeats($word, $string)
        {
            $match = 0;

            if ($word == $string) {
                $match = $match + 1;
            } else {
                return "No matches";
            }

            return $match;
        }
    }

?>
