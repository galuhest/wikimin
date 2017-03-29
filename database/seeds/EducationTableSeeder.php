<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educations')->insert([
            'person_id' => 1,
            'year_end' => 1977,
            'institution' => 'SD N 3 Gantung, Belitung',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 1,
            'year_end' => 1981,
            'institution' => 'SMP Negeri Gantung',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 1,
            'year_end' => 1984,
            'institution' => 'SMA Swasta III PSKD, Jakarta',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 1,
            'year_end' => 1990,
            'institution' => 'Teknik Geologi, Universitas Trisakti, Jakarta.',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 1,
            'year_end' => 1994,
            'institution' => 'Magister Manajemen, Sekolah Tinggi Manajemen Prasetya Mulya',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);







		DB::table('educations')->insert([
            'person_id' => 2,
            'year_end' => 1977,
            'institution' => 'SMP N 4 Surabaya',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 2,
            'year_end' => 1981,
            'institution' => 'SMA Taruna Nusa Harapan',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 2,
            'year_end' => 1986,
            'institution' => 'Sarjana Administrasi Pemerintahan Umum, Universitas Brawijaya, Malang',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 2,
            'year_end' => 1991,
            'institution' => 'Pasca Sarjana, Administrasi Negara, Universitas Gadjah Mada, Yogyakarta',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);






        DB::table('educations')->insert([
            'person_id' => 3,
            'year_end' => 1992,
            'institution' => 'SMA N 2 Yogyakarta',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 3,
            'year_end' => 1995,
            'institution' => 'Ilmu Manajemen, Universitas Gadjah Mada',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 3,
            'year_end' => 1998,
            'institution' => 'Master of Public Management, University of Maryland, USA',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 3,
            'year_end' => 2007,
            'institution' => 'Doctor of Philosophy, Political Science, Northern Illinois University ',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);






        DB::table('educations')->insert([
            'person_id' => 4,
            'year_end' => 1987,
            'institution' => 'SMA Swasta Pangudi Luhur',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 4,
            'year_end' => 1990,
            'institution' => 'Bachelor of Business Administration, Wichita State University, USA',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);
        DB::table('educations')->insert([
            'person_id' => 4,
            'year_end' => 1992,
            'institution' => 'Master of Business Administration, George Washington University',
            'source' => 'Scan Ijazah dari KPU',
            'source_link' => 'https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/'
        ]);



    }
}
