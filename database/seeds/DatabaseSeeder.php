<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person')->insert([
            'name' => 'Ahok'
        ]);
        DB::table('person')->insert([
            'name' => 'Djarot'
        ]);
        DB::table('person')->insert([
            'name' => 'Anies'
        ]);
        DB::table('person')->insert([
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

        $this->call(VisiMisiTableSeeder::class);

        DB::table('topics')->insert([
        	'id' => 1,
            'topic' => 'Pendidikan'
        ]);
        DB::table('topics')->insert([
        	'id' => 2,
            'topic' => 'Ekonomi'
        ]);
        DB::table('topics')->insert([
        	'id' => 3,
            'topic' => 'Lingkungan'
        ]);
        DB::table('topics')->insert([
            'id' => 4,
            'topic' => 'Sosial'
        ]);
        DB::table('topics')->insert([
            'id' => 5,
            'topic' => 'Budaya'
        ]);
        DB::table('topics')->insert([
            'id' => 6,
            'topic' => 'Kesehatan'
        ]);
        DB::table('topics')->insert([
            'id' => 7,
            'topic' => 'Sistem Politik'
        ]);
        DB::table('topics')->insert([
            'id' => 8,
            'topic' => 'Teknologi'
        ]);
        DB::table('topics')->insert([
            'id' => 9,
            'topic' => 'Kebangsaan'
        ]);

        DB::table('programs')->insert([
            'candidate_id' => 2,
            'title' => 'Ok Oce',
            'topic_id' => 2,
            'value' => 'Satu Pusat Kewirausahaan di setiap kecamatan. Program utamanya adalah pendampingan langsung dari wirausahawan berpengalaman.',
            'source' => '<a href="http://jakartamajubersama.com/ok-oce" target="_blank">jakartamajubersama, situs resmi tim sukses Anies-Sandi</a>'
        ]);
        DB::table('programs')->insert([
            'candidate_id' => 1,
            'title' => 'Jakarta Smart City',
            'topic_id' => 8,
            'value' => 'Smart Governance, Smart People, Smart Living, Smart Mobility, Smart Economy, dan Smart Environment',
            'source' => '<a href="https://ahokdjarot.id/program/optimalisasi-teknologi/jakarta-smart-city" target="_blank">AhokDjarot.id, situs resmi tim sukses Anies-Sandi</a>'
        ]);

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

        DB::table('testimonies')->insert([
        	'person_id' => 3,
        	'year_given' => 2017,
        	'voucher' => 'Rian Ernest',
            'testimony' => '...Di titik inilah saya lebih jauh mengenal sisi profesional Pak Anies. Mirip seperti yang saya lihat di Indonesia Mengajar, beliau sering menyampaikan pandangan atau gagasan pada level yang makro...',
        	'source_link' => 'http://kotaksuara.kompasiana.com/index.php/rianernest/catatan-jongos-dua-cagub-dki_58a19bcadf22bd10091f6c7b',
        	'source' => 'Catatan "Jongos" Dua Cagub DKI'
        ]);
        DB::table('testimonies')->insert([
        	'person_id' => 3,
        	'year_given' => 2017,
        	'voucher' => 'Goenawan Mohamad',
            'testimony' => '...Juga besarnya anggaran disiapkan dan diajukan di masa Moh. Nuh. Anies melanjutkan agenda ini, dan saya senang bekerja bersama dia: saya memimpin team profesional, dia aparat Kementerian...',
        	'source_link' => 'https://news.detik.com/berita/3444270/anies-dilaporkan-ke-kpk-gm-jelaskan-soal-frankfurt-book-fair',
        	'source' => 'Pembelaan kepada Anies atas Dugaan Penyimpangan Dana Acara Frankfurt Book Fair 2015'
        ]);
        DB::table('testimonies')->insert([
        	'person_id' => 3,
        	'year_given' => 2017,
        	'voucher' => 'Angga Putra Fidrian',
            'testimony' => '...Anies Baswedan memberikan pidato pelepasan kepada kami, anak-anak muda yang akan hidup selama 1 tahun di ujung Republik. “Jika ditanya apakah kalian dari pemerintah atau swasta, sampaikan dengan sopan, Bapak-Ibu Kami datang mewakili Negara...”',
        	'source_link' => 'http://anggaputrafidrian.com/makasihanies/',
        	'source' => 'Tidak Ada Ucapan Selain #MakasihAnies'
        ]);DB::table('testimonies')->insert([
        	'person_id' => 1,
        	'year_given' => 2016,
        	'voucher' => 'Puti Sinansari',
            'testimony' => '...beliau sebagai panutan karena saya melihat sendiri bagaimana kerasnya beliau bekerja dengan professional...',
        	'source_link' => 'https://freakflaterfly.blogspot.co.id/2016/03/ahok-leader-also-human.html',
        	'source' => '6 Bulan Magang di Kantor Gubernur DKI'
        ]);
        DB::table('testimonies')->insert([
        	'person_id' => 1,
        	'year_given' => 2017,
        	'voucher' => 'Rian Ernest',
            'testimony' => '...Alih-alih mengiyakan demi suara, Pak Ahok malah mentah-mentah menolak permintaan itu, karena menurut beliau tidaklah adil untuk warga lain yang tidak memilih Pak Ahok...',
        	'source_link' => 'http://kotaksuara.kompasiana.com/index.php/rianernest/catatan-jongos-dua-cagub-dki_58a19bcadf22bd10091f6c7b',
        	'source' => 'Catatan "Jongos" Dua Cagub DKI'
        ]);
        DB::table('testimonies')->insert([
        	'person_id' => 1,
        	'year_given' => 2017,
        	'voucher' => 'Jhonsar Lumbantoruan',
            'testimony' => '...Suka merepotin sekretariat komisi II DPR karena dia suka mengembalikan sisa uang perjalanan kunjungan kerja...',
        	'source_link' => 'http://pelitabatak.com/opini/Pengalaman-Jhonsar-Lumbantoruan-bersama-Ahok-di-DPR-RI',
        	'source' => 'Pengalaman Bersama Ahok di DPR RI'
        ]);
        DB::table('testimonies')->insert([
            'person_id' => 3,
            'year_given' => 2014,
            'voucher' => 'Rimawan Pradiptyo',
            'testimony' => '(Mengenai tim peneliti korupsi BPPC yang Anies bentuk tahun 1992)...Saya berkenalan sejak ospek... ...yang punya cengkeh harus jual ke BPPC Rp. 1,500, sementara BPPC menjual Rp. 14.000...',
            'source_link' => 'https://www.youtube.com/watch?v=MWI9VVeRk5w',
            'source' => 'Anies Baswedan - Kritis Sejak Muda Berani Sejak Lama'
        ]);


        DB::table('educations')->insert([
            'id' => 1,
            'person_id' => 1,
            'year_end' => 1977,
            'institution' => 'SD N 3 Gantung, Belitung',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);

        DB::table('careers')->insert([
            'id' => 1,
            'person_id' => 3,
            'year_start' => 2005,
            'institution' => 'The Indonesian Institute',
            'position' => 'Direktur Riset',
            'source' => 'aniesbaswedan.com',
            'source_link' => 'https://web.archive.org/web/20170131013428/http://aniesbaswedan.com/biografi-anies-baswedan'
        ]);

        DB::table('awards')->insert([
            'id' => 1,
            'person_id' => 1,
            'year_given' => 2006,
            'institution' => 'Majalah Tempo',
            'award' => 'Penghargaan 10 Tokoh yang Mengubah Indonesia',
            'source' => 'Detikcom',
            'source_link' => 'https://web.archive.org/web/20170130233408/https://news.detik.com/infografis/d-3319786/basuki-t-purnama-sang-petahana'
        ]);
    }
}
