@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Input Profil Perusahaan</h5>
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
                        <form action="{{ route('profile.create') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Deskripsi Singkat</label>
                                <textarea type="text" name="description" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan deskripsi" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat Web</label>
                                <input type="text" name="website_url" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan url website"></input>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
                                <input type="text" name="phone_number" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan nomor telepon"></input>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Media Sosial</label>
                                <input type="text" name="social_media" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan media sosial"></input>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="card-title fw-semibold">Form Profil</h5>
                </div>
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
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-bottom-0" style="width: 5%;">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;"
                                            data-bs-target="#descriptionModal" data-bs-toggle="modal">
                                            <img src="/dashboard/assets/images/logos/pencil.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0" style="width: 95%;">
                                    <div>
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Deskripsi Singkat</h6>
                                        <h6 class="fw-semibold mb-0">
                                            @if ($profile)
                                                {{ $profile->description }}
                                            @endif
                                        </h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;"
                                            data-bs-target="#websiteUrlModal" data-bs-toggle="modal">
                                            <img src="/dashboard/assets/images/logos/pencil.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div>
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Alamat Web</h6>
                                        <h6 class="fw-semibold mb-0">
                                            @if ($profile)
                                                {{ $profile->website_url }}
                                            @endif
                                        </h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;"
                                            data-bs-target="#phoneNumberModal" data-bs-toggle="modal">
                                            <img src="/dashboard/assets/images/logos/pencil.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div>
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Nomor Telepon</h6>
                                        <h6 class="fw-semibold mb-0">
                                            @if ($profile)
                                                {{ $profile->phone_number }}
                                            @endif
                                        </h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button
                                            style="background-color: #ffff;border: none;"data-bs-target="#socialMediaModal"
                                            data-bs-toggle="modal">
                                            <img src="/dashboard/assets/images/logos/pencil.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div>
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Media Sosial</h6>
                                        <h6 class="fw-semibold mb-0">
                                            @if ($profile)
                                                {{ $profile->social_media }}
                                            @endif
                                        </h6>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('profile.delete.profile') }}">
                    <button type="button" class="btn btn-danger mt-3">Hapus</button>
                </a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="descriptionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Deskripsi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('profile.update.description') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <textarea type="text" name="description" id="disabledTextInput" class="form-control"
                            placeholder="Tambahkan deskripsi" rows="5">{{ $profile != null ? $profile->description : '' }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="websiteUrlModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Alamat Web</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('profile.update.website_url') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <input type="text" name="website_url" id="disabledTextInput" class="form-control"
                            placeholder="Tambahkan url website" value="{{  $profile != null ? $profile->website_url : ''}}"></input>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="phoneNumberModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Nomor Telepon</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('profile.update.phone_number') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <input type="text" name="phone_number" id="disabledTextInput" class="form-control"
                            placeholder="Tambahkan nomor telepon" value="{{  $profile != null ? $profile->phone_number : ''}}"></input>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="socialMediaModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Sosial Media</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('profile.update.social_media') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <input type="text" name="social_media" id="disabledTextInput" class="form-control"
                            placeholder="Tambahkan media sosial" value="{{  $profile != null ? $profile->social_media : '' }}"></input>
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
