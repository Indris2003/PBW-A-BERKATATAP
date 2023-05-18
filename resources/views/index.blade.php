<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Selamat Datang di Berkat Atap</title>
</head>
<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ route('/') }}"> <img src="assets/images/Rectangle 5.png" alt="" id="img-nav"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="index.html">Halaman Utama</a></li>
                        <li class="nav-item"><a class="nav-link" href="pemesanan.html">Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- HEADER MULAI -->
        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <div class="badge bg-gradient-primary-to-secondary mb-4">
                                <div class="text-uppercase">Baja Ringan &middot; Partisi &middot; Plaffon</div>
                            </div>
                            <div class="fs-3 fw-light text-muted">Raih rumah impianmu dan dapatkan penawaran terbaikmu
                                sekarang juga bersama kami di,</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">BERKAT ATAP</span>
                            </h1>
                            <div
                                class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                    href="login">MASUK</a>
                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                                    href="register">DAFTAR AKUN</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-7">
                        <!-- Header profile picture-->
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="profile bg-gradient-primary-to-secondary">
                                <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                <img class="profile-img" src="assets/images/Rectangle 5.png" alt="..." />
                            </div>
                        </div>
                        <!-- About Section-->
                        <div class="about">
                            <section class="bg-light py-12">
                                <div class="container px-12">
                                    <div class="row gx-5 justify-content-center">
                                        <div class="col-xxl-8">
                                            <div class="text-center my-5">
                                                <h4 class="fw-bolder"><span
                                                        class="text-gradient d-inline text-decoration-underline">TENTANG
                                                        KAMI</span></h4>
                                                <p class="text-muted">Hai, Selamat datang di Berkat Atap
                                                    Disini Kami menyediakan pemasangan berbagai jenis atap baja ringan
                                                    dan interior rumah, Dengan kualitas yang terjamin dan sudah mencakup
                                                    seluruh wilayah Aceh.
                                                <p>
                                                    Untuk informasi lebih lanjut, Hubungi kami :
                                                    Example@iniemail.com
                                                </p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
    </main>
    <!-- Footer-->
    <footer class=" py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; BERKAT ATAP 2023</div>
                </div>
                <div class="col-auto">
                    <a class="small text-dark" href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small text-dark" href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small text-dark" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>