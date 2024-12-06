<!-- Untuk Delete Data -->

<?php

    if (isset($_GET['id'])) {
        $id_to_delete = $_GET['id'];
        $filename = '../app/database/data-barang.txt';
        
        if (file_exists($filename)) {
            $data = file($filename, FILE_IGNORE_NEW_LINES);
            $new_data = [];

            // Menghapus data yang sesuai dengan ID
            foreach ($data as $line) {
                list($id, $nama_barang, $harga, $stok) = explode('|', $line);
                if ($id != $id_to_delete) {
                    $new_data[] = $line;
                }
            }

            // Menyusun ulang ID supaya tetap urut
            $updated_data = [];
            $new_id = 1;

            foreach ($new_data as $line) {
                list($old_id, $nama_barang, $harga, $stok) = explode('|', $line);
                // Mengganti ID yang hilang dengan ID urut
                $updated_data[] = "$new_id|$nama_barang|$harga|$stok";
                $new_id++;
            }

            // Menyimpan data kembali ke file
            file_put_contents($filename, implode(PHP_EOL, $updated_data));

            // Redirect ke dashboard setelah penghapusan
            header('Location: /public/dashboard.php');
            exit;
        }
    }
?>