@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Input Pengumuman</h5>
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
                        <form action="{{ route('announcement.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Pengumuman</label>
                                <textarea name="announcement" type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan pengumuman" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                <h5 class="card-title fw-semibold mb-4">Form Pengumuman</h5>
                @if ($announcement != null && count($announcement) > 0)
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
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Isi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($announcement as $announcement)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <form action="{{ route('announcement.delete', $announcement->id) }}"
                                                    method="POST">
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
                                                <form action="{{ route('announcement.update', $announcement->id) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="button" style="background-color: #ffff; border: none;"
                                                        data-bs-target="#announcementModal{{ $announcement->id }}" data-bs-toggle="modal">
                                                        <img src="/dashboard/assets/images/logos/pencil.png" width="20" alt="">
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">
                                                @if ($announcement)
                                                    {{ $announcement->announcement }}
                                                @endif
                                            </h6>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="announcementModal{{ $announcement->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Pengumuman
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('announcement.update', $announcement->id) }}" method="POST">
                                                    <div class="modal-body">
                                                        @csrf
                                                        <input type="text" name="announcement" id="disabledTextInput" class="form-control" placeholder="Tambahkan pengumuman" value="{{ $announcement->news }}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>Tidak ada pengumuman tersedia.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
