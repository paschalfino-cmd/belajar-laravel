<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    private $data_artikel = [
        [
            'id' => 1,
            'judul' => "ini adalah artikel pertama",
            'penulis' => "paschal",
            'tnggal_publikasi' => '01-08-2026',
            'kategori' => 'kesehatan',
            'isi' => "What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop publishing software like Aldus PageMaker and Microsoft Word including versions of Lorem Ipsum.",
        ],
        [
            'id' => 2,
            'judul' => "ini adalah artikel kedua",
            'penulis' => "romeo",
            'tnggal_publikasi' => '01-08-2026',
            'kategori' => 'kesehatan',
            'isi' => "What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop publishing software like Aldus PageMaker and Microsoft Word including versions of Lorem Ipsum.",
        ],
        [
            'id' => 3,
            'judul' => "ini adalah artikel ketiga",
            'penulis' => "yovie",
            'tnggal_publikasi' => '01-08-2026',
            'kategori' => 'kesehatan',
            'isi' => "What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop publishing software like Aldus PageMaker and Microsoft Word including versions of Lorem Ipsum.",
        ],
    ];

    //menampilkan daftar artikel
    public function index() {
        $data_artikel = $this->data_artikel;
        return view('pages.daftar-artikel', [
            'data_artikel' => $data_artikel
        ]);
    }

    //create
    public function create() {
        return view('pages.tambah-artikel');
    }

    //store
     public function store(Request $request) {

    $artikel = [

      'judul' => $request->input('judul'),

      'penulis' => $request->input('penulis'),

      'tanggal_publikasi' => $request->input('tanggal_publikasi'),

      'kategori' => $request->input('kategori'),

      'isi' => $request->input('isi')

    ];


    return view('pages.hasil-artikel', ['artikel' => $artikel]);

  }

    //read
    public function show($id) {
        // cari artikel berdasarkan id yang dikirim lewat url
        $artikel = collect($this->data_artikel)->firstWhere('id', (int) $id);

        // kalau id nya tidak ditemukan, tampilkan halaman 404
        if (!$artikel) {
            abort(404);
        }

        return view('pages.detail-artikel', [
            'artikel' => $artikel
        ]);
    }

    //update
    public function update() {}

    //delete
    public function delete() {}

    //menampilkan halaman form komentar
    public function komentar() {
        return view('pages.komentar-artikel');
    }

    //menyimpan data komentar yang dikirim lewat form
    public function kirimKomentar(Request $request) {

        $nama = $request->input('nama');
        $judul_artikel = $request->input('judul_artikel');
        $komentar = $request->input('komentar');

        $data = [
            'nama' => $nama,
            'judul_artikel' => $judul_artikel,
            'komentar' => $komentar,
        ];

        return view('pages.hasil-komentar', ['data' => $data]);
    }

}