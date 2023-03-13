<?php
$karyawan   = [
    ['nama' => 'Toni', 'alamat' => 'Bandung'],
    ['nama' => 'Naufal', 'alamat' => 'Bandung'],
    ['nama' => 'Davi', 'alamat' => 'Jakarta']
];
// $data = serialize($karyawan);
// file_put_contents('data.txt', $data);

// $output = file_get_contents('data.txt');
// $result = unserialize($output);
// print_r($result);

$data = json_encode($karyawan);
file_put_contents('data.txt', $data);

$output = file_get_contents('data.txt');
$result = json_decode($output, true);
print_r($result);