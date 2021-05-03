<?php
echo "<h1>SOAL DAN JAWABAN LOGIC PHP Nomor 4</h1>";
echo "<br>";
echo "Buatlah sebuah aplikasi yang menampilkan bilangan genap dan bilangan ganjil dari 1
sampai 10. yang mana jika dijalankan akan menghasilkan output seperti berikut ini . (gambar pada soal) .";
echo "<br>";
echo "<br>";
// array function 
$cek = fn ($int) => $int % 2 == 0 ? "$int. Bilangan Genap<br>" : "$int. Bilangan Ganjil<br>";
echo $cek(1);
echo $cek(2);
echo $cek(3);
echo $cek(4);
echo $cek(5);
echo $cek(6);
echo $cek(7);
echo $cek(8);
echo $cek(9);
echo $cek(10);
