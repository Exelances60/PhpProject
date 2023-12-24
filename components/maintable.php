<div class="relative overflow-x-auto bg-gray-50">


    <table class="w-full text-sm text-left rtl:text-right text-black border shadow-md">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Kitap Adı
                </th>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Yazar
                </th>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Yayın Evi
                </th>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3 border-r-2">
                    Fiyat
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
                echo "<td class='px-6 py-4 border-r-2 border-b-2 whitespace-nowrap'>" . $satir['ad'] . "</td>";
                echo "<td class='px-6 py-4 border-r-2 border-b-2 whitespace-nowrap'>" . $satir['yazar'] . "</td>";
                echo "<td class='px-6 py-4 border-r-2 border-b-2 whitespace-nowrap'>" . $satir['yayınevi'] . "</td>";
                echo "<td class='px-6 py-4 border-r-2 border-b-2 whitespace-nowrap'>" . $satir['kategori'] . "</td>";
                echo "<td class='px-6 py-4 border-r-2 border-b-2 whitespace-nowrap'>" . $satir['ucret'] .  "TL </td>";
                echo "<td class='px-6 py-4 border-r-2 border-b-2 whitespace-nowrap'>
                        <a href='db/deleteBooks.php?id=" . $satir['id'] . "'>Sil</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>