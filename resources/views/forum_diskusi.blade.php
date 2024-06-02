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
    <h1 class="text-center wow fadeInUp">{{$diskusi->judul}}</h1>

    <a href="/diskusi" class="btn btn-secondary">Kembali ke Diskusi</a>

    <div class="discussion-container messages">
        @foreach ($messages as $message)
            <div class="message"></div>
            @include('broadcast', ['message' => $message])
        @endforeach
        <!-- Add more discussion bubbles here -->
    </div>

    <form class="comment-form">
        <input
            type="hidden"
            id="diskusi_id" 
            name="diskusi_id"
            value="{{ $diskusi->id }}"
        />
        <textarea
            class="form-control"
            rows="3"
            placeholder="Tambahkan komentar"
            id="message" 
            name="message"
        ></textarea>
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
    <script>
        Pusher.logToConsole = true;

        const pusher  = new Pusher('{{config('broadcasting.connections.pusher.key')}}', {cluster: 'ap1'});
        const channel = pusher.subscribe('chat.{{$diskusi->id}}');
        // $(".messages").animate({scrollTop: $('.messages .message:last')?.offset()?.top}, 1000);
        //Receive messages
        
        channel.bind('chat', function (data) {
            console.log(data)
            $.post("/receive", {
            _token:  '{{csrf_token()}}',
            message: data.chat,
            })
            .done(function (res) {
                $(".messages > .message").last().after(res);
                // $(".messages").animate({scrollTop: $('.messages #{{$diskusi->id}}:last').offset().top}, 1000);
            });
        });

        //Broadcast messages
        $("form").submit(function (event) {
            event.preventDefault();
            $.ajax({
            url:     "/broadcast",
            method:  'POST',
            headers: {
                'X-Socket-Id': pusher.connection.socket_id
            },
            data:    {
                _token:  '{{csrf_token()}}',
                diskusi_id: '{{$diskusi->id}}',
                message: $("form #message").val(),
            }
            }).done(function (res) {
                $(".messages > .message").last().after(res);
                $("form #message").val('');
                // Check if the element exists
                // $(".messages").animate({scrollTop: $('.messages #{{$diskusi->id}}:last').offset().top}, 1000);

            });
        });

    </script>
@endsection