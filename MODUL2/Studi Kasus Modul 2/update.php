<?php
// connect to database
require "./connect.php";

// make sure user click update button
if (isset($_POST["update"])) {
    // get unique id
    $id = $_POST["id"];

    // get all input data
    $carName = $_POST["nama_mobil"];
    $brandName = $_POST["brand_mobil"];
    $colorName = $_POST["warna_mobil"];
    $typeName = $_POST["tipe_mobil"];
    $price = $_POST["harga_mobil"];

    // sql query
    $query = "UPDATE showroom_mobil SET
            nama_mobil='$carName',
            brand_mobil='$brandName',
            warna_mobil='$colorName',
            tipe_mobil='$typeName',
            harga_mobil='$price'
            WHERE id=$id";

    // execute sql query
    $test = mysqli_query($conn, $query);

    // condition query is works or not
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
