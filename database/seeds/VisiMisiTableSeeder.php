<?php

use Illuminate\Database\Seeder;

class VisiMisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visions')->insert([
            'id' => 1,
            'candidate_id' => 1,
            'value' => 'Jakarta sebagai etalase kota Indonesia yang modern, tertata rapi, dan manusiawi, dan fokus pada pembangunan manusia seutuhnya dengan kepemimpinan yang bersih, transparan, dan profesional.',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_Visi-Misi_1_.pdf/',
            'source' => 'KPU'
        ]);
        DB::table('visions')->insert([
            'id' => 2,
            'candidate_id' => 2,
            'value' => 'Jakarta kota maju dan beradab dengan seluruh warga merasakan keberadaban, keadilan dan kesejahteraan.',
            'source_link' => 'https://kpujakarta.go.id/file_lampiran/VISI%20MISI%20ANIES%20-%20SANDIAGA.pdf',
            'source' => 'KPU'
        ]);

        DB::table('missions')->insert([
        	'candidate_id' => 1,
        	'value' => 'Mewujudkan pemerintahan yang bebas Korupsi, Kolusi, dan Nepotisme (KKN), terbuka, dan melayani warga.',
        	'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_Visi-Misi_1_.pdf/',
            'source' => 'KPU'
        ]);
        DB::table('missions')->insert([
        	'candidate_id' => 1,
        	'value' => 'Menjamin terpenuhinya kebutuhan dasar warga, yaitu jaminan kesehatan, jaminan pendidikan, hunian yang layak, bahan pangan yang terjangkau, transportasi publik yang ekonomis, dan lapangan pekerjaan serta usaha agar seluruh warga berkesempatan memperoleh kehidupan yang lebih baik sehingga Indeks Kebahagiaan kota Jakarta menjadi salah satu yang tertinggi di antara kota-kota di dunia.',
        	'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_Visi-Misi_1_.pdf/',
            'source' => 'KPU'
        ]);
        DB::table('missions')->insert([
        	'candidate_id' => 1,
        	'value' => 'Menciptakan sumber daya manusia yang tangguh lahir dan batin, kompeten, dan berdaya saing global dengan Indeks Pembangunan Manusia yang setara dengan kota-kota maju di dunia.',
        	'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_Visi-Misi_1_.pdf/',
            'source' => 'KPU'
        ]);
        DB::table('missions')->insert([
        	'candidate_id' => 1,
        	'value' => 'Menata kota sesuai perubahan zaman untuk mendukung kemajuan ekonomi, keberlangsungan lingkungan, dan kehidupan sosial budaya warga.',
        	'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_Visi-Misi_1_.pdf/',
            'source' => 'KPU'
        ]);
        DB::table('missions')->insert([
        	'candidate_id' => 1,
        	'value' => 'Membangun kehidupan kota yang berbasis teknologi dan berinfrastruktur kelas dunia dengan warga yang berketuhanan, berbudaya, bergotong royong, berwawasan, toleran, partisipatif, dan inovatif.',
        	'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_Visi-Misi_1_.pdf/',
            'source' => 'KPU'
        ]);
        DB::table('missions')->insert([
        	'candidate_id' => 2,
        	'value' => 'Membangun manusia Jakarta menjadi warga yang berdaya dengan menghadirkan kepemimpinan HUMANIS dan MENGAYOMI, penggerak birokrasi yang efektif, menjaga stabilitas dan keterjangkauan harga bahan pokok, membangun sektor kesehatan, pendidikan, kebudayaan serta menyelesaikan masalah-masalah sosial.',
        	'source_link' => 'https://kpujakarta.go.id/file_lampiran/VISI%20MISI%20ANIES%20-%20SANDIAGA.pdf',
            'source' => 'KPU'
        ]);
        DB::table('missions')->insert([
        	'candidate_id' => 2,
        	'value' => 'Membangun lingkungan kota Jakarta secara berkelanjutan dengan perencanaan yang memperhatikan daya dukung lingkungan dan sosial.',
        	'source_link' => 'https://kpujakarta.go.id/file_lampiran/VISI%20MISI%20ANIES%20-%20SANDIAGA.pdf',
            'source' => 'KPU'
        ]);
        DB::table('missions')->insert([
        	'candidate_id' => 2,
        	'value' => 'Membangun kesejahteraan dengan menciptakan lapangan kerja, pembangunan infrastruktur, dan penanggulangan masalah mobilitas warga kota.',
        	'source_link' => 'https://kpujakarta.go.id/file_lampiran/VISI%20MISI%20ANIES%20-%20SANDIAGA.pdf',
            'source' => 'KPU'
        ]);
    }
}
