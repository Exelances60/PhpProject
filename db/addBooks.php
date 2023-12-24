<div class="w-full h-[100vh] flex items-center justify-center">
    <?php
    if ($_POST) {
        include "Kitap.php";
        $ad = $_POST['ad'];
        $yazar = $_POST['yazar'];
        $yayinevi = $_POST['yayınevi'];
        $ucret = $_POST['ucret'];
        $kategori = $_POST['kategori'];
        $randomİd = rand(1, 1000);
        $kitap = new Kitap("books");
        $resposne = $kitap->kitapEkle($randomİd, $ad, $yazar, $yayinevi, $ucret, $kategori);
        if ($resposne) {
            header("Location: http://localhost/Demo/");
        } else {
            echo "Post edilmedi veya kitap zaten var. <br>";
            echo "<a href='http://localhost/Demo/'>Anasayfa</a>";
        }
    }
    ?>
</div>