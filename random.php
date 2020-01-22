
<?php 
      
  
  for ($i=0;$i < 70 ; $i++) { 
            # code...
        $a = '1-A';
        $b = '1-B';
    // Generating a random number in a  
    // Specified range. 
    $randomNumber = rand(0,6); 
    $randomString = str_shuffle($a,$b);
    // Print 
    print_r($randomString); 
    print_r("<br>");
      }
?> 
