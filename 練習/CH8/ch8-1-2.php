<?php 

$ip = $_SERVER['REMOTE_ADDR'];
print "IP位址".$ip.'';

?>

<table border="1">
   <Tr>
      <td>1</td>
      <td>2</td>
   </Tr>
   <?php
   foreach ($_SERVER as $key => $value) {
      echo  "<tr><td>".$key."</td>";
      echo"<td>".$value."</td></tr>";
   }
   ?>
</table>
