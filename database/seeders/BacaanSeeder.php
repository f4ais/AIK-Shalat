<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bacaan;

class BacaanSeeder extends Seeder
{
    public function run(): void
    {
        $bacaans = [

            [
                'gerakan_id' => 1,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 2,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 3,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 4,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 5,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 6,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 7,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 8,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 9,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 10,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 11,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 12,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            [
                'gerakan_id' => 13,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => null,
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

        ];

        foreach ($bacaans as $bacaan) {
            Bacaan::create($bacaan);
        }
    }
}