<?php

/* Реализуйте функцию getSameParity, которая принимает на вход список и возвращает новый, состоящий из элементов, у которых такая же четность, как и у первого элемента входного списка.

<?php

getSameParity([]); // []
getSameParity([-1, 0, 1, -3, 10, -2]); // [-1, 1, -3] */

namespace App\Arrays;

function getSameParity(array $numbers)
{
    if (empty($numbers)) {
        return [];
    }

    $party = abs($numbers[0]) % 2;
    $filtered = array_filter($numbers, function ($item) use ($party) {
        return abs($item) % 2 === $party;
    });

    return array_values($filtered);
}
