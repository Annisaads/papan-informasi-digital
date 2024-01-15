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
                        <form action="{{ route('quote.create') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="quote" class="form-label">Pesan Tokoh</label>
                                <input name="quote" type="text" class="form-control" placeholder="Tambahkan pesan">
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Foto Tokoh</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>

                @if ($quote != null)
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
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4"></thead>
                            <tbody>
                                <tr>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <button style="background-color: #ffff;border: none;"
                                                data-bs-target="#photoModal" data-bs-toggle="modal">
                                                <img src="/dashboard/assets/images/logos/pencil.png" width="20"
                                                    alt="">
                                            </button>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0" style="width: 95%;">
                                        <div>
                                            <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Foto Tokoh</h6>
                                            <div class="d-flex align-items-center gap-2 mt-xl-1">
                                                @if ($quote->photo)
                                                    <img src="{{ asset('storage') . '/' . $quote->photo }}"
                                                        alt="{{ $quote->photo }}" width="120">
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <button style="background-color: #ffff;border: none;"
                                                data-bs-target="#nameModal" data-bs-toggle="modal">
                                                <img src="/dashboard/assets/images/logos/pencil.png" width="20"
                                                    alt="">
                                            </button>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0" style="width: 95%;">
                                        <div>
                                            <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Nama Tokoh</h6>
                                            <h6 class="fw-semibold mb-0">
                                                @if ($quote)
                                                    {{ $quote->name }}
                                                @endif
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <button style="background-color: #ffff;border: none;"
                                                data-bs-target="#positionModal" data-bs-toggle="modal">
                                                <img src="/dashboard/assets/images/logos/pencil.png" width="20"
                                                    alt="">
                                            </button>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0" style="width: 95%;">
                                        <div>
                                            <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Jabatan Tokoh</h6>
                                            <h6 class="fw-semibold mb-0">
                                                @if ($quote)
                                                    {{ $quote->position }}
                                                @endif
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <button style="background-color: #ffff;border: none;"
                                                data-bs-target="#quoteModal" data-bs-toggle="modal">
                                                <img src="/dashboard/assets/images/logos/pencil.png" width="20"
                                                    alt="">
                                            </button>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0" style="width: 95%;">
                                        <div>
                                            <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Pesan Tokoh</h6>
                                            <h6 class="fw-semibold mb-0">
                                                @if ($quote)
                                                    {{ $quote->quote }}
                                                @endif
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('quote.delete') }}">
                        <button type="button" class="btn btn-danger mt-3">Hapus</button>
                    </a>
                @endif
            </div>
        </div>
    </div>
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Foto Tokoh</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('quote.update.photo') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="nameModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Nama Tokoh</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('quote.update.name') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <textarea type="text" name="name" id="disabledTextInput" class="form-control"
                            placeholder="Tambahkan nama tokoh" rows="5">{{ $quote != null ? $quote->name : '' }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="positionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Jabatan Tokoh</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('quote.update.position') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <textarea type="text" name="position" id="disabledTextInput" class="form-control"
                            placeholder="Tambahkan jabatan tokoh" rows="5">{{ $quote != null ? $quote->position : '' }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Jabatan Tokoh</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('quote.update.quote') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <textarea type="text" name="quote" id="disabledTextInput" class="form-control"
                            placeholder="Tambahkan pesan tokoh" rows="5">{{ $quote != null ? $quote->quote : '' }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- <td class="border-bottom-0">
    <div class="d-flex align-items-center gap-2">
        <form action="{{ route('quote.delete', $quote->id) }}" method="POST">
            @csrf
            @method('GET')
            <button type="submit" style="background-color: #ffff; border: none;">
                <img src="/dashboard/assets/images/logos/trash.png" width="20" alt="">
            </button>
        </form>
    </div>
</td> --}}
