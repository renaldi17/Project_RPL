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
                <li class="breadcrumb-item active" aria-current="page">
                    Ini Dashboard Admin
                </li>
                </ol>
                 </nav>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h2> Selamat Datang, </h2>
            <div class="row">
            
                <div class="col-sm-6 py-5">
                <div class="card-blog">
                  <div class="header">
                    <a href="blog-details" class="post-thumb">
                      <img src="../assets/img/blog/blog_3.jpg" alt="" />
                    </a>
                  </div>
                  <div class="body">
                    <h5 class="post-title">
                      <a>CRUD Blog</a>
                    </h5>
                    <p class="isi">Management Blog</p>

                    <a href="/index_admin" class="btn btn-secondary justify-content-center">Detail</a>
                  </div>
                </div>
              </div>

            </div>
        </div>
    </section>


 

@endsection