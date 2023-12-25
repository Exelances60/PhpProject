<?php
include "Kitap.php";
$kitap = new Kitap("books");
$books = $kitap->getAllBooks();

?>

<div class="w-full p-5 box-border">
    <?php
    foreach ($books as $book) {
        $photoUrl = isset($book['photoUrl']) && !empty($book['photoUrl']) ? $book['photoUrl'] : "https://user-images.githubusercontent.com/24848110/33519396-7e56363c-d79d-11e7-969b-09782f5ccbab.png";

        echo "<div class='flex flex-col gap-5 border-t-2'>
            <div class='flex w-full gap-2 items-center justify-center'>
                <div class='w-[10%] box-border h-[10%] p-2'>
                    <img src='" . $photoUrl . "' alt=''>
                </div>  
                <div class='w-[90%] box-border h-[10%] flex flex-col gap-3'>
                    <h1>" . $book['ad'] . "</h1>
                    <h1>" . $book['yazar'] . "</h1>
                    <h1>" . "Kitabın Ücreti : " . $book['ucret'] . " TL" . "</h1>
                    <h1>" . "Kitabın Stock Sayısı : " . $book['stock'] . " Adet " . "</h1>
                    <h1 class='font-bold text-lg'>Kitabın Detayı </h1>
                    <h1 >" . $book['details'] . "</h1>

                    <a class='bg-blue-500 hover:bg-blue-700 w-[8%] text-white font-bold py-2 px-4 mb-2 text-center rounded'  href='../db/buyTheBook.php?id=" . $book['id'] . "'>
                        Satın Al
                    </a>
                </div>
            </div>
        </div>";
    }
    ?>

</div>