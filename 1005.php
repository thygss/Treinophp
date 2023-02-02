<?php
$nota1 = readline();
$nota2 = readline();
$peso1 = 3.5;
$peso2 = 7.5;
$media = number_format(($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2) , 5 , '.' , '');
echo "MEDIA = $media\n";
?>
