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
                        @if (session()->has('delete-success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3">
                                <strong>Berhasil!</strong> {{ session('delete-success') }}
                            </div>
                        @endif
                        <form action="{{ route('qoute.create') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="qoute" class="form-label">Pesan Tokoh</label>
                                <input name="qoute" type="text" class="form-control" placeholder="Tambahkan pesan">
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Foto Tokoh</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                @if ($qoute->isNotEmpty())
                    <h5 class="card-title fw-semibold mb-4">Form Pesan Tokoh</h5>
                    <div>
                        @if (session()->has('delete-success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3">
                                <strong>Berhasil!</strong> {{ session('delete-success') }}
                            </div>
                        @endif
                        @if (session()->has('update-success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3">
                                <strong>Berhasil!</strong> {{ session('update-success') }}
                            </div>
                        @endif
                    </div>
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
                                @foreach ($qoute as $qoute)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <form action="{{ route('qoute.delete', $qoute->id) }}" method="POST">
                                                    @csrf
                                                    @method('GET')
                                                    <button type="submit" style="background-color: #ffff; border: none;">
                                                        <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                            alt="">
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <button style="background-color: #ffff;border: none;" data-bs-toggle="modal"
                                                    data-bs-target="#updateMessageModal{{ $qoute->id }}">
                                                    <img src="/dashboard/assets/images/logos/pencil.png" width="20"
                                                        alt="">
                                                </button>
                                            </div>
                                        </td>
                                        <div class="modal fade" id="updateMessageModal{{ $qoute->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Pesan Tokoh</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('qoute.update', $qoute->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('POST')
                                                            <div class="mb-3">
                                                                <label for="updateName" class="form-label">Nama
                                                                    Tokoh</label>
                                                                <input type="text" class="form-control"
                                                                    id="updateName" name="name"
                                                                    value="{{ $qoute->name }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="updatePosition" class="form-label">Jabatan
                                                                    Tokoh</label>
                                                                <input type="text" class="form-control"
                                                                    id="updatePosition" name="position"
                                                                    value="{{ $qoute->position }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="updateMessage" class="form-label">Pesan
                                                                    Tokoh</label>
                                                                <textarea class="form-control" id="updateMessage" name="qoute">{{ $qoute->qoute }}</textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="updatePhoto" class="form-label">Foto
                                                                    Tokoh</label>
                                                                <input type="file" class="form-control"
                                                                    id="updatePhoto" name="photo">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary ml-auto">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                @if ($qoute->photo)
                                                    <img src="{{ asset('storage/' . $qoute->photo) }}" width="30"
                                                        alt="" style="border-radius: 60px;">
                                                @endif
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $qoute->name }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $qoute->position }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $qoute->qoute }}</h6>
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
