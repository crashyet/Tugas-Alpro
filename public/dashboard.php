<!-- Untuk dashboard -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="/public/css/dashboard.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" 
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="menu-bar">
            <h2 class="logo">Kelompok <span style= "color: #007bff;">Satu</span></h2>
            <a href="/public/login.html" class= "out"><b>Keluar</b></a>
        </div>

        <div class="container">
            <div class="top-container">
                <h2>Data Barang</h2>
            </div>
            <div class="action-container">
                <a href="/public/data-input.html" class="btn-add"><b>+ Tambah Barang</b></a>
                <div class="search-box">
                    <form action="" method="post">
                        <input type="text" name="search" placeholder="Search" required>
                        <button type="submit"><b>Cari</b></button>

                        <!-- Tombol untuk menghapus pencarian dan kembali ke data keseluruhan -->
                        <?php if (isset($_POST['search']) && $_POST['search'] !== ''): ?>
                        <a href="/public/dashboard.php"><button type="button">Clear Search</button></a> 
                        <?php endif; ?>
                    </form>
                </div>
            </div> 
            <br> <hr>
            <table class="barang-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        function showData($search = '') {

                            $filename = '../app/database/data-barang.txt';
                            $last_id = -1; // ID terakhir

                            if (file_exists($filename)) {
                                $data = file($filename, FILE_IGNORE_NEW_LINES);
                                $found = false;

                                foreach ($data as $line) {
                                    if (trim($line) === '') continue;

                                    list($id, $nama_barang, $harga, $stok) = explode('|', trim( $line));
                                    $formated_harga = 'Rp' . number_format($harga, 0, ',', '.');  // Format harga (tanpa desimal)

                                    if (empty($id)) {
                                        continue;
                                    }

                                    if ($search) {
                                        if (stripos($line, $search) !== false) {   // stripos agar data tidak sensitif
                                    
                                            echo "<tr>";
                                            echo "<td>$id</td>";
                                            echo "<td>$nama_barang</td>";
                                            echo "<td>$formated_harga</td>";
                                            echo "<td>$stok</td>";
                                            echo "<td>
                                                    <a href='data-edit.php?id=$id'>
                                                    <button class='btn-edit'>Edit</button></a>
                                                    <a href='../app/delete-data.php?id=$id' 
                                                    onclick='return confirm(\"Yakin ingin menghapus barang ini?\");'>
                                                    <button type='button' class='btn-delete'>Delete</button>
                                                </td>";
                                            echo "</tr>";
                                            $found = true;
                                        }
                                    } else {
                                        echo "<tr>";
                                        echo "<td>$id</td>";
                                        echo "<td>$nama_barang</td>";
                                        echo "<td>$formated_harga</td>";
                                        echo "<td>$stok</td>";
                                        echo "<td>
                                                <a href='data-edit.php?id=$id'>
                                                <button class='btn-edit'>Edit</button></a>
                                                <a href='../app/delete-data.php?id=$id' 
                                                onclick='return confirm(\"Yakin ingin menghapus barang ini?\");'>
                                                <button type='button' class='btn-delete'>Delete</button>
                                            </td>";
                                        echo "</tr>";
                                    }
                                }

                                if ($search && !$found) {
                                    echo "Data tidak ditemukan!";
                                } 
                            } else {
                                echo "File tidak ditemukan!";
                            }

                            $last_id = $last_id + 1;
                        }

                        if (isset($_POST['search'])) {
                            $search = $_POST['search'];
                            showData($search);
                        } else {
                            showData();
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <footer class="footer">
        <div class="footer-content">
            <p>© Kelompok Satu | 2024
            </p>
        </div>
    </footer>
    </body>
</html>
