<?php
session_start();
if (!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
require 'connect.php';
// ambil data di url
$id = $_GET["ID_Event"];
// query data berdasarkan ID_Event
$event = lihat("SELECT * FROM events WHERE ID_Event=$id")[0];

if( isset($_POST["Kirim"])){
    if( ubah($_POST)>0){
         echo "<script>
                 alert('event berhasil diupdate');
                 document.location.href = 'lihat-event.php';
             </script>";
     }
     else{
         echo "<script>
         alert('event gagal diupdate');
         document.location.href = 'lihat-event.php';
     </script>";
     }
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
                    <button class="navbar-toggler" type="button" _POST-bs-toggle="collapse" _POST-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mb-5">
                                <h1 class="fw-bolder">UPDATE EVENT</h1>
                                <p class="lead fw-normal text-muted mb-0">Silahkan isi Form dibawah ini untuk melakukan update informasi mengenai event yang akan anda selenggarakan.</p>
                            </div>
                        </div>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $event["ID_Event"];?>">
                <div class="Background-Name">  
                        <i class="fa-sharp fa-solid fa-user"></i>
                        <label for="penyelenggara">Institusi yang menyelenggarakan :</label><br>
                        <input type="text" name="penyelenggara" id="penyelenggara" required value="<?= $event["Penyelenggara"];?>"><br>
                    </i>
                </div>
                <div class="Background-Username">
                    <i class="fa-sharp fa-solid fa-user-plus"></i>
                    <label for="event">Nama Event:</label><br>
                    <input type="text" name="event" id="event"required value="<?= $event["Nama_Event"];?>"><br>
                </div>
                <div class="Background-Email">
                    <i class="fa-sharp fa-solid fa-envelope"></i>
                    <label for="tanggal">Tanggal Diselenggarakan :</label><br>
                    <input type="date" name="tanggal" id="tanggal"required value="<?= $event["Tanggal_Event"];?>"><br>
                </div>
                <div class="Background-Password">
                    <i class="fa-sharp fa-solid fa-lock-open"></i>
                    <label for="tempat">Kota/Kabupaten :</label><br>
                    <input type="text" name="tempat" id="tempat"required value="<?= $event["Tempat"];?>"><br>
                </div>
                <div class="Background-Password">
                    <i class="fa-sharp fa-solid fa-lock-open"></i>
                    <label for="kontak">Kontak yang dapat dihubungi :</label><br>
                    <input type="text" name="kontak" id="kontak"required value="<?= $event["Kontak"];?>"><br>
                </div>
                <div class="Background-Password">
                    <i class="fa-sharp fa-solid fa-lock-open"></i>
                    <label for="gambar">Upload Poster Disini :</label><br>
                    <input type="file" name="gambar" id="gambar"required value="<?= $event["Gambar"];?>"><br>
                </div>
				<br>
                <button type="submit" name="Kirim">Update</button>
                <br>
                <br>
            </form>
        <br>
        <br>
        <br>
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Tugas Akhir Basis _POST Kelompok 7</div></div>
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
