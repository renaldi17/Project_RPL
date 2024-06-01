@extends('layout')

@section('content')
    
  <div
    class="page-banner overlay-dark bg-image"
    style="background-image: url(../assets/img/bg_image_1.jpg);"
  >
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol
            class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2"
          >
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Panduan Kesehatan
            </li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Panduan Kesehatan</h1>
      </div>
      <!-- .container -->
    </div>
    <!-- .banner-section -->
  </div>
  <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Pregnancy</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
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
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Pregnancy</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_3.jpg" alt="" />
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="/blog-details"
                      >Olahraga untuk Ibu Hamil yang Aman di Setiap
                      Trimester</a
                    >
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Pregnancy</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_3.jpg" alt="" />
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="/blog-details"
                      >Bumil, Jangan Sepelekan Tanda Bahaya Kehamilan Ini</a
                    >
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Pregnancy</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_4.jpg" alt="" />
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="/blog-details"
                      >Ragam Makanan yang Mengandung Nutrisi Penting bagi Ibu
                      Hamil</a
                    >
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Pregnancy</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_5.jpg" alt="" />
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="/blog-details"
                      >Persiapan Persalinan Menjelang Kelahiran Buah Hati</a
                    >
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Pregnancy</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_1.jpg" alt="" />
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="/blog-details"
                      >The Recovery Room: News beyond the pandemic</a
                    >
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Pregnancy</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_2.jpg" alt="" />
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="/blog-details"
                      >Racism in mental healthcare: An invisible barrier</a
                    >
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Pregnancy</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_2.jpg" alt="" />
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="/blog-details"
                      >COVID-19 live updates: Total number of cases passes
                      11.6 million</a
                    >
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a
                      class="page-link"
                      href="#"
                      tabindex="-1"
                      aria-disabled="true"
                      >Previous</a
                    >
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#"
                      >1 <span class="sr-only">(current)</span></a
                    >
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- .row -->
        </div>

        </div>
      </div>
    </div>
    <!-- .row -->
  </div>
  <!-- .container -->
  <!-- .page-section -->

  <div class="banner-home">
    <img src="../assets/img/banner.png" alt="Banner" />
  </div>
  <!-- .banner-home -->

@endsection