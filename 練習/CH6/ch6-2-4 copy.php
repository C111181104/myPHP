<?php
function volume($leight,$weight=10,$height=45) {
   print $leight."x".$weight."x".$height."=";
   return $leight*$weight*$height;
}
?>
<?php
$l= 5;
$w=20;
$h=25;
print volume($l,$w,$h)  .  "<br/>";
?>