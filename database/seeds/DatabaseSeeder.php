<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
//        $this->call(failedjobsseeder::class);
//        $this->call(migrationsseeder::class);
//        $this->call(passwordseeder::class);
        $this->call(schoolsseeder::class);
    }
}
