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
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">
            Janji Temu
            </li>
        </ol>
        </nav>
        <h1 class="font-weight-normal">Janji Temu</h1>
    </div>
    <!-- .container -->
    </div>
    <!-- .banner-section -->
    </div>
    <!-- .page-banner -->

    <div class="page-section bg-light">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
        <div class="row">
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
            <div class="card-doctor">
                <div class="header">
                <img src="../assets/img/doctors/doctor_1.jpg" alt="" />
                <div class="meta"></div>
                </div>
                <div class="body">
                <p class="text-xl mb-0">Dr. Satriatama Putra</p>
                <span class="text-sm text-grey">Spesialis Kehamilan</span>
                <p class="text-sm text-bold">Rp. 500.000</p>
                </div>
            </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
            <div class="card-doctor">
                <div class="header">
                <img src="../assets/img/doctors/doctor_2.jpg" alt="" />
                <div class="meta"></div>
                </div>
                <div class="body">
                <p class="text-xl mb-0">Dr. Renaldi Pasya</p>
                <span class="text-sm text-grey">Spesialis Kehamilan</span>
                <p class="text-sm text-bold">Rp. 500.000</p>
                </div>
            </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
            <div class="card-doctor">
                <div class="header">
                <img src="../assets/img/doctors/doctor_3.jpg" alt="" />
                <div class="meta"></div>
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
    </div>
    <!-- .container -->
    </div>
    <!-- .page-section -->

    <div class="page-section">
    <div class="container">
    <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
    @if ($errors->any())
        <div class="aler alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('create_janji') }}" method="POST" class="main-form">
        @csrf
        <div class="row mt-5">
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name" />
            <input type="hidden" class="form-control" value="pending" name="status" />
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input
                type="email"
                class="form-control"
                placeholder="Email address.."
                name="email"
            />
        </div>
        <div
            class="col-12 col-sm-6 py-2 wow fadeInLeft"
            data-wow-delay="300ms"
        >
            <input type="date" class="form-control" name="tanggal" />
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="number" class="form-control" placeholder="Number.." name="nomor" />
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea
                name="pesan"
                id="message"
                class="form-control"
                rows="6"
                placeholder="Enter message.."
            ></textarea>
        </div>
        </div>

        <button type="submit" class="btn btn-secondary mt-3 wow zoomIn">
            Submit Request
        </button>
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