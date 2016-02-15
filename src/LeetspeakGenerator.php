<?php
    class LeetspeakGenerator
    {
        function translate($input_string)
        {
            $input_array = str_split($input_string);
            $result_array = array();
            foreach ($input_array as $letter) {
                if ($letter == 'e' || $letter == 'E') {
                    $letter = '3';
                }
                array_push($result_array, $letter);
            }
            return implode('', $result_array);
        }
    }


?>
