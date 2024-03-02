<?php
include 'config.php';
$connection = Config::getConnection();

$sql = "SELECT * FROM `siswa`";
$result = mysqli_query($connection, $sql);
$students = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buku </title>
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
            <h1 class="text-primary">Siswa</h1>
            <a href="tambah_siswa.php" class="btn btn-primary text-white">Tambah siswa</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($students as $key => $student) { ?>
                        <tr>
                            <th scope="row">
                                <?php echo $student['id'] ?>
                            </th>
                            <td>
                                <?php echo $student['nama']; ?>
                            </td>
                            <td>
                                <?php echo $student['kelas'] ?>
                            </td>
                            <td>
                                <?php echo $student['telepon'] ?>
                            </td>
                            <td>
                                <?php echo $student['nisn'] ?>
                            </td>
                            <td class="d-flex gap-2">
                                <a href="edit_siswa.php?id=<?php echo $student['id'] ?>"
                                    class="btn btn-info text-white">Edit</a>
                                <form action="proccess/hapus_siswa.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $student['id'] ?>">
                                    <button type="submit" class="btn btn-danger text-white">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <script src="./js/bootstrap.min.js"></script>
    </body>

</html>