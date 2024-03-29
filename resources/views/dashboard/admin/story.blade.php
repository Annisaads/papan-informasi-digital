@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Input Cerita</h5>
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
                        <form action="{{ route('story.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Cerita</label>
                                <input type="file" name="story" id="disabledTextInput" class="form-control"></input>
                                @error('story')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <p class="fw-lighter fst-italic mb-1" style="font-size: 12px;">Masukan foto dengan rasio
                                    9:16 dan maksimal file 10
                                    MB.</p>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                <h5 class="card-title mb-9 fw-semibold">Form Cerita</h5>
                @if ($story->isNotEmpty())
                    <div class="table-responsive" style="max-height: 300px;">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                            </thead>
                            <tbody>
                                @foreach ($story as $story)
                                    <tr>
                                        <td class="border-bottom-0" style="width: 5%;">
                                            <div class="d-flex align-items-center gap-2">
                                                <form action="{{ route('story.delete', $story->id) }}" method="POST">
                                                    @csrf
                                                    @method('GET')
                                                    <button type="submit" style="background-color: #ffff; border: none;">
                                                        <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                            alt="">
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ asset('storage') . '/' . $story->story }}"
                                                alt="{{ $story->story }}" width="120">
                                        </td>
                                        <td class="border-bottom-0" style="width: 95%;">
                                            <h6 class="fw-semibold mb-0">{{ $story->story }}</h6>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                        <p>Tidak ada cerita tersedia.</p>
                    @endif
            </div>
        </div>
    </div>
@endsection
