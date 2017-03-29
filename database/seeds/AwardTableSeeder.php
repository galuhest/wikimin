<?php

use Illuminate\Database\Seeder;

class AwardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        DB::table('awards')->insert([
            'person_id' => 1,
            'year_given' => 2006,
            'institution' => 'Majalah Tempo',
            'award' => 'Penghargaan 10 Tokoh yang Mengubah Indonesia',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20170130233408/https://news.detik.com/infografis/d-3319786/basuki-t-purnama-sang-petahana'
        ]);
        DB::table('awards')->insert([
            'person_id' => 1,
            'year_given' => 2006,
            'institution' => 'Koalisi Kebersamaan Tiga Pilar Kemitraan',
            'award' => 'Tokoh Antikorupsi',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20170130233408/https://news.detik.com/infografis/d-3319786/basuki-t-purnama-sang-petahana'
        ]);
        DB::table('awards')->insert([
            'person_id' => 1,
            'year_given' => 2013,
            'institution' => 'Anugrah Seputar Indonesia',
            'award' => 'Tokoh Kontroversial',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20170130233408/https://news.detik.com/infografis/d-3319786/basuki-t-purnama-sang-petahana'
        ]);
        DB::table('awards')->insert([
            'person_id' => 1,
            'year_given' => 2013,
            'institution' => 'Bung Hatta Anti Corruption Award 2013',
            'award' => 'Toko Antikorupsi',
            'source' => 'Kompas.com',
            'source_link' => 'http://web.archive.org/web/20131018235659/http://megapolitan.kompas.com/read/2013/10/16/1727073/Ahok.Raih.Penghargaan.Bung.Hatta.2013'
        ]);
        DB::table('awards')->insert([
            'person_id' => 1,
            'year_given' => 2016,
            'institution' => 'Gus Dur Award',
            'award' => 'Tokoh Politik Terbaik',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20170130233408/https://news.detik.com/infografis/d-3319786/basuki-t-purnama-sang-petahana'
        ]);






        DB::table('awards')->insert([
            'person_id' => 2,
            'year_given' => 2007,
            'institution' => 'Pemerintah RI',
            'award' => 'Penghargaan Upakarti',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20161023043435/https://news.detik.com/infografis/d-3320106/djarot-saiful-hidayat-penata-birokrasi'
        ]);
        DB::table('awards')->insert([
            'person_id' => 2,
            'year_given' => 2008,
            'institution' => 'Majalah Tempo',
            'award' => '10 Kepala Daerah Terbaik',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20161023043435/https://news.detik.com/infografis/d-3320106/djarot-saiful-hidayat-penata-birokrasi'
        ]);
        DB::table('awards')->insert([
            'person_id' => 2,
            'year_given' => 2008,
            'institution' => 'Komite Pemantauan Pelaksanaan Otonomi Daerah',
            'award' => 'Tokoh Politik Terbaik',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20161023043435/https://news.detik.com/infografis/d-3320106/djarot-saiful-hidayat-penata-birokrasi'
        ]);
        DB::table('awards')->insert([
            'person_id' => 2,
            'year_given' => 2008,
            'institution' => 'Anugrah Adiputra',
            'award' => 'Penghargaan Terbaik Citizens Charter Bidang Kesehatan',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20161023043435/https://news.detik.com/infografis/d-3320106/djarot-saiful-hidayat-penata-birokrasi'
        ]);
        DB::table('awards')->insert([
            'person_id' => 2,
            'year_given' => 2008,
            'institution' => 'Provinsi Jawa Timur',
            'award' => 'Penghargaan Inovasi Pembangunan Daerah',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20161023043435/https://news.detik.com/infografis/d-3320106/djarot-saiful-hidayat-penata-birokrasi'
        ]);
        DB::table('awards')->insert([
            'person_id' => 2,
            'year_given' => 2010,
            'institution' => 'Provinsi Jawa Timur',
            'award' => 'Peringkat Pertama dalam Penerapan E-Government',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20161023043435/https://news.detik.com/infografis/d-3320106/djarot-saiful-hidayat-penata-birokrasi'
        ]);






		DB::table('awards')->insert([
            'person_id' => 3,
            'year_given' => 1998,
            'institution' => 'USAID – USIA – NAFSA',
            'award' => 'ASEAN Student Award',
            'source' => 'Aniesbaswedan.com',
            'source_link' => 'https://web.archive.org/web/20170131013428/http://aniesbaswedan.com/biografi-anies-baswedan'
        ]);
        DB::table('awards')->insert([
            'person_id' => 3,
            'year_given' => 2007,
            'institution' => 'Majalah Foreign Policy',
            'award' => 'Salah satu dari 100 Intelektual Publik Dunia',
            'source' => 'Aniesbaswedan.com',
            'source_link' => 'https://web.archive.org/web/20170131013428/http://aniesbaswedan.com/biografi-anies-baswedan'
        ]);
        DB::table('awards')->insert([
            'person_id' => 3,
            'year_given' => 2008,
            'institution' => 'Majalah Foresight',
            'award' => 'Salah satu dari 20 Orang Penting di 20 Tahun Mendatang',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20161023034644/http://news.detik.com/infografis/d-3319862/anies-baswedan-intelektual-yang-ingin-benahi-dki'
        ]);
        DB::table('awards')->insert([
            'person_id' => 3,
            'year_given' => 2010,
            'institution' => 'Royal Islamic Strategic Centre, Yordania',
            'award' => '500 Muslim Berpengaruh Dunia',
            'source' => 'Aniesbaswedan.com',
            'source_link' => 'https://web.archive.org/web/20170131013428/http://aniesbaswedan.com/biografi-anies-baswedan'
        ]);




		
		DB::table('awards')->insert([
            'person_id' => 4,
            'year_given' => 2008,
            'institution' => 'Entreprise Asia',
            'award' => 'Entrepreneur Indonesia Tahun Ini',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20161106072845/http://news.detik.com/infografis/d-3320169/sandiaga-uno-the-runner--the-entrepreneur'
        ]);
        DB::table('awards')->insert([
            'person_id' => 4,
            'year_given' => 2011,
            'institution' => 'Majalah Forbes',
            'award' => 'Orang Terkaya Peringkat 37',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20161106072845/http://news.detik.com/infografis/d-3320169/sandiaga-uno-the-runner--the-entrepreneur'
        ]);
        DB::table('awards')->insert([
            'person_id' => 4,
            'year_given' => 2016,
            'institution' => 'George Washington University',
            'award' => 'Distinguished Research Professor Bidang Entrepreneurship',
            'source' => 'Jakartamajubersama.com',
            'source_link' => 'http://web.archive.org/web/20170328050459/http://jakartamajubersama.com/biografi-sandiaga-uno'
        ]);

    }
}
