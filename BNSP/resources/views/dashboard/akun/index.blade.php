@extends('template')
@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Home</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="#">
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
                            <div class="row justify-content-between">
                                <div class="mx-3 mt-3">
                                    <p class="card-title">Tabel Akun</p>
                                </div>
                                <a href="{{ route('create') }}" class="btn btn-primary mx-3 mb-3 btn-rounded btn-fw">Tambah
                                    Data</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-borderless display expandable-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>email</th>
                                            <th>Role</th>
                                            <th>password</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $dat)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $dat->username }}</td>
                                                <td>{{ $dat->name }}</td>
                                                <td>{{ $dat->email }}</td>
                                                <td>{{ $dat->role }}</td>
                                                <td>{{ $dat->password ? '********' : '' }}</td>
                                                <td style="width: 100%" class="float-right">
                                                    <a class="btn btn-warning m-1" href="{{ route('edit', $dat) }}"><span
                                                            class="bi bi-pencil"></span> Edit</a>
                                                    <form action="{{ route('destroy', $dat) }}"
                                                        onclick="confirmDelete(event)" class="d-inline" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger m-1"><span
                                                                class="bi bi-trash"></span> Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
