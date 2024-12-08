# Deskripsi Proyek

Proyek ini merupakan aplikasi berbasis web sederhana yang menyediakan fitur login, register, dashboard, input, edit, dan delete data. Berikut adalah penjelasan untuk setiap file dalam proyek ini.

---

## Struktur dan Penjelasan File

### **1. Welcome Screen**
- **`/index.html`**:  
  Halaman utama yang ditampilkan ketika aplikasi dibuka. Berisi pengantar atau link menuju halaman login dan register.

- **`/public/css/index.css`**:  
  File CSS untuk mengatur gaya tampilan halaman utama (`index.html`), seperti tata letak, warna, dan elemen visual.

---

### **2. Tampilan Login & Register**
- **`/public/login.html`**:  
  Halaman login dan register. Halaman ini memungkinkan pengguna untuk masuk ke aplikasi atau membuat akun baru.

- **`/public/css/alert.css`**:  
  File CSS untuk mengatur tampilan pesan peringatan atau notifikasi, seperti kesalahan input login atau pendaftaran berhasil.

- **`/public/css/login.css`**:  
  File CSS untuk mendesain tampilan login dan register agar lebih menarik dan responsif.

- **`/public/js/alert.js`**:  
  File JavaScript untuk menampilkan atau mengatur pesan peringatan di halaman login dan register.

- **`/public/js/slider-login.js`**:  
  File JavaScript untuk menambahkan efek slider atau animasi pada halaman login dan register.

---

### **3. Access Login & Register**
- **`/app/access-login.php`**:  
  Script PHP yang memproses data login dari pengguna. Melakukan validasi username dan password berdasarkan data di database.

- **`/app/access-register.php`**:  
  Script PHP untuk memproses pendaftaran pengguna baru dan menyimpan data mereka di database.

---

### **4. Database Users**
- **`/app/database/users.txt`**:  
  File teks sederhana yang berfungsi sebagai database untuk menyimpan data pengguna, seperti username dan password.

---

### **5. Tampilan Dashboard**
- **`/public/dashboard.php`**:  
  Halaman utama setelah pengguna berhasil login. Menampilkan data atau fitur yang tersedia dalam aplikasi.

- **`/public/css/dashboard.css`**:  
  File CSS untuk mengatur gaya tampilan dashboard, seperti tata letak data, menu navigasi, dan elemen visual lainnya.

---

### **6. Database Dashboard**
- **`/app/database/data-barang.txt`**:  
  File teks yang berfungsi sebagai database untuk menyimpan data barang atau informasi lain yang akan dikelola melalui dashboard.

---

### **7. Tampilan Input Data**
- **`/public/data-input.html`**:  
  Halaman untuk menginput data baru ke dalam sistem.

- **`/public/css/data-input.css`**:  
  File CSS untuk mendesain tampilan halaman input data agar lebih menarik dan terstruktur.

- **`/app/input-data.php`**:  
  Script PHP untuk memproses dan menyimpan data yang diinputkan pengguna ke dalam database (`data-barang.txt`).

---

### **8. Tampilan Edit Data**
- **`/public/data-edit.php`**:  
  Halaman untuk mengedit data yang sudah ada dalam sistem.

- **`/public/css/data-edit.css`**:  
  File CSS untuk mendesain tampilan halaman edit data agar sesuai dengan kebutuhan pengguna.

- **`/app/edit-data.php`**:  
  Script PHP untuk memproses perubahan data dan memperbarui database (`data-barang.txt`).

---

### **9. Delete Data**
- **`/app/delete-data.php`**:  
  Script PHP untuk menghapus data tertentu dari database (`data-barang.txt`) berdasarkan permintaan pengguna.

---

## Cara Menjalankan Aplikasi
1. **Persiapkan Lingkungan**:
   - Instal server PHP lokal seperti XAMPP, WAMP, atau LAMP.
   - Pastikan folder proyek ini ditempatkan di direktori server (`htdocs` untuk XAMPP).

2. **Akses Aplikasi**:
   - Buka browser dan akses `http://localhost/[nama_folder]`.

3. **Konfigurasi Database**:
   - Pastikan file database (`users.txt` dan `data-barang.txt`) sudah disiapkan di folder `/app/database/`.

---

## Fitur Utama
- **Login & Register**: Autentikasi pengguna untuk mengakses aplikasi.
- **Dashboard**: Menampilkan data barang atau informasi lain.
- **Input Data**: Menambahkan data baru ke sistem.
- **Edit Data**: Memperbarui data yang ada.
- **Delete Data**: Menghapus data tertentu.

---

Created by :
1. Adhitya Putra A. N.
2. Adinda Lailatul M.
3. Ilmi Azam
4. Khalifah Brilianti R.
