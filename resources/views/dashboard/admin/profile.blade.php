@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Profil Perusahaan</h5>
        <div class="card">
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Deskripsi Singkat</label>
                <textarea type="text" id="disabledTextInput" class="form-control" placeholder="Tambahkan deskripsi" rows="5"></textarea>
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Alamat Web</label>
                  <input type="url" id="disabledTextInput" class="form-control" placeholder="Tambahkan url website"></input>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
                  <input type="text" id="disabledTextInput" class="form-control" placeholder="Tambahkan nomor telepon"></input>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Media Sosial</label>
                  <input type="text" id="disabledTextInput" class="form-control" placeholder="Tambahkan media sosial"></input>
                </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
