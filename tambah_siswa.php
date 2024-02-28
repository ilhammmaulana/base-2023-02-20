<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Siswws </title>
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
            <h1 class="text-primary">Tambah siswa</h1>
            <a href="siswa.php" class="btn btn-primary text-white mb-3">Lihat siswa</a>

            <form method="POST" action="proccess/tambah_siswa.php">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas :</label>
                    <input type="text" class="form-control" id="kelas" name="kelas">
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon :</label>
                    <input type="text" class="form-control" id="telepon" name="telepon">
                </div>
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN :</label>
                    <input type="text" class="form-control" id="nisn" name="nisn">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script src="./js/bootstrap.min.js"></script>
    </body>

</html>