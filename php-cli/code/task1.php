<?php
/** Задание 1
*Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно *использовать оператор return.
*/
function calc(int $a, int $b, string $op): float | string{
  switch($op){
    case "+":
      return $a + $b;
    case "-":
      return $a - $b;
    case "*":
      return $a * $b;
    case "/":
    if($b == 0) return "Деление на ноль";
      return $a / $b;
  }
}
echo calc(99, 3, "/");

//docker run --rm -v ${pwd}/php-cli/code/:/cli php:8.2-cli php /cli/task1.php