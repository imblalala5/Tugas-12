<?php
function tambah_string(&$str, $nama){
    $str = "Universitas " . $nama . ", Surabaya";
    return $str;
}

$nama_mahasiswa = "Budi Santoso";
$string = "Universitas";
echo "\$string = $string<br>";
echo tambah_string($string, $nama_mahasiswa) . "<br>";
echo "\$string = $string<br>";
?>