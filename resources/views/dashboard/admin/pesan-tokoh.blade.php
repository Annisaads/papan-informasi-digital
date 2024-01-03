@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Pesan Tokoh</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Tokoh</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan nama"></input>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jabatan Tokoh</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan jabatan"></input>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Pesan Tokoh</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan pesan"></input>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
