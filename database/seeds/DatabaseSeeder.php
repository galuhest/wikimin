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

        $this->call(TopicProgramTableSeeder::class);

        $this->call(IssueTableSeeder::class);        

        $this->call(TestimonyTableSeeder::class);

        $this->call(EducationTableSeeder::class);

        $this->call(CareerTableSeeder::class);

        $this->call(AwardTableSeeder::class);
        
    }
}
