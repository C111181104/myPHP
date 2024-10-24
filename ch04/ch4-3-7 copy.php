<?php

function square_fun(float |int $v): int|float{
    return $v ** 2;
}

echo "square_funt(2)=".square_fun(v: 2)."<br/>";
echo "square_funt(2.5)=".square_fun(v: 2.5)."<br/>";
echo square_fun(2.9)."<br/>";
?>