
<?php

// $string = "Halo, nama saya Muhamad Rizki.";
// $string2 = "Rizki";

// $hasil = strpos($string, $string2);

// if ($hasil !== false) {
//     echo "String2 ditemukan pada posisi: " . $hasil;
// } else {
//     echo "String2 tidak ditemukan.";
// }
//mencari suatu value


// $string    ="Saya Meng install game di Google";
// echo str_replace("Google", "Play Store", $string);
//mengubah salah satu value


// echo sqrt(100);
//mencari akar


// $date = date_create("2023-01-13");
// date_modify($date, "+3 days");
// echo "Tanggal setelah ditamba 3 hari: ". date_format($date, "Y-m-d");
//menambahkan 3 hari


// function sum($x, $y){
//     $z = $x + $y;
//     return $z;
// }
// echo "5 + 10 = " . sum(5,10). "<br>";
// echo "7 + 13 = " . sum(7, 13);
//menambahkan

// $angka_acak = rand(1, 100);
// echo "Angka acak antara 1 sampai 100 : " . $angka_acak;
//mencari angka array

// $data = "hello";
// echo strtoupper($data);
//mengubah value dalam variable menjadi kapital atau mungkin sebaliknya


// $kendaraan = array('mobil', 'motor', 'sepeda');
// $upper = array_map(function($value){
//     return strtoupper($value);
// }, $kendaraan);
// echo '<pro>; print_r{$upper)';
//mapping


// $asal = array("jeruk", "pisang", "apel", "stroberi");
// $buah = array_pop($asal);
// print_r($asal);


// $nama = "AGUS";
// echo strtolower($nama);
//mengubah menjadi huruf kecil  

// $str = "Hello World";
// echo $str . "<br>";
// echo rtrim($str, "World");
//menghapus value, hanya bisa yg ada di bagian kanan


// $arr = array("Hello World" => "Hi", "world" => "earth");
// echo strtr("Hello World", $arr)
//mengganti tapi satu satu / diganti sesuai dengan urutan


// $kendaraan = ['Mobil', 'sepeda', 'motor', 'truk', 'bus'];
// if (in_array('Mobil', $kendaraan))
// {
//     echo 'OK';
// }else{
//     echo 'salah';
// }
//mengecek apakah suatu array memiliki array tertentu


// echo(abs(6.7) . "<br>");
// echo(abs(-6,7). "<br>");
//mengubah menjadi absolute atau menjadi angka biasa (tanpa koma atau yg awalnya negatif menjadi positif)


// $buah = array("jeruk", "anggur");
// array_push($buah, "semangka", "melon");
// print_r($buah);
//menambahkan value kedalam array dan ditambahkan di akhir, jika ingin di awal maka gunakan array_unshift

// echo ceil(1,7);
//membulatkan angka ke atas

// $array = array(1,3,5,2,6,8,7,0,9);
// sort($array);
// print_r($array);
//mengurutkan dari yang terkecil


// $string = "wajib ngulik";
// echo "sebelum: $string <br>";
// echo "sesudah: . ucfirst($string)";
//mengubah huruf awal menjadi kapital


// function cekNumerik($nilai) {
//     if (is_numeric($nilai)) {
//         return "Nilai $nilai adalah numerik.";
//     } else {
//         return "Nilai $nilai bukan numerik.";
//     }
// }


// echo cekNumerik("12");          



// function test($array) {
//     $a = array_shift($array);
//     echo "Elemen pertama yang dihapus: $a\n";
//     echo "setelah penghapusan: ";
//     print_r($array);
// }


// $array = array(1, 2, 3, 4, 5);
// test($array);
// $a = array("orange", "banana", "apple", "raspberry");
// $b = array_shift($a);
// print_r($b);



// $barang = [
//     ['nama' => 'Ban', 'diskon' => '10'],
//     ['nama' => 'oli mesin'],
//     ['nama' => 'kampas rem'],
//     ['nama' => 'busi', 'diskon' => '9'],
//     ['nama' => 'akumulator', 'diskon' => '7'],
// ];



//     foreach ($barang as $item) {
//         if (isset($item['diskon'])) {
//             echo "<br>" . "Nama: " . $item['nama'] . ", Diskon: " . $item['diskon'] . "%";
//         }
//     }






    
?>