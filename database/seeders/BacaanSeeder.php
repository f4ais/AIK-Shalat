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
                'teks_arab' => 'الله أكبر',
                'teks_latin' => 'Allahu Akbar',
                'terjemahan' => 'Allah Maha Besar',
                'audio_url' => 'audio/takbir.mp3',
                'sumber' => 'HPT Muhammadiyah'
            ],

            [
                'gerakan_id' => 2,
                'urutan' => 1,
                'teks_arab' => 'الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ',
                'teks_latin' => 'Alhamdu lillahi rabbil alamin...',
                'terjemahan' => 'Segala puji bagi Allah Tuhan semesta alam.',
                'audio_url' => 'audio/alfatihah.mp3',
                'sumber' => 'HPT Muhammadiyah'
            ],

            [
                'gerakan_id' => 3,
                'urutan' => 1,
                'teks_arab' => 'سُبْحَانَ رَبِّيَ الْعَظِيمِ',
                'teks_latin' => 'Subhaana rabbiyal adziim',
                'terjemahan' => 'Maha Suci Tuhanku Yang Maha Agung.',
                'audio_url' => 'audio/ruku.mp3',
                'sumber' => 'HPT Muhammadiyah'
            ],

            [
                'gerakan_id' => 4,
                'urutan' => 1,
                'teks_arab' => 'سَمِعَ اللَّهُ لِمَنْ حَمِدَهُ',
                'teks_latin' => "Sami'allahu liman hamidah",
                'terjemahan' => 'Allah mendengar orang yang memuji-Nya.',
                'audio_url' => 'audio/itidal.mp3',
                'sumber' => 'HPT Muhammadiyah'
            ],

            [
                'gerakan_id' => 5,
                'urutan' => 1,
                'teks_arab' => 'سُبْحَانَ رَبِّيَ الأَعْلَى',
                'teks_latin' => "Subhaana rabbiyal a'la",
                'terjemahan' => 'Maha Suci Tuhanku Yang Maha Tinggi.',
                'audio_url' => 'audio/sujud.mp3',
                'sumber' => 'HPT Muhammadiyah'
            ],

            [
                'gerakan_id' => 6,
                'urutan' => 1,
                'teks_arab' => 'رَبِّ اغْفِرْ لِي',
                'teks_latin' => 'Rabbighfirli',
                'terjemahan' => 'Ya Tuhanku, ampunilah aku.',
                'audio_url' => 'audio/duduk.mp3',
                'sumber' => 'HPT Muhammadiyah'
            ],

            [
                'gerakan_id' => 7,
                'urutan' => 1,
                'teks_arab' => 'التَّحِيَّاتُ لِلَّهِ...',
                'teks_latin' => 'Attahiyyaatu lillaahi...',
                'terjemahan' => 'Segala penghormatan...',
                'audio_url' => 'audio/tasyahud_awal.mp3',
                'sumber' => 'HPT Muhammadiyah'
            ],

            [
                'gerakan_id' => 9,
                'urutan' => 1,
                'teks_arab' => 'اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ...',
                'teks_latin' => 'Allahumma shalli ala Muhammad...',
                'terjemahan' => 'Ya Allah, limpahkanlah shalawat kepada Nabi Muhammad.',
                'audio_url' => 'audio/tasyahud_akhir.mp3',
                'sumber' => 'HPT Muhammadiyah'
            ],

            [
                'gerakan_id' => 10,
                'urutan' => 1,
                'teks_arab' => 'السَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللَّهِ',
                'teks_latin' => "Assalaamu'alaikum warahmatullah",
                'terjemahan' => 'Semoga keselamatan dan rahmat Allah tercurah kepada kalian.',
                'audio_url' => 'audio/salam.mp3',
                'sumber' => 'HPT Muhammadiyah'
            ]

        ];

        foreach ($bacaans as $bacaan) {
            Bacaan::create($bacaan);
        }
    }
}