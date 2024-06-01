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
            Diskusi
            </li>
        </ol>
        </nav>
        <h1 class="font-weight-normal">Diskusi</h1>
    </div>
    <!-- .container -->
    </div>
    <!-- .banner-section -->
    </div>
    <!-- .page-banner -->

    <div class="page-section bg-light">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
        <h1 class="display-4">Anda Belum Memiliki Janji Temu</h1>
        <a href="/janjitemu" class="btn btn-secondary btn-lg"
            >Buat Sekarang</a
        >
        </div>
    </div>
    </div>
    <!-- .container -->
    </div>
    <!-- .page-section -->

    <div class="page-section">
    <div class="container">
    <h1 class="text-center wow fadeInUp">Forum Diskusi</h1>

    <a href="/diskusi" class="btn btn-secondary">Kembali ke Diskusi</a>

    <div class="discussion-container">
        <div class="discussion-bubble-master">
        <div class="bubble-content">
            <p class="bubble-text text-white">Pertanyaan 1</p>
            <p class="bubble-info text-white">John Doe - October 15, 2022</p>
        </div>
        </div>
        <div class="discussion-bubble">
        <div class="bubble-content">
            <p class="bubble-text text-white">Jawaban</p>
            <p class="bubble-info text-white">
            Dr. Satriatama Putra - October 16, 2022
            </p>
        </div>
        </div>
        <!-- Add more discussion bubbles here -->
    </div>

    <form class="comment-form">
        <div class="form-group">
        <textarea
            class="form-control"
            rows="3"
            placeholder="Tambahkan komentar"
        ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
    </div>
    <!-- .container -->
    </div>
    <!-- .page-section -->

    <div class="banner-home">
    <img src="../assets/img/banner.png" alt="Banner" />
    </div>
    <!-- .banner-home -->

@endsection