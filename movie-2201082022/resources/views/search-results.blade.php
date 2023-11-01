@extends('layout.template')

@section('title', 'Search Results')

@section('content')
    <style>
        .card-title a {
            text-decoration: none;
            /* Menghilangkan garis bawah */
            color: inherit;
            /* Mengambil warna default teks */
        }
    </style>
    <div class="container">
        <h1>Search Results for "{{ $query }}"</h1>
        @if (count($results) > 0)
            <div class="row">
                @foreach ($results as $result)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/images/{{ $result['foto_sampul'] }}" class="card-img-top" alt="{{ $result['judul'] }}">
                            <div class="card-body">
                                <h5 class="card-title"><a
                                        href="{{ url('/rekomendasi/' . $result['id']) }}">{{ $result['judul'] }}</a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No results found.</p>
        @endif
        <a href="/movies" class="btn btn-success">Kembali</a>
    </div>
@endsection
