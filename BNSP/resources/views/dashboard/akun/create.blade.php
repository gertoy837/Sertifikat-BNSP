@extends('template')
@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Home</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Akun</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('jurusan.index') }}">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Jurusan</span>
        </a>
    </li>
@endsection
@section('konten')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tambah Data Akun</h4>
                                        <form class="form-sample" action="{{ route('store') }}" method="post">
                                            @csrf
                                            <div>
                                                <x-input-label for="name" :value="__('Name')" />
                                                <input id="name"
                                                    class="form-control @error('name') is-invalid @enderror" type="text"
                                                    name="name" :value="old('name')" autofocus autocomplete="name" />
                                                @error('name')
                                                    <p class="text-danger my-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- username -->
                                            <div class="mt-4">
                                                <x-input-label for="username" :value="__('Username')" />
                                                <input id="username"
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    type="text" name="username" :value="old('username')"
                                                    autocomplete="username" />
                                                @error('username')
                                                    <p class="text-danger my-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Email Address -->
                                            <div class="mt-4">
                                                <x-input-label for="email" :value="__('Email')" />
                                                <input id="email"
                                                    class="form-control @error('email') is-invalid @enderror" type="email"
                                                    name="email" :value="old('email')" autocomplete="username" />
                                                @error('email')
                                                    <p class="text-danger my-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="mt-4">
                                                <x-input-label for="email" :value="__('jurusan')" />
                                                <select class="form-control @error('jurusan_id') is-invalid @enderror"
                                                    name="jurusan_id">
                                                    <option hidden></option>
                                                    @foreach ($jur as $item)
                                                        <option value="<?= $item->id ?>">
                                                            <?= $item->jurusan ?>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('jurusan_id')
                                                    <p class="text-danger my-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Password -->
                                            <div class="mt-4">
                                                <x-input-label for="password" :value="__('Password')" />

                                                <input id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    type="password" name="password" autocomplete="new-password" />
                                                @error('password')
                                                    <p class="text-danger my-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="mt-4">
                                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                                <input id="password_confirmation"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    type="password" name="password_confirmation"
                                                    autocomplete="new-password" />
                                                @error('password_confirmation')
                                                    <p class="text-danger my-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="justify-content-between">
                                        <div class="">
                                            <button type="submit" class="btn btn-primary mr-2 float-right">Submit</button>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('index') }}" class="btn btn-light">Cancel</a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
