<?php
$pesan = "Ini baru 3\n <br>";
file_put_contents("file.txt", $pesan, FILE_APPEND);
$isi_file = file_get_contents("file.txt");
echo $isi_file;
