<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - NFEST Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="about-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">NFEST</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('main') }}">Home<br></a></li>
          <li><a href="{{ route('about') }}" class="active">About</a></li>
          <li><a href="{{ route('events')}}">Events</a></li>
           @auth
            @if(Auth::user()->role === 'admin')
                <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
            @endif
        @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

       @auth
          <div class="dropdown ms-auto">
              <button class="d-flex align-items-center profile-dropdown-button" type="button" id="profile-button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('assets/img/Foto Profil.png') }}" alt="Profile" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;">
                  <span class="text-sm font-semibold text-white">{{ Auth::user()->name }}</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile-button">
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button type="submit" class="dropdown-item">Logout</button>
                      </form>
                  </li>
              </ul>
          </div>
      @endauth

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/GRUP2.jpg);">
      <div class="container position-relative">
        <h1>About</h1>
        <br>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/main">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/GRUP.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us</h3>
            <ul>
              <li>
                <i class="bi bi-broadcast"></i>
                <div>
                  <img src="assets/img/paprika.jpg" alt="">
                </div>
              </li>
            </ul>
            <p>
              Perkenalkan kami dari kelompok 9 mata kuliah Manajemen proyek dengan nama "Paprikahive", kami bertanggung jawab atas pemodelan serta pengembangan website NFEST sebagai bentuk project mata kuliah kami
            </p>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    {{-- <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section --> --}}

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Our Team<br></span>
        <h2>Our Team</h2>
        <p>berikut merupakan jajaran kelompok kami</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/Ririn.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Riani Apriyanti</h4>
                <span>Project Manager</span>
                <p>
                  Saya memimpin tim pengembang NFEST dengan fokus pada visi besar dan kolaborasi, memastikan setiap bagian dari platform dikembangkan secara strategis dan berdampak.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/yoshi.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Yossy Indra Kusuma</h4>
                <span>Scrum Master</span>
                <p>
                  Saya berperan sebagai pengatur ritme kerja tim NFEST, memastikan proses pengembangan berjalan terstruktur, produktif, dan sesuai dengan target yang telah ditentukan.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/Fahri.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Ahmad Fachri</h4>
                <span>Backend Developer</span>
                <p>
                  Saya mengembangkan sistem backend NFEST yang menangani penyimpanan data event, autentikasi pengguna, dan integrasi fitur agar platform berjalan dengan efisien dan aman.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/Dika.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Muhammad Andhika Thata</h4>
                <span>Designer</span>
                <p>
                  Saya mendesain tampilan antarmuka NFEST agar informatif, modern, dan mudah digunakan, sehingga pengguna dapat menikmati pengalaman terbaik saat menjelajahi event-event kampus.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/Oliq.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Arrijal Abdul Kholiq</h4>
                <span>Frontend Developer</span>
                <p>
                  Saya membangun bagian frontend NFEST yang responsif dan interaktif, menghubungkan desain dengan fungsi agar pengguna bisa mengakses informasi event secara optimal di berbagai perangkat.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/Dzakiah.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Dzakiah Nur Aini</h4>
                <span>Media</span>
                <p>
                  Saya bertanggung jawab membuat konten visual dan media promosi untuk NFEST, memastikan setiap event terlihat menarik dan mudah dipahami oleh audiens kampus.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          
          <!-- Baris baru khusus untuk Zen agar di tengah -->
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex mx-auto" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <img src="assets/img/team/Zen.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Muhammad Zen Alby</h4>
                  <span>Media</span>
                  <p>
                    Saya membantu membuat materi media dan dokumentasi event NFEST, agar setiap publikasi memiliki daya tarik visual dan meningkatkan partisipasi pengguna.
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
          </div>


        </div>

      </div>

    </section><!-- /Team Section -->

    

    <!-- Faq Section -->
   <section id="faq" class="faq section"> 

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <span>Frequently Asked Questions</span>
    <h2>Frequently Asked Questions</h2>
    <p>Pertanyaan yang sering diajukan seputar penggunaan platform publikasi event kampus NFEST</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-10">

        <div class="faq-container">

          <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Bagaimana cara mendaftar atau join ke event yang ada di NFEST?</h3>
            <div class="faq-content">
              <p>Setiap card event memiliki tombol "Daftar" yang akan mengarahkan kamu ke link pendaftaran.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Apakah saya perlu membuat akun untuk melihat event di NFEST?</h3>
            <div class="faq-content">
              <p>Ya pengguna akan diminta unutk melakukan login ke akun yang sudah terdaftar atau melakukan registrasi apabila pengguna masih belum memiliki akun</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Siapa saja yang bisa mengunggah event di NFEST?</h3>
            <div class="faq-content">
              <p>Hanya admin yang sudah terverifikasi yang telah diberi akses ke dashboard admin yang dapat menambahkan dan mengelola event, bagi panitia yang ingin di publikasikan harus konfirmasi dengan admin terlebih dahulu.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Apakah event di NFEST bisa ditampilkan berdasarkan kategori?</h3>
            <div class="faq-content">
              <p>Ya. NFEST mengelompokkan event berdasarkan kategori seperti UKM, ORMAWA, dan EKSTERNAL. Kamu bisa melihat filter atau tag di halaman event untuk mempermudah pencarian.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Bagaimana cara menghubungi tim NFEST jika ada pertanyaan atau kendala teknis?</h3>
            <div class="faq-content">
              <p>Kamu dapat menghubungi kami melalui form kontak yang tersedia di halaman utama atau melalui email resmi yang tertera di bagian footer website NFEST.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>

      </div>

    </div>

  </div>

</section><!-- /Faq Section -->


  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">NFEST</span>
          </a>
          <p>Platform informasi event kampus STT Terpadu Nurul Fikri yang bertujuan memudahkanmahasiswa 
              menemukan, mendaftar, dan mengikuti berbagai kegiatan kampus secara terpusat dan efisien.
          </p>
          <div class="social-links d-flex mt-4">
            
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Sosial Media Kami</h4>
          <ul>
            <li><a href=""><i class="bi bi-twitter-x"></i>   Twitter</a></li>
            <li><a href=""><i class="bi bi-facebook"></i>   Facebook</a></li>
            <li><a href=""><i class="bi bi-instagram"></i>   Instagram</a></li>
            <li> <a href=""><i class="bi bi-linkedin"></i>   Linkedin</a></li>
          </ul>
        </div>


        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Kantor Pusat Kami</h4>
          <p><i class="bi bi-geo-alt-fill me-2"></i>Jl. Setu Indah No.116, Kec. Cimanggis, Kota Depok, Provinsi Jawa Barat, Kode Pos 16451</p>
          <p class="mt-4"><i class="bi bi-telephone-fill me-2"></i>(+62) 89821234567</p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p><div class="credits">© Copyright 2025<a href="https://www.instagram.com/paprikahive_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="> paprikahive_</a></p>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  

</body>

</html>