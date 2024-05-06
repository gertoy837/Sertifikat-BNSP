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
        <a class="nav-link" href="{{route('jurusan.index')}}">
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
                                        <h4 class="card-title">Edit Data Akun</h4>
                                        <form class="form-sample" action="{{ route('update', $data->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Nama</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" value="{{ $data->name }}" name="name"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Username</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" value="{{ $data->username }}"
                                                                name="username" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" name="email" value="{{ $data->email }}"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Password</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="password"
                                                                value="{{ $data->password }}" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Role</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="role">
                                                                <option <?php echo $data['role'] == 'user' ? 'selected' : ''; ?> value="user">User</option>
                                                                <option <?php echo $data['role'] == 'admin' ? 'selected' : ''; ?> value="admin">Admin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Jurusan</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="jurusan_id">
                                                                @foreach ($jur as $item)
                                                                <option <?php echo $item['id'] == $data->id ? 'selected' : ''; ?> value="<?= $item->id ?>">
                                                                    <?= $item->jurusan ?>
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
