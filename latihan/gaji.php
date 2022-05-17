<?php 
$pkj = $_POST['pkj'];

if($pkj == 'Dokter'){
    $gaji = 'Rp.10,000,000,00 /Bulan';
}elseif ($pkj == 'Programmer') {
    $gaji = 'Rp.20,000,000,00 /Bulan';
}elseif ($pkj == 'Guru') {
    $gaji = 'Rp.5,000,000,00 /Bulan';
}else{
    $gaji= 'Rp.0 /Bulan';
}
echo $gaji;
?>