<?php

$json = '{
  "nama": "Eryka Putri",
  "domisili": "Surabaya",
  "usia": 21,
  "wni": true,
  "hobi": [
    "Berenang", "Menyanyi", "Membaca Buku"
  ]
}';

$mahasiswa = json_decode($json);

echo "Nama: {$mahasiswa->nama} <br>";
echo "Domisili: {$mahasiswa->domisili} <br>";

echo "Hobi: " . implode(", ", $mahasiswa->hobi);