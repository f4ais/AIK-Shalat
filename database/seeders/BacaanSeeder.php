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
                'teks_arab' => 'سُبْحَانَكَ اللّهُمَّ رَبَّناَ وَبِحَمْدِكَ اَللّهُمَّ اغْفِرْلِى',
                'teks_latin' => 'Subhaanaka allaahuma robbanaa wabihamdika allaahumaghfirlii.',
                'terjemahan' => 'Maha suci Engkau, ya Allah, dan dengan memuji kepada Engkau, ya Allah, aku memohon ampun.',
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
                'teks_arab' => 'سُبْحَانَكَ اللهُمَّ رَبَّنَا وَبِحَمْدِكَ اللهُمَّ اغْفِرْلِيْ',
                'teks_latin' => 'Subhaanakallah humma rabbanaa wa bihamdikallahummaghfirlii',
                'terjemahan' => 'Maha suci Engkau, Ya Allah, dan dengan memuji kepada Engkau, Ya Allah, aku memohon ampun.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 8. Duduk di Antara Dua Sujud
            [
                'gerakan_id' => 8,
                'urutan' => 1,
                'teks_arab' => 'اَللّهُمَ اغْفِرْلِيْ وارْحَمنِيْ وَاجْبُرْنِيْ وَاهْدِنِيْ وَارْزُقْنِيْ',
                'teks_latin' => 'Allaahummaghfirlii warhamnii wajburnii wahdinii warzuqnii',
                'terjemahan' => 'Ya Allah, ampunilah aku, belas kasihanilah aku, cukupilah aku, tunjukilah aku dan berikanlah rezeki kepadaku',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 9. Sujud Kedua
            [
                'gerakan_id' => 9,
                'urutan' => 1,
                'teks_arab' => 'سُبْحَانَكَ اللهُمَّ رَبَّنَا وَبِحَمْدِكَ اللهُمَّ اغْفِرْلِيْ',
                'teks_latin' => 'Subhaanakallah humma rabbanaa wa bihamdikallahummaghfirlii',
                'terjemahan' => 'Maha suci Engkau, Ya Allah, dan dengan memuji kepada Engkau, Ya Allah, aku memohon ampun.  ',
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
                'teks_arab' => 'اَلتَّحِيَّاتُ لِلّهِ وَالصَّلَوَاتُ وَالطَّيِّباَتُ. اَلسَّلاَمُ عَلَيْكَ أَيُّهاَ النَّبِيُّوَرَحْمَةُ اللهِ وَبَرَكاَتُهُ. اَلسَّلاَمُ عَلَيْناَ وَعَلَى عِباَدِاللهِ الصَّالِحِيْنَأَشْهَدُ اَنْ لاَاِلَهَ اِلاَّ اللهِ وَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُوْلُهُ',
                'teks_latin' => 'Attahiyyaatu lillaahi washsholawaatu waththoyyibaat. Assalaamu ‘alaika ayyuhannabiyyu warohmatullaahi wabarokaatuh. Assalaamu’alainaa wa’ala‘ibaadillaahi shshoolihiin. Asyhadu anlaa ilaaha illallaah waasyhadu annamuhammadan ‘abduhu warosuuluh.',
                'terjemahan' => 'Segala kehormatan, kebahagiaan dan kebagusan adalah kepunyaan Allah, Semoga keselamatan bagi Engkau, ya Nabi Muhammad, beserta rahmat dan kebahagiaan Allah. Mudah-mudahan keselamatan juga bagi kita sekalian dan hamba-hamba Allah yang baik-baik. Aku bersaksi bahwa tiada Tuhan melainkan Allah dan aku bersaksi bahwa Muhammad itu hamba Allah dan utusan-Nya utusan-Nya.',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],

            // 12. Tasyahud Akhir
            [
                'gerakan_id' => 12,
                'urutan' => 1,
                'teks_arab' => 'اَلتَّحِيَّاتُ لِلّهِ وَالصَّلَوَاتُ وَالطَّيِّباَتُ. اَلسَّلاَمُ عَلَيْكَ أَيُّهاَ النَّبِيُّوَرَحْمَةُ اللهِ وَبَرَكاَتُهُ. اَلسَّلاَمُ عَلَيْناَ وَعَلَى عِباَدِاللهِ الصَّالِحِيْنَأَشْهَدُ اَنْ لاَاِلَهَ اِلاَّ اللهِ وَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُوْلُهُ',
                'teks_latin' => 'Attahiyyaatu lillaahi washsholawaatu waththoyyibaat. Assalaamu ‘alaika ayyuhannabiyyu warohmatullaahi wabarokaatuh. Assalaamu’alainaa wa’ala‘ibaadillaahi shshoolihiin. Asyhadu anlaa ilaaha illallaah waasyhadu annamuhammadan ‘abduhu warosuuluh.',
                'terjemahan' => 'Segala kehormatan, kebahagiaan dan kebagusan adalah kepunyaan Allah, Semoga keselamatan bagi Engkau, ya Nabi Muhammad, beserta rahmat dan kebahagiaan Allah. Mudah-mudahan keselamatan juga bagi kita sekalian dan hamba-hamba Allah yang baik-baik. Aku bersaksi bahwa tiada Tuhan melainkan Allah dan aku bersaksi bahwa Muhammad itu hamba Allah dan utusan-Nya utusan-Nya',
                'audio_url' => null,
                'sumber' => 'HPT Muhammadiyah',
            ],
            [
                'gerakan_id' => 12,
                'urutan' => 2,
                'teks_arab' => '
للَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ ، وَعَلَى آلِ مُحَمَّدٍ ، كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ ، إِنَّكَ حَمِيدٌ مَجِيدٌ ، اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ ، وَعَلَى آلِ مُحَمَّدٍ ، كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ ، وَعَلَى آلِ إِبْرَاهِيمَ ، إِنَّكَ حَمِيدٌ مَجِيدٌ',
                'teks_latin' => 'Allahumma sholli ‘ala Muhammad wa ‘ala aali Muhammad kamaa shollaita ‘ala Ibroohim wa ‘ala aali Ibrohim, innaka hamidun majiid. Allahumma baarik ‘ala Muhammad wa ‘ala aali Muhammad kamaa baarokta ‘ala Ibrohim wa ‘ala aali Ibrohimm innaka hamidun majiid.',
                'terjemahan' => 'Ya Allah, semoga shalawat tercurah kepada Muhammad dan keluarga Muhammad. Seperti rahmat yang tercurah pada Ibrahim dan keluarga Ibrahim. Dan limpahilah berkah atas Nabi Muhammad beserta para keluarganya. Seperti berkah yang Engkau berikan kepada Nabi Ibrahim dan keluarganya. Sesungguhnya Engkau Maha Terpuji lagi Maha Mulia di seluruh alam.',
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