<?php

    class RepeatCounter
    {

        function countRepeats($string, $search)
        {
            $string_array = explode(" ", $string);
            //$search_array = explode(" ", $search);
            $counter = 0;



                    if(in_array($search, $string_array)){
                        ++$counter;
                    }


            return $counter;

        }



    }

?>
