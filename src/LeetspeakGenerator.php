<?php
    class LeetspeakGenerator
    {
        function translate($input_string)
        {
            $input_array = str_split($input_string);
            $result_array = array();
            foreach ($input_array as $index => $letter) {
                if ($letter == 'e' || $letter == 'E') {
                    $letter = '3';
                }
                if ($letter == 'o' || $letter == 'O') {
                    $letter = '0';
                }
                if ($letter == 'I') {
                    $letter = '1';
                }
                if ($index != 0 && $letter == 's' && preg_match('/[a-zA-Z]/', $input_array[$index-1])) {
                    $letter = 'z';
                }
                array_push($result_array, $letter);
            }
            return implode('', $result_array);
        }
    }


?>
