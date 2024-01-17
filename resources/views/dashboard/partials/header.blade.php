<head>
    <script>
        function tampilkanTanggal() {
            var sekarang = new Date();
            var options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var tanggalString = sekarang.toLocaleDateString('id-ID', options);
            document.getElementById('tanggal').innerHTML = tanggalString;
        }
    </script>
</head>

<body onload="tampilkanTanggal()">
    <header class="app-header" style="border-style: groove; border-width: 0px 0px 3px 0px; border-color: #5d87ff;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="my-1">
                <h5 class="mb-1 fw-semibold mt-1">Padimen</h5>
                <p class="fw-lighter fst-italic mb-1" style="font-size: 12px;">Panel Informasi Elektronik PT Semen
                    Baturaja
                    Tbk</p>
            </div>

            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    <li class="nav-item">
                        <a>
                            <div class="alert alert-info my-auto py-1" style="height: 31px; color: #000">
                                <span id="tanggal"></span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('dashboard/assets/images/profile/user-1.jpg') }}" alt=""
                                width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-6"></i>
                                    <p class="mb-0 fs-3">Profil Saya</p>
                                </a>
                                <a href="{{ route('refresh.index') }}"
                                    class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-alert-circle fs-6"></i>
                                    <p class="mb-0 fs-3">Refresh Panel</p>
                                </a>
                                <a href="{{ route('logout') }}"
                                    class="btn btn-outline-primary mx-3 mt-2 d-block">Keluar</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>
