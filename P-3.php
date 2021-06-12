<?php
    $num = 121;
    $snum = $num;
    echo ' Input number:'  .$num;
    $sum=0; $rem=0;  
    for ($i =0; $i<=strlen($num);$i++)  
    {  
     $rem=$num%10;  
     $sum = $sum + $rem;  
     $num=$num/10;  
    }  
    echo '</br></br> Sum of digit '.$snum.' is '.$sum;  
 
    $rev =strrev($snum);
    echo '</br></br> Reverse is:'  .$rev;
    if($snum== $rev){
        echo '</br></br>' .$snum. ' Is a palindrome' ;
    }else{
        echo '</br></br>' .$snum. ' Is not a palindrome';
    }
?>
