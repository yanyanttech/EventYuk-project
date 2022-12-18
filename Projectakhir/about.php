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
    <body class="d-flex flex-column">
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
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">EventYuk</h1>
                                <p class="lead fw-normal text-muted mb-4"> EventYuk adalah website yang melayani event untuk mencari sponsor dan media partner.</p>
                                <a class="btn btn-primary btn-lg" href="#scroll-target">Baca tentang kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About section one -->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="logo_ipb.png" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Seputar Team Kami</h2>
                            <p class="lead fw-normal text-muted mb-0">EventYuk! merupakan Website yang dibuat oleh 3 orang mahasiswa IPB University. Website ini dibuat dengan tujuan agar menjadi wadah dalam rangka membantu pengguna dalam mencari informasi seputar event maupun kegiatan-kegiatan menarik lainnya. </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section two -->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="tujuh.png" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Kelompok 7</h2>
                            <p class="lead fw-normal text-muted mb-0">Menjadikan EventYuk sebagai penghubung antara penyelenggara event dengan sponsorship dan media partner.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">TEAM 7 :</h2>
                        <p class="lead fw-normal text-muted mb-5">Kerja sama adalah kuncinya</p>
                    </div>
                    <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-7 px-7" src="samanbrembo.png" alt="..."/>
                                <h5 class="fw-bolder">Fallah Indrawan</h5>
                                <div class="fst-italic text-muted">Frontend Developer</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-7 px-7" src="iant.png" alt="..." />
                                <h5 class="fw-bolder">Stanislaus Brillant</h5>
                                <div class="fst-italic text-muted">Backend Developer</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-sm-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-7 px-7" src="raka.png" alt="..." href="www.instagram.com/r.zannn"/>
                                <h5 class="fw-bolder">Raka Irzan Alfian</h5>
                                <div class="fst-italic text-muted">Frontend Developer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                        <a class="link-light small" href="Index.php">Home</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
    </body>
</html>
