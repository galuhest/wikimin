<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('person')->insert([
        	'id' => 1,
            'name' => 'Ahok'
        ]);
        DB::table('person')->insert([
        	'id' => 2,
            'name' => 'Djarot'
        ]);
        DB::table('person')->insert([
        	'id' => 3,
            'name' => 'Anies'
        ]);
        DB::table('person')->insert([
        	'id' => 4,
            'name' => 'Sandi'
        ]);
        DB::table('candidates')->insert([
        	'id' => 1,
            'head_id' => 1,
            'vice_id' => 2
        ]);
        DB::table('candidates')->insert([
        	'id' => 2,
            'head_id' => 3,
            'vice_id' => 4
        ]);

        DB::table('topics')->insert([
        	'id' => 1,
            'topic' => 'Pendidikan'
        ]);
        DB::table('topics')->insert([
        	'id' => 2,
            'topic' => 'Rekam Jejak Politikus'
        ]);
        DB::table('topics')->insert([
        	'id' => 3,
            'topic' => 'Lokalisasi'
        ]);

        DB::table('issues')->insert([
        	'id' => 1,
        	'topic_id' => 1,
        	'person_id' => 3,
        	'value' => "Cara berpikir yang mengatakan kekayaan bangsa adalah minyak, gas, tambang, adalah cara berpikir penjajah kolonial. Kekayaan terbesar sebuah bangsa adalah manusianya",
        	'source_link' => "http://www.kompasiana.com/doniriwayanto/mitos-dalam-statemen-baswedan_54f7075ea33311972b8b45be",
        	"source" => "Sebagai Moderator di Debat I Capres 2014"
        ]);
        DB::table('issues')->insert([
        	'id' => 2,
        	'topic_id' => 2,
        	'person_id' => 1,
        	'value' => "...Tapi untungnya semua kandidat memiliki rekam jejak. Ini menarik. Yusril (Ihza Mahendra) misalnya. Dia itu pernah jadi menteri dan ketua partai. Begitu juga dengan Sandiaga Uno, Ridwan Kamil, yang bisa dilihat riwayatnya di internet. Data soal mereka jelas. Bisa dilihat konsisten atau tidak...",
        	'source_link' => "https://beritagar.id/artikel/bincang/wawancara-ahok-saya-ini-pendukung-lokalisasi-lo-lupa",
        	"source" => "Wawancara dengan Beritagar.id"
        ]);
        DB::table('issues')->insert([
        	'id' => 3,
        	'topic_id' => 3,
        	'person_id' => 1,
        	'value' => "...kalau gue dikasih izin, gue mau bikin apartemen, kemudian kasih pelacur di dalamnya, yang akan gue kontrol dengan baik...",
        	'source_link' => "https://beritagar.id/artikel/bincang/wawancara-ahok-saya-ini-pendukung-lokalisasi-lo-lupa",
        	"source" => "Wawancara dengan Beritagar.id"
        ]);

        DB::table('testimonies')->insert([
        	'id' => 1,
        	'person_id' => 3,
        	'year_given' => 2017,
        	'voucher' => 'Rian Ernest',
        	'source_link' => 'http://kotaksuara.kompasiana.com/index.php/rianernest/catatan-jongos-dua-cagub-dki_58a19bcadf22bd10091f6c7b',
        	'source' => 'Catatan "Jongos" Dua Cagub DKI'
        ]);
        DB::table('testimonies')->insert([
        	'id' => 2,
        	'person_id' => 3,
        	'year_given' => 2017,
        	'voucher' => 'Goenawan Mohamad',
        	'source_link' => 'https://news.detik.com/berita/3444270/anies-dilaporkan-ke-kpk-gm-jelaskan-soal-frankfurt-book-fair',
        	'source' => 'Pembelaan kepada Anies atas Dugaan Penyimpangan Dana Acara Frankfurt Book Fair 2015'
        ]);
        DB::table('testimonies')->insert([
        	'id' => 3,
        	'person_id' => 3,
        	'year_given' => 2017,
        	'voucher' => 'Angga Putra Fidrian',
        	'source_link' => 'http://anggaputrafidrian.com/makasihanies/',
        	'source' => 'Tidak Ada Ucapan Selain #MakasihAnies'
        ]);DB::table('testimonies')->insert([
        	'id' => 4,
        	'person_id' => 1,
        	'year_given' => 2016,
        	'voucher' => 'Puti Sinansari',
        	'source_link' => 'https://freakflaterfly.blogspot.co.id/2016/03/ahok-leader-also-human.html',
        	'source' => '6 Bulan Magang di Kantor Gubernur DKI'
        ]);
        DB::table('testimonies')->insert([
        	'id' => 5,
        	'person_id' => 1,
        	'year_given' => 2017,
        	'voucher' => 'Rian Ernest',
        	'source_link' => 'http://kotaksuara.kompasiana.com/index.php/rianernest/catatan-jongos-dua-cagub-dki_58a19bcadf22bd10091f6c7b',
        	'source' => 'Catatan "Jongos" Dua Cagub DKI'
        ]);
        DB::table('testimonies')->insert([
        	'id' => 6,
        	'person_id' => 1,
        	'year_given' => 2017,
        	'voucher' => 'Jhonsar Lumbantoruan',
        	'source_link' => 'http://pelitabatak.com/opini/Pengalaman-Jhonsar-Lumbantoruan-bersama-Ahok-di-DPR-RI',
        	'source' => 'Pengalaman Bersama Ahok di DPR RI'
        ]);
    }
}
