<?php
require 'php.php';
$agus = new pegawai('001','Agus Ramandan','kepala bagian','Islam','Menikah');
$firda = new pegawai('002','Firda Hilmu Nisa','Assisten Manager','Islam','Belum Menikah');
$nabila = new pegawai('003','Septian Nabila','Staff','Kristen','Belum Menikah');
$rizky = new pegawai('004','Muhammad Rizky','Manager','Islam','Menikah');
$dila = new pegawai('005','Dila Ristyanti','Staff','Kristen','Menikah');

echo '<h3 align="center">'.pegawai::data.'</h3>';
$agus->mencetak();
$firda->mencetak();
$nabila->mencetak();
$rizky->mencetak();
$dila->mencetak();
?>