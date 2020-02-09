<?php
  
  $nbr1 = 0;
  $nbr2 = 0;
  $nbr3 = 0;
  $total = 0;
  $average = 0;
    
  printf("\n Enter an integer between 1-10: ");
  fscanf(STDIN, "%d", $nbr1);
    
  printf("\n Enter an integer between 1-10: ");
  fscanf(STDIN, "%d", $nbr2);
    
  printf("\n Enter an integer between 1-10: ");
  fscanf(STDIN, "%d", $nbr3);
  
  $total = $nbr1 + $nbr2 + $nbr3;
   
  $average = $total / 3;
    
  printf("\n The total of your numbers is %d", $total);
  printf("\n The average of your numbers is %d", $average);
    
  if($average < 5 )
  {
    printf("\n The average is a touch on the small side.");
  }
  if($average > 5 )
  {
    printf("\n The average is a touch on the large side.");
  }
  if($average == 5)
  {
    printf("\n That's about right.");
  }
  
  fscanf(STDIN, "%s", $buster);
?>

