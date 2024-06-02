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
        @foreach ($janji as $index => $value)
            <tr>
                <th scope="row">{{ ++$index }}</th>
                <td>{{  $value->name }}</td>
                <td>{{  $value->email }}</td>
                <td>{{  $value->tanggal }}</td>
                <td>{{  $value->nomor }}</td>
                <td>{{  $value->pesan }}</td>
                <td>{{  $value->status }}</td>
                <td>

                @if(in_array($value->status, ['Pending']) )
                    @if (auth()->user()->role == 'pasien' && auth()->user()->id == $value->created_by )
                        <button
                            type="submit"
                            class="btn btn-xs btn-danger"
                            data-toggle="modal"
                            data-target="#cancelModal-{{ $value->id}}"
                        >
                            Batal
                        </button>
                        <div
                            class="modal fade"
                            id="cancelModal-{{ $value->id }}"
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
                                <a type="button" class="btn btn-danger" href="/change_status/{{$value->id}}/Cancel">Ya, Batalkan</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    @elseif(auth()->user()->role == 'dokter')
                        <a type="button" class="btn btn-sm btn-success" href="/change_status/{{$value->id}}/ACC">Setujui</a>
                        <a type="button" class="btn btn-sm btn-warning" href="/change_status/{{$value->id}}/Denied">Tolak</a>
                    @else
                        -
                    @endif

                        
                @else
                    -
                @endif
                    
                </td>
            </tr>
        @endforeach
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