@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Foto Perusahaan</h5>
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Foto</label>
                            <input type="file" id="disabledTextInput" class="form-control"></input>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
