<?php

namespace App\Solution;

/* Анаграммы — это слова, которые образуются путём перестановки букв. Слова-анаграммы состоят из одного и того же набора букв и имеют одинаковую длину. Например:

спаниель — апельсин
карат — карта — катар
топор — ропот — отпор
src/Solution.php
Реализуйте функцию filterAnagrams(), которая находит все анаграммы слова. Функция принимает исходное слово и список для проверки (массив), а возвращает массив всех анаграмм. Если в списке слов отсутствуют анаграммы, то возвращается пустой массив.

Примеры
<?php

use function App\Solution\filterAnagrams;

filterAnagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']);
// ['aabb', 'bbaa']

filterAnagrams('racer', ['crazer', 'carer', 'racar', 'caers', 'racer']);
// ['carer', 'racer']

filterAnagrams('laser', ['lazing', 'lazy',  'lacer']);
// [] */

function normalize($str)
{
    $arr = str_split($str);
    sort($arr);
    return $arr;
}

function filterAnagrams($word, $list)
{
    if (empty($list)) {
        return [];
    }

    $normal = normalize($word);
    $filtered = array_filter($list, function ($item) use ($normal) {
        return normalize($item) === $normal;
    });

    return array_values($filtered);
}
