<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
  $convert_a = str_split($a);
  $convert_b = str_split($b);
  $counter = 0;
  for($i = 0; $i<sizeof($convert_a); $i++) {
    if (sizeof($convert_a)!=sizeof($convert_b)) {
       throw new InvalidArgumentException("DNA strands must be of equal length.");
    }
    else if ($convert_a[$i]!=$convert_b[$i]) {
      $counter++;
    }
  }
  return $counter;
}
