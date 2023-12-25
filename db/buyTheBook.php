<?php
$bookId = $_GET['id'];
include "Kitap.php";
$kitap = new Kitap("books");
$response = $kitap->buyTheBooks($bookId);

if ($response) {
    echo "<script>
            alert('Satın Alma İşlemi Başarılı. Yönlendiriliyorsunuz...');
            setTimeout(function() {
                window.location.href = '../components/ProductsPage.php';
            }, 1); //
          </script>";
} else {
    echo "Satın Alma İşlemi Başarısız";
}
