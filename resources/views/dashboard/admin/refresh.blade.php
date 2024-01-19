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
                                <label for="exampleInputPassword1" class="form-label">Masukan Waktu Refresh</label>
                                <input type="number" name="refresh" class="form-control"
                                    value="{{ $refresh->refresh / 60 }}">
                                <p class="fw-lighter fst-italic mb-1" style="font-size: 12px;">Waktu refresh dalam satuan
                                    menit</p>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
