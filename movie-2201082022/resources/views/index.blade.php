<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BarMovie - Index</title>
    <link href="{{ asset('/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('images/background.jpg') }}');
            background-size: 1550px 900px;
        }

        .centered-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .centered-text h1 {
            font-size: 70px;
        }

        .centered-text p {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">BarMovie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto fw-bold">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/homepage">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="centered-text text-white">
        <h1>Welcome to BarMovie</h1>
        <p>Your Source for the Latest Movies</p>
    </div>

    <div id="about" class="container my-5">
        <!-- Konten "About" Anda di sini -->
    </div>

    <div id="contact" class="container my-5">
        <!-- Konten "Contact" Anda di sini -->
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
