<?php  

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

$sum  = $num1 + $num2; 
$diff = $num1 - $num2; 
$pro  = $num1 * $num2; 
$quo  = $num1 / $num2; 


if ($operator == 'addition') {
    echo "{$num1} + {$num2} = {$sum} ";
} elseif ($operator == 'subtraction') {
    echo "{$num1} - {$num2} = {$diff} ";
} elseif ($operator == 'multiplication') {
    echo "{$num1} × {$num2} = {$pro} ";
} elseif ($operator == 'division') {
    echo "{$num1} ÷ {$num2} = {$quo} ";
} else {
    echo "正しい演算子を指定して下さい";
}
