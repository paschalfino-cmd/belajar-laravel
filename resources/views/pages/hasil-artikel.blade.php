<h1>Artikel Berhasil Dikirim</h1>
<h2> {{ $artikel['judul'] }} </h2>

  <p> Penulis: {{ $artikel['penulis'] }} </p>

  <p> Tanggal Publikasi: {{ $artikel['tanggal_publikasi'] }} </p>

  <p> Kategori: {{ $artikel['kategori'] }} </p>

  <hr>

  <p> {{ $artikel['isi'] }} </p>


  <a href="/artikel/tambah"> Tambah Artikel Lagi </a>