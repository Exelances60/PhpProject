<?php
include "db/Kitap.php";
$kitap = new Kitap("books");

$veriler = array(
    array(
        'ikon' => 'indigo',
        'baslik' => 'Kütüphanedeki Kitap Sayısı',
        'icerik' => "<h1 class='font-bold'>" . $kitap->countBooks() . "</h1>" . " Adet Kitap Bulunmaktadır bu kitaplar aşağıda listelenmiştir.",
        'svg' => '<path d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />',
    ),
    array(
        'ikon' => 'indigo',
        'baslik' => 'Kütüphanedeki Kitap Çeşitleri',
        'icerik' => $kitap->calculateCategory(),
        'svg' => ' <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />',
    ),
    array(
        'ikon' => 'indigo',
        'baslik' => 'Kütüphanedeki Kitap Yazarları',
        'icerik' => $kitap->calculateAuthor(),
        'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />',
    ),
    array(
        'ikon' => 'indigo',
        'baslik' => 'Üye Sayısı',
        'icerik' => 'Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.',
        'svg' => ' <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />',
    ),
);

?>




<div class="bg-white mt-3">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-600">Kütüphane Verileri</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"> Kütüphane Verileri</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Kütüphane ilgili verileri buradan görebilirsiniz.</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                <?php foreach ($veriler as $veri) { ?>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-<?php echo $veri['ikon']; ?>-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-6 h-6 text-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <?php echo $veri['svg']; ?>
                                </svg>
                            </div>
                            <?php echo $veri['baslik']; ?>
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            <?php echo $veri['icerik']; ?>
                        </dd>
                    </div>
                <?php } ?>

            </dl>
        </div>
    </div>
</div>