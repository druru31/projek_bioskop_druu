@extends('layout')
@section('title', 'Beranda')
@section('content')

<div class="text-center"> <h1 class="display-5 fw-bold text-danger mb-4">Selamat Datang di <span class="text-light">BioskopKu</span></h1> <p class="lead mb-4">Nikmati pengalaman menonton terbaik dengan pemesanan tiket online cepat & praktis.</p> <a href="/film" class="btn btn-primary btn-lg shadow-lg">🎟️ Pesan Sekarang</a> </div> <div class="mt-5"> <h3 class="mb-3 text-danger">Film Populer Minggu Ini</h3> <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Film 1 -->
    <div class="col">
        <div class="card h-100 text-center bg-dark border-0 shadow film-card">
            <img src="https://jadwalnonton.com/data/upload/movies/2025/Poster-The-conjuring-Last-Rites-Final.jpg" 
                 class="card-img-top rounded-top" alt="The Conjuring">
            <div class="card-body">
                <h5 class="card-title text-light">The Conjuring</h5>
                <p class="card-text text-secondary">
                    Sepasang suami istri penyelidik paranormal membantu keluarga yang diganggu kekuatan jahat di rumah mereka.
                </p>
                <a href="/jadwal" class="btn btn-sm btn-danger mt-2">Lihat Jadwal</a>
            </div>
        </div>
    </div>

    <!-- Film 2 -->
    <div class="col">
        <div class="card h-100 text-center bg-dark border-0 shadow film-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpRUAml1fUBeqRQAAJmRwYTailS_GKaW61Tw&s" 
                 class="card-img-top rounded-top" alt="La La Land">
            <div class="card-body">
                <h5 class="card-title text-light">La La Land</h5>
                <p class="card-text text-secondary">
                    Kisah cinta antara pianis jazz dan aktris muda yang berjuang mengejar impian di Los Angeles.
                </p>
                <a href="/jadwal" class="btn btn-sm btn-danger mt-2">Lihat Jadwal</a>
            </div>
        </div>
    </div>

    <!-- Film 3 -->
    <div class="col">
        <div class="card h-100 text-center bg-dark border-0 shadow film-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhr-g0VIK3OyI27sSlDvEhLOlWG4Q5sRl8Aw&s" 
                 class="card-img-top rounded-top" alt="21 Jump Street">
            <div class="card-body">
                <h5 class="card-title text-light">21 Jump Street</h5>
                <p class="card-text text-secondary">
                    Dua polisi muda menyamar menjadi siswa SMA untuk membongkar jaringan narkoba di sekolah.
                </p>
                <a href="/jadwal" class="btn btn-sm btn-danger mt-2">Lihat Jadwal</a>
            </div>
        </div>
    </div>

</div>

</div> <style> .film-card img { height: 400px; object-fit: cover; transition: transform 0.4s ease, filter 0.3s ease; filter: brightness(85%); } .film-card:hover img { transform: scale(1.05); filter: brightness(70%); } .film-card { transition: transform 0.3s ease, box-shadow 0.3s ease; border-radius: 12px; } .film-card:hover { transform: translateY(-6px); box-shadow: 0 10px 25px rgba(255, 0, 0, 0.25); } .card-body { padding: 1.2rem; } .card-text { font-size: 0.9rem; color: rgba(255,255,255,0.8); } </style>

@endsection