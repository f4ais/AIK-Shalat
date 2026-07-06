<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gerakan;

class GerakanSeeder extends Seeder
{
    public function run(): void
    {
        $gerakans = [

            [
                'kategori_id' => 1,
                'nama' => 'Berdiri Menghadap Kiblat',
                'urutan' => 1,
                'deskripsi' => 'Berdiri tegak menghadap kiblat sebagai posisi awal shalat.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Takbiratul Ihram',
                'urutan' => 2,
                'deskripsi' => 'Mengangkat kedua tangan sambil mengucapkan takbir.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Bersedekap',
                'urutan' => 3,
                'deskripsi' => 'Meletakkan tangan kanan di atas tangan kiri setelah takbiratul ihram.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Membaca Al-Fatihah dan Surat Pendek',
                'urutan' => 4,
                'deskripsi' => 'Membaca Surah Al-Fatihah kemudian dilanjutkan dengan surat pendek.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Ruku',
                'urutan' => 5,
                'deskripsi' => 'Membungkukkan badan hingga punggung lurus dan kedua tangan memegang lutut.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => "I'tidal",
                'urutan' => 6,
                'deskripsi' => 'Bangkit dari ruku hingga berdiri tegak.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Sujud Pertama',
                'urutan' => 7,
                'deskripsi' => 'Bersujud dengan tujuh anggota badan menyentuh tempat sujud.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Duduk di Antara Dua Sujud',
                'urutan' => 8,
                'deskripsi' => 'Duduk di antara sujud pertama dan kedua sambil membaca doa.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Sujud Kedua',
                'urutan' => 9,
                'deskripsi' => 'Melakukan sujud kedua sebelum berdiri ke rakaat berikutnya.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Berdiri Rakaat Berikutnya',
                'urutan' => 10,
                'deskripsi' => 'Bangkit berdiri untuk memulai rakaat berikutnya.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Tasyahud Awal',
                'urutan' => 11,
                'deskripsi' => 'Duduk membaca tasyahud pada rakaat kedua.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Tasyahud Akhir',
                'urutan' => 12,
                'deskripsi' => 'Duduk membaca tasyahud akhir sebelum salam.',
                'gambar_url' => null,
                'video_url' => null,
            ],

            [
                'kategori_id' => 1,
                'nama' => 'Salam',
                'urutan' => 13,
                'deskripsi' => 'Mengucapkan salam ke kanan dan kiri sebagai penutup shalat.',
                'gambar_url' => null,
                'video_url' => null,
            ],

        ];

        foreach ($gerakans as $gerakan) {
            Gerakan::create($gerakan);
        }
    }
}