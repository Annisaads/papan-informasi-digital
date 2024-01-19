<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="{{ $refresh->refresh }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="shortcut icon" type="image/png"
        href="{{ asset('dashboard/assets/images/logos/logo-ptsb-kecil.png') }}" />
    <title>Papan Informasi Digital PT Semen Baturaja Tbk</title>
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <div class="div">
        <div class="div-8">
            <div class="div-9">
                <div class="column">
                    <div class="div-10">
                        <div class="div-11">
                            <div class="div-12">
                                <div class="column-2">
                                    <div id="slideshow-story-container" class="slideshow-story-container">
                                        <div class="slide-story-frame">
                                            @forelse ($story as $story)
                                                <div class="storySlides">
                                                    <img loading="lazy"
                                                        src="{{ asset('storage') . '/' . $story->story }}"
                                                        class="img-3" />
                                                </div>
                                            @empty
                                                <div class="storySlides">
                                                    <img loading="lazy" src="{{ asset('img/cerita-1.jpg') }}"
                                                        class="img-3" />
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>

                                <div class="column-3">
                                    <div class="div-2">
                                        <div class="div-3"></div>
                                        <img loading="lazy" srcset="img/logo-ptsb.png" class="img" />
                                        <div class="div-4">
                                            <div class="div-5">PT Semen Baturaja Tbk</div>
                                            <div class="div-6">Kokoh dan Tahan Lamo</div>
                                        </div>
                                        <div class="div-3"></div>
                                    </div>
                                    <div class="div-32">
                                        @if ($video != null)
                                            <video id="vid" class="img-2" controls loop autoplay muted>
                                                <source src="{{ asset('storage') . '/' . $video->video }}"
                                                    type="video/mp4">
                                                Maaf, browser Anda tidak mendukung tag video.
                                            </video>
                                        @else
                                            <video id="vid" class="img-2" controls loop autoplay muted>
                                                <source
                                                    src="{{ asset('video/Video Company Profile  - PT Semen Baturaja (Persero) Tbk (Tahun 2019).mp4') }}"
                                                    type="video/mp4">
                                                Maaf, browser Anda tidak mendukung tag video.
                                            </video>
                                        @endif
                                        <div class="slideshow-photo-container">
                                            <div class="slide-photo-frame">
                                                @forelse ($photo as $photo)
                                                    <div class="photoSlides">
                                                        <img loading="lazy"
                                                            src="{{ asset('storage') . '/' . $photo->photo }}"
                                                            class="img-3" />
                                                    </div>
                                                @empty
                                                    <div class="photoSlides">
                                                        <img loading="lazy"
                                                            src="{{ asset('img/Banner-Bersatu-Lebih-Kuat.jpg') }}"
                                                            class="img-3" />
                                                    </div>
                                                @endforelse
                                            </div>
                                        </div>
                                        <div class="div-33">
                                            <div class="div-40">
                                                <marquee behavior="scroll" direction="left" scrollamount="5">
                                                    @foreach ($news as $index => $news)
                                                        {{ $news->news }}
                                                        @if ($index < $news->count() - 1)
                                                            |
                                                        @endif
                                                    @endforeach
                                                </marquee>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-4">
                    <div class="div-41">
                        <div class="div-43">Pengumuman</div>
                        <div class="column-5">
                            <div class="announcement-contents">
                                @foreach ($announcement as $announcement)
                                <div class="div-42">
                                    <div class="div-44">
                                        {{ $announcement->announcement }}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="div-52">
                            <iframe id="tradingview-widget"
                                src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=id#%7B%22symbol%22%3A%22IDX%3ASMBR%22%2C%22frameElementId%22%3A%22tradingview_adbaa%22%2C%22interval%22%3A%22D%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22studies%22%3A%22%5B%5D%22%2C%22theme%22%3A%22light%22%2C%22style%22%3A%221%22%2C%22timezone%22%3A%22Etc%2FUTC%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22semenbaturaja.co.id%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22IDX%3ASMBR%22%2C%22page-uri%22%3A%22semenbaturaja.co.id%2Finvestor-informasi-saham-obligasi%2F%23top%22%7D"
                                class="tradingview-widget" frameborder="0" allowtransparency="true" scrolling="no"
                                style= "width": 100%; height="190px"></iframe>
                        </div>
                        <div class="div-59">
                            <div class="div-60">
                                <img id="cuaca-img" class="cuaca-img" class="img-10" />
                                <div class="div-61">
                                    <div id="temperature" class="div-62"></div>
                                    <div id="weather-description" class="div-63"></div>
                                </div>
                            </div>
                            <div class="div-64" id="tanggal"></div>
                            <div class="div-65">
                                <span class="jam" id="jam"></span>
                                <span class="jam-separator"></span>
                                <span class="jam" id="detik" style="color: rgba(159, 16, 20, 1)"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var announcementContents = document.querySelector(".announcement-contents");

            function autoScroll() {
                announcementContents.scrollTop += 1;

                if (announcementContents.scrollTop >= announcementContents.scrollHeight - announcementContents
                    .clientHeight) {
                    announcementContents.scrollTop = 0;
                }

                setTimeout(autoScroll, 150);
            }

            autoScroll();
        });
    </script>
</body>

</html>
