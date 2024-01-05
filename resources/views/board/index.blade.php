<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('dashboard/assets/images/logos/logo-ptsb-kecil.png') }}" />
    <title>Papan Informasi Digital PT Semen Baturaja Tbk</title>
</head>

<body>
    <div class="div">
        <div class="div-2">
            <div class="div-3"></div>
            <img loading="lazy" srcset="{{ asset('img/logo-ptsb.png') }}" class="img" />
            <div class="div-4">
                <div class="div-5">PT Semen Baturaja Tbk</div>
                <div class="div-6">Kokoh dan Tahan Lamo</div>
            </div>
            <div class="div-7"></div>
        </div>

        <div class="div-8">
            <div class="div-9">
                <div class="column">
                    <div class="div-10">
                        <div class="div-11">
                            <div class="div-12">
                                <div class="column-2">
                                    <div class="div-13">
                                        <div class="div-14">
                                            <div class="div-15">Pengumuman</div>
                                            <div class="div-16"></div>
                                        </div>

                                        <div class="div-17">
                                            <div class="div-18"></div>
                                            <div class="div-19">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore Ut
                                                enim ad minim veniam, quis nostrud exercitation
                                            </div>
                                        </div>

                                        <div class="div-20">
                                            <div class="div-21"></div>
                                            <div class="div-22">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore Ut
                                                enim ad minim veniam, quis nostrud exercitation
                                            </div>
                                        </div>

                                        <div class="div-23">
                                            <div class="div-24"></div>
                                            <div class="div-25">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore Ut
                                                enim ad minim veniam, quis nostrud exercitation
                                            </div>
                                        </div>

                                        <div class="div-26">
                                            <div class="div-27"></div>
                                            <div class="div-28">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore Ut
                                                enim ad minim veniam, quis nostrud exercitation
                                            </div>
                                        </div>

                                        <div class="div-29">
                                            <div class="div-30"></div>
                                            <div class="div-31">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore Ut
                                                enim ad minim veniam, quis nostrud exercitation
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column-3">
                                    <div class="div-32">
                                        <img loading="lazy" srcset="{{ asset('img/video-ptsb.png') }}" class="img-2" />
                                        <img loading="lazy" srcset="{{ asset('img/foto-ptsb.jpg') }}" class="img-3" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="div-33">
                            <div class="div-34">
                                <img loading="lazy" srcset="{{ asset('img/foto-tokoh.jpg') }}" class="img-4" />
                                <div class="div-35">
                                    <div class="div-36">
                                        <div class="div-37">Suherman Yahya</div>
                                        <div class="div-38"></div>
                                        <div class="div-39">
                                            Direktur Utama PT Semen Baturaja Tbk
                                        </div>
                                    </div>
                                    <div class="div-40">
                                        Dalam menghadapi persaingan industri semen nasional yang
                                        semakin kompetitif dan upaya untuk menciptakan pertumbuhan
                                        kinerja yang berkelanjutan, Perseroan telah merumuskan
                                        berbagai kebijakan dan inisiatif strategis yang tengah
                                        dijalankan tentunya dengan tetap mematuhi regulasi yang
                                        berlaku serta memperhatikan aspek risiko yang mungkin akan
                                        timbul. Pokok penting kebijakan dan inisiatif strategis
                                        Perseroan berfokus pada Market Share Expansion Through
                                        Industrial Synergy, Cost Leadership Through SMBRGO45
                                        Program dan Competency Improvement of Employee.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-4">
                    <div class="div-41">
                        <div class="div-42">
                            <div class="div-43">Profil Perusahaan</div>
                            <div class="div-44">
                                @if ($profile)
                                    {{ $profile->description }}
                                @endif
                            </div>

                            <div class="div-45">
                                <div class="div-46">
                                    <div class="div-47">
                                        @if ($profile)
                                            {{ $profile->website_url }}
                                        @endif
                                    </div>
                                    <div class="div-48">
                                        Contact
                                        @if ($profile)
                                            {{ $profile->phone_number }}
                                        @endif
                                    </div>
                                </div>
                                <div class="div-49">
                                    <div class="div-50">
                                        <img loading="lazy" srcset="{{ asset('img/logo-ig.png') }}" class="img-5" />
                                        <img loading="lazy" srcset="{{ asset('img/logo-fb.png') }}" class="img-6" />
                                        <img loading="lazy" srcset="{{ asset('img/logo-x.png') }}" class="img-7" />
                                        <img loading="lazy" srcset="{{ asset('img/logo-ytb.png') }}" class="img-8" />
                                    </div>
                                    <div class="div-51">
                                        @if ($profile)
                                            {{ $profile->social_media }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="div-52">
                            <iframe id="tradingview-widget"
                                src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=id#%7B%22symbol%22%3A%22IDX%3ASMBR%22%2C%22frameElementId%22%3A%22tradingview_adbaa%22%2C%22interval%22%3A%22D%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22studies%22%3A%22%5B%5D%22%2C%22theme%22%3A%22light%22%2C%22style%22%3A%221%22%2C%22timezone%22%3A%22Etc%2FUTC%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22semenbaturaja.co.id%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22IDX%3ASMBR%22%2C%22page-uri%22%3A%22semenbaturaja.co.id%2Finvestor-informasi-saham-obligasi%2F%23top%22%7D"
                                class="tradingview-widget" frameborder="0" allowtransparency="true" scrolling="no"
                                styel= "width": 100%; height="234px"></iframe>
                        </div>

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

                                function tampilkanJam() {
                                    var sekarang = new Date();
                                    var jam = sekarang.getHours();
                                    var menit = sekarang.getMinutes();
                                    var detik = sekarang.getSeconds();

                                    jam = padZero(jam);
                                    menit = padZero(menit);
                                    detik = padZero(detik);

                                    var jamString = jam + " : " + menit;
                                    var detikString = " : " + detik;

                                    document.getElementById('jam').innerHTML = jamString;
                                    document.getElementById('detik').innerHTML = detikString;

                                    setTimeout(tampilkanJam, 1000); // Perbarui setiap 1 detik
                                }

                                function padZero(number) {
                                    return number < 10 ? "0" + number : number;
                                }

                                function tampilkanCuaca() {
                                    const apiKey = 'b925f92dc59ed1b1f9c298b10c79bc7f';
                                    const city = 'PALEMBANG';

                                    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

                                    fetch(apiUrl)
                                        .then(response => response.json())
                                        .then(data => {
                                            const temperature = data.main.temp;
                                            const weatherDescription = data.weather[0].description;

                                            document.getElementById('temperature').innerHTML = temperature + "°C";
                                            document.getElementById('weather-description').innerHTML = weatherDescription;

                                            sesuaikanGambarCuaca(temperature, weatherDescription);
                                        })
                                        .catch(error => console.error('Error fetching weather data:', error));
                                }

                                function sesuaikanGambarCuaca(temperature, weatherDescription) {
                                    let cuacaImgSrc = '';

                                    if (weatherDescription.includes('rain')) {
                                        cuacaImgSrc = "{{ asset('img/hujan.png') }}";
                                    } else if (weatherDescription.includes('cloud')) {
                                        cuacaImgSrc = "{{ asset('img/berawan.png') }}";
                                    } else if (weatherDescription.includes('clear')) {
                                        cuacaImgSrc = "{{ asset('img/cerah.png') }}";
                                    } else {
                                        cuacaImgSrc = "{{ asset('img/normal.png') }}";
                                    }

                                    const cuacaImg = document.getElementById('cuaca-img');
                                    cuacaImg.src = cuacaImgSrc;
                                    cuacaImg.classList.add('img-10');
                                }

                                window.onload = function() {
                                    tampilkanTanggal();
                                    tampilkanJam();
                                    tampilkanCuaca();
                                };
                            </script>
                        </head>

                        <body>
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
                        </body>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
