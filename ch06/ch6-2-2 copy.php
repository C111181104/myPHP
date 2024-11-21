<?php
   function rateExchange(int $x,int $y) :float {
      $z = $x * $y;
      return $z;
   }
   ?>
   <?php
   $x = 1000;
   $y = 30;
   $z = rateExchange($x,$y);
   print"1000美元兌換新台幣=". $z ."元<br/>";
   ?>