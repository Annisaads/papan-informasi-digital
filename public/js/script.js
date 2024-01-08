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
        cuacaImgSrc = "/img/hujan.png";
    } else if (weatherDescription.includes('cloud')) {
        cuacaImgSrc = "/img/berawan.png";
    } else if (weatherDescription.includes('clear')) {
        cuacaImgSrc = "/img/cerah.png";
    } else {
        cuacaImgSrc = "/img/normal.png";
    }

    const cuacaImg = document.getElementById('cuaca-img');
    cuacaImg.src = cuacaImgSrc;
    cuacaImg.classList.add('img-10');
}

window.onload = function () {
    tampilkanTanggal();
    tampilkanJam();
    tampilkanCuaca();
};

document.addEventListener("DOMContentLoaded", function() {
    let slideIndex = 0;
    const slides = document.querySelectorAll(".mySlides");
    const frame = document.querySelector(".slide-frame");

    function showSlides() {
      frame.style.transition = "transform 1s ease";
      slideIndex++;

      frame.style.transform = "translateX(-" + slideIndex * 100 + "%)";

      if (slideIndex >= slides.length) {
        // Kembali ke awal tanpa jeda
        slideIndex = 0;
        frame.style.transition = "none";
        frame.style.transform = "translateX(-" + (slides.length - 1) * 100 + "%)";
        setTimeout(() => {
          frame.style.transition = "transform 1s ease";
          frame.style.transform = "translateX(-" + slideIndex * 100 + "%)";
        }, 0);
      }

      setTimeout(showSlides, 2000);
    }

    showSlides(); // Mulai slideshow
  });




















