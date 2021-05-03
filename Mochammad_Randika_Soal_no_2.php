<?php
echo "<h1>SOAL DAN JAWABAN LOGIC PHP Nomor 3</h1>";
echo "<br>";
echo "Setyo mempunyai tiga lembar uang sepuluh ribuan, empat lembar uang lima ribuan
dan lima lembar uang dua puluh ribuan. <br> Jika Ia akan membeli mainan seharga
Rp55.000. Berapa jumlah uang Setyo setelah membeli mainan??";
echo "<br>";
echo "<br>";
$harga_mainan = 55000;
// perhitungan uang setyo
$uang_setyo = (3 * 10000) + (4 * 5000) + (5 * 20000);
echo " jumlah uang setyo " . $uang_setyo . " rupiah ";

// harga sisa uang setyo 
$sisa_uang_setyo = $uang_setyo - $harga_mainan;
echo "<br>";
echo "sisa uang setyo " . $sisa_uang_setyo . " rupiah";
