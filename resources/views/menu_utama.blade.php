<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::to('/style.css') }}">
    
    <title>Menu Utama</title>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html"> <img src="{{ URL::to('/assets/images/rectangle 5.png') }}" alt="" id="img-nav"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="index.html">Halaman Utama</a></li>
                        <li class="nav-item"><a class="nav-link" href="pemesanan.html">Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Kontak</a></li>
                        <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" style="background-color: red; color: white; border-width: 0px;">Logout</button>
</form>



                    </ul>
                </div>
            </div>
        </nav>
        <!-- KONTEN -->
        <div class="container">
            <div class="p-4 p-md-5 mb-4 row row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mt-1" id="atap1">
                <div class="col-md-6 px-2">
                    <h1 class="d-inline-block mb-2 text-dark text-decoration-underline">ATAP BAJA RINGAN</h1>
                    <h5 class="mb-0">Harga Mulai Rp. 200.000,00/Meter</h5>
                    <p class="card-text mb-auto">Pemasangan atap baja ringan dengan segala model genteng. Harga
                        terjangkau mulai
                        Rp.
                        200.000,00/Meter, wujudkan rumah impian anda dengan klik link dibawah.</p>
                    <button type="button" class="btn text-white" id="btn-sub" style="width:80% ;">Lihat Lanjut</button>
                </div>
                <div class="col-md-6 ">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner" style="width:100%; height:250px;">
                            <div class="carousel-item active">
                                <img src="{{ URL::to('/assets/images/atap3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ URL::to('/assets/images/atap2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ URL::to('/assets/images/atap.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                        id="plaffon">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong
                                class="d-inline-block mb-2 text-dark text-decoration-underline">PLAFFON(PVC)/GYPSUM</strong>
                            <h5 class="mb-0">Harga Mulai Rp. 90.000,00/Meter</h5>
                            <div class="mb-1 text-muted"></div>
                            <p class="card-text mb-auto">Pemasangan Plaffon(pvc)/Gypsum dengan berbagai motif dan warna,
                                kualitas dijamin dengan harga terjangkau.</p>
                            <button type="button" id="btn-sub" class="btn text-white">Lihat Lanjut</button>
                        </div>
                        <div class="col-auto">
                            <img class="bd-placeholder-img" src="{{ URL::to('/assets/images/plaffon.jpg') }}" width="250px" height="100%"
                                role="img" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                        id="plaffon">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-dark text-decoration-underline">PARTISI(SEKAT
                                RUANG)</strong>
                            <h5 class="mb-0">Harga Mulai Rp. 160.000,00/Meter</h5>
                            <div class="mb-1 text-muted"></div>
                            <p class="card-text mb-auto">Pemasangan Partisi(Sekat Ruang), dengan berbagai martial, mulai
                                dari GRC, Gypsum, Dll; kualitas dijamin dengan harga terjangkau.</p>
                            <button type="button" id="btn-sub" class="btn text-white">Lihat Lanjut</button>
                        </div>
                        <div class="col-auto">
                            <img class="bd-placeholder-img" src="{{ URL::to('/assets/images/grc.jpg') }}" width="250px" height="100%"
                                role="img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
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