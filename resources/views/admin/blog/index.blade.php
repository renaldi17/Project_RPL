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
                    Ini CRUD Blog
                </li>
                </ol>
                 </nav>
            </div>
        </div>
    </div>

    <div class="container">
        
    <a href="/create_blog" class="btn btn-primary">Create</a>

            <div class="table-responsive py-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>tanggal</th>
                            <th>Image</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="edit_blog" class="btn btn-warning">Edit</a>
                                    <form action="" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
    </div>

@endsection