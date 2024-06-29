<?php
function tambah_string($str, $city){
    $str = $str . ", " . $city;
    return $str;
}

$university = "Universitas Teknologi Yogyakarta";
$city = "Jakarta";

echo "\$university = $university<br>";
echo tambah_string($university, $city) . "<br>";
echo "\$university = $university<br>";
?>