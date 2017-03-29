<?php

use Illuminate\Database\Seeder;

class TestimonyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
