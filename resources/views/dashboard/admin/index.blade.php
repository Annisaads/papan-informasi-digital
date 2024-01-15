@extends('dashboard.layouts.app')

@section('content')
    <h3 class="mb-0 pt-4 fw-semibold p-1" style="color: #5d87ff;">Selamat datang kembali, Admin!</h3>
    <p class="pb-4 fw-normal p-1">Perbarui papan informasi digital PT Semen Baturaja Tbk setiap hari :D
    </p>

    <!--  Cuaca -->
    <div class="card w-100">
        <div class="card-body">
            <div id="weather-container">
            </div>
            <iframe id="tradingview-widget"
                src="https://embed.windy.com/embed2.html?lat=-3.332&lon=104.700&detailLat=-3.209&detailLon=104.700&width=600&height=450&zoom=10&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=true&metricWind=default&metricTemp=%C2%B0C&radarRange=-1" width="600"
                class="tradingview-widget" frameborder="0" allowtransparency="true" scrolling="no"
                style="width: 100%; height:330px">
            </iframe>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Pengumuman -->
                    <div class="card-body p-2">
                        <h5 class="card-title mb-9 fw-semibold" style="color: #5d87ff;"><a
                                href="{{ route('announcement.index') }}">Pengumuman</a></h5>
                        <div class="card">
                            <div class="card-header">
                                Jumlah Pengumuman
                            </div>
                            <div class="card-body">
                                <h3 class="card-title fw-bolder" style="color: #5d87ff; text-align:center;">{{ $jumlahPengumuman }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Pesan Tokoh -->
                    <div class="card-body p-2">
                        <h5 class="card-title mb-9 fw-semibold" style="color: #5d87ff;"><a
                                href="{{ route('quote.index') }}">Pesan Tokoh</a></h5>
                        <div class="card">
                            <div class="card-header">
                                Jumlah Pesan Tokoh
                            </div>
                            <div class="card-body">
                                <h3 class="card-title fw-bolder" style="color: #5d87ff; text-align:center;">{{ $jumlahPesanTokoh }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold" style="color: #5d87ff;">Grafik Saham</h5>
                    <div>
                        <iframe id="tradingview-widget"
                            src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=id#%7B%22symbol%22%3A%22IDX%3ASMBR%22%2C%22frameElementId%22%3A%22tradingview_adbaa%22%2C%22interval%22%3A%22D%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22studies%22%3A%22%5B%5D%22%2C%22theme%22%3A%22light%22%2C%22style%22%3A%221%22%2C%22timezone%22%3A%22Etc%2FUTC%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22semenbaturaja.co.id%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22IDX%3ASMBR%22%2C%22page-uri%22%3A%22semenbaturaja.co.id%2Finvestor-informasi-saham-obligasi%2F%23top%22%7D"
                            class="tradingview-widget" frameborder="0" allowtransparency="true" scrolling="no"
                            style="width: 100%; height:330px">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xl-3" style="width: 33%;">
            <div class="card overflow-hidden rounded-2" style="border: 1px solid #5d87ff">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #5d87ff;">
                        <a href="{{ route('profile.index') }}">Profil</a>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Jumlah Profil</h6>
                    <div class="card-body">
                       <h3 class="card-title fw-bolder" style="color: #5d87ff; text-align:center;">{{ $jumlahProfil }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3" style="width: 33%;">
            <div class="card overflow-hidden rounded-2" style="border: 1px solid #5d87ff">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #5d87ff;"><a
                            href="{{ route('video.index') }}">Video</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Jumlah Video</h6>
                    <div class="card-body">
                        <h3 class="card-title fw-bolder" style="color: #5d87ff; text-align:center;">{{ $jumlahVideo }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3" style="width: 33%;">
            <div class="card overflow-hidden rounded-2" style="border: 1px solid #5d87ff">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #5d87ff;"><a href="{{ route('photo.index') }}">Foto</a>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Jumlah Foto</h6>
                    <div class="card-body">
                        <h3 class="card-title fw-bolder" style="color: #5d87ff; text-align:center;">{{ $jumlahFoto }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">
            Copyright &#169 2024 by PT Semen Baturaja Tbk
        </p>
    </div>
@endsection
