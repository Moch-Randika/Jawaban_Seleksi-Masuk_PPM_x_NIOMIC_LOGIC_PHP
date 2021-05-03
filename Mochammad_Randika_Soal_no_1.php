<?php
echo "<h1>SOAL DAN JAWABAN LOGIC PHP nomor 1</h1>";
echo "<br>";
echo "Rian pergi ke toko alat tulis untuk membeli bolpoin. Harga 1 buah bolpoin Rp 1.750.
    Jika Rian membeli 1 lusin bolpoin dan Ia membayar 5 lembar uang lima ribuan.<br>
    Berapa uang kembalian yang Rian terima?";
echo "<br>";
echo "<br>";
// jumlah uang rian
$uang_rian = 5 * 5000;
// harga bolpoin
$bolpoin = 1750;
// jumlah pembelian 1 lusin
$jumlah_pembelian = 12;
echo "Harga bolpoin = " . $bolpoin  . " buah";
echo "<br>";
echo " jumlah pembelian = " . $jumlah_pembelian . " buah";
echo "<br>";
echo " jumlah uang Rian = " . $uang_rian . " Rupiah";

// Perhitungan
echo "<br>";
// perhitungan harga total Bolpoin
$harga = $jumlah_pembelian * $bolpoin;
echo " harga " . $jumlah_pembelian . " bolpoin = " . $harga . " Rupiah ";
echo "<br>";
// perhitungan harga kembalian uang rian
echo "uang kembalian Riang " . $uang_kembalian = $uang_rian - $harga . " Rupiah";
