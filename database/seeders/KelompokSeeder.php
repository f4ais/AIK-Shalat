<?php

namespace Database\Seeders;

use App\Models\Kelompok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelompokSeeder extends Seeder
{
    public function run(): void
    {
        Kelompok::create([
            'nama_kelompok' => 'Rizky Faizzatul, Daffa Rizky Novenda, Muhammad Maulana Adabi, Mulyan',
            'prodi' => 'Sistem Informasi',
            'mata_kuliah' => 'AIK 4',
            'dosen' => 'Dedy Susanto, S.Pd.I., M.M'
        ]);
    }
}
