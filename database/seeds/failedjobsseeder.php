<?php

use Illuminate\Database\Seeder;

class failedjobsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('failed_jobs')->insert([
            'id'=> 0


        ]);
        //
    }
}
