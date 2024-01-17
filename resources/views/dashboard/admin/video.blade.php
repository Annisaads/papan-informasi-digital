@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Input Video Perusahaan</h5>
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
                        <form action="{{ route('video.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Video</label>
                                <input type="file" name="video" accept="video/*" id="disabledTextInput"
                                    class="form-control"></input>
                                @error('video')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <p class="fw-lighter fst-italic mb-1" style="font-size: 12px;">Masukan video dengan rasio
                                    16:9 dan maksimal file 100
                                    MB.</p>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                @if ($video != null)
                    <h5 class="card-title mb-9 fw-semibold">Form Video</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-bottom-0" style="width: 5%;">
                                        <div class="d-flex align-items-center gap-2">
                                            <a href="{{ route('video.delete') }}"
                                                style="background-color: #ffff;border: none;">
                                                <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                    alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0" style="width: 95%;">
                                        <h6 class="fw-semibold mb-0">{{ $video != null ? $video->video : '' }}</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
