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
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Buku</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>


        <div class="container">
            <h1 class="text-primary">Tambah buku</h1>
            <a href="buku.php" class="btn btn-primary text-white mb-3">Lihat buku</a>

            <form method="POST" action="proccess/tambah_buku.php">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul :</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit :</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit">
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahin terbit :</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script src="./js/bootstrap.min.js"></script>
    </body>

</html>