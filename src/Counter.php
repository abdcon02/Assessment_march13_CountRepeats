<?php

    class RepeatCounter
    {

        function countRepeats($string, $search)
        {
            //prep replace will take all an input of all puncuation and remove
            //it from my string.
            $string_lower_noPunct = strtolower(preg_replace("/\p{P}/u", "", $string));

            $string_array = explode(" ", $string_lower_noPunct);

            $counter = 0;

            foreach($string_array as $word){
            //in array will search for any type but only in an array
                $word_array = array($word);
                if(in_array(strtolower($search), $word_array)){
            //count adds each time the search word is found in the string array
                    ++$counter;
                }
            }

            return $counter;

        }



    }

?>
