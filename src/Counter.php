<?php

    class RepeatCounter
    {

        function countRepeats($string, $search)
        {
            //prep replace will take all an input of all puncuation and remove
            //it from my string.
            $string_noPunct = preg_replace("/\p{P}/u", "", $string);

            $string_array = explode(" ", $string_noPunct);
            
            $counter = 0;

            var_dump($string_noPunct);
            var_dump($string_array);


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
