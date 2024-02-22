<?php
include 'config.php';
$sql = "SELECT * FROM `buku`";
$result = mysqli_query($connection, $sql);
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
            <h1 class="text-primary">Buku</h1>
            <a href="tambah_buku.php" class="btn btn-primary text-white">Tambah buku</a>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun terbit</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($books as $key => $book) { ?>
                        <tr>
                            <th scope="row">
                                <?php echo $book['id'] ?>
                            </th>
                            <td>
                                <?php echo $book['judul'] ?>
                            </td>
                            <td>
                                <?php echo $book['penerbit'] ?>
                            </td>
                            <td>
                                <?php echo $book['tahun_terbit'] ?>
                            </td>
                            <td>
                                <a href="edit_buku.php" class="btn btn-info text-white">Edit</a>
                                <form action="proccess/hapus_buku.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $book['id'] ?>">
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