@extends('layout.template')

@section('title', 'Watchlist')

@section('content')
    <div class="container">
        <h1 class="text-white">Watchlist</h1>
        <table class="table" style="background:#000; color: #fff;">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie['judul'] }}</td>
                        <td>{{ $movie['tahun'] }}</td>
                        <td>
                            <a href="#">Lihat Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table><br><br>
        <a href="/movies" class="btn btn-success">Kembali</a>
    </div>
@endsection
