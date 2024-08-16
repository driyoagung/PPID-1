<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PPID Kota Surakarta</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="{{ asset('assets/img/logo/logo.png') }}" />
  <style>
    /* Ensure the dropdown stays hidden until hovered */
    .group:hover .dropdown-menu {
        display: block;
    }
  </style>
  <style>
    .slider {
      position: relative;
      overflow: hidden;
      height: 500px; /* Adjust height as needed */
    }
    .slider-inner {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }
    .slider img {
      width: 100%;
      height: auto;
    }
    .color1 {
      background-color: #1679AB;
    }
  </style>
</head>
<body class="bg-white">
  <header class="bg-white shadow fixed top-0 left-0 w-full z-10">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <div class="flex items-center">
        <a href="home.html" class="flex items-center">
          <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo" class="pl-6 h-12 mr-0">
          {{-- <img src="{{ asset('assets/img/logo-bsre.png') }}" alt="Logo" class="h-24 md:h-32 lg:h-40" /> --}}
          <div>
            <h1 class="text-[20px] font-bold">PPID KOTA SURAKARTA</h1>
            <h1 class="text-[12px] font-thin">Pejabat Pengelola Informasi Dan Dokumentasi</h1>
          </div>
        </a>
      </div>
      <nav class="pr-6 flex items-center space-x-6 text-sm font-bold">
        <a href="home.html" class="text-black hover:text-[#4477ce]">BERANDA</a>
        <div class="relative group">
          <button class="text-black hover:text-[#4477ce]">PROFIL</button>
          <div class="dropdown-menu hidden absolute bg-gray-100 shadow-lg rounded mt-1 w-48">
            <a href="profilpimpinanpemkot.html" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Profil Pimpinan Pemkot Surakarta</a>
            <a href="profilppid.html" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Profil PPID</a>
            <a href="#" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Bagan Organisasi PPID</a>
            <a href="#" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Visi & Misi</a>
            <a href="#" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Dasar Hukum</a>
            <a href="#" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Maklumat Pelayanan</a>
            <a href="#" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Mekanisme Pelayanan</a>
            <a href="#" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Link PPID Pelaksana</a>
          </div>
        </div>
        <div class="relative group">
          <button class="text-black hover:text-[#4477ce]">INFORMASI PUBLIK</button>
          <div class="dropdown-menu hidden absolute bg-gray-100 shadow-lg rounded mt-1 w-48">
            <a href="#" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Daftar Informasi Publik</a>
            <a href="/informasiberkala" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Informasi Berkala</a>
            <a href="#" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Informasi Serta Merta</a>
            <a href="#" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Informasi Setiap Saat</a>
            <a href="#" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Informasi Dikecualikan</a>
          </div>
        </div>
        <a href="#" class="text-black hover:text-[#4477ce]">BERITA</a>
        <a href="#" class="text-black hover:text-[#4477ce]">LAPORAN</a>
        <a href="#" class="text-black hover:text-[#4477ce]">OPEN DATA</a>
        <a href="#" class="text-black hover:text-[#4477ce]">KONTAK</a>
        <a href="#" class="text-black hover:text-[#4477ce]">COVID-19</a>
        <button onclick="window.location.href='login.html'" class="border-2 border-[#4477ce] text-black px-4 py-2 rounded-lg hover:bg-[#4477ce] hover:text-white transition-colors">Login</button>
      </nav>
    </div>
  </header>

  <main class="container mx-auto px-12 py-24">
    <div class="slider relative">
      <div class="slider-inner">
        <img src="{{ asset('assets/img/slider/slider1.png') }}" alt="Slide 1">
        <img src="{{ asset('assets/img/slider/slider2.png') }}" alt="Slide 2">
        <img src="{{ asset('assets/img/slider/slider3.png') }}" alt="Slide 3">
        <img src="{{ asset('assets/img/slider/slider4.png') }}" alt="Slide 4">
        <img src="{{ asset('assets/img/slider/slider5.png') }}" alt="Slide 5">
      </div>
      <!-- Navigation buttons -->
      <button class="absolute top-1/2 left-0 transform -translate-y-1/2 p-2" id="prevSlide">
        <img src="{{ asset('assets/img/icon/kiri.png') }}" alt="Prev" class="w-8 h-8">
      </button>
      <button class="absolute top-1/2 right-0 transform -translate-y-1/2 p-2" id="nextSlide">
        <img src="{{ asset('assets/img/icon/kanan.png') }}" alt="Next" class="w-8 h-8">
      </button>
    </div>
    <div class="container mt-6 py-12">
      <h1 class="text-3xl font-bold text-center mb-8">LAYANAN</h1>
      <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($services as $service)
        <div class="flex flex-col items-center">
          <a href="#">
            <img src="{{ asset('assets/img/logo/cepot1.png') }}" alt="Daftar Informasi Publik" class="h-32 hover:scale-110 ease-in duration-300">
          </a>              
          <p class="text-center font-semibold">{{ $service->name }}</p>
        </div>
        @endforeach
        
      </div>
    </div>
  </main>

  <footer class="bg-gradient-to-r from-[#4477CE] to-[#223C68] text-white py-4">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-12">
      <div class="text-center md:text-left mb-4 md:mb-0 pad">
        <p class="font-semibold text-sm">PPID Pemerintah Kota Surakarta</p>
        <p class="text-xs">Jl. Jend. Sudirman No.2, Kp. Baru, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah</p>
        <p class="text-xs">Kode Pos 57133</p>
      </div>
      <div class="text-center md:text-left mb-4 md:mb-0">
        <p class="font-semibold text-sm">Jam Pelayanan:</p>
        <p class="text-xs">Senin - Kamis: 08.00 - 16.00 WIB</p>
        <p class="text-xs">Jumat: 08.00 - 14.00 WIB</p>
      </div>
      <div class="flex flex-col items-center md:items-start">
        <p class="font-semibold text-sm">Follow Us:</p>
        <div class="flex justify-center md:justify-start space-x-4 mt-2">
          <a href="#">
            <img src="{{ asset('assets/img/logo/facebook.png') }}" alt="Facebook" class="w-6 h-6">
          </a>
          <a href="#">
            <img src="{{ asset('assets/img/logo/instagram.png') }}" alt="Twitter" class="w-6 h-6">
          </a>
          <a href="#">
            <img src="{{ asset('assets/img/logo/twitter_x.png') }}" alt="YouTube" class="w-6 h-6">
          </a>
          <a href="#">
            <img src="{{ asset('assets/img/logo/youtube.png') }}" alt="Instagram" class="w-6 h-6">
          </a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slider img');
    const totalSlides = slides.length;
    const sliderInner = document.querySelector('.slider-inner');

    function updateSlidePosition() {
      sliderInner.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    document.getElementById('nextSlide').addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateSlidePosition();
    });

    document.getElementById('prevSlide').addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      updateSlidePosition();
    });

    setInterval(() => {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateSlidePosition();
    }, 3000);
  </script>
</body>
</html>