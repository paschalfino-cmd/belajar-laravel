@extends('layouts.app')
@section('judul-tab', 'Hasil Komentar Artikel')

@section('konten-utama')
<h1>Komentar Berhasil Dikirim</h1>

  <p> Nama: {{ $data['nama'] }} </p>

  <p> Judul Artikel: {{ $data['judul_artikel'] }} </p>

  <hr>

  <p> {{ $data['komentar'] }} </p>

  <a href="/artikel/komentar"> Kirim Komentar Lagi </a>

@endsection
