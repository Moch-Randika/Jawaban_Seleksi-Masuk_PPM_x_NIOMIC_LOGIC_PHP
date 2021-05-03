<?php
echo "<h1>SOAL DAN JAWABAN LOGIC PHP Nomor 2</h1>";
echo "<br>";
echo "Pak rian memiliki 100 cabang toko kelontong, pada setiap harinya pak rian pasti
mengeluarkan Rp 10.000 biaya pengeluaran untuk toko kelontong ke 1. <br>dan biaya pengeluaran untuk toko kelontong ke 68 adalah sebesar Rp. 30.100 .maka
berapakah biaya pengeluaran untuk toko kelontong ke 81 ?";
echo "<br>";
echo "<br>";

$toko_ke_1 = 1;
$toko_ke_68 = 68;
$jumlah_toko = 100;
$uang_cabang_ke1 = 10000;
$uang_cabang_ke68 = 30100;
// pertanyaan : biaya toko pada cabang ke 81 ?
$toko_ke = 81;
// mencari pembeda biaya pada tiap cabang toko kelontong 
// menggunakan rumus aritmatika
$pembeda_biaya = ($uang_cabang_ke68 - $uang_cabang_ke1) / ($toko_ke_68 - $toko_ke_1);
echo "penambahan uang tiap toko kelontong cabang " . $pembeda_biaya . " Rupiah";
echo "<br>";
echo "<br>";
for ($i = $toko_ke_1; $i <= $jumlah_toko; $i++) {

    $un = $uang_cabang_ke1 + (($i - 1) * $pembeda_biaya);

    if ($i == $toko_ke) {

        echo " toko ke = " . $i . " jumlah biaya adalah " . $un . " Rupiah";
    }
}
