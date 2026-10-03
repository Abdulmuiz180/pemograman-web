<?php
declare(strict_types=1);
$sudahLogin = true;
$peran = 'admin';

if($sudahLogin){
    if($peran === 'admin'){
        echo "Selamat datang, Admin. Akses penuh.\n";
    }elseif($peran === 'operator'){
        echo "Selamat datang, Operator. Akses terbatas.\n";
    }else{
        echo "Peran tidak dikenal.\n";
    }
}else{
    echo "Silahkan login terlebih dahulu.\n";
}

$terverifikasi = true;
$saldo = 12000000;
if($sudahLogin && $terverifikasi && $saldo >= 1200000){
    echo "Transaksi besar diizinkan.\n";
}