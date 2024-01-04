@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Input Pesan Tokoh</h5>
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
                <h5 class="card-title fw-semibold mb-4">Form Pesan Tokoh</h5>
                <div class="table-responsive" style="max-height: 400px;">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"></h6>
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
                                    <p class="mb-0 fw-normal">Yang Jungwon</p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">Enhypen</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation
                                    </h6>
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
                                    <p class="mb-0 fw-normal">Annisa Jamal</p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">Staf</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Bau apa yang romantis??? AMISyuu hehehehehehe kamu ga
                                        kangen
                                        aku???</h6>
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
                                    <p class="mb-0 fw-normal">Angel</p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">Figuran</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation
                                    </h6>
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
                                    <p class="mb-0 fw-normal">Putri A</p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">Cedit cewe adit</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation
                                    </h6>
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
                                    <p class="mb-0 fw-normal">Jakik</p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">Pengcarry Puh</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation
                                    </h6>
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
                                    <p class="mb-0 fw-normal">Mas Boy</p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">Ketua Himpunan Gym L1</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation
                                    </h6>
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
                                    <p class="mb-0 fw-normal">Sandhika Galih</p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">Kaka Mentor</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation
                                    </h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
