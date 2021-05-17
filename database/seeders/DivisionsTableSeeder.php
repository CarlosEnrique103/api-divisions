<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //DB::table('articles')->truncate();

        \App\Models\Division::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 40; $i++) {
            DB::table('divisions')->insert([
                'name' => $faker->name.' '.$i,
                'collaborators' => $i,
                'name_ambassador'=>$faker->name,
                'nivel'=>1
            ]);
        }
    }
}
