<?php
include 'config.php';
$sql = "SELECT peminjaman.id, peminjaman.tgl_pinjam,
peminjaman.tgl_kembali, peminjaman.status, 
siswa.nama as nama_siswa,siswa.kelas as kelas_siswa, 
buku.judul as judul_buku FROM `peminjaman` 
INNER JOIN `siswa` ON peminjaman.siswa_id = siswa.id
INNER JOIN `buku` ON peminjaman.buku_id = buku.id";
$result = mysqli_query($connection, $sql);
$borrowing = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
            <h1 class="text-primary">Peminjaman</h1>
            <a href="tambah_peminjaman.php" class="btn btn-primary text-white">Tambah peminjaman</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($borrowing as $key => $borrow) { ?>
                        <tr>
                            <th scope="row">
                                <?php echo $borrow['id'] ?>
                            </th>
                            <td>
                                <?php echo $borrow['nama_siswa']; ?>
                            </td>
                            <td>
                                <?php echo $borrow['judul_buku'] ?>
                            </td>
                            <td>
                                <?php echo $borrow['tgl_pinjam'] ?>
                            </td>
                            <td>x
                                <?php echo $borrow['tgl_kembali'] ?>
                            </td>
                            <td>
                                <?php echo $borrow['status'] ?>
                            </td>
                            <td class="d-flex gap-2">
                                <a href="edit_siswa.php?id=<?php echo $borrow['id'] ?>"
                                    class="btn btn-info text-white">Edit</a>
                                <form action="proccess/hapus_siswa.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $borrow['id'] ?>">
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