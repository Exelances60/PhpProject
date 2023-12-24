<?php
include "Kitap.php";
$ad = $_POST['ad'];
$yazar = $_POST['yazar'];
$yayinevi = $_POST['yayınevi'];
$ucret = $_POST['ucret'];
$kategori = $_POST['kategori'];
$bookId = $_POST['id'];
$details = $_POST['details'];
$stock = $_POST['stock'];
$kitap = new Kitap("books");
$resposne = $kitap->updateBook($bookId, $ad, $yazar, $yayinevi, $ucret, $kategori, $details, $stock);


if ($resposne) {
    header("Location: http://localhost/Demo/");
} else {
    echo "Post edilmedi veya kitap zaten var. <br>";
    echo "<a href='http://localhost/Demo/'>Anasayfa</a>";
}
