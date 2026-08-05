<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfilController extends Controller
{
    public function index($nama = "Pengunjung")
    {
      $data_siswa = [
         'nama' => 'paschal Maulana',
        'kelas' => 'XI RPL 2',
        'sekolah' => 'SMKN 1 Surabaya',
        'no_absen' => '19',
      ];  
    
    
    
      return view('pages.profil', [
        'data_siswa' => $data_siswa,
        'nama_pengunjung' => $nama,
    ]); // pages/profil
    }
}
