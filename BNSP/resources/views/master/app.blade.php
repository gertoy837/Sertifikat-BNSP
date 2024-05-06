<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PMBP - Petik</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('dist') }}/landing/assets/img/logopetik.jpeg" rel="icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('dist') }}/landing/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top  header-transparent " style="background-color: #87C4FF;">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="{{ route('welcome') }}">
                        <img src="{{ asset('dist') }}/landing/assets/img/lgPetik-removebg-preview.png" alt="">
                    </a></h1>
            </div>
            <nav id="navbar" class="navbar ">
                <ul class="">
                    @yield('isi')
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    @yield('konten')
    <footer id="footer">
        <div class=" text-center py-3">
            <div class="container">
                <div class="row"><br>
                    <div class="col-lg-4 mb-2  mb-lg-0 text-left" style="text-align:left">
                        <img class="navbar-brand "
                            src="{{ asset('dist') }}/landing/assets/img/lgPetik-removebg-preview.png" height="100px"
                            width="250px" bgcolor="dark" style="text-align: left;">
                        <div class="mt-3">
                            <p align="left" class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i>
                                Email <br> pmb.petik@gmail.com</p>
                            <p align="left" class="text-dark"><i class="fa fa-phone-square"
                                    aria-hidden="true"></i> Nomor Telepon <br>0813-9396-3363</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5 mt-4 mb-lg-0">
                        <h4 class="text-center text-dark font-alt mb-4">Media Sosial</h4>
                        <div class="flex-row ml-6col-md-8 col-md-offset-2 mb-3">
                            <a href="https://petik.com" target="_blank"><i
                                    class="fa-solid fa-earth-asia fa-2x"></i></a>&nbsp;&nbsp;
                            <a href="https://www.instagram.com/petik_/" target="_blank"><i
                                    class="fa-brands fa-instagram fa-2x"></i></a>&nbsp;&nbsp;
                            <a href="https://www.youtube.com/@petik4973" target="_blank"><i
                                    class="fa-brands fa-youtube fa-2x"></i></a>&nbsp;&nbsp;
                            <a href="https://www.facebook.com/petikII/" target="_blank"><i
                                    class="fa-brands fa-facebook-f fa-2x"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5 mt-4 mb-lg-0">
                        <h4 class="text-left text-dark font-alt mb-4" style="text-align: left;">Lokasi Tempat</h4>
                        <p class=" mb-0 text-dark " style="text-align: left;">
                            PeTIK - YBM PLN<br> Jl. Mandor Basar No.54, Rangkapan Jaya, <br>Kec. Pancoran Mas, Kota
                            Depok, Jawa Barat 16434
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #39A7FF;" class="p-3">
            <p class="text-center" style="margin: auto; color:white"> &copy; 2024 Copyright hak cipta dilindungi oleh
                Undang-undang</p>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('dist') }}/landing/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('dist') }}/landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dist') }}/landing/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('dist') }}/landing/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('dist') }}/landing/assets/js/main.js"></script>
</body>

</html>
