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

    public function kitapEkle($id, $ad, $yazar, $yayinevi, $ucret, $kategori, $details, $stock, $photoUrl)
    {
        if ($this->baglanti) {
            try {
                $checkIfExistsQuery = $this->baglanti->prepare("SELECT * FROM $this->tablo WHERE ad=? AND yazar=? AND yayınevi=?");
                $checkIfExistsQuery->execute([$ad, $yazar, $yayinevi]);

                if ($checkIfExistsQuery->rowCount() > 0) {
                    return false;
                } else {
                    $insertQuery = $this->baglanti->prepare("INSERT INTO $this->tablo (id, ad, yazar, yayınevi, ucret, kategori, details, stock, photoUrl) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $insertQuery->execute([$id, $ad, $yazar, $yayinevi, $ucret, $kategori, $details, $stock, $photoUrl]);

                    return true;
                }
            } catch (PDOException $e) {
                echo "Kayıt Başarısız: " . $e->getMessage();
            }
        }

        return false;
    }

    public function countBooks()
    {
        if ($this->baglanti) {
            try {
                $query = $this->baglanti->query("SELECT COUNT(*) FROM $this->tablo");
                $count = $query->fetchColumn();

                return $count;
            } catch (PDOException $e) {
                echo "İşlem Başarısız: " . $e->getMessage();
            }
        }

        return false;
    }

    public  function calculateAuthor()
    {
        if ($this->baglanti) {
            try {
                $query = $this->baglanti->query("SELECT yazar FROM $this->tablo");
                $authors = $query->fetchAll(PDO::FETCH_COLUMN);

                $uniqueAuthors = array_unique($authors);
                $authorCount = count($uniqueAuthors);
                $printThreeAuthors = array_slice($uniqueAuthors, 0, 3);

                return "<h1 class='font-bold'>$authorCount</h1>" . " Adet Yazar Bulunmaktadır bu yazarlar aşağıda listelenmiştir." . " <p class='text-sm'> Başlıca Yazarlar : " . implode(", ", $printThreeAuthors) . "</p>";
            } catch (PDOException $e) {
                echo "İşlem Başarısız: " . $e->getMessage();
            }
        }

        return false;
    }

    public function calculateCategory()
    {
        if ($this->baglanti) {
            try {
                $query = $this->baglanti->query("SELECT kategori FROM $this->tablo");
                $categories = $query->fetchAll(PDO::FETCH_COLUMN);

                $uniqueCategories = array_unique($categories);
                $categoryCount = count($uniqueCategories);
                $printThreeCategories = array_slice($uniqueCategories, 0, 5);

                return "<h1 class='font-bold'>$categoryCount</h1>" . " Adet Kategori Bulunmaktadır bu kategoriler aşağıda listelenmiştir." . " <p class='text-sm'> Başlıca Kategoriler : " . implode(", ", $printThreeCategories) . "</p>";
            } catch (PDOException $e) {
                echo "İşlem Başarısız: " . $e->getMessage();
            }
        }

        return false;
    }
    public function getAllBooks()
    {
        if ($this->baglanti) {
            try {
                $query = $this->baglanti->query("SELECT * FROM $this->tablo");
                return $query->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "İşlem Başarısız: " . $e->getMessage();
            }
        }

        return false;
    }
    public function deleteBook($id)
    {
        if ($this->baglanti) {
            try {
                $deleteQuery = $this->baglanti->prepare("DELETE FROM $this->tablo WHERE id=?");
                $deleteQuery->execute([$id]);

                return $deleteQuery->rowCount() > 0;
            } catch (PDOException $e) {
                echo "Silme İşlemi Başarısız: " . $e->getMessage();
            }
        }

        return false;
    }
    public function getBook($id)
    {
        $sorgu = $this->baglanti->query("SELECT * FROM $this->tablo WHERE id='$id'");
        $response = $sorgu->fetch(PDO::FETCH_LAZY);
        return $response;
    }
    public function updateBook($id, $ad, $yazar, $yayinevi, $ucret, $kategori, $details, $stock, $photoUrl)
    {
        if ($this->baglanti) {
            try {
                $sorgu = $this->baglanti->prepare("UPDATE $this->tablo SET ad=?, yazar=?, yayınevi=?, ucret=?, kategori=?, details=?, stock=?, photoUrl=? WHERE id=?");
                $sorgu->execute([$ad, $yazar, $yayinevi, $ucret, $kategori, $details, $stock, $photoUrl, $id]);

                return true;
            } catch (PDOException $e) {
                echo "Güncelleme Başarısız: " . $e->getMessage();
            }
        }

        return false;
    }
    public function buyTheBooks($id)
    {
        if ($this->baglanti) {
            try {
                $getBookQuery = $this->baglanti->prepare("SELECT * FROM $this->tablo WHERE id=?");
                $getBookQuery->execute([$id]);

                $response = $getBookQuery->fetch(PDO::FETCH_ASSOC);

                if ($response) {
                    $stock = $response['stock'];
                    $stock = $stock - 1;

                    $updateStockQuery = $this->baglanti->prepare("UPDATE $this->tablo SET stock=? WHERE id=?");
                    $updateStockQuery->execute([$stock, $id]);

                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo "İşlem Başarısız: " . $e->getMessage();
            }
        }

        return false;
    }
}
