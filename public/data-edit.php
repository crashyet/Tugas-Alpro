<!-- Untuk Tampilan Edit Data -->

<?php
// Ambil ID dari URL
$id = $_GET['id'];
$filename = '../app/database/data-barang.txt';

// Buka file dan baca data
$data = file($filename, FILE_IGNORE_NEW_LINES);

// Cari data berdasarkan ID
$selected_data = null;
foreach ($data as $line) {
    $parts = explode('|', $line);
    if ($parts[0] == $id) {
        $selected_data = $parts;
        break;
    }
}

if (!$selected_data) {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link rel="stylesheet" href="/public/css/data-edit.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <span>Ubah Data</span>
            <a href="/public/dashboard.php" class="ph ph-x icon-x"></a>
        </div>

        <form action="/app/edit-data.php" method="post" class="form-body">
            <input type="hidden" name="id" value="<?php echo $selected_data[0]; ?>">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="<?php echo $selected_data[1]; ?>" placeholder="Nama Barang"> <br> <br>
            <label>Harga Barang</label>
            <input type="number" name="harga" value="<?php echo $selected_data[2]; ?>" placeholder="Harga"> <br> <br>
            <label>Stok Barang</label>
            <input type="number" name="stock" value="<?php echo $selected_data[3]; ?>" placeholder="Stok"> <br> <br>

            <input type="submit" value="Submit" class="btn-simpan">        
        </form>
    </div>
</body>
</html>