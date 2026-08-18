@extends('layouts.app')
@section('judul-tab', 'Halaman Komentar Artikel')

@section('konten-utama')
<h1>Kirim Komentar Artikel</h1>

    <form action="/artikel/komentar" method="POST">
        @csrf
        <div>
            <label>Nama</label>
            <br>
            <input type="text" name="nama">
        </div>
        <br>

        <div>
            <label>Judul Artikel</label>
            <br>
            <input type="text" name="judul_artikel">
        </div>
        <br>

        <div>
            <label>Komentar</label>
            <br>
            <textarea name="komentar" rows="5"></textarea>
        </div>
        <br>

        <button type="submit">
            Kirim Komentar
        </button>
    </form>

@endsection
