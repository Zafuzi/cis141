<?php
   //input vars
   $nbr1 = 0;
   $nbr2 = 0;
    
   //output vars
   $sum = 0;
   
   printf("\n Enter a number: ");
   fscanf(STDIN, "%d", $nbr1);
 
   printf("\n Enter a number: ");
   fscanf(STDIN, "%d", $nbr2);  
   
   $sum = $nbr1 + $nbr2;
   
   printf("\n The sum is %d", $sum );
   
   fscanf(STDIN, "%s", $buster);
?>
