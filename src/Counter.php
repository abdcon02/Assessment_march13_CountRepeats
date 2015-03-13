<?php

    class RepeatCounter
    {

        function countRepeats($string, $search)
        {
            $string_array = explode(" ", $string);
            //$search_array = explode(" ", $search);
            $counter = 0;

            foreach($string_array as $word){
                $word_array = array($word);
                if(in_array($search, $word_array)){
                    ++$counter;
                }
            }
        
            return $counter;

        }



    }

?>
