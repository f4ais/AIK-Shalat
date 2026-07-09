<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bacaan;

class BacaanSeeder extends Seeder
{
    public function run(): void
    {
        $bacaan = [

            // 1. Takbiratul Ihram
            [
                'gerakan_id' => 1,
                'arab' => 'اللّٰهُ أَكْبَرُ',
                'latin' => 'Allahu Akbar',
                'terjemahan' => 'Allah Maha Besar',
                'audio' => 'bacaan/takbiratul_ihram.mp3',
            ],

            // 2. Al-Fatihah (Berdiri)
            [
                'gerakan_id' => 2,
                'arab' => 'بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ ۝ اَلْحَمْدُ لِلّٰهِ رَبِّ الْعَالَمِيْنَ ... (Al-Fatihah lengkap)',
                'latin' => 'Bismillahirrahmanirrahim, Alhamdulillahi rabbil alamin ...',
                'terjemahan' => 'Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang. Segala puji bagi Allah, Tuhan semesta alam ...',
                'audio' => 'bacaan/al_fatihah.mp3',
            ],

            // 3. Ruku
            [
                'gerakan_id' => 3,
                'arab' => 'سُبْحَانَ رَبِّيَ الْعَظِيْمِ',
                'latin' => 'Subhana Rabbiyal Adzim',
                'terjemahan' => 'Maha Suci Tuhanku Yang Maha Agung',
                'audio' => 'bacaan/ruku.mp3',
            ],

            // 4. I'tidal
            [
                'gerakan_id' => 4,
                'arab' => 'سَمِعَ اللّٰهُ لِمَنْ حَمِدَهُ رَبَّنَا وَلَكَ الْحَمْدُ',
                'latin' => 'Sami’allahu liman hamidah, Rabbana wa lakal hamd',
                'terjemahan' => 'Allah mendengar orang yang memuji-Nya. Ya Tuhan kami, bagi-Mu segala puji',
                'audio' => 'bacaan/itidal.mp3',
            ],

            // 5. Sujud Pertama
            [
                'gerakan_id' => 5,
                'arab' => 'سُبْحَانَ رَبِّيَ الْأَعْلَى',
                'latin' => 'Subhana Rabbiyal A’la',
                'terjemahan' => 'Maha Suci Tuhanku Yang Maha Tinggi',
                'audio' => 'bacaan/sujud.mp3',
            ],

            // 6. Duduk antara dua sujud
            [
                'gerakan_id' => 6,
                'arab' => 'رَبِّ اغْفِرْ لِيْ وَارْحَمْنِيْ وَاجْبُرْنِيْ وَارْفَعْنِيْ وَارْزُقْنِيْ وَاهْدِنِيْ وَعَافِنِيْ وَاعْفُ عَنِّيْ',
                'latin' => 'Rabbighfir li warhamni wajburni warfa’ni warzuqni wahdini wa ‘afini wa’fu ‘anni',
                'terjemahan' => 'Ya Tuhanku, ampunilah aku, rahmatilah aku, cukupkanlah aku, angkatlah derajatku, berilah aku rezeki, tunjukilah aku, sehatkan aku, dan maafkan aku',
                'audio' => 'bacaan/duduk_antara_sujud.mp3',
            ],

            // 7. Sujud Kedua
            [
                'gerakan_id' => 7,
                'arab' => 'سُبْحَانَ رَبِّيَ الْأَعْلَى',
                'latin' => 'Subhana Rabbiyal A’la',
                'terjemahan' => 'Maha Suci Tuhanku Yang Maha Tinggi',
                'audio' => 'bacaan/sujud.mp3',
            ],

            // 8. Tasyahud Awal
            [
                'gerakan_id' => 8,
                'arab' => 'التَّحِيَّاتُ لِلّٰهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ ...',
                'latin' => 'Attahiyyatu lillahi wassalawatu wattayyibat ...',
                'terjemahan' => 'Segala penghormatan, keberkahan, dan kebaikan hanya milik Allah ...',
                'audio' => 'bacaan/tasyahud_awal.mp3',
            ],

            // 9. Tasyahud Akhir
            [
                'gerakan_id' => 9,
                'arab' => 'التَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ الطَّيِّبَاتُ لِلّٰهِ ...',
                'latin' => 'Attahiyyatul mubarakatush shalawatut tayyibat lillah ...',
                'terjemahan' => 'Segala penghormatan yang diberkahi, shalawat, dan kebaikan hanya milik Allah ...',
                'audio' => 'bacaan/tasyahud_akhir.mp3',
            ],

            // 10. Salam
            [
                'gerakan_id' => 10,
                'arab' => 'السَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللّٰهِ',
                'latin' => 'Assalamu’alaikum warahmatullah',
                'terjemahan' => 'Semoga keselamatan dan rahmat Allah tercurah kepada kalian',
                'audio' => 'bacaan/salam.mp3',
            ],

        ];

        foreach ($bacaan as $item) {
            Bacaan::create($item);
        }
    }
}