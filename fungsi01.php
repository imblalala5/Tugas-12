<?php
function cetak_ganjil($mahasiswa){
    echo "Mahasiswa $mahasiswa: ";
    for($i = 1; $i <= 10; $i++){
        $ganjil = $i * 2 - 1; // menghasilkan bilangan ganjil
        echo "$ganjil, ";
    }
    echo "<br>";
}

// Contoh pemanggilan untuk tiga mahasiswa
cetak_ganjil("A");
cetak_ganjil("B");
cetak_ganjil("C");
?