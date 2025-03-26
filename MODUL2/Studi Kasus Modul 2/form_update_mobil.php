<?php
include("navbar.php");

// connect to db
include("connect.php");

// get id
$id = $_GET['id'];

// sql query
$query = "SELECT * FROM showroom_mobil WHERE id = $id";

// execute sql query
$data = mysqli_query($conn, $query);

// data storage
$car = [];

// loop all data from database
while ($car = mysqli_fetch_assoc($data)) {
    $cars[] = $car;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
</head>

<body>
    <div class="row">
        <center>
            <h1>Perbarui Detail Mobil</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="POST" enctype="multipart/form-data">
                            <!-- Tampilkan masing-masing data berdasarkan id -->
                            <input type="hidden" class="form-control" name="id" id="id" value="<?= $cars[0]["id"] ?>">
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="nama_mobil" id="nama_mobil" value="<?= $cars[0]["nama_mobil"] ?>" required>
                                <label for="nama_mobil">Nama Mobil</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="brand_mobil" id="brand_mobil" value="<?= $cars[0]["brand_mobil"] ?>" required>
                                <label for="brand_mobil">Brand Mobil</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="warna_mobil" id="warna_mobil" value="<?= $cars[0]["warna_mobil"] ?>" required>
                                <label for="warna_mobil">Warna Mobil</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="tipe_mobil" id="tipe_mobil" value="<?= $cars[0]["tipe_mobil"] ?>" required>
                                <label for="tipe_mobil">Tipe Mobil</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="harga_mobil" id="harga_mobil" value="<?= $cars[0]["harga_mobil"] ?>" required>
                                <label for="harga_mobil">Harga Mobil</label>
                            </div>
                            <button type="submit" name="update" id="update" class="btn btn-primary mb-3 mt-3 w-100">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <center>
    </div>
</body>

</html>