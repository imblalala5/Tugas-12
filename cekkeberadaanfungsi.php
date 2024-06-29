<?php
// Memeriksa keberadaan fungsi exif_read_data
if (function_exists('exif_read_data')) {
    echo "Fungsi exif_read_data ada di PHP versi ini.\n";
} else {
    echo "Fungsi exif_read_data tidak tersedia di PHP versi ini.\n";
}
?>
