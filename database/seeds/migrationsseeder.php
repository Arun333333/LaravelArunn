<?php

use Illuminate\Database\Seeder;

class migrationsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('migrations')->insert([
            'id'=> 0


        ]);
        //
    }
}
