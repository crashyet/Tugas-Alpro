<!-- Proses Register -->

<?php
    $user = $_POST['regUser'];
    $pass = $_POST['regPass'];

    $filename = 'database/users.txt';

    $new_data = "\n$user|$pass";

    if (file_exists($filename)) {
        // Menambahkan data baru ke file
        file_put_contents($filename, $new_data, FILE_APPEND);

        // Redirect ke dashboard setelah data ditambahkan
        header('Location: /public/login.html');
        exit;
    } else {
        echo "File tidak ditemukan!";
    }
?>