<?php

function RandomStr($length){  

  $arr = "a b c d e f g h i j k l m n o p q r s t u v w x y z";

  $arr = explode(" ", $arr);

    for ($i=$length; $i>0; $i--)
     {
       $x = mt_rand(0, 25);     // index of alphabet
       $y = mt_rand(0, 9);      // only use single digit numbers
       $random = mt_rand(0, 1);
       $case = mt_rand(0, 1);   // additional randomness, incase $random is already set 
  
       $char = ($random > 0) ? ($charCase = ($case > 0) ? $arr[$x] : strtoupper($arr[$x])) : $y;

       $str .= "$char"; 
     }

     return ($str); 
} 

  echo RandomStr(8);

?>