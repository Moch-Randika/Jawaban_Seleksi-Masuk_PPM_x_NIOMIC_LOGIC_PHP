<?php
echo "<h1>SOAL DAN JAWABAN LOGIC PHP Nomor 5</h1>";
echo "<br>";
echo "Buatlah sebuah aplikasi penampil list menu makanan statis yang mana jika
dijalankan akan menampilkan hasil sebagai berikut . (gambar pada soal)";
echo "<br>";
echo "<br>";

function tampilMenu($menu)
{

    for ($i = 1; $i <= 3; $i++) {
        echo $i . ". Menu " . $menu . " ke " . $i . "<br>";
    }
}
echo "Makanan <br>";
tampilMenu('Makanan');
echo "Minuman <br>";
tampilMenu('Minuman');
echo "Parsel <br>";
tampilMenu('Parsel');
