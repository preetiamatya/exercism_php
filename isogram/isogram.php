<?php
 function isIsogram($str) {
   $str = preg_replace('/[-]/','',$str);
   $str = preg_replace('/\s+/', '', $str);
   $str = mb_strtolower($str, 'UTF-8');
   $format_string = preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);
   $count = array_count_values($format_string);
   $result = array_unique($count);
   $final_result = count($result);
   $message = ($final_result == 1) ? true:false;
   return $message;
 }
