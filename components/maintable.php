<div class="relative overflow-x-auto bg-gray-50">


    <table class="w-full text-sm text-left rtl:text-right text-black border shadow-md">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Kitap ID
                </th>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Kitap Adı
                </th>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Yazar
                </th>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Yayın Evi
                </th>
                <th scope="col" class="px-6 py-3 border-r-2 md:flex hidden">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Fiyat
                </th>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Stock
                </th>
                <th scope="col" class="px-6 py-3 border-r-2">
                    İşlemler
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $kitap = new Kitap("books");
            foreach ($kitap->getAllBooks() as $satir) {
                echo "<tr>";
                echo "<td class='px-6 py-4 border-r-2 border-b-2 whitespace-nowrap'>" . $satir['id'] . "</td>";
                echo "<td class='px-6 py-4 border-r-2 border-b-2 whitespace-nowrap'>" . $satir['ad'] . "</td>";
                echo "<td class='px-6 py-4 border-r-2 border-b-2 text-center whitespace-nowrap'>" . $satir['yazar'] . "</td>";
                echo "<td class='px-4 py-4 border-r-2 border-b-2 text-center whitespace-nowrap'>" . $satir['yayınevi'] . "</td>";
                echo "<td class='px-6 py-4 md:flex hidden border-r-2 border-b-2 whitespace-nowrap'>" . $satir['kategori'] . "</td>";
                echo "<td class='px-6 py-4 border-r-2 border-b-2 whitespace-nowrap'>" . $satir['ucret'] .  "TL </td>";
                echo "<td class='px-1 py-4 border-r-2 border-b-2 text-center whitespace-nowrap'>" . $satir['stock'] . " </td>";
                echo "<td class='px-6 py-4 border-r-2 border-b-2 whitespace-nowrap' >
                        <a href='db/updateBookForm.php?id=" . $satir['id'] . "' class='p-2 box-border border bg-orange-300'>Güncelle</a>
                        <a href='db/deleteBooks.php?id=" . $satir['id'] . "'class='p-2 box-border border'>Sil</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>