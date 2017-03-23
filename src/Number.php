<?php
  class Number
  {
    function name($input){
      $numberWord = "";
      $number = str_split($input);
      $counter = count($number);
      $ones = array (
        0 => "",
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
        10 => "ten",
        11 => "eleven",
        12 => "twelve",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifteen",
        16 => "sixteen",
        17 => "seventeen",
        18 => "eighteen",
        19 => "nineteen",
      );
      $tens = array(
        2 => "twenty",
        3 => "thirty",
        4 => "fourty",
        5 => "fifty",
        6 => "sixty",
        7 => "seventy",
        8 => "eighty",
        9 => "ninety"
      );
      if($counter == 1){
        return $ones[$input];
      }else if (($counter == 2) && ($number[0] == 1)){
        return $ones[$input];
      }else if (($counter == 2) && ($number[0] == 2)){
        $numberWord = $tens[2] . " " . $ones[$number[1]];
      }else if (($counter == 2) && ($number[0] == 3)){
        $numberWord = $tens[3] . " " . $ones[$number[1]];
      }else if (($counter == 2) && ($number[0] == 4)){
        $numberWord = $tens[4] . " " . $ones[$number[1]];
      }else if (($counter == 2) && ($number[0] == 5)){
        $numberWord = $tens[5] . " " . $ones[$number[1]];
      }else if (($counter == 2) && ($number[0] == 6)){
        $numberWord = $tens[6] . " " . $ones[$number[1]];
      }else if (($counter == 2) && ($number[0] == 7)){
        $numberWord = $tens[7] . " " . $ones[$number[1]];
      }else if (($counter == 2) && ($number[0] == 8)){
        $numberWord = $tens[8] . " " . $ones[$number[1]];
      }else if (($counter == 2) && ($number[0] == 9)){
        $numberWord = $tens[9] . " " . $ones[$number[1]];
      }
    return $numberWord;
    }
  }
 ?>
