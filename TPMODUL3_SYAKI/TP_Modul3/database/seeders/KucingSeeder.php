<?php

namespace Database\Seeders;

use App\Models\Kucing;
use Illuminate\Database\Seeder;

class KucingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kucings = [
            [
                'nama_kucing' => 'roy',
                'ras' => 'Depok',
                'warna_bulu' => 'Oren',
                'usia' => 2,
                'deskripsi' => 'Katanya sih si oren playboy pasar cimanggis',
            ],
            [
                'nama_kucing' => 'Syaki',
                'ras' => 'Cemput',
                'warna_bulu' => 'Ungu janda',
                'usia' => 3,
                'deskripsi' => 'Primadona pasar cemput',
            ],
            [
                'nama_kucing' => 'tejo',
                'ras' => 'Bali',
                'warna_bulu' => 'Putih',
                'usia' => 1,
                'deskripsi' => 'Pemikat hati kucing betina di banjaran',
            ],
            [
                'nama_kucing' => 'okin',
                'ras' => 'Solo',
                'warna_bulu' => 'abu',
                'usia' => 2,
                'deskripsi' => 'Kucing kampung solo yang menjadi incaran sikumis',
            ],
            [
                'nama_kucing' => 'Joko',
                'ras' => 'Asli Lombok',
                'warna_bulu' => 'Hitam',
                'usia' => 3,
                'deskripsi' => 'Kucing asli bekasi yang ditakuti',
            ],
        ];

        foreach ($kucings as $kucing) {
            Kucing::create($kucing);
        }
    }
}

