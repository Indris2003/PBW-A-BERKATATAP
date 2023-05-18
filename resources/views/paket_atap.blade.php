<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::to('/style.css') }}">
    
    <title>Paket Atap</title>
</head>

<body class="d-flex flex-column min-vh-100">
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
                    </ul>
                </div>
            </div>
        </nav>
        <!-- KONTEN -->
        <div class="container text-center h">    
        <h2 class="fw-bolder" style="margin:25px; margin-bottom: 25px;" ><span class="text-gradient d-inline" style="text-decoration:underline;">PAKET ATAP</span></h2><br>
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{ URL::to('/assets/images/atap001.jpg') }}" class="img-responsive" style="width:100%; margin:10px;" alt="Image">
                    <a class="btn btn-outline-dark btn-lg px-5 py-2 fs-10 fw-bolder" href="A01">Paket A01</a>
                </div>
                <div class="col-sm-4"> 
                    <img src="{{ URL::to('/assets/images/atap002.jpg') }}" class="img-responsive" style="width:100%; margin: 10px;" alt="Image">
                    <a class="btn btn-outline-dark btn-lg px-5 py-2 fs-10 fw-bolder" href="A02">Paket A02</a>
                </div>
                <div class="col-sm-4"> 
                    <img src="{{ URL::to('/assets/images/atap003.jpg') }}" class="img-responsive" style="width:100%; margin: 10px;" alt="Image">
                    <a class="btn btn-outline-dark btn-lg px-5 py-2 fs-10 fw-bolder" href="A03">Paket A03</a>
                </div>
            </div>
        </div>
        <!-- <br>/ -->
    </main>
        <!-- Footer-->
    <footer class="py-4 mt-auto">
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