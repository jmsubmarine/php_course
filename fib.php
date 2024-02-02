<?php 

/* 
Реализуйте функцию fib(), находящую положительные числа Фибоначчи. Аргументом функции является порядковый номер числа.

Формула:

f(0) = 0
f(1) = 1
f(n) = f(n-1) + f(n-2)
<?php

fib(3); // 2
fib(5); // 5
fib(10); // 55
*/

function fib($number) {

    if ($number == 0)  {
        return 0;
    } elseif ($number == 1) {
        return 1;
    } else {
        return fib($number-1) + fib($number-2);
    }
}