<?php
$nilai="b";
switch(strtoupper($nilai))
{
    case 'A':
        echo "Nilai Anda sangat memuaskan";
        break;
    case 'B':
        echo "Nilai Anda memuaskan";
        break; 
     case 'C':
        echo "Nilai Anda cukup";
        break; 
     case 'D':
        echo "Nilai Anda kurang";
        break; 
     case 'E':
        echo "Anda tidak lulus";
        break; 
     default :
        echo "Nilai tidak terdaftar";
        break;
}
