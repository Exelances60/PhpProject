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

    public function kitapEkle($id, $ad, $yazar, $yayinevi, $ucret, $kategori)
    {
        if ($this->baglanti) {
            @mysqli_select_db($this->baglanti, $this->veritabani) or die("Veritabanı Seçilemedi");

            $allReadyExist = mysqli_query($this->baglanti, "SELECT * FROM $this->tablo WHERE ad='$ad' AND yazar='$yazar' AND yayınevi='$yayinevi' ");
            print_r(mysqli_num_rows($allReadyExist));

            if (mysqli_num_rows($allReadyExist) > 0) {
                return false;
            } else {
                $sorgu = mysqli_query($this->baglanti, "INSERT INTO $this->tablo (id, ad, yazar, yayınevi, ucret,kategori) VALUES ('$id', '$ad', '$yazar', '$yayinevi', '$ucret','$kategori')");
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
            return "<h1 class='font-bold'>" . $count . "</h1>" . "Başlıca Yazarlar: " . implode(", ", $printThreeAuthors) . "...";
        }
    }

    public function calculateCategory($method)
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
            if ($method == "count") {
                $count = count($categories);
                return $count;
            } else {
                return $categories;
            }
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
}
