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
            $repeat_words = array();

            if (!in_array($word, $string_array)) {
                return "No match!";
            } else {
                foreach ($string_array as $word_string) {
                    if ($word == $word_string) {
                        array_push($repeat_words, $word_string);
                    }
                }
            }

            

            return count($repeat_words);
        }
    }

?>
