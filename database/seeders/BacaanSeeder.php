<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bacaan;

class BacaanSeeder extends Seeder
{
    public function run(): void
    {
        $bacaans = [

            // 1. Berdiri Menghadap Kiblat (Niat)
            // Catatan HPT Muhammadiyah: niat cukup di dalam hati, tidak dilafalkan.
            [
                'gerakan_id' => 1,
                'urutan' => 1,
                'teks_arab' => null,
                'teks_latin' => null,
                'terjemahan' => 'Niat shalat dilakukan di dalam hati (tidak dilafalkan), sesuai kaidah bahwa amal itu tergantung niatnya.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 2. Takbiratul Ihram
            [
                'gerakan_id' => 2,
                'urutan' => 1,
                'teks_arab' => 'اَللهُ أَكْبَرُ',
                'teks_latin' => 'Allaahu Akbar',
                'terjemahan' => 'Allah Maha Besar.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 3. Bersedekap (Doa Iftitah)
            [
                'gerakan_id' => 3,
                'urutan' => 1,
                'teks_arab' => 'اَللّٰهُمَّ بَاعِدْ بَيْنِيْ وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ، اَللّٰهُمَّ نَقِّنِيْ مِنَ الْخَطَايَا كَمَا يُنَقَّى الثَّوْبُ الْأَبْيَضُ مِنَ الدَّنَسِ، اَللّٰهُمَّ اغْسِلْنِيْ مِنْ خَطَايَايَ بِالْمَاءِ وَالثَّلْجِ وَالْبَرَدِ',
                'teks_latin' => 'Allaahumma baa\'id bainii wa baina khathaayaaya kamaa baa\'adta bainal masyriqi wal maghrib. Allaahumma naqqinii minal khathaayaa kamaa yunaqqats tsaubul abyadhu minad danas. Allaahummaghsilnii min khathaayaaya bil maa\'i wats tsalji wal barad',
                'terjemahan' => 'Ya Allah, jauhkanlah antara aku dan kesalahan-kesalahanku sebagaimana Engkau menjauhkan antara timur dan barat. Ya Allah, bersihkanlah aku dari kesalahan-kesalahan sebagaimana kain putih dibersihkan dari kotoran. Ya Allah, cucilah aku dari kesalahan-kesalahanku dengan air, salju, dan embun.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 4. Al-Fatihah dan Surat Pendek
            [
                'gerakan_id' => 4,
                'urutan' => 1,
                'teks_arab' => 'بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ. اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَ. الرَّحْمٰنِ الرَّحِيْمِ. مٰلِكِ يَوْمِ الدِّيْنِ. إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِيْنُ. اِهْدِنَا الصِّرَاطَ الْمُسْتَقِيْمَ. صِرَاطَ الَّذِيْنَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوْبِ عَلَيْهِمْ وَلَا الضَّالِّيْنَ',
                'teks_latin' => 'Bismillaahir rahmaanir rahiim. Alhamdu lillaahi rabbil \'aalamiin. Ar rahmaanir rahiim. Maaliki yaumid diin. Iyyaaka na\'budu wa iyyaaka nasta\'iin. Ihdinash shiraathal mustaqiim. Shiraathal ladziina an\'amta \'alaihim ghairil maghdhuubi \'alaihim wa ladh dhaalliin.',
                'terjemahan' => 'Dengan nama Allah Yang Maha Pengasih, Maha Penyayang. Segala puji bagi Allah, Tuhan seluruh alam. Yang Maha Pengasih, Maha Penyayang. Yang menguasai hari pembalasan. Hanya kepada-Mu kami menyembah dan hanya kepada-Mu kami mohon pertolongan. Tunjukilah kami jalan yang lurus. (yaitu) jalan orang-orang yang telah Engkau beri nikmat kepadanya, bukan (jalan) mereka yang dimurkai, dan bukan (pula jalan) mereka yang sesat. (Dilanjutkan membaca surat/ayat Al-Qur\'an yang mudah dihafal, misalnya Al-Ikhlas).',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 5. Ruku'
            [
                'gerakan_id' => 5,
                'urutan' => 1,
                'teks_arab' => 'سُبْحَانَ رَبِّيَ الْعَظِيْمِ وَبِحَمْدِهِ',
                'teks_latin' => 'Subhaana rabbiyal \'azhiimi wa bihamdih (dibaca 3 kali)',
                'terjemahan' => 'Maha Suci Tuhanku Yang Maha Agung dan dengan memuji-Nya.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 6. I'tidal
            [
                'gerakan_id' => 6,
                'urutan' => 1,
                'teks_arab' => 'سَمِعَ اللّٰهُ لِمَنْ حَمِدَهُ',
                'teks_latin' => 'Sami\'allaahu liman hamidah',
                'terjemahan' => 'Allah Maha Mendengar bagi orang yang memuji-Nya.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],
            [
                'gerakan_id' => 6,
                'urutan' => 2,
                'teks_arab' => 'رَبَّنَا وَلَكَ الْحَمْدُ حَمْدًا كَثِيْرًا طَيِّبًا مُبَارَكًا فِيْهِ، مِلْءَ السَّمٰوَاتِ وَمِلْءَ الْأَرْضِ، وَمِلْءَ مَا شِئْتَ مِنْ شَيْءٍ بَعْدُ',
                'teks_latin' => 'Rabbanaa wa lakal hamdu hamdan katsiiran thayyiban mubaarakan fiih, mil\'as samaawaati wa mil\'al ardhi wa mil\'a maa syi\'ta min syai\'im ba\'du',
                'terjemahan' => 'Ya Tuhan kami, bagi-Mu segala puji, sebanyak-banyaknya, sebaik-baiknya, dan seberkah-berkahnya, sepenuh langit dan bumi, serta sepenuh apa saja yang Engkau kehendaki sesudah itu.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 7. Sujud Pertama
            [
                'gerakan_id' => 7,
                'urutan' => 1,
                'teks_arab' => 'سُبْحَانَ رَبِّيَ الْأَعْلٰى وَبِحَمْدِهِ',
                'teks_latin' => 'Subhaana rabbiyal a\'laa wa bihamdih (dibaca 3 kali)',
                'terjemahan' => 'Maha Suci Tuhanku Yang Maha Tinggi dan dengan memuji-Nya.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 8. Duduk di Antara Dua Sujud
            [
                'gerakan_id' => 8,
                'urutan' => 1,
                'teks_arab' => 'رَبِّ اغْفِرْ لِيْ وَارْحَمْنِيْ وَاجْبُرْنِيْ وَارْفَعْنِيْ وَارْزُقْنِيْ وَاهْدِنِيْ وَعَافِنِيْ وَاعْفُ عَنِّيْ',
                'teks_latin' => 'Rabbighfir lii warhamnii wajburnii warfa\'nii warzuqnii wahdinii wa\'aafinii wa\'fu \'annii',
                'terjemahan' => 'Ya Tuhanku, ampunilah aku, kasihanilah aku, cukupkanlah kekuranganku, angkatlah derajatku, berilah aku rezeki, berilah aku petunjuk, berilah aku kesehatan, dan maafkanlah aku.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 9. Sujud Kedua
            [
                'gerakan_id' => 9,
                'urutan' => 1,
                'teks_arab' => 'سُبْحَانَ رَبِّيَ الْأَعْلٰى وَبِحَمْدِهِ',
                'teks_latin' => 'Subhaana rabbiyal a\'laa wa bihamdih (dibaca 3 kali)',
                'terjemahan' => 'Maha Suci Tuhanku Yang Maha Tinggi dan dengan memuji-Nya.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 10. Berdiri Rakaat Berikutnya (Takbir Intiqal)
            [
                'gerakan_id' => 10,
                'urutan' => 1,
                'teks_arab' => 'اَللهُ أَكْبَرُ',
                'teks_latin' => 'Allaahu Akbar',
                'terjemahan' => 'Allah Maha Besar (diucapkan setiap kali bangkit atau berpindah gerakan).',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 11. Tasyahud Awal
            [
                'gerakan_id' => 11,
                'urutan' => 1,
                'teks_arab' => 'اَلتَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ الطَّيِّبَاتُ لِلّٰهِ، اَلسَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللّٰهِ وَبَرَكَاتُهُ، اَلسَّلَامُ عَلَيْنَا وَعَلٰى عِبَادِ اللّٰهِ الصَّالِحِيْنَ، أَشْهَدُ أَنْ لَا إِلٰهَ إِلَّا اللّٰهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا رَسُوْلُ اللّٰهِ',
                'teks_latin' => 'Attahiyyaatul mubaarakaatush shalawaatuth thayyibaatu lillaah. Assalaamu \'alaika ayyuhan nabiyyu wa rahmatullaahi wa barakaatuh. Assalaamu \'alainaa wa \'alaa \'ibaadillaahish shaalihiin. Asyhadu allaa ilaaha illallaah, wa asyhadu anna Muhammadar rasuulullaah.',
                'terjemahan' => 'Segala kehormatan, keberkahan, kebahagiaan, dan kebaikan hanya milik Allah. Semoga kesejahteraan, rahmat Allah, dan berkah-Nya tercurah kepadamu, wahai Nabi. Semoga kesejahteraan tercurah pula kepada kita semua dan kepada hamba-hamba Allah yang saleh. Aku bersaksi bahwa tidak ada tuhan selain Allah, dan aku bersaksi bahwa Muhammad adalah utusan Allah.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 12. Tasyahud Akhir
            [
                'gerakan_id' => 12,
                'urutan' => 1,
                'teks_arab' => 'اَلتَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ الطَّيِّبَاتُ لِلّٰهِ، اَلسَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللّٰهِ وَبَرَكَاتُهُ، اَلسَّلَامُ عَلَيْنَا وَعَلٰى عِبَادِ اللّٰهِ الصَّالِحِيْنَ، أَشْهَدُ أَنْ لَا إِلٰهَ إِلَّا اللّٰهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا رَسُوْلُ اللّٰهِ',
                'teks_latin' => 'Attahiyyaatul mubaarakaatush shalawaatuth thayyibaatu lillaah. Assalaamu \'alaika ayyuhan nabiyyu wa rahmatullaahi wa barakaatuh. Assalaamu \'alainaa wa \'alaa \'ibaadillaahish shaalihiin. Asyhadu allaa ilaaha illallaah, wa asyhadu anna Muhammadar rasuulullaah.',
                'terjemahan' => 'Segala kehormatan, keberkahan, kebahagiaan, dan kebaikan hanya milik Allah. Semoga kesejahteraan, rahmat Allah, dan berkah-Nya tercurah kepadamu, wahai Nabi. Semoga kesejahteraan tercurah pula kepada kita semua dan kepada hamba-hamba Allah yang saleh. Aku bersaksi bahwa tidak ada tuhan selain Allah, dan aku bersaksi bahwa Muhammad adalah utusan Allah.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],
            [
                'gerakan_id' => 12,
                'urutan' => 2,
                'teks_arab' => 'اَللّٰهُمَّ صَلِّ عَلٰى مُحَمَّدٍ وَعَلٰى آلِ مُحَمَّدٍ، كَمَا صَلَّيْتَ عَلٰى إِبْرَاهِيْمَ وَعَلٰى آلِ إِبْرَاهِيْمَ، إِنَّكَ حَمِيْدٌ مَجِيْدٌ. اَللّٰهُمَّ بَارِكْ عَلٰى مُحَمَّدٍ وَعَلٰى آلِ مُحَمَّدٍ، كَمَا بَارَكْتَ عَلٰى إِبْرَاهِيْمَ وَعَلٰى آلِ إِبْرَاهِيْمَ، إِنَّكَ حَمِيْدٌ مَجِيْدٌ',
                'teks_latin' => 'Allaahumma shalli \'alaa Muhammad, wa \'alaa aali Muhammad, kamaa shallaita \'alaa Ibraahiim, wa \'alaa aali Ibraahiim, innaka hamiidum majiid. Allaahumma baarik \'alaa Muhammad, wa \'alaa aali Muhammad, kamaa baarakta \'alaa Ibraahiim, wa \'alaa aali Ibraahiim, innaka hamiidum majiid.',
                'terjemahan' => 'Ya Allah, limpahkanlah shalawat kepada Nabi Muhammad dan keluarganya, sebagaimana Engkau telah melimpahkan shalawat kepada Nabi Ibrahim dan keluarganya. Sesungguhnya Engkau Maha Terpuji lagi Maha Mulia. Ya Allah, limpahkanlah berkah kepada Nabi Muhammad dan keluarganya, sebagaimana Engkau telah melimpahkan berkah kepada Nabi Ibrahim dan keluarganya. Sesungguhnya Engkau Maha Terpuji lagi Maha Mulia.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 13. Salam
            [
                'gerakan_id' => 13,
                'urutan' => 1,
                'teks_arab' => 'اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللّٰهِ',
                'teks_latin' => 'Assalaamu \'alaikum wa rahmatullaah',
                'terjemahan' => 'Semoga keselamatan dan rahmat Allah tercurah kepada kalian (diucapkan sambil menoleh ke kanan, kemudian ke kiri).',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

        ];

        foreach ($bacaans as $bacaan) {
            Bacaan::create($bacaan);
        }
    }
}