<?php

use Illuminate\Database\Seeder;

class IssueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('issues')->insert([
        	'topic_id' => 1,
        	'person_id' => 3,
            'summary' => "SDM kekayaan utama",
        	'value' => "...Cara berpikir yang mengatakan kekayaan bangsa adalah minyak, gas, tambang, adalah cara berpikir penjajah kolonial. Kekayaan terbesar sebuah bangsa adalah manusianya...",
        	'source_link' => "http://www.kompasiana.com/doniriwayanto/mitos-dalam-statemen-baswedan_54f7075ea33311972b8b45be",
        	"source" => "Sebagai Moderator di Debat I Capres 2014"
        ]);
        DB::table('issues')->insert([
        	'topic_id' => 7,
        	'person_id' => 1,
            'summary' => 'Transparansi rekam jejak',
        	'value' => "...Tapi untungnya semua kandidat memiliki rekam jejak. Ini menarik. Yusril (Ihza Mahendra) misalnya. Dia itu pernah jadi menteri dan ketua partai. Begitu juga dengan Sandiaga Uno, Ridwan Kamil, yang bisa dilihat riwayatnya di internet. Data soal mereka jelas. Bisa dilihat konsisten atau tidak...",
        	'source_link' => "https://beritagar.id/artikel/bincang/wawancara-ahok-saya-ini-pendukung-lokalisasi-lo-lupa",
        	"source" => "Wawancara dengan Beritagar.id"
        ]);
        DB::table('issues')->insert([
        	'topic_id' => 4,
        	'person_id' => 1,
            'summary' => 'Lokalisasi pelacuran profesional',
        	'value' => "...kalau gue dikasih izin, gue mau bikin apartemen, kemudian kasih pelacur di dalamnya, yang akan gue kontrol dengan baik...",
        	'source_link' => "https://www.youtube.com/watch?v=ReZL3EIEHe8",
        	"source" => "Wawancara dengan Beritagar.id"
        ]);
        DB::table('issues')->insert([
            'topic_id' => 4,
            'person_id' => 3,
            'summary' => 'Mayoritas-minoritas',
            'value' => "...Indonesia hadir tidak untuk melindungi mayoritas, bukan untuk melindungi minoritas....",
            'source_link' => "https://beritagar.id/artikel/bincang/wawancara-ahok-saya-ini-pendukung-lokalisasi-lo-lupa",
            "source" => "Indonesia Kita Semua: di Balik Layar Deklarasi Konvensi Demokrat"
        ]);
    }
}
