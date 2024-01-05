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
                <p class="fw-lighter fst-italic mb-1" style="font-size: 12px;">Papan Informasi Digital PT Semen Baturaja
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
                </ul>
            </div>
        </nav>
    </header>
</body>
