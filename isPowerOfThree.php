<?php 

/*
Реализуйте функцию isPowerOfThree(), которая определяет, является ли переданное число натуральной степенью тройки. Например, число 27 – это третья степень (33), а 81 – четвертая (34).

<?php

isPowerOfThree(1); // → true (3^0)
isPowerOfThree(3); // → true
isPowerOfThree(4); // → false
isPowerOfThree(9); // → true
*/

function isPowerOfThree($number) {
    if ($number < 1) {
        return false;
    }
    
    while ($number % 3 === 0) {
        $number /= 3;
    }
    
    return $number === 1;
}