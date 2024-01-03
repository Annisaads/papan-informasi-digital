@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Pengumuman</h5>
        <div class="card">
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Pengumuman</label>
                <input type="date" id="disabledTextInput" class="form-control">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Isi Pengumuman</label>
                <textarea type="text" id="disabledTextInput" class="form-control" placeholder="Tambahkan pengumuman" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

