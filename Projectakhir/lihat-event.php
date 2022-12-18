<?php

require 'connect.php';
$event = lihat("SELECT * FROM events");

// fitur search
if(isset($_POST["cari"])){
    $event = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tugas Akhir Basis Data Kel.7 K3</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">EventYuk!</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Event</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="lihat-event.php">Lihat Event</a></li>
                                    <li><a class="dropdown-item" href="upload-event.php">Upload Event</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pemesanan</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="ticket.php">Ticket</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page Content-->
            <!-- fitur search -->
            <div class="box-pencarian">
            <br>
            <form action="" method="post">
                        <input type="text" name="keyword" autofocus placeholder="cari event yang tersedia.." autocomplete="off">
                        <button type="submit" name="cari">Cari</button>
                    </form>
                    <br>
            </div>
            <section class="py-5">
            <div name="Event-tersedia" id="eventersedia" cols="100" rows="100">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Event yang Tersedia :</h1>
                        <p class="lead fw-normal text-muted mb-0">Informasi event yang telah masuk</p>
                    </div>
                    <?php foreach ($event as $row):?>
        <table>
                    <div class="row gx-5">
                        <div class="col-lg-6">
                            <div class="gambarevent">
                                <img src="gambar/<?= $row["Gambar"]; ?>"/ alt="" width="500" height="650">
                                <td>Nama Event: <?= $row["Nama_Event"];?></td>
                                <td>Tanggal: <?= $row["Tanggal_Event"]; ?></td>
                                <td>Tempat: <?= $row["Tempat"]; ?></td>
                                <td>Penyelenggara: <?= $row["Penyelenggara"]; ?></td>
                                <td>CP: <?= $row["Kontak"]; ?></td>
                                <button><a href="update-event.php?ID_Event=<?= $row["ID_Event"]; ?>">Ubah  </a></button> 
                                <br>
                                <button><a href="hapus.php?ID_Event=<?= $row["ID_Event"]; ?>" onclick="
                                return confirm('apakah anda yakin?');">Hapus </a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </table>
            <?php endforeach; ?>
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <h2 class="display-4 fw-bolder mb-4">Silahkan lihat event menarik lainnya yang ingin anda ikuti</h2>
                    <a class="btn btn-lg btn-primary" href="about.php">Kontak Admin</a>
                </div>
            </section>
            </div>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Tugas Akhir Basis data Kelompok 7</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="about.php">Tentang Website</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="lihat-event.php">Event yang tersedia</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="index.php">Home</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
