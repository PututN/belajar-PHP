<?php
$arr_warna  = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'violet'];
$jumlah = 0;
//jumlah elemen array ada 11
for ($i = 0; $i < count($arr_warna); $i++) {
    if ($arr_warna[$i] == 'violet') {
        $jumlah++;
    }
}
echo "Jumlah warna merah " . $jumlah;
