<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT Semen Baturaja Tbk</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('dashboard/assets/images/logos/logo-ptsb-kecil.png') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-5">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('dashboard/assets/images/logos/logo-ptsb.png') }}" width="180"
                                        alt="">
                                </a>
                                <p class="text-center mb-5">Kokoh dan Tahan Lamo</p>
                                <form action="{{ route('resetPassword.reset') }}" method="POST">
                                    @csrf
                                    @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show mt-3">
                                            <strong>Berhasil!</strong> {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session()->has('error'))
                                        <div class="alert alert-dager alert-dismissible fade show mt-3">
                                            <strong>Gagal!</strong> {{ session('error') }}
                                        </div>
                                    @endif
                                    <input type="hidden" name="token" value="{{ request()->get('token') }}">
                                    <input type="hidden" name="email" value="{{ request()->get('email') }}">
                                    <div class="mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="new_password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Masukan Password Baru">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Konfirmasi
                                            Password</label>
                                        <input type="password" name="new_password_confirmation" class="form-control"
                                            id="exampleInputPassword1" placeholder="Masukan Konfirmasi Password Baru">
                                    </div>
                                    <div class="mb-5">
                                        <p class="fw-lighter fst-italic mb-1" style="font-size: 12px;">Silahkan masukan
                                            password
                                            baru Anda.</p>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('dashboard/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
