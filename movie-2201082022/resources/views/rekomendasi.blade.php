@extends('layout.template')

@section('title', $rekomendasi['judul'])

@section('content')
    @if ($rekomendasi)
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/{{ $rekomendasi['foto_sampul'] }}" class="img-fluid rounded movie-poster"
                        alt="{{ $rekomendasi['judul'] }} Poster">
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">{{ $rekomendasi['judul'] }}</h1>
                            <p class="card-text">{{ $rekomendasi['sinopsis'] }}</p>
                            <p class="card-text"><strong>Tahun :</strong> {{ $rekomendasi['tahun'] }}</p>
                            <p class="card-text"><strong>Pemain :</strong> {{ implode(', ', $rekomendasi['pemain']) }}</p>
                            <div class="mt-3">
                                <strong>Rating Pengguna:</strong>
                                <input id="ratingInput" type="number" class="rating" data-min="1" data-max="5"
                                    data-step="0.1" data-size="md" value="{{ $rekomendasi['rating'] }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="/movies" class="btn btn-primary">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>

        </div>
    @else
        <div class="container mt-5 text-center">
            <div class="alert alert-danger" role="alert">
                Data film tidak ditemukan!
            </div>
            <div class="mt-3">
                <a href="/rekomendasi" class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    @endif
@endsection
