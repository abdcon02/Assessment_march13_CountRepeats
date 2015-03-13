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
                $word_array = array($word);
                if(in_array(strtolower($search), $word_array)){
                    ++$counter;
                }
            }

            return $counter;

        }



    }

?>
