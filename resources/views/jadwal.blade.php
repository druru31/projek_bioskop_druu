@extends('layout')
@section('title', 'Jadwal Film')
@section('content')
<h2 class="text-danger fw-bold mb-4">🕒 Jadwal Tayang Hari Ini</h2>
<div class="table-responsive">
    <table class="table table-dark table-hover text-center align-middle">
        <thead class="table-danger">
            <tr>
                <th>Film</th>
                <th>Studio</th>
                <th>Jam</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach (range(1,5) as $i)
            <tr>
                <td>Film {{ $i }}</td>
                <td>Studio {{ rand(1,3) }}</td>
                <td>{{ rand(17,21) }}:00</td>
                <td>Rp {{ rand(35,55) }}.000</td>
                <td><a href="/kursi" class="btn btn-sm btn-danger">Pesan</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
