<?php
include 'config.php';

$connection = Config::getConnection();

$sqlBook = "SELECT * FROM `buku`";
$sqlStudent = "SELECT * FROM `siswa`";

$resultStudent = mysqli_query($connection, $sqlStudent);
$resultBook = mysqli_query($connection, $sqlBook);
$students = mysqli_fetch_all($resultStudent, MYSQLI_ASSOC);
$books = mysqli_fetch_all($resultBook, MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Peminjaman </title>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Perpus Ilham malana</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link " aria-current="page" href="buku.php">Buku</a>
                        <a class="nav-link active" href="siswa.php">Siswa</a>
                        <a class="nav-link" href="peminjaman.php">Peminjaman</a>
                    </div>
                </div>
            </div>
        </nav>


        <div class="container">
            <h1 class="text-primary">Tambah Peminjaman</h1>
            <a href="buku.php" class="btn btn-primary text-white mb-3">Lihat peminjaman</a>

            <form method="POST" action="proccess/tambah_peminjaman.php">
                <div class="mb-3">
                    <label for="buku_id" class="form-label">Buku :</label>
                    <select name="buku_id" id="buku_id" class="form-control">
                        <option value="" disabled selected>Pilih buku</option>
                        <?php foreach ($books as $key => $book) { ?>
                            <option value="<?php echo $book['id'] ?>">
                                <?php echo $book['judul'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="siswa_id" class="form-label">Siswa :</label>
                    <select name="siswa_id" id="siswa_id" class="form-control">
                        <option value="" disabled selected>Pilih Siswa</option>
                        <?php foreach ($students as $key => $student) { ?>
                            <option value="<?php echo $student['id'] ?>">
                                <?php echo $student['nama'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script src="./js/bootstrap.min.js"></script>
    </body>

</html>