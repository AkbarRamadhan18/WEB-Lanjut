<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BarMovie - @yield('title', 'Homepage')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap-icons.css" rel="stylesheet">

    <style>
        .star {
            position: absolute;
            color: goldenrod;
            font-size: 16px;
            display: flex;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 5px;
            border-radius: 5px;
        }

        .star h5.rating {
            margin: 0;
            font-size: 15px;
            color: white;
        }

        .star1 {
            font-size: 16px;
            color: goldenrod;
            margin-right: 5px;
        }

        .star1 h5.rating {
            font-size: 15px;
            color: goldenrod;
            margin: 0;
        }
    </style>

</head>


<body>
    <nav class="navbar navbar-expand-lg bg-danger navbar-dark py-2">
        <div class="container">
            <a class="navbar-brand" href="/">BarMovie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/watchlist">Watchlist</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Genre
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Komedi</a></li>
                            <li><a class="dropdown-item" href="#">Drama</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex" action="/search" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        name="q">
                    <button class="btn bg-dark text-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div>
        @yield('rekomendasi')
    </div><br>

    <div class="container my-2">
        @yield('content')
    </div><br><br>

    <footer class="bg-danger text-white text-center py-2">
        &copy; {{ date('Y') }} Azzammil Akbar Ramadhan - 2201082022
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
