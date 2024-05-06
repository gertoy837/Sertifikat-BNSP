<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>PMB - PeTIK</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Vendor CSS Files -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('dist') }}/template1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('dist') }}/template1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('dist') }}/template1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="{{ asset('dist') }}/template1/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e2bb076cb4.js"></script>

    <link href="{{ asset('dist') }}/template1/css/style.css" rel="stylesheet" />
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="{{url('/')}}">
                    <img src="{{ asset('dist') }}/template1/img/logopetik.jpeg" class="img-fluid" alt="logo" />
                    {{-- <h1 class="text-dark">PMB</h1> --}}
                </a>
            </h1>

            <nav id="navbar" class="navbar">
                <ul>
                    @if (Route::has('login'))
                        <ul class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <li>
                                    <a class="nav-link scrollto" href="{{ route('login') }}">Masuk<i
                                            class="fa fa-lock"></i></a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a class="getstarted scrollto" href="{{ route('register') }}">Daftar<i
                                                class="fa-regular fa-user"></i></a>

                                    </li>
                                @endif
                            @endauth
                        </ul>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200"
                    id="isian">
                    <h1>PMB - PeTIK</h1>
                    <h2>Penerimaan Mahasantri Baru Tahun Agkatan 2024/2025</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('register') }}" class="btn-get-started scrollto">Daftar</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('dist') }}/template1/img/hero-img.png" class="img-fluid animated"
                        alt="" />
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <section id="lampiran" class="lampiran">
                <div class="row content">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Berapa Jumlah Santri Dalam 1 Kamar ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p>Jumlah santri dalam satu kamar ± 30 orang.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Apa Tujuan Orang Masuk Pesantren?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Melalui pondok pesantren, anak-anak dapat mengembangkan karakter yang kuat,
                                    mengasah pemahaman agama yang mendalam, dan mempersiapkan diri mereka untuk
                                    menghadapi tantangan dunia dengan keyakinan yang teguh.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Apa Saja yang dipelajari di Pesantren PeTIK?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Materi yang diajarkan dalam pesantren meliputi berbagai disiplin ilmu
                                    pengetahuan agama, meliputi: tauhid (teologi), tasawuf (sufisme) dan akhlak,
                                    fiqh (hukum Islam). Dan meliputi ilmu Teknologi Informasi dan Komunikasi,
                                    meliputi : Ilmu Komputer yang identik dengan computer programming, sistem
                                    informasi, sistem komputer, teknik Komputer, dan teknologi informasi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Berapa Lama Waktu Mondok di Pesantren PeTIK?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Berapa Lama Mondok Di Pesantren PeTIK? Masa pendidikan di Pesantren PeTIK selama
                                    1 Tahun. Mahasantri diwajibkan mukim diasrama.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Berapa Biaya Masuk ke Pesantren PeTIK
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Pesantren PeTIK merupakan pesantren berbasis IT di kota Depok Provinsi Jawa
                                    Barat. Pesantren ini 100% gratis.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Apa Saja Fasilitas Sarana dan Prasarana di Pesantren PeTIK
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <ol><b>Fasilitas Sarana dan Prasarana di Pesantren PeTIK</b>
                                        <li>Lab Komputer Full Ac</li>
                                        <li>Asrama</li>
                                        <li>Kantin</li>
                                        <li>Musholla</li>
                                        <li>Uang Saku</li>
                                        <li>Komputer</li>
                                        <li>Modul Pembelajaran</li>
                                        <li>Tenaga Pendidik Ahli</li>
                                        <li>Tim Pengasuh 24 Jam</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-41b3728 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="41b3728" data-element_type="section" style="padding-top: 10rem;">
                        <h1 class="pb-2 text-center">SEBARAN PENERIMA MANFAAAT</h1>
                        <h5 class="text-center pb-5">Pesantren Teknologi Informasi dan Komunikasi total penerima
                            manfaat 280 Mahasantri</h5>
                        <img width="100%"
                            src="https://petik.or.id/wp-content/uploads/2022/08/peta-indonesia-1024x439.png"
                            class="" alt="...">
                    </section>
                </div>
            </section>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
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
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright 2024 <strong><span>PeTIK</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i>
    </a>

    <script>
        AOS.init();
    </script>

    <script src="{{ asset('dist') }}/template1/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('dist') }}/template1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dist') }}/template1/js/style.js"></script>
</body>

</html>
