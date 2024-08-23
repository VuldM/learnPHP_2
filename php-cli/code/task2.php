<?php
/** Задание 2
 *Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
 *$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций
 *(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/
function mathOperation(int $arg1,int $arg2,string $operation): float | string{
  switch($operation){
    case "сложить":
      return $arg1 + $arg2;
    case "вычесть":
      return $arg1 - $arg2;
    case "умножить":
      return $arg1 * $arg2;
    case "разделить":
    if($arg2 == 0){
      return "деление на ноль";
    }
      return $arg1 / $arg2;clear
  }
}
echo mathOperation(1,2,"сложить");

// docker run --rm -v ${pwd}/php-cli/code/:/cli php:8.2-cli php /cli/task2.php