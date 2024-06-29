<?php
function cetak_ganjil($awal, $akhir) {
    for($i = $awal; $i < $akhir; $i++) {
        if($i % 2 == 1) {
            echo "$i, ";
        }
    }
}

// Inisialisasi variabel awal dan akhir serta nama mahasiswa
$awal = 3;  // Nilai awal
$akhir = 25; // Nilai akhir
$nama_mahasiswa = "Budi"; // Nama mahasiswa

// Menampilkan output dengan format berbeda dan personalisasi
echo "<b>Bilangan ganjil dari $awal sampai $akhir untuk $nama_mahasiswa, adalah:</b><br>";
cetak_ganjil($awal, $akhir);
?>
