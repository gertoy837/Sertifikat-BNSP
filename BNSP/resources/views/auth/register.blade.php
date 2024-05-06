<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://petik.or.id/wp-content/uploads/2023/11/photo1699426632.jpeg   ">
    <title>
        PBMP - PeTIK
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('dist') }}/login/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('dist') }}/login/assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2bb9122efe.js" crossorigin="anonymous"></script>
    <link href="{{ asset('dist') }}/login/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('dist') }}/login/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href=pages/dashboards/default.html">
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
        </div>
    </nav>
    <section class="min-vh-100 mb-5">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image:url(https://lh3.googleusercontent.com/p/AF1QipMin5f9o2Qfw7Jd6eQbPSGIRGVqHYfhTWI2Zuux=s680-w680-h510); background-position:0 50rem;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Pendaftaran!</h1>
                        <p class="text-lead text-white">Penerimaan Mahasantri Baru Tahun Angkatan 2024/2025</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-8 col-lg-5 col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-4" style="text-align:center;">
                                    <img src="{{ asset('dist') }}/login/assets/photo_2023-12-28_08-45-25-removebg-preview.png"
                                        alt="" width="30%">
                                </div>
                                <form method="post" enctype="multipart/form-data" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div>
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" class="form-control" type="text"
                                                name="name" :value="old('name')" required autofocus
                                                autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="mt-4">
                                            <x-input-label for="username" :value="__('Username')" />
                                            <x-text-input id="username" class="form-control" type="text"
                                                name="username" :value="old('username')" required autocomplete="username" />
                                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                        </div>
                                        <div class="mt-4">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control" type="email"
                                                name="email" :value="old('email')" required autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="mt-4">
                                            <x-input-label for="email" :value="__('jurusan')" />
                                            <select class="form-select" name="jurusan_id">
                                                <option hidden></option>
                                                @foreach ($data as $item)
                                                    <option value="<?= $item['id'] ?>">
                                                        <?= $item->jurusan ?>
                                                    </option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="mt-4">
                                            <x-input-label for="password" :value="__('Password')" />
                                            <x-text-input id="password" class="form-control" type="password"
                                                name="password" required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="mt-4">
                                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                            <x-text-input id="password_confirmation" class="form-control"
                                                type="password" name="password_confirmation" required
                                                autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" name="daftar"
                                                class="btn bg-gradient-dark w-100 my-4 mb-2">Daftar</button>
                                        </div>
                                        <p class="text-sm text-center mt-3 mb-0">Sudah Memiliki Akun?
                                            <a href="{{ route('login') }}"
                                                class="text-dark font-weight-bolder">Login</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer mb-4">
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
            <a href="#" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-chrome"></span>
            </a>
            <a href="#" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fa-brands fa-x-twitter"></span>
            </a>
            <a href="#" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-instagram"></span>
            </a>
            <a href="#" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-linkedin"></span>
            </a>
            <a href="#" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-facebook"></span>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Developed by PeTIK
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
