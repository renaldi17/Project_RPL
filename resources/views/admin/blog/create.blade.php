@extends('layout')

@section('content')
    
    <div class="page-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <nav aria-label="Breadcrumb">
                <ol class="breadcrumb bg-transparent py-0 mb-5">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">
                    <a href="/dashboard_admin">Dasboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/index_admin">CRUD</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Halaman Create Blog
                </li>
                </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
        <h1 class="text-center wow fadeInUp">Buat Blog</h1>

        <form class="main-form">
            <div class="row mt-5">
            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                <input type="text" class="form-control" placeholder="Judul" />
            </div>
            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                <input
                type="text"
                class="form-control"
                placeholder="Kategori"
                />
            </div>
            <div
                class="col-12 col-sm-6 py-2 wow fadeInLeft"
                data-wow-delay="300ms"
            >
                <input type="date" class="form-control" />
            </div>
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <input type="file" class="form-control"/>
            </div>
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <textarea
                name="deskripsi"
                id="deskripsi"
                class="form-control"
                rows="6"
                placeholder="Masukkan Deskripsi"
                ></textarea>
            </div>
            </div>

            <button type="submit" class="btn btn-secondary mt-3 wow zoomIn">
            Create
            </button>
        </form>
        </div>
    <!-- .container -->
    </div>
    <!-- .page-section -->

@endsection