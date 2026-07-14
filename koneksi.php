<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "DB_REMEDI_PBO_TRPL1A_GilangRinakitWisnuAdhityaSumirat"
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>