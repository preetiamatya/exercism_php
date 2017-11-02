<?php
function isValid($num) {
  $num = str_replace(' ', '', $num);
  $arr = str_split($num);
  if(sizeof($arr) == 1)return false;
  $odd = array();$even = array();
  $oddsum = 0; $evensum = 0;
  $length = sizeof($arr);
  $lastcount = 0;
  for($i=$length-1; $i>=0; $i--){
    if ($lastcount%2 == 1){
        $dupvalue = (int)$arr[$i]*2;
        if($dupvalue >9 ? ($dupvalue = (int)$dupvalue-9):$dupvalue );
        $oddsum = (int)$oddsum+(int)$dupvalue;
    }
    else {
     $evensum = (int)$evensum+(int)$arr[$i];
     }
        $lastcount++;
}
  $sum =  (int)$oddsum +(int)$evensum;
  if ($sum %10 == 0){
    return true;
  }
  return false;
}
 ?>
