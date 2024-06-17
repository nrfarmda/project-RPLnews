<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index tabel</title>
    <link rel="stylesheet" href="admin.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RPL News</title>
    <link rel="icon" href="template/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="template/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="template/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="template/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="template/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="template/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="template/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="template/css/slick.css">
    <link rel="stylesheet" href="template/css/gijgo.min.css">
    <link rel="stylesheet" href="template/css/nice-select.css">
    <link rel="stylesheet" href="template/css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="template/css/style.css">
    
</head>

<body>
<header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="berita.php">Berita</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="menu_btn">
                            <a href="template/#" class="single_page_btn d-none d-sm-block">book a tabel</a>
                        </div> -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <h2>ADMIN PANEL</h2>
    <a href="crud.php">+TAMBAH BERITA Baru</a><br><br>
    </p>
    <table border="5">
    <tr>
        <th>id</th>
        <th>thumbnail</th>
        <th>judul</th>
        <th>isi</th>
        <th>penulis_ID</th>
        <th>Tanggal_terbit</th>
        <th>Aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    $i = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM berita");
    while ($data = mysqli_fetch_array($query)) {
    ?>

    <tr>
 
        <td><?php echo $i; ?></td>
        <td>
            <img src="img/<?= $data['thumbnail'] ?>" width="150">
        </td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $data['isi']; ?></td>
        <td><?php echo $data['penulis_id']; ?></td>
        <td><?php echo $data['tanggal_terbit']; ?></td>
        <td>
            <a href="update.php?id=<?= $data['id']; ?>">Ubah</a> |
            <a href="delete.php?id=<?= $data['id']; ?>">Hapus</a> |
        </td>
    </tr>
    <?php 
    $i++;
    }
    ?>
    </table>
</body>
</html>
