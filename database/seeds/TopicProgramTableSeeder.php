<?php

use Illuminate\Database\Seeder;

class TopicProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
