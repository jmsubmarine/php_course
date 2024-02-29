<?php

namespace App\Solution;

/* Функция hexToRgb принимает строку с цветом в шестнадцатеричном формате и возвращает массив компонентов.

hexToRgb('#24ab00'); // ['r' => 36, 'g' => 171, 'b' => 0]
*/

function hexToRgb(string $hexColor): array
{
    $hexStripped = ltrim($hexColor, '#');
    $hexSplit = str_split($hexStripped, 2);
    $rgb = array_map(fn ($element) => (hexdec($element)), $hexSplit);
    $keys = ['r', 'g', 'b'];
    return array_combine($keys, $rgb);
}

/* Проще и без array_map:
function hexToRgb(string $hexColor)
{
    $hexColor = ltrim($hexColor, '#');
    $r = hexdec(substr($hexColor, 0, 2));
    $g = hexdec(substr($hexColor, 2, 2));
    $b = hexdec(substr($hexColor, 4, 2));
    return ['r' => $r, 'g' => $g, 'b' => $b];
}
*/