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
    <li class="nav-item active">
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
                                        <h4 class="card-title">Tambah Data Jurusan</h4>
                                        <form class="form-sample" action="{{ route('jurusan.store') }}" method="post">
                                            @csrf
                                            <div>
                                                <x-input-label for="jurusan" :value="__('Jurusan')" />
                                                <input id="jurusan"
                                                    class="form-control @error('jurusan') is-invalid @enderror"
                                                    type="text" name="jurusan" :value="old('jurusan')" autofocus
                                                    autocomplete="jurusan" />
                                                @error('jurusan')
                                                    <p class="text-danger my-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="justify-content-between mt-4">
                                                <div class="">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-2 float-right">Submit</button>
                                                </div>
                                                <div class="">
                                                    <a href="{{ route('jurusan.index') }}" class="btn btn-light">Cancel</a>
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
