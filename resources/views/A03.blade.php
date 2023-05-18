<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::to('/style.css') }}">
    <title>Paket A03</title>
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
                            <h1 class=" fw-bolder mb-5"><span class="text-gradient d-inline" style="text-decoration:underline ;">PAKET A03</span>
                            </h1>
                            <div class="fs-4 fw-light text-muted fw-bold"><p>Paket A03 menggunakan material standar perumahan dengan harga terjangkau, Menggunakan bahan sebagai berikut:</p>
                                <li>Kanal GM C75/0.60</li>
                                <li>Reng TASO 0.45</li>
                                <li>StarDex Type 700/0.30mm</li>
                                </div>
                           
                        </div>

                    </div>
                    <div class="col-xxl-5">
                        <!-- Header profile picture-->
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="profile bg-gradient-primary-to-secondary">
                                <img class="paket-img" src="{{ URL::to('/assets/images/atap003.jpg') }}" alt="..." />
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
                                                    Untuk informasi lebih lanjut, Hubungi :   
                                                </p>
                                                
                                               <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 
  0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56
   0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928
    4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099
    -.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011
    -.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445
    -.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326
     1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> : <a href="https://api.whatsapp.com/send?phone=082163156292">+6282163156292 (Indris)</a></p>

<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 
  0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56
   0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928
    4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099
    -.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011
    -.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445
    -.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326
     1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> : <a href="https://api.whatsapp.com/send?phone=082163156292">+6282370728901 (Askar)</a></p>
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