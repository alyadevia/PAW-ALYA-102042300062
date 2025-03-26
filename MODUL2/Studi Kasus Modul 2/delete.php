<?php
//Sertakan koneksi database yang telah dibuat
require "./connect.php";
// (2) Tangkap nilai "id" mobil 
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    // (3) Buat perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $delete_query = "DELETE FROM showroom_mobil WHERE id = $id";
    mysqli_query($conn, $delete_query);
    // (4) Buatkan perkondisi jika eksekusi query berhasil
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

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
?>
