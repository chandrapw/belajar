<h3>Coba nested</h3>

<?php

$a = 'b';

echo empty($a) ? 'a' : "Benar";

echo '<br />';

//Simple nested/ternary if

$var = 3;
$t = ($var > 2 ? 'Var lebih besar' : 'Var lebih kecil'); // returns true
echo $t;