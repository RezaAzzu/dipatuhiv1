<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Presentasi Kelompok 1</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('bizpage-master/')}}/img/favicon.png" rel="icon">
  <link href="{{asset('bizpage-master/')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('bizpage-master/')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('bizpage-master/')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('bizpage-master/')}}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{asset('bizpage-master/')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{asset('bizpage-master/')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{asset('bizpage-master/')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('bizpage-master/')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Presentasi</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#intro"><img src="{{asset('bizpage-master')}}/img/logo.png" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Tantangan</a></li>
          <li><a href="#facts">Data Terkini</a></li>
          <li><a href="#services">Usulan Sistem</a></li>
          <li><a href="#team">Tim</a></li>
          {{-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul> --}}
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <!-- <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel"> -->

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- <div class="carousel-item active" style="background-image: url('{{asset('bizpage-master')}}/img/intro-carousel/1.jpg');"> -->
          <div class="carousel-item active" style="background-image: url('{{asset('template/dist')}}/img/logo4.png');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>DIPATUHI</h2>
                <p>Direktori Pendapat Hukum IKNB</p>
                <a href="{{ route('home') }}" class="btn-get-started scrollto">Gunakan Sekarang</a>
              </div>
            </div>
          </div>

        </div>

        <!-- <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->

      <!-- </div> -->
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Menyimpan Rekap Pertanyaan</a></h4>
            <p class="description">Dengan DIPATUHI, semua pertanyaan yang diterima oleh DP3B beserta jawabannya dapat disimpan dan direkap.</p>
          </div>

          <div class="col-lg-6 box box-bg">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Mencari Jawaban atas Pertanyaan</a></h4>
            <p class="description">Jawaban atas pertanyaan dapat diakses kapanpun dan dari manapun untuk dijadikan acuan dalam pemberian jawaban</p>
          </div>

          <!-- <div class="col-lg-4 box">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div> -->

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Tantangan Saat Ini</h3>
          <p>Proses Tanya-Jawab Pendapat Hukum DP3B memiliki beberapa tantangan</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Tingginya Frekuensi Permintaan Pendapat Hukum</a></h2>
              <p>
                Banyaknya pertanyaan yang masuk memengaruhi tingkat SLA yang ada.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Inkonsistensi Jawaban karena Pergantian PIC</a></h2>
              <p>
                Seorang PIC pertanyaan bisa saja digantikan oleh pegawai DP3B (non-PIC) sehingga pendapat hukum antara keduanya bisa berbeda.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Tidak Adanya Acuan dalam Pemberian Jawaban</a></h2>
              <p>
                Jawaban yang disampaikan antara satu pegawai dengan pegawai lain bisa beragam, meskipun pertanyaan yang diterima sejenis.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->



    <!--==========================
      Skills Section
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>
    ============================-->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Data berbicara</h3>
          <p>Fakta-fakta yang ada sekarang ini</p>
        </header>

        <div class="row counters">

  	  <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">456</span>
            <p>Pertanyaan (permintaan pendapat) hukum dari stakeholders di tahun 2020</p>
  				</div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">4</span>
            <p>Rata-rata hari yang dibutuhkan untuk menjawab pertanyaan</p>
  				</div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">21</span>
            <p>Hari terlama dalam memberikan jawaban atas pertanyaan</p>
  				</div>

        <div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Usulan Sistem Kami</h3>
          <p>Untuk mengatasi tantangan-tantangan yang dihadapi oleh DP3B, kami mengusulkan sebuah rancang bangun sistem TI dengan karakteristik sebagai berikut.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Cepat dan Mudah</a></h4>
            <p class="description">Sistem dapat dioperasikan tanpa membutuhkan keterampilan teknologi khusus</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Direktori Pendapat Hukum</a></h4>
            <p class="description">Pegawai DP3B dapat menyimpan pertanyaan-pertanyaan hukum beserta jawaban-jawabannya dalam sistem ini</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Acuan dalam Memberi Jawaban</a></h4>
            <p class="description">Semua jawaban dapat diakses dari kapanpun dan di manapun untuk mendukung keseragaman jawaban</p>
          </div>
          

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Portfolio Section
    ============================-->  
      
    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Kelompok 1</h3>
          {{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> --}}
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{asset('bizpage-master')}}/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Andi Muhammad Alief Ichwan Mawladri</h4>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="{{asset('bizpage-master')}}/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Khairunnisa Andira</h4>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="{{asset('bizpage-master')}}/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Reza Azzubair Wijonarko</h4>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section    
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">


        </div>

        <div class="form">
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Gunakan DIPATUHI</h3>
        {{-- <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
        <a class="cta-btn" href="{{ route('home') }}">Sekarang</a>
      </div>
    </section><!-- #call-to-action -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <h3>Catatan Kecil</h3>
            <p>
              Sistem ini masih sebatas rancang bangun (prototype) yang berisi fitur-fitur untuk mengatasi tantangan-tantangan di atas.               
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tautan Kilat</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('home') }}">Home</a></li>
              <li><i class="ion-ios-arrow-right"><a href="#about">Tantangan</a></li>
              <li><i class="ion-ios-arrow-right"><a href="#facts">Data Terkini</a></li>
              <li><i class="ion-ios-arrow-right"><a href="#services">Usulan Sistem</a></li>
              <li><i class="ion-ios-arrow-right"><a href="#team">Tim</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        {{-- Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade --}}
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('bizpage-master/')}}/lib/jquery/jquery.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/easing/easing.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/superfish/hoverIntent.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/superfish/superfish.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/wow/wow.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/waypoints/waypoints.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/counterup/counterup.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/lightbox/js/lightbox.min.js"></script>
  <script src="{{asset('bizpage-master/')}}/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('bizpage-master/')}}/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('bizpage-master/')}}/js/main.js"></script>

</body>
</html>
