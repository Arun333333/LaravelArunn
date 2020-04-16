<?php

use Illuminate\Database\Seeder;

class schoolsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'id'=> 0


        ]);
        //
    }
}
