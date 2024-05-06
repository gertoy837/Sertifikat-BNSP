@extends('template')
@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Home</span>
        </a>
    </li>
    <li class="nav-item">
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
                                        <h4 class="card-title">Edit Data Jurusan</h4>
                                        <form class="form-sample" action="{{ route('jurusan.update', $data->id) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Jurusan</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" value="{{ $data->jurusan }}"
                                                                name="jurusan"
                                                                class="form-control @error('jurusan') is-invalid @enderror" />
                                                            @error('jurusan')
                                                                <p class="text-danger my-2">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="justify-content-between">
                                                <div class="">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-2 float-right">Submit</button>
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
