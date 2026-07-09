<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gerakan;

class GerakanSeeder extends Seeder
{
    public function run(): void
    {
        $gerakan = [

            [
                'kategori_id' => 1, 
                'nama' => 'Takbiratul Ihram',
                'slug' => 'takbiratul-ihram',
                'urutan' => 1,
                'gambar' => 'gerakan/takbiratul_ihram.jpg',
                'video' => 'video/takbiratul_ihram.mp4',
                'deskripsi' => 'Mengangkat kedua tangan sejajar telinga sambil mengucapkan takbir.',
            ],

            [
                'kategori_id' => 1, 
                'nama' => 'Berdiri',
                'slug' => 'berdiri',
                'urutan' => 2,
                'gambar' => 'gerakan/berdiri.jpg',
                'video' => 'video/berdiri.mp4',
                'deskripsi' => 'Berdiri tegak sambil membaca Surah Al-Fatihah.',
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Ruku',
                'slug' => 'ruku',
                'urutan' => 3,
                'gambar' => 'gerakan/ruku.jpg',
                'video' => 'video/ruku.mp4',
                'deskripsi' => 'Membungkukkan badan hingga punggung rata.',
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Itidal',
                'slug' => 'itidal',
                'urutan' => 4,
                'gambar' => 'gerakan/itidal.jpg',
                'video' => 'video/itidal.mp4',
                'deskripsi' => 'Bangkit dari ruku sambil membaca doa itidal.',
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Sujud Pertama',
                'slug' => 'sujud-pertama',
                'urutan' => 5,
                'gambar' => 'gerakan/sujud1.jpg',
                'video' => 'video/sujud1.mp4',
                'deskripsi' => 'Sujud pertama dengan tujuh anggota badan menyentuh lantai.',
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Duduk di Antara Dua Sujud',
                'slug' => 'duduk-antara-dua-sujud',
                'urutan' => 6,
                'gambar' => 'gerakan/duduk.jpg',
                'video' => 'video/duduk.mp4',
                'deskripsi' => 'Duduk iftirasy sambil membaca doa.',
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Sujud Kedua',
                'slug' => 'sujud-kedua',
                'urutan' => 7,
                'gambar' => 'gerakan/sujud2.jpg',
                'video' => 'video/sujud2.mp4',
                'deskripsi' => 'Melakukan sujud kedua.',
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Tasyahud Awal',
                'slug' => 'tasyahud-awal',
                'urutan' => 8,
                'gambar' => 'gerakan/tasyahud_awal.jpg',
                'video' => 'video/tasyahud_awal.mp4',
                'deskripsi' => 'Duduk membaca tahiyat awal.',
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Tasyahud Akhir',
                'slug' => 'tasyahud-akhir',
                'urutan' => 9,
                'gambar' => 'gerakan/tasyahud_akhir.jpg',
                'video' => 'video/tasyahud_akhir.mp4',
                'deskripsi' => 'Duduk membaca tahiyat akhir sebelum salam.',
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Salam',
                'slug' => 'salam',
                'urutan' => 10,
                'gambar' => 'gerakan/salam.jpg',
                'video' => 'video/salam.mp4',
                'deskripsi' => 'Mengakhiri sholat dengan salam ke kanan dan kiri.',
            ],

        ];


        // Membuat data gerakan untuk kategori Anak-anak
        $gerakanAnak = collect($gerakan)->map(function ($item) {

            $item['kategori_id'] = 2;
            $item['slug'] = $item['slug'] . '-anak';
            $item['deskripsi'] = 'Panduan gerakan sholat untuk anak-anak. ' . $item['deskripsi'];

            $item['gambar'] = str_replace(
                'gerakan/',
                'gerakan_anak/',
                $item['gambar']
            );
            return $item;

        })->toArray();



        // Gabungkan gerakan dewasa dan anak
        $semuaGerakan = array_merge($gerakan, $gerakanAnak);



        foreach ($semuaGerakan as $item) {

            $item['created_at'] = now();
            $item['updated_at'] = now();

            Gerakan::create($item);

        }
    }
}