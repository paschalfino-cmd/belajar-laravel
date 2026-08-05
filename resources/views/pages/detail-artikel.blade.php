@extends('layouts.app')
@section('judul-tab', 'Detail Artikel')

@section('konten-utama')

<div class="box-artikel">
    <h4>{{ $artikel['judul'] }}</h4>
    <p>
        {{ $artikel['penulis'] }}
        <br>
        {{ $artikel['kategori'] }}
        <br>
        {{ $artikel['tnggal_publikasi'] }}
    </p>
    <p>
        {{ $artikel['isi'] }}
    </p>
    <p>
        <a href="/artikel">Kembali ke daftar artikel</a>
    </p>
</div>

@endsection