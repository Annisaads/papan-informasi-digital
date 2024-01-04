@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Input Pengumuman</h5>
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
                <h5 class="card-title fw-semibold mb-4">Form Pengumuman</h5>
                <div class="table-responsive" style="max-height: 400px;">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"></h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Tanggal</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0" style="color: #5d87ff;">Isi</h6>
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
                                    <p class="mb-0 fw-normal">04/01/2024</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation</h6>
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
                                    <p class="mb-0 fw-normal">04/01/2024</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation</h6>
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
                                    <p class="mb-0 fw-normal">04/01/2024</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation</h6>
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
                                    <p class="mb-0 fw-normal">04/01/2024</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation</h6>
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
                                    <p class="mb-0 fw-normal">04/01/2024</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation</h6>
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
                                    <p class="mb-0 fw-normal">04/01/2024</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation</h6>
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
                                    <p class="mb-0 fw-normal">04/01/2024</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore Ut enim ad minim veniam, quis nostrud
                                        exercitation</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
