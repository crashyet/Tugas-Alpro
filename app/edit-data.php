<!-- Edit Data -->

<?php
    // Ambil data dari file
    $file = '../app/database/data-barang.txt';
    $data = file($file, FILE_IGNORE_NEW_LINES);

    // Ambil data dari form
    $id = $_POST['id'];
    $nama_barang = ucwords(strtolower($_POST['nama_barang']));
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    // Update data dalam array
    foreach ($data as $key => $line) {
        $parts = explode('|', $line);
        if ($parts[0] == $id) {
            $data[$key] = $id . '|' . $nama_barang . '|' . $harga . '|' . $stock;
            break;
        }
    }

    // Tulis kembali data ke file
    file_put_contents($file, implode(PHP_EOL, $data));

    header('Location: /public/dashboard.php');
?>