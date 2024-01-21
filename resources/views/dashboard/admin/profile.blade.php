@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Profil Saya</h5>
                <div class="card">
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3">
                                <strong>Berhasil!</strong> {{ session('success') }}
                            </div>
                        @endif
                        @if (session()->has('delete-success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3">
                                <strong>Berhasil!</strong> {{ session('delete-success') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show mt-3">
                                <strong>Gagal!</strong> {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama</label>
                                <input type="text" name="name" id="disabledTextInput"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Masukan nama"
                                    value="{{ old('name', $admin->name) }}"></input>
                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="text" name="email" id="disabledTextInput"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Masukan email"
                                    value="{{ old('email', $admin->email) }}"></input>
                                @error('email')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Username</label>
                                <input type="text" name="username" id="disabledTextInput"
                                    class="form-control @error('username') is-invalid @enderror"
                                    placeholder="Masukan username" value="{{ old('username', $admin->username) }}"></input>
                                @error('username')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                <h5 class="card-title fw-semibold mb-4">Hapus Akun</h5>
                <p class="fs-4 mb-1 fw-bold">Ingin menghapus akun?</p>
                <a href="">
                    <button type="button" class="btn btn-danger mt-3">Hapus</button>
                </a>
            </div>
        </div>
    </div>
@endsection
