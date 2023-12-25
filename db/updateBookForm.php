<?php
include "Kitap.php";

$bookId = $_GET['id'];
$kitap = new Kitap("books");
$book = $kitap->getBook($bookId);




?>
<div class="w-full p-5 box-border  flex items-center flex-col justify-center ">

    <form class=" w-[50%] mt-2" method="POST" action="updateBooks.php">

        <h1 class="text-xl text-center">Kitap Güncelle</h1>
        <div class="flex flex-wrap -mx-3 mb-6 ">
            <div class="w-full  px-3 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Kitap ID
                </label>
                <input name="id" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Kitap İsmi Giriniz" value="<?php echo $book['id'] ?>" type="hidden" readonly="readonly">

            </div>
            <div class="w-full  px-3 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Kitap Update
                </label>
                <input name="ad" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Kitap İsmi Giriniz" value="<?php echo $book['ad'] ?>">

            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Yazar Update
                </label>
                <input name="yazar" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Yazar İsmi Giriniz" value="<?php echo $book['yazar'] ?>">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full  px-3 mb-6 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    Yayın Evi Update
                </label>
                <input name="yayınevi" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Yayın Evi" value="<?php echo $book['yayınevi'] ?>">
            </div>
            <div class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Ücret Update
                </label>
                <input name="ucret" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" placeholder="Ücret" value="<?php echo $book["ucret"] ?>">
            </div>
            <div class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Kategori Update
                </label>
                <input name="kategori" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Kategori" value="<?php echo $book["kategori"] ?>">
            </div>
            <div class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Kitap Hakkında Update
                </label>
                <input name="details" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Kitap Hakkında Bilgi" value="<?php echo $book["details"] ?>">
            </div>
            <div class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Stock Update
                </label>
                <input name="stock" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" placeholder="Kitap Hakkında Bilgi" value="<?php echo $book["stock"] ?>">
            </div>
            <div class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Resim URL Update
                </label>
                <input name="photoUrl" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Resim Url Update" value="<?php echo $book['photoUrl'] ?>">
            </div>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-3 rounded" type="submit">
                Kitap Güncelle
            </button>
    </form>
</div>


<script src="https://cdn.tailwindcss.com"></script>

</div>