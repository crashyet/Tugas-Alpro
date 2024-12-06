<!-- Input Data Dari Form -->

<?php

    // mengambil data dari form
    $nama_barang = ucwords(strtolower($_POST['nama_barang']));
    $harga = $_POST['harga_barang'];
    $stok = $_POST['stok_barang'];

    $filename = 'database/data-barang.txt';

    if (file_exists($filename)) {
        $data = file($filename, FILE_IGNORE_NEW_LINES);
        
        // Menyusun ulang ID yang kosong (mengisi ID yang hilang)
        $ids = [];
        foreach ($data as $line) {
            list($id, $nama, $harga_barang, $stok_barang) = explode('|', $line);
            $ids[] = $id;  // Menyimpan semua ID yang ada
        }

        // Cari ID yang kosong
        $next_id = 1;
        while (in_array($next_id, $ids)) {
            $next_id++; // Jika ID sudah ada, lanjutkan ke ID berikutnya
        }

        // Menambahkan data baru dengan ID yang kosong atau ID terbaru
        $new_data = "\n$next_id|$nama_barang|$harga|$stok";

        // Menambahkan data baru ke file
        file_put_contents($filename, $new_data, FILE_APPEND);

        // Redirect ke dashboard setelah data ditambahkan
        header('Location: /public/dashboard.php');
        exit;
    } else {
        echo "File tidak ditemukan!";
    }

?>