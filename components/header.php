<?php
$author = "Desing by enes";
function sayac()
{
  static $sayi = 0;
  global $author;
  $sayi++;
  echo $sayi . " " . $author;
}


?>

<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="http://localhost/Demo/" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://w7.pngwing.com/pngs/776/145/png-transparent-books-illustration-book-book-rectangle-presentation-desktop-wallpaper-thumbnail.png" alt="Logo">
      </a>
    </div>
    <?php
    echo "<div class='mr-2'><p>Dosya Yolu</p>" . $_SERVER['DOCUMENT_ROOT'] . "<br></div>";

    ?>

    <div class=" flex md:gap-5 gap-2">
      <div class="relative">
        <form action="http://localhost/Demo/">
          <button type="submit" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
            Ana Sayfa
          </button>
        </form>

      </div>
      <a href="components/ProductsPage.php" class="text-sm font-semibold leading-6 text-gray-900">Ürünler</a>
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Üyeler</a>
      <a href="" class="text-sm font-semibold leading-6 text-gray-900">Hakkımızda</a>
    </div>
    <div class="hidden sm:flex lg:flex-1 lg:justify-end">
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Giriş Yap <span aria-hidden="true">&rarr;</span></a>
    </div>
    <div>
      <?php sayac() ?>
    </div>
  </nav>

</header>