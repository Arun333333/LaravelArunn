<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=> 0,
             'username'=>'Jatt',
             'email'=>'arundeepsingh2910@gmail.com',
            'password'=>'Singh'


        ]);
        //
    }
}
