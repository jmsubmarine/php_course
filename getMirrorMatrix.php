<?php

namespace App\Arrays;

/*
Реализуйте функцию getMirrorMatrix, которая принимает двумерный массив (матрицу). Далее эта функция возвращает измененный массив, в котором правая половина матрицы становится зеркальной копией левой половины, симметричной относительно вертикальной оси. Для простоты условимся, что:

Матрица всегда имеет четное количество столбцов
Количество столбцов всегда равно количеству строк
<?php
 
getMirrorMatrix([
  [11, 12, 13, 14],
  [21, 22, 23, 24],
  [31, 32, 33, 34],
  [41, 42, 43, 44],
]);
 
// → [
//     [11, 12, 12, 11],
//     [21, 22, 22, 21],
//     [31, 32, 32, 31],
//     [41, 42, 42, 41],
//   ]
*/

function getMirrorMatrix($matrix)
{
    $result = [];
    foreach ($matrix as $array) {
        $count = count($array);
        $middleIndex = ceil($count / 2);
        $firstHalf = array_slice($array, 0, $middleIndex);
        $mirroredFirstHalf = array_reverse($firstHalf);
        $result[] = array_merge($firstHalf, $mirroredFirstHalf);
    }
    return $result;
}