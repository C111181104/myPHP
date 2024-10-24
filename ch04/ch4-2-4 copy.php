<?php
$name = "myname";
$$name = "劉桓均";
$username = $$name;
$username1 = ${$name};

echo "變數\$name = $name<br/>";
echo "變數$$name = $myname<br/>";
echo "變數$$name = ${$name}<br/>";
echo "變數\$username = $username<br/>";
echo "變數\$username1 = $username<br/>";
?>