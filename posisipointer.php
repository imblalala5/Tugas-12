<?php
$pembayaran = array('Debit', 'Qris', 'Cash', 'Member');

echo "<pre>";
print_r($pembayaran);
echo "</pre>";

$mode = current($pembayaran);
echo $mode . "<br>";

$mode = next($pembayaran);
echo $mode . "<br>";

$mode = current($pembayaran);
echo $mode . "<br>";

$mode = prev($pembayaran);
echo $mode . "<br>";

$mode = end($pembayaran);
echo $mode . "<br>";

$mode = current($pembayaran);
echo $mode . "<br>";
?>
