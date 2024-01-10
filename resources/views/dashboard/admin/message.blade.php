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
                        <form action="{{ route('message.create') }}" method="POST" enctype="multipart/form-data">
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
                                                <form action="{{ route('message.delete', $message->id) }}" method="POST">
                                                    @csrf
                                                    @method('GET')
                                                    <button type="submit" style="background-color: #ffff; border: none;">
                                                        <img src="/dashboard/assets/images/logos/trash.png" width="20" alt="">
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <button style="background-color: #ffff;border: none;" data-bs-toggle="modal" data-bs-target="#updateMessageModal{{$message->id}}">
                                                    <img src="/dashboard/assets/images/logos/pencil.png" width="20" alt="">
                                                </button>
                                            </div>
                                        </td>
                                        <div class="modal fade" id="updateMessageModal{{$message->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Pesan Tokoh</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('message.update', $message->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('POST')
                                                            <!-- Add input fields for updating message -->
                                                            <div class="mb-3">
                                                                <label for="updateName" class="form-label">Nama Tokoh</label>
                                                                <input type="text" class="form-control" id="updateName" name="name" value="{{ $message->name }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="updatePosition" class="form-label">Jabatan Tokoh</label>
                                                                <input type="text" class="form-control" id="updatePosition" name="position" value="{{ $message->position }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="updateMessage" class="form-label">Pesan Tokoh</label>
                                                                <textarea class="form-control" id="updateMessage" name="message">{{ $message->message }}</textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="updatePhoto" class="form-label">Foto Tokoh</label>
                                                                <input type="file" class="form-control" id="updatePhoto" name="photo">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
