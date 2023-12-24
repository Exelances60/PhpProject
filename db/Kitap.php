<?php
class Kitap
{

    private $tablo;
    private $baglanti;
    private $veritabani;


    public function __construct($booksTablo)
    {
        include "databaseAccess.php";
        $this->baglanti = $baglanti;
        $this->veritabani = $veritabani;
        $this->tablo = $booksTablo;
    }

    public function kitapEkle($id, $ad, $yazar, $yayinevi, $ucret, $kategori, $details, $stock)
    {
        if ($this->baglanti) {
            @mysqli_select_db($this->baglanti, $this->veritabani) or die("Veritabanı Seçilemedi");

            $allReadyExist = mysqli_query($this->baglanti, "SELECT * FROM $this->tablo WHERE ad='$ad' AND yazar='$yazar' AND yayınevi='$yayinevi' ");

            if (mysqli_num_rows($allReadyExist) > 0) {
                return false;
            } else {
                $sorgu = mysqli_query($this->baglanti, "INSERT INTO $this->tablo (id, ad, yazar, yayınevi, ucret,kategori,details,stock) VALUES ('$id', '$ad', '$yazar', '$yayinevi', '$ucret','$kategori','$details','$stock')");
                if ($sorgu) {
                    return true;
                } else {
                    echo "Kayıt Başarısız";
                }
            }
        }
    }

    public function countBooks()
    {
        if ($this->baglanti) {
            @mysqli_select_db($this->baglanti, $this->veritabani) or die("Veritabanı Seçilemedi");
            $sorgu = mysqli_query($this->baglanti, "SELECT * FROM $this->tablo");
            $count = mysqli_num_rows($sorgu);

            return $count;
        }
    }

    public  function calculateAuthor()
    {
        if ($this->baglanti) {
            @mysqli_select_db($this->baglanti, $this->veritabani) or die("Veritabanı Seçilemedi");
            $sorgu = mysqli_query($this->baglanti, "SELECT * FROM $this->tablo");
            $authors = array();
            foreach ($sorgu as $satir) {

                if (!in_array($satir['yazar'], $authors)) {
                    array_push($authors, $satir['yazar']);
                }
            }
            $authors = array_unique($authors);
            $count = count($authors);
            $printThreeAuthors = array_slice($authors, 0, 3);
            return "<h1 class='font-bold'>" . $count . "</h1>" . " Adet Yazar Bulunmaktadır bu yazarlar aşağıda listelenmiştir." . " <p class='text-sm'> Başlıca Yazarlar : " . implode(", ", $printThreeAuthors) . "</p>";
        }
    }

    public function calculateCategory()
    {
        if ($this->baglanti) {
            @mysqli_select_db($this->baglanti, $this->veritabani) or die("Veritabanı Seçilemedi");
            $sorgu = mysqli_query($this->baglanti, "SELECT * FROM $this->tablo");
            $categories = array();
            foreach ($sorgu as $satir) {

                if (!in_array($satir['kategori'], $categories)) {
                    array_push($categories, $satir['kategori']);
                }
            }
            $categories = array_unique($categories);
            $printThreeCategories = array_slice($categories, 0, 5);
            return  "<h1 class='font-bold'>" . count($categories) . "</h1>" . " Adet Kategori Bulunmaktadır bu kategoriler aşağıda listelenmiştir." . " <p class='text-sm'> Başlıca Kategoriler : " . implode(", ", $printThreeCategories) . "</p>";
        }
    }
    public function getAllBooks()
    {
        if ($this->baglanti) {
            @mysqli_select_db($this->baglanti, $this->veritabani) or die("Veritabanı Seçilemedi");
            $sorgu = mysqli_query($this->baglanti, "SELECT * FROM $this->tablo");
            return $sorgu;
        }
    }
    public function deleteBook($id)
    {
        if ($this->baglanti) {
            @mysqli_select_db($this->baglanti, $this->veritabani) or die("Veritabanı Seçilemedi");
            $sorgu = mysqli_query($this->baglanti, "DELETE FROM $this->tablo WHERE id='$id'");
            if ($sorgu) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function getBook($id)
    {
        if ($this->baglanti) {
            @mysqli_select_db($this->baglanti, $this->veritabani) or die("Veritabanı Seçilemedi");
            $sorgu = mysqli_query($this->baglanti, "SELECT * FROM $this->tablo WHERE id='$id'");
            $response = mysqli_fetch_assoc($sorgu);
            return $response;
        }
    }
    public function updateBook($id, $ad, $yazar, $yayinevi, $ucret, $kategori, $details, $stock)
    {
        if ($this->baglanti) {
            @mysqli_select_db($this->baglanti, $this->veritabani) or die("Veritabanı Seçilemedi");
            $sorgu = mysqli_query($this->baglanti, "UPDATE $this->tablo SET ad='$ad', yazar='$yazar', yayınevi='$yayinevi', ucret='$ucret', kategori='$kategori', details='$details', stock='$stock' WHERE id='$id'");
            if ($sorgu) {
                return true;
            } else {
                return false;
            }
        }
    }
}
