<?php
include "Kitap.php";
$id = $_GET['id'];
$kitap = new Kitap("books");
$response = $kitap->deleteBook($id);
if ($response) {
    header("Location: http://localhost/Demo/");
} else {
    echo "Silme işlemi başarısız";
}
