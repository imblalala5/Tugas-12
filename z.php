<?php
// User Defined Function
function luas_lingkaran($nama, $jari){
    $luas = 3.14 * $jari * $jari;
    return "Luas Lingkaran dengan jari-jari $jari untuk $nama adalah $luas";
}

$nama = "Anyi";
$jari = 12;
echo luas_lingkaran($nama, $jari);

// Newline for better readability
echo "\n";

// Displaying information about built-in PHP functions
echo "\nDaftar beberapa fungsi bawaan PHP yang tersedia:\n";
$functions = get_defined_functions();
$builtin_functions = $functions['internal'];

foreach (array_slice($builtin_functions, 0, 10) as $function) {
    echo $function . "\n";
}
?>
