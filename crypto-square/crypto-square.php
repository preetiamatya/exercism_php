<?php
function crypto_square($text)
{
    if (empty($text))
        return "";
    $text  = strtolower($text);
    $text  = str_replace(array(
        ' ',
        '.',
        '@',
        '!',
        ',',
        '%'
    ), '', $text);
    $count = strlen($text);
    if ($count == 1) {
        echo $text;
        return $text;
    }
    $sqrt_num = sqrt($count);
    $column   = ceil($sqrt_num);
    $reminder = $count % $column;
    if ($reminder == 0) {
        $row = $column;
    } else {
        $row = (int) $column - 1;
    }
    $split_arr = chunk_split($text, $column, ',');
    $arr       = array_map(function($val)
    {
        return str_split($val);
    }, explode(',', $split_arr));
    $arr       = cleanArray($arr);
    $transpose = transpose($arr);
    array_walk_recursive($transpose, 'replacer');
    $str = implode(" ", array_map('implode', $transpose));
    return $str;
}

function transpose($array)
{
    array_unshift($array, null);
    $trans = call_user_func_array('array_map', $array);
    return $trans;
}
function cleanArray($array)
{
    $array = array_map('array_filter', $array);
    $array = array_filter($array);
    return $array;
}
function replacer(&$item, $key)
{
    if ($item === NULL) {
        $item = " ";
    }
}
?>
