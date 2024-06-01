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
            Buku KIA Digital
            </li>
        </ol>
        </nav>
        <h1 class="font-weight-normal">Buku KIA Digital</h1>
    </div>
    <!-- .container -->
    </div>
    <!-- .banner-section -->
    </div>
    <!-- .page-banner -->

    <div class="page-section">
    <div class="container">
    <h1 class="text-center wow fadeInUp">Buku KIA Digital</h1>

    <!-- Embedding the iframe here -->
    <div
        style="
        position: relative;
        padding-top: max(60%, 324px);
        width: 100%;
        height: 0;
        "
    >
        <iframe
        style="
            position: absolute;
            border: none;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        "
        src="https://online.fliphtml5.com/bvzmp/jumz/"
        seamless="seamless"
        scrolling="no"
        frameborder="0"
        allowtransparency="true"
        allowfullscreen="true"
        ></iframe>
    </div>
    <a
        href="https://ayosehat.kemkes.go.id/download/grkr/a8c1c20728a2d8d55f16a7e24f52cf97.pdf"
        class="btn btn-success"
        download
        >Download Buku KIA Digital</a
    >
    </div>
    <!-- .container -->
    </div>
    <!-- .page-section -->

    <!-- .page-section -->

    <div class="banner-home">
    <img src="../assets/img/banner.png" alt="Banner" />
    </div>
    <!-- .banner-home -->

@endsection