<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::to('/style.css') }}">
    <title>Paket P03</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ route('/') }}"> <img src="{{ URL::to('/assets/images/rectangle 5.png') }}" alt="" id="img-nav"></a>
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
                <div class="row gx-5 ">
                    <div class="col-xxl-7" id="infoP">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <h1 class=" fw-bolder mb-5"><span class="text-gradient d-inline" style="text-decoration:underline ;">PAKET P03</span>
                            </h1>
                            <div class="fs-4 fw-light text-muted fw-bold"><p>Paket PV03 menggunakan motif dan kualitas standar untuk perumahan, Menggunakan bahan sebagai berikut:</p>
                                <li>PVC BAGUS AF 8mm</li>
                                <li>Furing Star 0.30mm</li>
                                <li>Profil BAGUS SB</li>
                                </div>
                           
                        </div>

                    </div>
                    <div class="col-xxl-5">
                        <!-- Header profile picture-->
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="profile bg-gradient-primary-to-secondary">
                                <img class="paket-img" src="{{ URL::to('/assets/images/P03.jpg') }}" alt="..." />
                            </div>
                        </div>
                        <!-- About Section-->
                        <div class="infoPaket">
                            <section class="bg-light py-12">
                                <div class="container px-12">
                                    <div class="row gx-5 justify-content-center">
                                        <div class="col-xxl-8">
                                            <div class="text-center my-5">
                                                <p class="text-muted " style="font-style: italic;">*Untuk setiap pesanan paket
                                                    Costumer hanya terima beres,
                                                    tukang pemasangan dll 
                                                    ditanggung toko.
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
                            <div class="row">
                                <div class="d-flex justify-content-end col-sm-12">
                                    <a class="btn btn-primary text-lg-center" href="#" role="button" style="margin:20px; display: flex; align-items: center; justify-content: center;">Pesan Sekarang</a>
                                </div>
                                
                            </div>
                            
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