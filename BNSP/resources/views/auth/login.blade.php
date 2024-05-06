<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://petik.or.id/wp-content/uploads/2023/11/photo1699426632.jpeg">
    <title>PMBP - PeTIK
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('dist') }}/login/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('dist') }}/login/assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2bb9122efe.js" crossorigin="anonymous"></script>
    <link href="{{ asset('dist') }}/login/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('dist') }}/login/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-4">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('dist') }}/login/assets/photo_2023-12-28_08-45-25-removebg-preview.png"
                                        alt="" width="50%" style="margin-left: 8rem;">
                                </a>
                                <div class="card-header pb-0 text-left bg-transparent mt-3">
                                    <h3 class="">PMBP - PeTIK</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div>
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control" type="email"
                                                name="email" :value="old('email')" required autofocus
                                                autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="mt-4">
                                            <x-input-label for="password" :value="__('Password')" />
                                            <x-text-input id="password" class="form-control" type="password"
                                                name="password" required autocomplete="current-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                            <div class="text-center">
                                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2"
                                                    name="masuk">{{ __('Masuk') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Belum Punya Akun?
                                        <a href="{{ route('register') }}" class="fw-bold">Daftar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8 ">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6 mb-5"
                                    style="background-image:url({{ asset('dist') }}/login/assets/bg.png); background-position:0rem;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer" style="margin-right: 1rem;">
        <div class="col-lg-8 mx-auto text-center mt-3">
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-chrome"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fa-brands fa-x-twitter"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-instagram"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-linkedin"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
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
