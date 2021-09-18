@extends('template.menuIndex')
@section('title','Beranda | ITindo Solution')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Solusi Dalam Bidang Teknologi Informasi</h1>
          <h2>Menyediakan Layanan Pembuatan Website menggunakan <img src="{{asset('img/laravel.png')}}" alt="" width="35px"> Framework Laravel dan <img src="{{asset('img/bootstrap.png')}}" alt="" width="35px"> Bootstrap</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Hubungi Kami</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Teknologi Yang DiGunakan</h2>
        </div>
        <div class="myskill-tech text-center" data-aos="zoom-in">
          <ul>
              <li><img src="{{asset('img/js.svg')}}"  class="img-fluid" width="100px" alt="JavaScript" title="JavaScript"> </li>
              <li><img src="{{asset('img/jQuery.png')}}"  class="img-fluid" width="150px" alt="JQuery" title="JQuery"></li>
              <li><img src="{{asset('img/bootstrap.png')}}"  class="img-fluid" width="100px"  alt="BootStrap" title="BootStrap (CSS Framework)"></li>
              <li><img src="{{asset('img/sweetalert.png')}}"  class="img-fluid" width="150px" alt="SweetAlert" title="SweetAlert"></li>
              <li><img src="{{asset('img/php.png')}}"  class="img-fluid" width="100px" alt="PHP" title="PHP"></li>
              <li><img src="{{asset('img/Laravel.png')}}"  class="img-fluid" width="100px"  alt="Laravel" title="Laravel (PHP Framework)"></li>
              <li><img src="{{asset('img/jetstream.png')}}"  class="img-fluid" width="200px"  alt="JetStream" title="JetStream"></li>
              <li><img src="{{asset('img/livewire.png')}}"  class="img-fluid" width="300px"  alt="LiveWire" title="LiveWire"></li>
              <li><img src="{{asset('img/ads.png')}}"  class="img-fluid" width="100px"  alt="LiveWire" title="LiveWire"></li>
          </ul>
        </div>

      </div>
    </section>
    <!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
        </div>

        <div class="row content about-span">
          <div class="col-lg-6 about-left">
            <p>
              <span>ITINDOSOLUTION</span> kami akan memberikan pelayanan Terbaik dalam pembuatan website , Termurah dengan hasil yang memuaskan.
              dengan menggunakan Hosting yang sudah Terpercaya dan sudah banyak digunakan oleh banyak website-website besar.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> <span>Pelayanan Terbaik</span>, ramah karena kami sendiri yang mengelola usaha ini.</li>
              <li><i class="ri-check-double-line"></i> <span>Termurah</span>, memberikan harga termurah dari yang lain.</li>
              <li><i class="ri-check-double-line"></i> <span>Professional</span>, dikerjakan oleh Developer Expert.</li>
              <li><i class="ri-check-double-line"></i> <span>Dapat diandalkan</span>, ketika terjadi error kami akan siap membantu.</li>
              <li><i class="ri-check-double-line"></i> <span>Aman dan Nyaman</span>, menggunakan Framework dan Hosting yang sudah terpercaya.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 about-right">
            <p>
              Kami membuat website menggunakan <span>HTML, CSS , JavaScript , Bootstrap (Framework CSS)</span> dengan tampilan yang menarik.
              Menggunakan <span>Database MySql</span>, dan untuk bahasa <span>BackEnd menggunakan PHP, Laravel(Framework PHP) dijamin aman dari serangan para Hacker</span>
              sekaligus juga mudah dalam pengembangan web di tahap selanjutnya karena yang kita gunakan untuk membuat website digunakan 
              juga oleh para expert lainya ,kita menggunakan Hosting yang terpercaya yaitu <span>Niagahoster</span>.
            </p>
            <p>  
              <span>Layanan kami menyediakan Google Ads</span>,setelah selesai membuat website agar website banyak dilihat oleh orang yang membutuhkanya 
              kita membutuhkan sebuah <span>iklan</span> supaya website yang kit dapat diketahui oleh banyak orang dengan menggunakan
              Google Ads,<span> dimana sudah hampir rata-rata orang mencari kebutuhanya melalui online dengan menggunakan Google</span> dalam
              mencari apa yang mereka butuhkan. <span>Dengan menggunakan Google Ads</span>, website kita akan banyak dilihat orang yang 
              membutuhkan sesuai dengan apa yang kita jual di website kita, <span>Banyak yang melihat = Banyak peminatnya.</span> 
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Kenapa memilih kami, dan <strong>Pertanyaan yang sering di tanyakan kepada kami.</strong></h3>
              <p>
                Ini beberapa penjelasan tentang ITINDOSOLUTION dan pertanyaan yang akan dijawab di sini.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Kenapa memilih kami untuk membuat website anda? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show list-why" data-bs-parent=".accordion-list">
                    <ul>
                      <li>Kami membuat website anda dengan bahasa yang khusus untuk membuat website, tidak menggunakan website orang lain seperti berbasis wordpress menjadikan keamanan yang terjamin dari para hacker dan dapat dikembangankan lagi website yang sudah ada.</li>
                      <li>Kami membuat website anda dengan bahasa yang khusus untuk membuat website, tidak menggunakan website orang lain seperti berbasis wordpress menjadikan keamanan yang terjamin dari para hacker dan dapat dikembangankan lagi website yang sudah ada.</li>
                      <li>Untuk tampilan dan Fitur yang diinginkan juga bisa di custom sesuai kebutuhan , dan sesuka hati anda.</li>
                      <li>Pelayanan yang ramah dan dapat diandalkan , ketika terjadi eror kami siap membantu anda.</li>
                      <li>Termurah dari website lainya dan ketika dari pihak hosting memberikan promo kami akan memberitau anda dan harga untuk hostingnya sesuai dengan harga promo yang diberikan hostingnya.</li>
                    </ul>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Bagaimana dengan Keamananya ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse list-why" data-bs-parent=".accordion-list">
                    <ul>
                      <li>Menggunakan bahasa PHP yang dikhususkan untuk website saja sehingga aman terhindar dari serangan para hacker</li>
                      <li>Menggunakan Framework LARAVEL yaitu framework terpopuler dalam pembuatan website dengan tingkat keamanan tinggi dalam data yang ada.</li>
                    </ul>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Apakah bisa di Custom/Request sesuai keingin dalam tampilan dan fitur ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse list-why" data-bs-parent=".accordion-list">
                    <ul>
                      <li>Bisa , kami juga menerima request dalam Tampilan website dan fitur fitur website sesuai kebutuhan anda.</li>
                    </ul>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Apa bisa menerima Jasa dalam pembuatan fitur dalam website yang sudah jadi ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse list-why" data-bs-parent=".accordion-list">
                    <ul>
                      <li>Bisa , kami juga bisa membuat fitur yang diinginkan dalam website yang sudah jadi.</li>
                    </ul>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset('img/why-us.png')}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
          <h2>Pelayanan</h2>
          <p>Kami memiliki beberapa pelayanan yang kami sediakan untuk anda dan juga bisa dicustom dalam pembuatan website.</p>
        </div>

        <div class="row d-flex justify-content-center">
          <div class="col-xl-2 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('img/ads.png')}}" alt="" width="50px"></div>
              <h4><a href="">Google Ads</a></h4>
              <p>Memasang iklan di Google , agar website/usaha yang kita punya bisa dikenal oleh orang banyak</p>
            </div>
          </div>

          <div class="col-xl-2 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-layout-text-window-reverse"></i></div>
              <h4><a href="">Landing Page</a></h4>
              <p>Website statis , hanya untuk memperkenalkan Product/Usaha kita agar dikenal oleh orang banyak melalui website</p>
            </div>
          </div>

          <div class="col-xl-2 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-layout-wtf"></i></div>
              <h4><a href="">Company Profile</a></h4>
              <p>Website Dynamis , Untuk memperkenalkan Product/Usaha dengan bisa input data dan lain-lain didalam Website</p>
            </div>
          </div>

          <div class="col-xl-2 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-shop"></i></div>
              <h4><a href="">Penjualan Online</a></h4>
              <p>Jual beli product didalam website, pembayaran menggunakan Midtrans dan tersedia juga untuk biaya Ongkos Kirim</p>
            </div>
          </div>

          <div class="col-xl-2 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-pencil-square"></i></div>
              <h4><a href="">Custom WEB</a></h4>
              <p>Bisa custom website sesuai keingin dan kebutuhan anda mulai dari tampilan dan fitur-fitur yang di inginkan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Harga</h2>
          <p>Harga Domain dan Hosting sewaktu - waktu dapat berubah. mengikuti pihak Hosting </p>
          <p>Paket yang dapat kami tawarkan kepada anda dan bisa di custom dan request dalam pemesanan dalam Fitur, Tampilan, Domain, dan Hosting.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Landing Page</h3>
              <h4><sup>Rp</sup>1.599.000<span></span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Tampilan yang menarik</li>
                <li><i class="bx bx-check"></i> Tampilan Lokasi toko dengan MAPS</li>
                <li><i class="bx bx-check"></i> Chat Form langsung ke Whatshapp</li>
                <li><i class="bx bx-check"></i> Maximal 3 Page</li>
                <li><i class="bx bx-check"></i> Hosting 1 Tahun</li>
                <li><i class="bx bx-check"></i> Gratis Domain 6 bulan</li>
                <li><i class="bx bx-check"></i> Gratis 1 akun email pribadi</li>
                <li><i class="bx bx-check"></i> Maintanence 3 Bulan</li>
                <li class="na"><i class="bx bx-x"></i> <span>Website Dynamis Input Data</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Register And Login</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Halaman Admin</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Pembayaran Terintergrasi Midtrans</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Cek Ongkos Kirim</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Cart System</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Company Profile</h3>
              <h4><sup>Rp</sup>3.652.000</h4>
              <ul>
                <li><i class="bx bx-check"></i> Tampilan yang premium</li>
                <li><i class="bx bx-check"></i> Tampilan Lokasi toko dengan MAPS</li>
                <li><i class="bx bx-check"></i> Chat langsung ke Whatshapp/Website</li>
                <li><i class="bx bx-check"></i> Maximal 15 Page</li>
                <li><i class="bx bx-check"></i> Hosting 1 Tahun</li>
                <li><i class="bx bx-check"></i> Gratis Domain 6 bulan</li>
                <li><i class="bx bx-check"></i> Gratis 1 akun email pribadi</li>
                <li><i class="bx bx-check"></i> Maintanence 3 Bulan</li>
                <li><i class="bx bx-check"></i> Website Dynamis Input Data</li>
                <li><i class="bx bx-check"></i> Register And Login</li>
                <li><i class="bx bx-check"></i> Halaman Admin</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pembayaran Terintergrasi Midtrans</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Cek Ongkos Kirim</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Cart System</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Penjualan Online</h3>
              <h4><sup>Rp</sup>8.590.000</h4>
              <ul>
                <li><i class="bx bx-check"></i> Tampilan yang premium</li>
                <li><i class="bx bx-check"></i> Tampilan Lokasi toko dengan MAPS</li>
                <li><i class="bx bx-check"></i> Chat langsung ke Whatshapp/Website</li>
                <li><i class="bx bx-check"></i> Maximal 15 Page</li>
                <li><i class="bx bx-check"></i> Hosting 1 Tahun</li>
                <li><i class="bx bx-check"></i> Gratis Domain 6 bulan</li>
                <li><i class="bx bx-check"></i> Gratis 1 akun email pribadi</li>
                <li><i class="bx bx-check"></i> Maintanence 3 Bulan</li>
                <li><i class="bx bx-check"></i> Website Dynamis Input Data</li>
                <li><i class="bx bx-check"></i> Register And Login</li>
                <li><i class="bx bx-check"></i> Halaman Admin</li>
                <li><i class="bx bx-check"></i> Pembayaran Terintergrasi Midtrans</li>
                <li><i class="bx bx-check"></i> Cek Ongkos Kirim</li>
                <li><i class="bx bx-check"></i> Cart System</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h1>Visi dan Misi</h1>
            <p> Membantu para pengusaha baru mulai dan Pengusaha yang ingin memperluas cakupan konsumen/pelanggan dengan memperkenalkan product/jasa melalui online.
              Zaman sekarang untuk usaha menggunakan website sangat penting dengan adanya website orang gampang mengakses apa yang ada dengan hanya membuka aplikasi browser
              tanpa menginstall aplikasi tambahan , tidak memakan banyak Kouta internet menjadikan lebih cepat dan mudah diakses, dengan adanya website kita bisa memperkenalkan product 
              atau jasa yang kita miliki ke orang orang lebih banyak secara jelas dan detail sehingga membuat orang percaya,yakin dan tertarik akan product/jasa yang anda jual.
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Hubungi Kami</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Kami memiliki team dalam pembuatan website yang professional.</p>
        </div>

        <div class="row d-flex justify-content-center">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{asset('img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rizat Sakmir</h4>
                <span>WEB Programmer</span>
                <p>Seorang programmer dalam pengembangan aplikasi WEB</p>
                <div class="social">
                  <a href="#team"><i class="ri-twitter-fill"></i></a>
                  <a href="#team"><i class="ri-facebook-fill"></i></a>
                  <a href="#team"><i class="ri-instagram-fill"></i></a>
                  <a href="#team"><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{asset('img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sangga Yasa</h4>
                <span>Developer WEB - Technical IT</span>
                <p>Seorang developer WEB Expert disalah satu anak perusahaan BCA</p>
                <div class="social">
                  <a href="#team"><i class="ri-twitter-fill"></i></a>
                  <a href="#team"><i class="ri-facebook-fill"></i></a>
                  <a href="#team"><i class="ri-instagram-fill"></i></a>
                  <a href="#team"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="{{asset('img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Riko</h4>
                <span>IT-Support</span>
                <p>Seorang IT-Support yang dapat di andalkan</p>
                <div class="social">
                  <a href="#team"><i class="ri-twitter-fill"></i></a>
                  <a href="#team"><i class="ri-facebook-fill"></i></a>
                  <a href="#team"><i class="ri-instagram-fill"></i></a>
                  <a href="#team"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Panduan</h2>
          <p>Bagimana cara memesan paket/membuat website di ITINDOSOLUTION dan Pertanyaan yang sering di tanyakan ke kami.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa saja yang disiapkan sebelum membuat website ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <ul>
                  <li>Siapkan isi dari content yang akan ditampilkan di website yaitu mulai dari isi content, gambar dan (logo jika ada).</li>
                  <li>Siapkan gambaran tampilan yang diinginkan, jika tidak ada kami sudah siapkan beberapa template yang ada.</li>
                  <li>Jika tidak ada persiapan content, Kami siap membantu anda dalam pembuatan konten mulai dari isinya, gambar, logo dan fitur-fitur yang nanti akan digunakan.</li>
                </ul>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-list-2">Bagaimana cara memesan/membuat website di ITINDOSOLUTION ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <ul>
                  <li>Pilih paket yang tersedia pada halaman pelayanan atau bisa konsultasi dahulu dalam pembuatan website melalui Whatshapp atau Chat, kami siap membantu anda.</li>
                  <li>Pembayaran dilakukan dengan sistem transfer bank yang akan kami informasikan setelah Anda menyetujui proyek untuk dikerjakan. Pembayaran dilakukan secara 2 tahap. Tahap pertama sebesar 50% sebagai tanda jadi dan tahap kedua sisanya setelah website selesai dikerjakan.</li>
                </ul>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Berapa lama waktu pengerjaan website ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <ul>
                  <li>Waktu pengerjaan kami paling cepat, setelah disetujui kami akan langsung mengerjakan proyek anda, estimasi pengerjaan tergantung dari kesulitan fitur yang di kerjakan.</li>
                </ul>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Apa bisa kita mengundang team ITINDOSOLUTION untuk meeting ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <ul>
                  <li>Ya, bertemu langsung tatap muka selama masih di wilayah Jabodetabek dan masih mengikuti Protocol Kesehatan</li>
                  <li>Untuk area yang tidak bisa kita jangkau oleh team Kami, kami menyediakan meeting online via Google Meet atau Zoom</li>
                </ul>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Bagaimana jika website yang sudah jadi ada kendala error ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <ul>
                  <li>Hubungi team kami melalui chat atau whatshapp, dan kami akan siap membantu anda.</li>
                  <li>Gratis untuk garansi maintanence jika terjadi eror kami berikan waktu 3 Bulan setelah serah terima website.</li>
                </ul>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Apa saja yang di dapat dalam pembuatan website di ITINDOSOLUTION? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <ul>
                  <li>PDF tata cara penggunaan aplikasi website , yang di buat.</li>
                  <li>Diberikan penuh full aplikasi menjadi milik anda</li>
                  <li>Code program mudah di mengerti karena diberikan dokumentasi dan catatan pada codingan.</li>
                </ul>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Anda bisa bertanya kami dan juga bisa konsultasi dengan mengirimkan pesan melalui form di bawah.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi :</h4>
                <p>Jl.Pademangan timur 4 no.80, Pademangan,Jakarta Utara,14410</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>rizatsakmir@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No. Handphone:</h4>
                <p>+62 877 8298 7067</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.7493903241768!2d106.84173282919645!3d-6.131028499722537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1e21e8f4417f%3A0xcf77328f7275678d!2sJl.%20Swadaya%20No.88%2C%20RT.8%2FRW.1%2C%20Pademangan%20Bar.%2C%20Kec.%20Pademangan%2C%20Kota%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2014420%2C%20Indonesia!5e0!3m2!1sid!2ssg!4v1631934322476!5m2!1sid!2ssg" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

            <livewire:kirim-pesan></livewire:kirim-pesan>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  
  @endSection
  <!-- ======= Footer ======= -->