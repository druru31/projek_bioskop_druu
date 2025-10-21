@extends('layout')

@section('content')
  <div class="container py-5">
    <div class="row g-5 align-items-start">

      <!-- Poster & Info Film -->
      <div class="col-md-4">
        <div class="card shadow border-0">
        <img id="posterFilm" src="" class="card-img-top rounded-top" alt="Poster Film">
          <div class="card-body bg-dark text-light">
            <h4 id="judulFilm" class="fw-bold mb-2">The Conjuring</h4>
            <p id="infoFilm" class="small mb-1 text-muted">Horor • 2013</p>
            <p id="sinopsisFilm" class="small">
              Pasangan paranormal Ed dan Lorraine Warren membantu keluarga yang diteror makhluk gaib di rumah mereka.
            </p>
          </div>
        </div>
      </div>

      <!-- Area Kursi -->
      <div class="col-md-8">
        <div class="card bg-dark text-light shadow border-0 p-4">
          <h4 class="fw-bold mb-4 text-center text-primary">Pilih Kursi Anda</h4>

          <div id="seatContainer" class="d-flex flex-column align-items-center">
            <div id="screen" class="mb-4 text-center text-uppercase fw-bold text-warning">Layar</div>
            <div id="seats" class="d-grid" style="grid-template-columns: repeat(8, 40px); gap: 10px;"></div>
          </div>

          <div class="mt-4 text-center">
            <button id="confirmBtn" class="btn btn-primary px-4 py-2 rounded-pill fw-semibold">
              Konfirmasi Kursi
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    #screen {
      background: linear-gradient(90deg, #ffc107, #ff9800);
      width: 70%;
      height: 8px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(255, 193, 7, 0.7);
    }

    .seat {
      width: 40px;
      height: 40px;
      border-radius: 6px;
      background-color: #2c2f33;
      border: 2px solid #444;
      cursor: pointer;
      transition: all 0.2s ease-in-out;
    }

    .seat:hover {
      transform: scale(1.1);
      border-color: #0d6efd;
    }

    .seat.selected {
      background-color: #0d6efd;
      border-color: #0d6efd;
      box-shadow: 0 0 10px rgba(13, 110, 253, 0.6);
    }

    .seat.occupied {
      background-color: #6c757d;
      cursor: not-allowed;
      border-color: #555;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const seatsContainer = document.getElementById('seats');
      const confirmBtn = document.getElementById('confirmBtn');
      const totalSeats = 48;
      const occupiedSeats = [5, 6, 20, 21, 35]; 

      for (let i = 1; i <= totalSeats; i++) {
        const seat = document.createElement('div');
        seat.classList.add('seat');
        seat.dataset.number = i;

        if (occupiedSeats.includes(i)) {
          seat.classList.add('occupied');
        }

        seat.addEventListener('click', () => {
          if (seat.classList.contains('occupied')) return;
          seat.classList.toggle('selected');
        });

        seatsContainer.appendChild(seat);
      }

      confirmBtn.addEventListener('click', () => {
        const selectedSeats = [...document.querySelectorAll('.seat.selected')]
          .map(s => s.dataset.number);

        if (selectedSeats.length === 0) {
          alert('Pilih minimal satu kursi terlebih dahulu!');
          return;
        }

        alert(`Kursi yang kamu pilih: ${selectedSeats.join(', ')}`);
      });

      const params = new URLSearchParams(window.location.search);
      const judul = params.get('film');

      if (judul) {
        fetch('/data/films.json')
          .then(res => res.json())
          .then(data => {
            const film = data.find(f => f.judul.toLowerCase() === judul.toLowerCase());
            if (film) {
              document.getElementById('posterFilm').src = film.poster;
              document.getElementById('judulFilm').textContent = film.judul;
              document.getElementById('infoFilm').textContent = `${film.kategori} • ${film.tahun}`;
              document.getElementById('sinopsisFilm').textContent = film.sinopsis;
            }
          })
          .catch(err => console.error('Gagal memuat data film:', err));
      }
    });

    document.addEventListener('DOMContentLoaded', () => {
    fetch('/data/films.json')
      .then(res => res.json())
      .then(data => {
        // Cari film Conjuring dari JSON
        const film = data.find(f => f.judul.toLowerCase().includes('conjuring'));
        if (film) {
          document.getElementById('posterFilm').src = film.poster;
        } else {
          console.error('Film "The Conjuring" tidak ditemukan di films.json');
        }
      })
      .catch(err => console.error('Gagal memuat data film:', err));
  });
  </script>
@endsection