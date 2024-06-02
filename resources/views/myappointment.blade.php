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
            Janji Temu Saya
            </li>
        </ol>
        </nav>
        <h1 class="font-weight-normal">Janji Temu Saya</h1>
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
    <h1 class="text-center wow fadeInUp">Informasi Pemesanan Janji Temu</h1>

    <table class="table mt-5">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nomor</th>
            <th scope="col">Pesan</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>John Doe</td>
            <td>johndoe@example.com</td>
            <td>2022-10-15</td>
            <td>1234567890</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
            <td>pending</td>
            <td>
            <button
                class="btn btn-danger"
                data-toggle="modal"
                data-target="#cancelModal"
            >
                Batal
            </button>

            <!-- Cancel Modal -->
            <div
                class="modal fade"
                id="cancelModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="cancelModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="cancelModalLabel">
                        Konfirmasi Pembatalan
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
                    <p>
                        Apakah Anda yakin ingin membatalkan janji temu ini?
                    </p>
                    </div>
                    <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Tidak
                    </button>
                    <button type="button" class="btn btn-danger">
                        Ya, Batalkan
                    </button>
                    </div>
                </div>
                </div>
            </div>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jane Smith</td>
            <td>janesmith@example.com</td>
            <td>2022-10-20</td>
            <td>9876543210</td>
            <td>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
            </td>
            <td>ACC</td>
            <td>
            <button class="btn btn-danger">Batal</button>
            </td>
        </tr>
        <!-- Add more rows for additional appointments -->
        </tbody>
    </table>
    </div>
    <!-- .container -->
    </div>
    <!-- .page-section -->

    <div class="banner-home">
    <img src="../assets/img/banner.png" alt="Banner" />
    </div>
    <!-- .banner-home -->

@endsection