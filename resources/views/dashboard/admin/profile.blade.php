@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Input Profil Perusahaan</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Deskripsi Singkat</label>
                                <textarea type="text" id="disabledTextInput" class="form-control" placeholder="Tambahkan deskripsi" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat Web</label>
                                <input type="url" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan url website"></input>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan nomor telepon"></input>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Media Sosial</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Tambahkan media sosial"></input>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                <div class="mb-4">
                    <h5 class="card-title fw-semibold">Form Profil</h5>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;">
                                            <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div>
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Deskripsi Singkat</h6>
                                        <h6 class="fw-semibold mb-0">PT Semen Baturaja (Persero) didirikan pada 14 November
                                            1974
                                            dengan saham awal 45% dimiliki oleh PT Semen Gresik dan PT Semen Padang. Pada
                                            1979, SMBR
                                            menjadi Persero dengan saham 88% milik Pemerintah RI. Pada 1991, saham diambil
                                            alih
                                            penuh oleh Pemerintah. Pada 14 Maret 2013, SMBR menjadi PT Semen Baturaja Tbk.
                                            Akhir
                                            2022, SMBR diintegrasikan ke PT Semen Indonesia Tbk (SIG) sebagai bagian dari
                                            pembentukan holding BUMN Sub klaster semen. Pada 19 Desember 2022, saham SMBR
                                            dialihkan
                                            kepada PT Semen Indonesia Tbk, sehingga status saat ini SMBR berubah menjadi
                                            Non-Persero
                                            menjadi PT Semen Baturaja Tbk.</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;">
                                            <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div>
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Url Website</h6>
                                        <h6 class="fw-semibold mb-0">semenbaturaja.co.id</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;">
                                            <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div>
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Nomor Telepon</h6>
                                        <h6 class="fw-semibold mb-0">(62)-711-511261</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button style="background-color: #ffff;border: none;">
                                            <img src="/dashboard/assets/images/logos/trash.png" width="20"
                                                alt="">
                                        </button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div>
                                        <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Media Sosial</h6>
                                        <h6 class="fw-semibold mb-0">pt.semenbaturaja</h6>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
