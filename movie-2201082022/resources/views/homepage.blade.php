@extends('layout.template')

@section('title', 'Home Page')

@section('content')

    <div class="bg-dark">
        <div class="container-fluid">
            <h1 class="text-left text-light">BarMovie Rekomendasi</h1>
            <div id="movieCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($rekomendasis->chunk(6) as $key => $chunk)
                        <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                            <div class="d-flex justify-content-between">
                                @foreach ($chunk as $rekomendasi)
                                    <div class="card mb-3" style="width: 13rem;">
                                        <img src="/images/{{ $rekomendasi['foto_sampul'] }}" class="card-img-top"
                                            alt="{{ $rekomendasi['judul'] }} Poster">
                                        <div class="card-body text-center">
                                            <h6 class="card-title text-center">{{ $rekomendasi['judul'] }}</h6>
                                            <a href="/rekomendasi/{{ $rekomendasi['id'] }}"
                                                class="btn btn-success">Trailer</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#movieCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#movieCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div><br>


    <div>
        <h1 class="text-left mb-4">Film Terbaru</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card mb-4">
                        <img src="/images/{{ $movie['foto_sampul'] }}" class="card-img-top"
                            alt="{{ $movie['judul'] }} Poster">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['judul'] }}</h5>
                            <a href="/movie/{{ $movie['id'] }}" class="btn btn-primary btn-block">Lihat
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
