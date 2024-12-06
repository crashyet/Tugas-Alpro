<!-- Proses Login -->

<?php

    // Ambil data dari form
    $username = $_POST['logUser'];
    $password = $_POST['logPass'];
    $filename = 'database/users.txt';

    // Cek apakah username ada di array dan password cocok
    $file = fopen($filename, "r");      // untuk membuka file di $filename
    while (($line = fgets($file)) !== false) {
        list($user, $pass) = explode("|", trim($line)); // Menghapus spasi atau newline
        if ($user === $username && $pass === $password) {
            fclose($file);
            header("Location: /public/dashboard.php"); // Jika berhasil akan masuk ke dashboard
            exit();
        } 
        else {
            header("Location: /public/login.html?error=true");  // jika gagal akan kembali ke login.html
        }
    }
    fclose($file);    
?>
