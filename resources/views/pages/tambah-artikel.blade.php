@extends('layouts.app')
@section('judul-tab', 'Halaman Daftar Artikel')

@section('konten-utama')
<h1>Tambah Artikel</h1>

    <form action="/artikel" method="POST"> @csrf <div> <label>Judul Artikel</label>
<br> <input type="text" name="judul">

        </div> <br>

        <div> <label>Penulis</label> <br> <input type="text" name="penulis"> </div>
<br>

        <div> <label>Tanggal Publikasi</label> <br> <input type="date"
name="tanggal_publikasi"> </div> <br>

        <div> <label>Kategori</label> <br> <input type="text" name="kategori"> </div>
<br>

        <div> <label>Isi Artikel</label> <br> <textarea name="isi" rows="8"></textarea>
</div> <br> <button type="submit">

            Kirim Artikel </button>

    </form>

    @endsection