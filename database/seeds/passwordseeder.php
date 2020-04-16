<?php

use Illuminate\Database\Seeder;

class passwordseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('password_resets')->insert([
            'id'=> 0


        ]);
        //
    }
}
