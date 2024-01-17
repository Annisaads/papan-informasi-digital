@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Refresh Panel</h5>
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
                        <form action="{{ route('refresh.update') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Pilih Waktu Refresh</label>
                                <select class="form-select" name="refresh" aria-label="Default select example">
                                    @foreach($refreshes as $refresh)
                                        <option value="{{ $refresh->id }}" {{ $refresh->is_selected ? 'selected' : '' }}>
                                            {{ $refresh->refresh }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                {{-- @if ($announcement != null && count($announcement) > 0)
                    <h5 class="card-title fw-semibold mb-4">Form Berita</h5>

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
                                                <form action="{{ route('announcement.update', $announcement->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" style="background-color: #ffff; border: none;">
                                                        <img src="/dashboard/assets/images/logos/pencil.png" width="20"
                                                            alt="">
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif --}}
            </div>
        </div>
    </div>
@endsection
