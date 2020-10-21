<?php  

$num = 10;

function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}

$flag_val = check_prime($num);
if ($flag_val == 1)
   echo $num . "は素数です。";
else
   echo $num . "は素数ではありません。";
