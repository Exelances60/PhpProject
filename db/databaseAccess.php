<?php
$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "kütüphane";
$booksTablo = "books";
$baglanti = mysqli_connect($host, $kullanici, $sifre);


// Veritabanı bağlantısını kontrol et
if (!$baglanti) {
    die("Bağlantı Başarısız: " . mysqli_connect_error());
}
