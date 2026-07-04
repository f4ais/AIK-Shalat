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
                'urutan' => 1,
                'deskripsi' => 'Mengangkat kedua tangan sambil mengucapkan takbir.',
                'gambar_url' => 'images/takbiratul_ihram.jpg',
                'video_url' => 'videos/takbiratul_ihram.mp4',
            ],
            [
                'kategori_id' => 1,
                'nama' => 'Berdiri (Qiyam)',
                'urutan' => 2,
                'deskripsi' => 'Berdiri tegak sambil membaca Al-Fatihah dan surat pendek.',
                'gambar_url' => 'images/qiyam.jpg',
                'video_url' => 'videos/qiyam.mp4',
            ],
            [
                'kategori_id' => 1,
                'nama' => 'Ruku',
                'urutan' => 3,
                'deskripsi' => 'Membungkukkan badan dengan posisi punggung lurus.',
                'gambar_url' => 'images/ruku.jpg',
                'video_url' => 'videos/ruku.mp4',
            ],
            [
                'kategori_id' => 1,
                'nama' => "I'tidal",
                'urutan' => 4,
                'deskripsi' => 'Berdiri kembali setelah ruku.',
                'gambar_url' => 'images/itidal.jpg',
                'video_url' => 'videos/itidal.mp4',
            ],
            [
                'kategori_id' => 1,
                'nama' => 'Sujud',
                'urutan' => 5,
                'deskripsi' => 'Bersujud dengan tujuh anggota badan menyentuh lantai.',
                'gambar_url' => 'images/sujud.jpg',
                'video_url' => 'videos/sujud.mp4',
            ],
            [
                'kategori_id' => 1,
                'nama' => 'Duduk di Antara Dua Sujud',
                'urutan' => 6,
                'deskripsi' => 'Duduk di antara dua sujud sambil membaca doa.',
                'gambar_url' => 'images/duduk_dua_sujud.jpg',
                'video_url' => 'videos/duduk_dua_sujud.mp4',
            ],
            [
                'kategori_id' => 1,
                'nama' => 'Tasyahud Awal',
                'urutan' => 7,
                'deskripsi' => 'Duduk membaca tasyahud pada rakaat kedua.',
                'gambar_url' => 'images/tasyahud_awal.jpg',
                'video_url' => 'videos/tasyahud_awal.mp4',
            ],
            [
                'kategori_id' => 1,
                'nama' => 'Berdiri Rakaat Berikutnya',
                'urutan' => 8,
                'deskripsi' => 'Bangkit berdiri untuk melanjutkan rakaat berikutnya.',
                'gambar_url' => 'images/berdiri_rakaat.jpg',
                'video_url' => 'videos/berdiri_rakaat.mp4',
            ],
            [
                'kategori_id' => 1,
                'nama' => 'Tasyahud Akhir',
                'urutan' => 9,
                'deskripsi' => 'Duduk membaca tasyahud sebelum salam.',
                'gambar_url' => 'images/tasyahud_akhir.jpg',
                'video_url' => 'videos/tasyahud_akhir.mp4',
            ],
            [
                'kategori_id' => 1,
                'nama' => 'Salam',
                'urutan' => 10,
                'deskripsi' => 'Mengucapkan salam ke kanan dan kiri sebagai penutup sholat.',
                'gambar_url' => 'images/salam.jpg',
                'video_url' => 'videos/salam.mp4',
            ],
        ];

        foreach ($gerakan as $item) {
            Gerakan::create($item);
        }
    }
}