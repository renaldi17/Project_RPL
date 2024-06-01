@extends('layout')

@section('content')

  <div
    class="page-hero bg-image overlay-dark"
    style="background-image: url(../assets/img/bg_image_1.jpg);"
  >
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead"
          >Sebuah platform digital yang menyediakan informasi dan layanan
          kesehatan untuk ibu hamil</span
        >
        <h1 class="display-4">Mommy Guide</h1>
        <a href="/janjitemu" class="btn btn-secondary"
          >Let's Make an appointment</a
        >
      </div>
    </div>
  </div>

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p>Diskusi Dengan Dokter</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-calendar-outline"></span>
              </div>
              <p><span>Janji</span> Temu</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-book"></span>
              </div>
              <p><span>Buku KIA</span> Digtal</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .page-section -->

    <div class="page-section pb-0 custom-ps">
      <div class="container">
        <div class="row align-items-center">
          <div class="text-white col-lg-6 py-3 wow fadeInUp">
            <h1>
              Tentang Mommy Guide
            </h1>
            <p class="text-white mb-4 display-4">
              Dengan komitmen untuk membuka akses informasi dan layanan
              kesehatan, kami siap melangkah maju untuk menjangkau lebih
              banyak ibu hamil di seluruh Indonesia.
            </p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .bg-light -->
  </div>
  <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_1.jpg" alt="" />
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Satriatama Putra</p>
              <span class="text-sm text-grey">Spesialis Kehamilan</span>
              <p class="text-sm text-bold">Rp. 500.000</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_2.jpg" alt="" />
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Renaldi Pasya</p>
              <span class="text-sm text-grey">Spesialis Kehamilan</span>
              <p class="text-sm text-bold">Rp. 500.000</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_3.jpg" alt="" />
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Fitri Nabilla</p>
              <span class="text-sm text-grey">Spesialis Kehamilan</span>
              <p class="text-sm text-bold">Rp. 500.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section bg-light custom-ps">
    <div class="container">
      <h1 class="text-white text-center wow fadeInUp">
        Informasi Panduan Digital
      </h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Pregnancy</a>
              </div>
              <a href="/blog-details" class="post-thumb">
                <img src="../assets/img/blog/blog_1.jpg" alt="" />
              </a>
            </div>
            <div class="body">
              <h5 class="post-title">
                <a href="/blog-details"
                  >Ini Perkembangan Bayi dalam Kandungan dari Minggu ke
                  Minggu</a
                >
              </h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="" />
                  </div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Pregnancy</a>
              </div>
              <a href="/blog-details" class="post-thumb">
                <img src="../assets/img/blog/blog_2.jpg" alt="" />
              </a>
            </div>
            <div class="body">
              <h5 class="post-title">
                <a href="/blog-details"
                  >Olahraga untuk Ibu Hamil yang Aman di Setiap Trimester</a
                >
              </h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="" />
                  </div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 4 weeks ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Pregnancy</a>
              </div>
              <a href="/blog-details" class="post-thumb">
                <img src="../assets/img/blog/blog_3.jpg" alt="" />
              </a>
            </div>
            <div class="body">
              <h5 class="post-title">
                <a href="/blog-details"
                  >Bumil, Jangan Sepelekan Tanda Bahaya Kehamilan Ini</a
                >
              </h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_2.jpg" alt="" />
                  </div>
                  <span>Diego Simmons</span>
                </div>
                <span class="mai-time"></span> 2 months ago
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="/blog" class="btn btn-secondary">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- .page-section -->

  <div class="banner-home">
    <img src="../assets/img/banner.png" alt="Banner" />
  </div>
  <!-- .banner-home -->

@endsection