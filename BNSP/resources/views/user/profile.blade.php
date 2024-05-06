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

<body style="background-color: #B4D4FF">
    <header id="header" class="fixed-top  header-transparent " style="background-color: #39A7FF;">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="{{ url('/') }}">
                        <img src="{{ asset('dist') }}/landing/assets/img/lgPetik-removebg-preview.png" alt="">
                    </a></h1>
            </div>
            <nav id="navbar" class="navbar ">
                <ul>
                    <li><a class="nav-link  scrollto" href="{{ route('index.user') }}">Home</a></li>
                    <li><a class="nav-link  scrollto" href="{{ route('about') }}">About</a></li>
                    <li class="dropdown"><a href="#">
                            <span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li>
                                <a class="nav-link  scrollto" href="{{ route('user', Auth::user()->id) }}">My
                                    Profile</a>
                            </li>
                            <li>
                                <form method="POST" class="dropdown-item d-flex align-items-center"
                                    action="{{ route('logout') }}">
                                    @csrf
                                    <a class="nav-link scrollto">
                                        <div :href="route('logout')" style="cursor: pointer"
                                            onclick="event.preventDefault();
                                          this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </div>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->





    <div class="container" style="margin-top: 6rem; margin-bottom:3rem;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="{{ route('index.user') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="border: none;">{{-- style="border: none;
                    " --}}
                    <div class="card-body rounded">
                        <h3 class="text-center"></h3>
                        <p class="text-center mb-0 fw-bold">{{ $data->name }}</p>
                        <p class="text-center mb-0">{{ $data->email }}</p>
                        <p class="text-center text-muted">- Santri 2024-2025 - </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card" style="border: none;">
                    <div class="card-body rounded">
                        {{-- <a herf="{{}}"></a> --}}
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Username</th>
                                    <td>: {{ $data->username }} </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>: {{ $data->name }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>: {{ $data->email }}</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-dark">
                        <h1>PMB - PeTIK</h1>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Tautan Berguna</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="about.html">About us</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Terms of service</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>pelayanan kami</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Web Development</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Product Management</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Graphic Design</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Jejaring Sosial Kami</h4>
                        <p>Hubungi Kami di platfrom yang tersedia dibawah ini :</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="p-3 text-center text-white" style="background-color: #39A7FF;">
                &copy; Copyright 2024 <strong><span>PeTIK</span></strong>. All Rights Reserved
            </div>
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
