@extends('layout')
@section('title', 'Registrasi')
@section('content')
<div class="col-md-5 mx-auto bg-dark p-4 rounded shadow-sm">
    <h3 class="text-danger mb-4 text-center">🧾 Registrasi Akun Baru</h3>
    <form>
        <div class="mb-3">
            <label class="form-label text-light">Nama Lengkap</label>
            <input type="text" class="form-control bg-secondary text-light border-0" placeholder="Nama Lengkap">
        </div>
        <div class="mb-3">
            <label class="form-label text-light">Email</label>
            <input type="email" class="form-control bg-secondary text-light border-0" placeholder="Email">
        </div>
        <div class="mb-3">
            <label class="form-label text-light">Password</label>
            <input type="password" class="form-control bg-secondary text-light border-0" placeholder="Password">
        </div>
        <button class="btn btn-success w-100">Daftar</button>
        <p class="text-center mt-3 text-secondary">Sudah punya akun? <a href="/login" class="text-danger">Login</a></p>
    </form>
</div>
@endsection
