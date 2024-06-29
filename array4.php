<?php
$arrNilai = array("Hyunsuk" => 80, "Jihoon" => 90, "Asahi" => 75, "Haruto" => 85);

echo "Menampilkan isi array asosiatif dengan foreach: <br>";
foreach($arrNilai as $nama => $nilai){
    echo "Nilai $nama = $nilai<br>";
}

echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST:<br>";
reset($arrNilai);
while(list($nama, $nilai) = each($arrNilai)){
    echo "Nilai $nama = $nilai<br>";
}
?>