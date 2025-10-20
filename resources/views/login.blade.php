@extends('layout')
@section('title', 'Login')
@section('content')
<div class="col-md-5 mx-auto bg-dark p-4 rounded shadow-sm">
    <h3 class="text-danger mb-4 text-center">🔑 Login Pengguna</h3>
    <form>
        <div class="mb-3">
            <label class="form-label text-light">Email</label>
            <input type="email" class="form-control bg-secondary text-light border-0" placeholder="contoh@email.com">
        </div>
        <div class="mb-3">
            <label class="form-label text-light">Password</label>
            <input type="password" class="form-control bg-secondary text-light border-0" placeholder="••••••••">
        </div>
        <button class="btn btn-danger w-100">Login</button>
        <p class="text-center mt-3 text-secondary">Belum punya akun? <a href="/register" class="text-danger">Daftar</a></p>
    </form>
</div>
@endsection
