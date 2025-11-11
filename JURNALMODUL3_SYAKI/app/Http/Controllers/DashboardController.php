<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# 1. Import model User agar dapat digunakan di dalam controller.
use App\Models\user;

class DashboardController extends Controller
{

    public function index()
    {
        # 2. Ambil satu data mahasiswa dari model User menggunakan fungsi first().
        $mahasiswa = User::first();
        $hours = date('H');
        $salam = match (true) {
            $hours >= 5 && $hours < 12 => "Good Morning",
            $hours >= 12 && $hours < 15 => "Good Afternoon",
            $hours >= 15 && $hours < 18 => "Good Evening",
            default => "Good Night",
        };
        $accesTime = date("H:i:s");
        $Tanggal =$this ->getTanggal();
        return view('dashboard', compact('mahasiswa', 'salam','accessTime'));
        # 3. Tambahkan logika untuk menentukan ucapan salam

        # 4. Buat variabel untuk menampilkan waktu akses dalam format HH:MM:SS.
        # 5. Buat variabel dengan format tanggal dd-mm-yyyy. (Gunakan method getTanggal() untuk memproses tanggal.)
        # 6. Kirim data ke view dashboard menggunakan fungsi compact().
    }

    # 7. Buat method private getTanggal() untuk menghasilkan tanggal saat ini dalam format dd-mm-yyyy.
    private function gettanggal(){
        return date('d-m-y');
    }
}
