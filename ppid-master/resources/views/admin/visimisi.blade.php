<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VISI & MISI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="{{ asset('assets/img/logo/logo.png')}}" />
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
        <a href="home.html" class="flex items-center">
            <img src="{{ asset('assets/img/logo/logo.png')}}" class="pl-6 h-12 mr-0">
            <div>
                <h1 class=" text-[20px] font-bold">PPID KOTA SURAKARTA</h1>
                <h1 class="text-[12px] font-thin">Pejabat Pengelola Informasi Dan Dokumentasi</h1>
            </div>
          </a>
      </div>
      <nav class="pr-6 flex items-center space-x-6 text-sm font-bold">
        <a href="home.html" class="text-black hover:text-[#4477ce]">BERANDA</a>
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
                <a href="informasiberkala.html" class="block px-4 py-3 text-black hover:bg-[#4477ce] hover:text-white">Informasi Berkala</a>
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

    <main class="container mx-auto mt-14 bg-white p-6  px-0"> 
    <h1 class="text-3xl text-white font-bold mb-4 pt-4 text-center h-20 bg-gradient-to-r from-[#4477CE] to-[#223C68]">VISI & MISI</h1>
    <nav class="w-full rounded-md">
        <ol class="list-reset flex">
          <li>
            <a
              href="#"
              class="pl-12 text-xs text-primary transition duration-150 ease-in-out hover:text-primary-accent-300 focus:text-primary-accent-300 active:text-primary-accent-300 motion-reduce:transition-none dark:text-primary-400"
              >Profil</a
            >
          </li>
          <li>
            <span class="mx-2 text-neutral-400">/</span>
          </li>
          <li>
            <a
              href="profilpimpinanpemkot.html"
              class="text-xs text-primary transition duration-150 ease-in-out hover:text-primary-accent-300 focus:text-primary-accent-300 active:text-primary-accent-300 motion-reduce:transition-none dark:text-primary-400"
              >VISI & MISI</a
            >
          </li>
         
        </ol>
      </nav>

        <!-- Visi Section -->
        <section class="mb-12">
            <h3 class="text-xl text-center font-semibold text-gray-800 mb-4 pt-4">VISI</h3>
            <p class="text-center text-gray-700 italic mb-6">"MEWUJUDKAN SURAKARTA SEBAGAI KOTA BUDAYA YANG MODERN, TANGGUH, GESIT, KREATIF DAN SEJAHTERA"</p>
            <p class="list-decimal list-inside mb-4 pl-12 pr-6">Visi tersebut sebagai pemandu gerak bersama antara pemerintah dan segenap warga untuk membangun karakter Kota Surakarta, beralaskan semangat gotong royong sebagai modal sosial-budaya. Kota Surakarta terus tumbuh dan berkembang dalam aktivitas sosial, ekonomi, dan budaya, tanpa menghilangkan jati diri dan karakternya sebagai kota dengan warisan budaya yang kental, sebagai the Spirit of Java. Upaya mewujudkan kota modern dan masyarakat yang sejahtera bermodalkan warisan budaya gotong royong dilandasi dengan karakter kota: Tangguh, Gesit, Kreatif, dan Sejahtera.</p>
            <ul class="list-decimal list-inside mb-4 pl-12 pr-6">
                <p><strong>Tangguh</strong> menegaskan karakter kota dan warga yang memiliki daya tahan tinggi, dan segera bangkit dari dampak negatif pandemi COVID-19, baik dalam dimensi sosial maupun dampak ekonominya. Semangat kebangkitan ini, digerakkan dari alas semangat kesetiakawanan, gotong royong warga dengan dukungan Pemerintah Kota Surakarta, dan selanjutnya menjadi pembelajaran bersama untuk menentukan respon yang tangguh untuk menghadapi tantangan dan ancaman di masa mendatang.</p>
                <p><strong>Gesit</strong> adalah karakter pelayanan pemerintahan yang sigap membaca perubahan kebutuhan warganegara, dengan menyesuaikan pola kerja dan pola pelayanan serta reformasi birokrasi. Pemerintahan yang gesit akan memungkinkan dampak dari lompatan-lompatan yang terjadi dapat dinikmati seluruh warga Kota Surakarta.</p>
                <p><strong>Kreatif</strong> adalah karakter kota dan warga dalam menciptakan solusi atas permasalahan bersama, dan membangun peluang-peluang usaha dari sumber daya bersama di Surakarta. Pengembangan kreativitas warga memanfaatkan energi dan potensi Surakarta yang kini telah berkontribusi dalam membangun landasan lompatan maju kota.</p>
                <p><strong>Sejahtera</strong> adalah upaya untuk memperlemas dan memperdalam landasan "Waras-Wasis-Wareg-Mapan-Papan" (3WMP) yang telah dicapai dari tahap pembangunan Kota Surakarta periode 2016–2021. Dengan menjaga dan meningkatkan kesejahteraan umum, Surakarta terus berupaya memastikan kelangsungan hidup kota modern berbasis warisan budaya di abad 21.</p>
            </ul>
        </section>

        <!-- Misi Section -->
        <section>
            <h3 class="text-xl text-center font-semibold text-gray-800 mb-4">MISI</h3>
            <ol class="list-decimal list-inside mb-4 pl-12 pr-6">
                <li>Pertama, meningkatkan kualitas kesehatan masyarakat yang berkelanjutan.</li>
                <li>Kedua, memperkuat pertumbuhan ekonomi yang adaptif dan berkelanjutan.</li>
                <li>Ketiga, mewujudkan kualitas dan daya saing pendidikan, kebudayaan, seni budaya, dan olahraga.</li>
                <li>Keempat, meningkatkan kualitas daya dan pengelolaan pelayanan publik yang baik.</li>
                <li>Kelima, mengembangkan tata kelola dan perencanaan yang kolaboratif berlandaskan semangat gotong royong dan kebaikan.</li>
                <li>Keenam, mewujudkan kehidupan yang kondusif dan teratur dalam kehidupan bermasyarakat yang harmonis.</li>
            </ol>
        </section>
    </main>
    </main>
    
    <footer class="bg-gradient-to-r from-[#4477CE] to-[#223C68] text-white py-4 mt-6">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-12">
      <div class="text-center md:text-left mb-4 md:mb-0">
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
            <img src="{{ asset('assets/img/logo/facebook.png')}}" alt="Facebook" class="w-6 h-6">
          </a>
          <a href="#">
            <img src="{{ asset('assets/img/logo/twitter_x.png')}}" alt="Instagram" class="w-6 h-6">
          </a>
          <a href="#">
            <img src="{{ asset('assets/img/logo/youtube.png')}}" alt="Twitter" class="w-6 h-6">
          </a>
          <a href="#">
            <img src="{{ asset('assets/img/logo/instagram.png')}}" alt="YouTube" class="w-6 h-6">
          </a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
