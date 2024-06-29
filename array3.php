<?php
$arrBuah = array(
    "red" => "Apel",
    "orange" => "Jeruk",
    "yellow" => "Pisang",
    "green" => "Alpukat",
    "blue" => "Blueberry",
    "purple" => "Anggur"
);

echo "Menampilkan isi array dengan FOR: <br>";
$keys = array_keys($arrBuah);
for ($i = 0; $i < count($arrBuah); $i++){
    $warna = $keys[$i];
    $buah = $arrBuah[$warna];
    echo "Buah <font color='$warna'>$buah</font> berwarna <font color='$warna'>$warna</font><br>";
}

echo "<br>Menampilkan isi array dengan FOREACH: <br>";
foreach ($arrBuah as $warna => $buah) {
    echo "Buah <font color='$warna'>$buah</font> berwarna <font color='$warna'>$warna</font><br>";
}
?>
