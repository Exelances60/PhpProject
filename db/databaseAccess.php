<?php
$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "kütüphane";
$booksTablo = "books";
//$baglanti = mysqli_connect($host, $kullanici, $sifre);

$baglanti = new PDO("mysql:host=$host;dbname=$veritabani", $kullanici, $sifre);
$baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




// Veritabanı bağlantısını kontrol et
/* 
if (!$baglanti) {
    die("Bağlantı Başarısız: " . mysqli_connect_error());
}
 */