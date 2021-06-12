<?php
function factorial($n)
{
  if($n ==0)
    {
     return 1;
    }
  else 
    { 
     return $n * factorial($n-1);
    }
  }
print_r("Factorial of 6 is :\n".factorial(6));
?>
