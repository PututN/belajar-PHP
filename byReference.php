<?php
function gantiNama(&$nama)
{
    $nama = "Indah";
}
$nama = "Risa";
gantiNama($nama);
echo $nama;
