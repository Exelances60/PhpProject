<!DOCTYPE html>
<html>


<!-- Uygulamamız kütüphanedeki kitapları tutulmasına saglar kitap ekleme silme güncelleme ve stocktan kitap alınınca stock adetinin azalmasına olanak saglar dosayların içinde sql dosyası var database için gerekli kodlar ordadır Hazırlayan : Enes Çelik 122444022  -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kütüphane Sistemi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="dist/output.css" rel="stylesheet">
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="container mx-auto flex flex-col gap-14 ">
        <?php include "components/section.php"; ?>
        <?php include "components/maintable.php"; ?>
        <div class="w-full p-5 border flex">
            <div class="w-[50%]  p-5 box-border   " id="output">
                <?php include "components/addBooksForm.php"; ?>
            </div>
        </div>
    </div>



    <script src=" dist/output.js">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    </script>


</body>

</html>