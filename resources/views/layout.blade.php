<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BioskopKu')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1b1b1b, #111);
            color: #eee;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(6px);
        }
        .navbar-brand {
            font-weight: 700;
            color: #ff3333 !important;
            letter-spacing: 1px;
        }
        .nav-link {
            color: #bbb !important;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #fff !important;
        }
        main {
            flex: 1;
        }
        .card {
            background: #1f1f1f;
            border: none;
            transition: 0.3s;
        }
        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 0 10px #ff3333aa;
        }
        .btn-primary {
            background: #ff3333;
            border: none;
        }
        .btn-primary:hover {
            background: #ff5555;
        }
        footer {
            background: #000;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">🎬 BioskopKu</a>
        <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="/film" class="nav-link">Film</a></li>
                <li class="nav-item"><a href="/jadwal" class="nav-link">Jadwal</a></li>
                <li class="nav-item"><a href="/kursi" class="nav-link">Kursi</a></li>
                <li class="nav-item"><a href="/pembayaran" class="nav-link">Pembayaran</a></li>
                <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="container py-5">
    @yield('content')
</main>

<footer class="text-center py-3 text-secondary">
    © 2025 BioskopKu | Experience the Movie Magic 🍿
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
