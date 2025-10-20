@extends('layout')
@section('title', 'Pembayaran')
@section('content')
<h2 class="text-danger fw-bold mb-4">💳 Pembayaran Tiket</h2>
<form class="col-md-6 mx-auto bg-dark p-4 rounded shadow-sm">
    <div class="mb-3">
        <label class="form-label text-light">Metode Pembayaran</label>
        <select class="form-select bg-secondary text-light border-0">
            <option>Transfer Bank</option>
            <option>QRIS</option>
            <option>Kartu Kredit</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success w-100">Bayar Sekarang</button>
</form>

<hr class="text-secondary my-5">

<div class="bg-black p-4 rounded text-center">
    <h4 class="text-danger mb-3">🧾 Struk Pembelian (Dummy)</h4>
    <p>Film: <strong>Avengers</strong></p>
    <p>Studio: <strong>2</strong></p>
    <p>Kursi: <strong>C3, C4</strong></p>
    <p>Total Bayar: <strong>Rp 100.000</strong></p>
    <p>Status: <span class="badge bg-success">Lunas</span></p>
</div>
@endsection
