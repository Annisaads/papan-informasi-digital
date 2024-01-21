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
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('dashboard/assets/images/logos/logo-ptsb.png') }}" width="180"
                                        alt="">
                                </a>
                                <p class="text-center mb-5">Kokoh dan Tahan Lamo</p>
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
                                <form action="{{ route('forgotpassword.send') }}" method="POST">
                                    @csrf
                                    <div class="d-flex align-items-center justify-content-center">

                                    </div>
                                    <div class="mb-2">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            name="email" placeholder="Masukan Email" aria-describedby="emailHelp">
                                        @error('email')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="mb-5">
                                        <p class="fw-lighter fst-italic mb-1" style="font-size: 12px;">Masukan alamat
                                            email aktif, tautan untuk mengganti
                                            kata sandi akan dikirim melalui email.</p>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-3 rounded-2">Kirim
                                    </button>
                                    <button type="button"
                                        class="btn btn-outline-primary w-100 py-8 fs-4 mb-4 rounded-2"
                                        onclick="batal()">Batal
                                    </button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Belum menerima email?</p>
                                        <a class="text-primary fw-bold ms-2" href="./authentication-login.html">Kirim
                                            Ulang
                                        </a>
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
    <script>
        function batal() {
            window.location.href = '{{ route('login') }}';
            alert("Kembali ke halaman masuk.");
        }
    </script>
</body>

</html>
