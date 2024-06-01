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

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Topik</th>
            <th scope="col">Oleh</th>
            <th scope="col">Tanggal</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="/forum_diskusi">Pertanyaan 1</a></td>
            <td>John Doe</td>
            <td>October 15, 2022</td>
        </tr>
        <!-- Add more rows for additional discussions -->
        </tbody>
    </table>
    <button
        class="btn btn-danger"
        data-toggle="modal"
        data-target="#createTopicModal"
    >
        <span class="mai-plus"></span> Buat Topik Baru
    </button>

    <!-- Modal -->
    <div
        class="modal fade"
        id="createTopicModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="createTopicModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="createTopicModalLabel">
                Buat Topik Baru
            </h5>
            <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
            >
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <input
                type="text"
                class="form-control"
                placeholder="Judul Topik"
            />
            </div>
            <div class="modal-footer">
            <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
            >
                Tutup
            </button>
            <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- .container -->
    </div>
    <!-- .page-section -->

    <div class="banner-home">
    <img src="../assets/img/banner.png" alt="Banner" />
    </div>
    <!-- .banner-home -->

@endsection