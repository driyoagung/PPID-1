<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Berkala</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="img/logo/logo.png" />
        <style>
        /* Ensure the dropdown stays hidden until hovered */
        .group:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-white shadow fixed top-0 left-0 w-full z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo" class="pl-6 h-12 mr-0">
                    <div>
                        <h1 class=" text-[20px] font-bold">PPID KOTA SURAKARTA</h1>
                        <h1 class="text-[12px] font-thin">Pejabat Pengelola Informasi Dan Dokumentasi</h1>
                    </div>
                  </a>
            </div>
            <nav class="pr-6 flex items-center space-x-6 text-sm font-bold">
                <a href="/" class="text-black hover:text-[#4477ce]">BERANDA</a>
                <div class="relative group">
                    <button class="text-black hover:text-[#4477ce] ">PROFIL</button>
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
                    <button class="text-black hover:text-[#4477ce] ">INFORMASI PUBLIK</button>
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

    <!-- Main Content -->
    <main class="container mx-auto mt-14 bg-white p-6  px-0">
        <h1 class="text-3xl text-white font-bold mb-4 pt-4 text-center h-20 bg-gradient-to-r from-[#4477CE] to-[#223C68]">Informasi Berkala</h1>
        <nav class="w-full rounded-md">
            <ol class="list-reset flex mb-6">
              <li>
                <a
                  href="#"
                  class="pl-12 text-xs text-primary transition duration-150 ease-in-out hover:text-primary-accent-300 focus:text-primary-accent-300 active:text-primary-accent-300 motion-reduce:transition-none dark:text-primary-400"
                  >Informasi Publik</a
                >
              </li>
              <li>
                <span class="mx-2 text-neutral-400">/</span>
              </li>
              <li>
                <a
                  href="informasiberkala.html"
                  class="text-xs text-primary transition duration-150 ease-in-out hover:text-primary-accent-300 focus:text-primary-accent-300 active:text-primary-accent-300 motion-reduce:transition-none dark:text-primary-400"
                  >Informasi Berkala</a
                >
              </li>
             
            </ol>
          </nav>
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 px-12">
                <!-- Card -->
                <div class="bg-white shadow-md rounded-lg p-0">
                    <div class="flex items-center bg-[#4477CE] px-4 py-2 rounded-t-lg">
                        <img src="{{ asset('assets/img/icon/folder.png') }}" 
                       alt="Information" class="h-6 w-6 mr-2">
                        <h3 class="text-lg font-semibold text-white mb-0">Tata Cara Memperoleh Informasi Publik dan Pengajuan Keberatan</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-700 px-4 py-4">
                        <li class="flex items-center">
                            <img src="{{ asset('assets/img/icon/document.png')}}" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="{{ asset('assets/img/icon/document.png')}}" alt="Logo" class="h-4 w-4 mr-2">
                            Standar Operasional Prosedur Pelayanan Informasi
                        </li>

                        <li class="flex items-center">
                            <img src="{{ asset('assets/img/icon/document.png')}}" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                    </ul>
                    <a href="#" class="text-blue-500 hover:underline mt-4 inline-block px-4 pb-4">Lihat Semua</a>
                </div>

                <!-- Repeat Card for other sections as needed -->
                <div class="bg-white shadow-md rounded-lg p-0">
                    <div class="flex items-center bg-[#4477CE] px-4 py-2 rounded-t-lg">
                        <img src="{{ asset('assets/img/icon/folder.png') }}" alt="Information" class="h-6 w-6 mr-2">
                        <h3 class="text-lg font-semibold text-white mb-0">Informasi Tentang Regulasi Badan Publik</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-700 px-4 py-4">
                        <li class="flex items-center">
                            <img src="{{ asset('assets/img/icon/document.png')}}" alt="Logo" class="h-4 w-4 mr-2">
                            Informasi Peraturan, Keputusan, dan Kebijakan
                        </li>

                    </ul>
                    <a href="#" class="text-blue-500 hover:underline mt-4 inline-block px-4 pb-4">Lihat Semua</a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-0">
                    <div class="flex items-center bg-[#4477CE] px-4 py-2 rounded-t-lg">
                        <img src="{{ asset('assets/img/icon/folder.png') }}" alt="Information" class="h-6 w-6 mr-2">
                        <h3 class="text-lg font-semibold text-white mb-0">Informasi Tentang Profil badan Publik</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-700 px-4 py-4">
                        <li class="flex items-center">
                            <img src="{{ asset('assets/img/icon/document.png')}}" alt="Logo" class="h-4 w-4 mr-2">
                            Kedudukan / Domisili Beserta Alamat Lengkap
                        </li>

                        <li class="flex items-center">
                            <img src="{{ asset('assets/img/icon/document.png')}}" alt="Logo" class="h-4 w-4 mr-2">
                            VISI dan MISI
                        </li>

                        <li class="flex items-center">
                            <img src="{{ asset('assets/img/icon/document.png')}}" alt="Logo" class="h-4 w-4 mr-2">
                            Tugas dan Fungsi
                        </li>

                        
                        <li class="flex items-center">
                            <img src="{{ asset('assets/img/icon/document.png')}}" alt="Logo" class="h-4 w-4 mr-2">
                            Struktur Organisasi
                        </li>

                        
                        <li class="flex items-center">
                            <img src="{{ asset('assets/img/icon/document.png')}}" alt="Logo" class="h-4 w-4 mr-2">
                            Profil Pimpinan Pemerintah Kota Surakarta
                        </li>

                    </ul>
                    <a href="#" class="text-blue-500 hover:underline mt-4 inline-block px-4 pb-4">Lihat Semua</a>
                </div>

                <!-- Additional Cards Here -->
                <div class="bg-white shadow-md rounded-lg p-0">
                    <div class="flex items-center bg-[#4477CE] px-4 py-2 rounded-t-lg">
                        <img src="{{ asset('assets/img/icon/folder.png') }}" alt="Information" class="h-6 w-6 mr-2">
                        <h3 class="text-lg font-semibold text-white mb-0">Tata Cara Memperoleh Informasi Publik dan Pengajuan Keberatan</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-700 px-4 py-4">
                        <li class="flex items-center">
                            <img src="{{ asset('assets/img/icon/document.png')}}" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                    </ul>
                    <a href="#" class="text-blue-500 hover:underline mt-4 inline-block px-4 pb-4">Lihat Semua</a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-0">
                    <div class="flex items-center bg-[#4477CE] px-4 py-2 rounded-t-lg">
                        <img src="{{ asset('assets/img/icon/folder.png') }}" alt="Information" class="h-6 w-6 mr-2">
                        <h3 class="text-lg font-semibold text-white mb-0">Tata Cara Memperoleh Informasi Publik dan Pengajuan Keberatan</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-700 px-4 py-4">
                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                    </ul>
                    <a href="#" class="text-blue-500 hover:underline mt-4 inline-block px-4 pb-4">Lihat Semua</a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-0">
                    <div class="flex items-center bg-[#4477CE] px-4 py-2 rounded-t-lg">
                        <img src="{{ asset('assets/img/icon/folder.png') }}" alt="Information" class="h-6 w-6 mr-2">
                        <h3 class="text-lg font-semibold text-white mb-0">Tata Cara Memperoleh Informasi Publik dan Pengajuan Keberatan</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-700 px-4 py-4">
                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                    </ul>
                    <a href="#" class="text-blue-500 hover:underline mt-4 inline-block px-4 pb-4">Lihat Semua</a>
                </div>


                <div class="bg-white shadow-md rounded-lg p-0">
                    <div class="flex items-center bg-[#4477CE] px-4 py-2 rounded-t-lg">
                        <img src="{{ asset('assets/img/icon/folder.png') }}" alt="Information" class="h-6 w-6 mr-2">
                        <h3 class="text-lg font-semibold text-white mb-0">Tata Cara Memperoleh Informasi Publik dan Pengajuan Keberatan</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-700 px-4 py-4">
                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                    </ul>
                    <a href="#" class="text-blue-500 hover:underline mt-4 inline-block px-4 pb-4">Lihat Semua</a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-0">
                    <div class="flex items-center bg-[#4477CE] px-4 py-2 rounded-t-lg">
                        <img src="{{ asset('assets/img/icon/folder.png') }}" alt="Information" class="h-6 w-6 mr-2">
                        <h3 class="text-lg font-semibold text-white mb-0">Tata Cara Memperoleh Informasi Publik dan Pengajuan Keberatan</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-700 px-4 py-4">
                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                    </ul>
                    <a href="#" class="text-blue-500 hover:underline mt-4 inline-block px-4 pb-4">Lihat Semua</a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-0">
                    <div class="flex items-center bg-[#4477CE] px-4 py-2 rounded-t-lg">
                        <img src="{{ asset('assets/img/icon/folder.png') }}" alt="Information" class="h-6 w-6 mr-2">
                        <h3 class="text-lg font-semibold text-white mb-0">Tata Cara Memperoleh Informasi Publik dan Pengajuan Keberatan</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-700 px-4 py-4">
                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                        <li class="flex items-center">
                            <img src="img/icon/document.png" alt="Logo" class="h-4 w-4 mr-2">
                            Prosedur Layanan Informasi Publik PPID Kota Surakarta
                        </li>

                    </ul>
                    <a href="#" class="text-blue-500 hover:underline mt-4 inline-block px-4 pb-4">Lihat Semua</a>
                </div>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-[#4477CE] to-[#223C68] text-white py-4 ">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-12">
            <div class="text-center md:text-left mb-4 md:mb-0 pad">
                <p class="font-semibold text-sm" >PPID Pemerintah Kota Surakarta</p>
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
                            <img src="img/logo/facebook.png" alt="Facebook" class="w-6 h-6">
                        </a>
                        <a href="#">
                            <img src="img/logo/instagram.png" alt="Twitter" class="w-6 h-6">
                        </a>
                        <a href="#">
                            <img src="img/logo/twitter_x.png" alt="YouTube" class="w-6 h-6">
                        </a>
                        <a href="#">
                            <img src="img/logo/youtube.png" alt="Instagram" class="w-6 h-6">
                        </a>
                    </div>
                </div>
        </div>
    </footer>

</body>
</html>
