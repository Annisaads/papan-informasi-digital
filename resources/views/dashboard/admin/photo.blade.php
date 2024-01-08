@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Input Foto Perusahaan</h5>
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
                        <form action="{{ route('photo.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Foto</label>
                                <input type="file" name="photo" id="disabledTextInput" class="form-control" ></input>
                                @error('photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                <h5 class="card-title mb-9 fw-semibold">Form Foto Perusahaan</h5>
                <div class="table-responsive" style="max-height: 300px;">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-bottom-0" style="width: 5%;">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;">
                                            <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0" style="width: 95%;">
                                    <h6 class="fw-semibold mb-0">foto1.jpg</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;">
                                            <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">foto2.jpg</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;">
                                            <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">foto3.jpg</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;">
                                            <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">foto4.jpg</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;">
                                            <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">foto5.jpg</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;">
                                            <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">foto6.jpg</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
