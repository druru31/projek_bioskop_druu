@extends('layout')

@section('content')

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary">Mau Nonton Apa?🍿</h2>
            <div class="d-flex gap-2"> <select id="kategori" class="form-select">
                    <option value="">Semua Kategori</option>
                    <option value="Horor">Horor</option>
                    <option value="Romantis">Romantis</option>
                    <option value="Komedi">Komedi</option>
                </select> <input type="text" id="search" class="form-control" placeholder="Cari judul film..."> </div>
        </div>
        <div id="filmList" class="row g-4"></div>
    </div>
    <style>
        /* === Card Styling === */
        .card {
            position: relative;
            border: none;
            border-radius: 14px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #000;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .card img {
            height: 380px;
            object-fit: cover;
            filter: brightness(70%);
            transition: filter 0.3s ease;
        }

        .card:hover img {
            filter: brightness(50%);
        }

        /* === Overlay for text === */
        .card-body {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 18px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95), rgba(0, 0, 0, 0.3));
            color: #fff;
            z-index: 2;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 6px;
            color: #fff;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.8);
        }

        .card-text {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.85);
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.6);
        }

        /* === Controls === */
        .form-select,
        .form-control {
            border-radius: 10px;
            padding: 8px 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #dee2e6;
            transition: all 0.2s ease-in-out;
        }

        .form-select:focus,
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 6px rgba(13, 110, 253, 0.4);
        }

        .text-muted,
        .text-secondary {
            color: rgba(255, 255, 255, 0.7) !important;
        }
    </style>
    <script> document.addEventListener('DOMContentLoaded', () => { const filmList = document.getElementById('filmList'); const searchInput = document.getElementById('search'); const kategoriSelect = document.getElementById('kategori'); let films = []; fetch('/data/films.json').then(res => res.json()).then(data => { films = data; renderFilms(data); }); function renderFilms(data) { filmList.innerHTML = ''; if (data.length === 0) { filmList.innerHTML = `<div class='text-center text-muted'>Film tidak ditemukan.</div>`; return; } data.forEach(f => { filmList.innerHTML += ` <div class="col-md-3 col-sm-6"> <div class="card"> <img src="${f.poster}" class="card-img-top" alt="${f.judul}"> <div class="card-body"> <h5 class="card-title">${f.judul}</h5> <p class="text-muted small mb-1">${f.kategori} • ${f.tahun}</p> <p class="card-text">${f.sinopsis}</p> </div> </div> </div> `; }); } function filterFilms() { const keyword = searchInput.value.toLowerCase(); const kategori = kategoriSelect.value; const filtered = films.filter(f => f.judul.toLowerCase().includes(keyword) && (kategori === '' || f.kategori === kategori)); renderFilms(filtered); } searchInput.addEventListener('input', filterFilms); kategoriSelect.addEventListener('change', filterFilms); }); </script>

@endsection