<?php
// (1) Sertakan koneksi database dari yang sudah kalian buat yaa
require "connect.php";

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if (isset($_POST["create"])) {
    // a. Ambil data nama mobil
    $carName = $_POST["nama_mobil"];
    // b. Ambil data brand mobil
    $brandName = $_POST["brand_mobil"];
    // c. Ambil data warna mobil
    $colorName = $_POST["warna_mobil"];
    // d. Ambil data tipe mobil
    $typeName = $_POST["tipe_mobil"];
    // e. Ambil data harga mobil
    $price = $_POST["harga_mobil"];
    // (4) Kalau sudah, kita lanjut Query
    $query = "INSERT INTO showroom_mobil (nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) 
    VALUES ('$carName', '$brandName', '$colorName', '$typeName', '$price')";
    mysqli_query($conn, $query);

    // (5) Buatkan kondisi jika eksekusi query berhasil
    if (mysqli_affected_rows($conn) > 0) {
        header("Location: list_mobil.php");
    } else {
        echo "
        <script>
            alert('Data failed');
            document.location.href = list_mobil.php;
        </script>
        ";
        exit;
    }
}
