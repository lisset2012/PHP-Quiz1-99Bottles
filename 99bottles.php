<?php 
   $bottles = 99;
   $less_bottles = $bottles-1;
   while($bottles > 0){
       echo $bottles." bottles of beer on the wall, ".$bottles." bottles of beer. Take one down and pass it around, ".$less_bottles." bottles of beer on the wall.".'<br>'.'<br>';

       $bottles--;
       $less_bottles--;

       if($bottles == 1){
           echo $bottles." bottle of beer on the wall, ".$bottles." bottle of beer. Take it down and pass it around, no more bottles of beer on the wall.";
       }
       
       if($bottles == 0){
        echo "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.";
       }
   }
?>




    
