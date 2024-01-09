@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Input Pesan Tokoh</h5>
                <div class="card">
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3">
                                <strong>Berhasil!</strong> {{ session('success') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show mt-3">
                                <strong>Gagal!</strong> {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ route('pesan-tokoh.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Tokoh</label>
                                <input name="name" type="text" class="form-control" placeholder="Tambahkan nama">
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label">Jabatan Tokoh</label>
                                <input name="position" class="form-control" placeholder="Tambahkan jabatan">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan Tokoh</label>
                                <input name="message" type="text" class="form-control" placeholder="Tambahkan pesan">
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Foto Tokoh</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                @if ($message->isNotEmpty())
                    <h5 class="card-title fw-semibold mb-4">Form Pesan Tokoh</h5>
                    <div class="table-responsive" style="max-height: 400px;">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"></h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"></h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Foto</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Nama</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Jabatan</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Pesan</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($message as $message)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <form action="{{ route('pesan-tokoh.delete', $message->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="background-color: #ffff; border: none;">
                                                        <img src="/dashboard/assets/images/logos/trash.png" width="20" alt="">
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{ route('pesan-tokoh.update', $message->id) }}">
                                                    <button style="background-color: #ffff;border: none;">
                                                        <img src="/dashboard/assets/images/logos/pencil.png" width="20" alt="">
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                @if ($message->photo)
                                                    <img src="{{ asset('storage/' . $message->photo) }}" width="30"
                                                        alt="" style="border-radius: 60px;">
                                                @endif
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $message->name }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $message->position }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $message->message }}</h6>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
