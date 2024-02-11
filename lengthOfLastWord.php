<?php 

/* Реализуйте функцию lengthOfLastWord, которая принимает на вход строку и возвращает длину ее последнего слова. Словом считается любая последовательность символов без пробелов. На практике функция работает так:

<?php
 
lengthOfLastWord(''); // 0
 
lengthOfLastWord('man in BlacK'); // 5
 
lengthOfLastWord('hello, world!  '); // 6
*/

function lengthOfLastWord($string)
{
    $array = explode(' ', trim($string));
    $lastIndex = count($array) - 1;
    return strlen(strval($array[$lastIndex]));
}