<?php

namespace App\Solution;
/* Функция rgbToHex принимает 3 параметра (цветные компоненты) и возвращает строку.

rgbToHex(36, 171, 0); // '#24ab00'
*/

function rgbToHex(int $red, int $green, int $blue): string
{
    $rgb = [$red, $green, $blue];
    $hexArray = array_map(function ($element) {
        $hex = dechex($element);
        return strlen($hex) < 2 ? '0' . $hex : $hex;
    }, $rgb);
    return '#' . implode('', $hexArray);
}

/* Проще и без array_map:

function rgbToHex($r, $g, $b): string {
    return sprintf("#%02x%02x%02x", $r, $g, $b);
}
*/
