<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-light .navbar-nav .nav-link {
            color: black;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="font-weight-bold navbar-brand" href="#">PKL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
                <a class="font-weight-bold nav-link mr-2" href="{{ route('siswa.index')}}">SISWA</a>
            </li>
            <li class="nav-item active">
                <a class="font-weight-bold nav-link" href="{{ route('dudi.index')}}">DUDI</a>
            </li>
            <li class="nav-item active">
                <a class="font-weight-bold nav-link" href="{{ route('pkl.index')}}">PKL</a>
            </li>
            <li class="nav-item active">
                <a href="/sesi/logout" class="font-weight-bold nav-link">LOGOUT</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
