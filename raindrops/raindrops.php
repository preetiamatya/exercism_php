<?php
function raindrops($num)
{
    $string = '';
    if ((int) ($num % 3) == 0) {
        $string .= "Pling";
    }
    if ((int) ($num % 5) == 0) {
        $string .= "Plang";
    }
    if ((int) ($num % 7) == 0) {
        $string .= "Plong";
    }
    if ((int) ($num % 3) != 0 && (int) ($num % 5) != 0 && (int) ($num % 7) != 0) {
        $string .= (string) $num;
    }
    return $string;
}
